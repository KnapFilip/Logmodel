<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "cz1.helkor.eu:3306";
$username = "u1896_ko0EI8Lri7";
$password = "bg3UDf!h=F=zlTDKYIYXJg5a";
$dbname = "s1896_orders";

// Připojení k databázi
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8mb4");

// Kontrola připojení
if ($conn->connect_error) {
    die('<script>alert("Chyba připojení k databázi!"); window.location.href = "eshop.php";</script>');
}

// Získání dat z formuláře
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$total = isset($_POST['total']) ? floatval($_POST['total']) : 0;

// Získání dopravy
$shipping_options = [
    "Osobni_vyzvednuti" => "Osobní odběr 0Kč (Domluva přes email)",
    "Zasilkovna" => "Zásilkovna 89Kč (Z-Box)",
    "Ceska_Posta" => "Česká Pošta 99Kč (domů)"
];
$shipping_type = isset($_POST['dop']) && array_key_exists($_POST['dop'], $shipping_options) ? $shipping_options[$_POST['dop']] : "Nezvoleno";

// Získání zakliknutých produktů
$products = [];
foreach ($_POST as $key => $value) {
    if (is_numeric($value) && $value > 0) { // Ukládáme pouze produkty s počtem > 0
        $products[$key] = (int) $value; // Uložíme produkt s množstvím
    }
}

$product_json = (!empty($products)) ? json_encode($products) : null;
$status = "pending"; // Výchozí status objednávky

// Uložení do databáze
$sql = "INSERT INTO Orders (name, email, phone, products, total, shipping_type, status) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssdss", $name, $email, $phone, $product_json, $total, $shipping_type, $status);

if ($stmt->execute()) {
    echo '<script>alert("Objednávka byla úspěšně odeslána!"); window.location.href = "/eshop.html";</script>';
} else {
    echo '<script>alert("Chyba při odesílání objednávky: ' . $stmt->error . '"); window.location.href = "/eshop.html";</script>';
}

// Uzavření spojení
$stmt->close();
$conn->close();
