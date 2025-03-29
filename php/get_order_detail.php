<?php
// Nastavení připojení k databázi
$servername = "cz1.helkor.eu:3306";
$username = "u1896_ko0EI8Lri7";
$password = "bg3UDf!h=F=zlTDKYIYXJg5a";
$dbname = "s1896_orders";

// Vytvoření připojení k databázi
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8mb4"); // Nastavení kódování

// Zkontroluj, jestli připojení proběhlo úspěšně
if ($conn->connect_error) {
    echo json_encode(['success' => false, 'message' => 'Připojení k databázi selhalo: ' . $conn->connect_error]);
    exit();
}

$order_id = $_POST['order_id'] ?? ''; // Získání ID objednávky z POST dat

// Kontrola, zda je order_id platné
if (empty($order_id) || !ctype_digit($order_id)) {
    echo json_encode(['success' => false, 'message' => 'Neplatné nebo chybějící ID objednávky']);
    exit();
}

// Načítání detailů objednávky
$sql = "SELECT * FROM Orders WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $order_id);

// Vykonání dotazu
if ($stmt->execute()) {
    $result = $stmt->get_result();
    $order = $result->fetch_assoc();

    if ($order) {
        // Zpracování produktů
        $products = json_decode($order['products'], true);
        if (!is_array($products)) {
            $products = []; // Pokud JSON selže, použij prázdné pole
        }

        // Připravení odpovědi
        $response = [
            'success' => true,
            'customer_name' => $order['name'],
            'customer_phone' => $order['phone'],
            'customer_email' => $order['email'],
            'created_at' => $order['created_at'],
            'status' => $order['status'],
            'products' => $products, // Produkty jsou nyní asociativní pole
            'total' => $order['total']
            'shipping_type' => $order['shipping_type']
        ];

        header('Content-Type: application/json'); // Nastavení JSON odpovědi
        echo json_encode($response);
    } else {
        // Pokud objednávka neexistuje
        echo json_encode(['success' => false, 'message' => 'Objednávka nenalezena']);
    }
} else {
    // Pokud se nepodaří vykonat SQL dotaz
    echo json_encode(['success' => false, 'message' => 'Chyba při vykonávání SQL dotazu']);
}

// Uzavření připojení k databázi
$conn->close();
