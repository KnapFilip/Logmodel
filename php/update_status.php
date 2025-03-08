<?php
// Připojení k databázi
$servername = "cz1.helkor.eu";
$username = "u1896_ko0EI8Lri7";
$password = "bg3UDf!h=F=zlTDKYIYXJg5a";
$dbname = "s1896_orders";
$port = 3306;

$conn = new mysqli($servername, $username, $password, $dbname, $port);
$conn->set_charset("utf8mb4"); // Nastavení kódování

// Kontrola připojení
if ($conn->connect_error) {
    die(json_encode(["success" => false, "message" => "Chyba připojení: " . $conn->connect_error]));
}

$order_id = $_POST['order_id'] ?? '';
$status = $_POST['status'] ?? '';

// Kontrola, že order_id je číslo a status je validní
if (!ctype_digit($order_id)) {
    die(json_encode(["success" => false, "message" => "Neplatné ID objednávky!"]));
}

$valid_statuses = ['completed', 'pending', 'preparing'];
if (!in_array($status, $valid_statuses)) {
    die(json_encode(["success" => false, "message" => "Neplatný status!"]));
}

// SQL dotaz pro aktualizaci statusu
$sql = "UPDATE Orders SET status=? WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("si", $status, $order_id);

// Provádění dotazu a odeslání odpovědi
if ($stmt->execute()) {
    echo json_encode(["success" => true, "message" => "Status objednávky byl úspěšně aktualizován!"]);
} else {
    echo json_encode(["success" => false, "message" => "Chyba při aktualizaci: " . $stmt->error]);
}

$stmt->close();
$conn->close();
