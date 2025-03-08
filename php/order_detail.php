<?php
// Připojení k databázi
$servername = "cz1.helkor.eu:3306";
$username = "u1896_ko0EI8Lri7";
$password = "bg3UDf!h=F=zlTDKYIYXJg5a";
$dbname = "s1896_orders";

// Vytvoření připojení
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8mb4"); // Nastavení správného kódování

// Zkontrolování připojení
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL dotaz pro získání dat z tabulky Orders
$sql = "SELECT id, name AS customer_name, created_at, status, 
       (CHAR_LENGTH(products) - CHAR_LENGTH(REPLACE(products, ',', '')) + 1) AS items_count, 
       total 
FROM Orders;";


$result = $conn->query($sql);

// Kontrola, zda dotaz proběhl úspěšně
if (!$result) {
    die("Chyba SQL dotazu: " . $conn->error);
}

// Uložení výsledků do pole pro použití v HTML tabulce
$orders = [];
while ($row = $result->fetch_assoc()) {
    $orders[] = $row;
}

// Uzavření připojení
$conn->close();
