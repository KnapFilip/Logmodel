<?php
session_start();

$servername = "cz1.helkor.eu:3306";
$username = "u1896_ko0EI8Lri7";
$password = "bg3UDf!h=F=zlTDKYIYXJg5a";
$dbname = "s1896_orders";

// Připojení k databázi
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Chyba připojení: " . $conn->connect_error);
}

// Získání ID objednávky z URL (předpokládáme, že ID objednávky je posíláno v URL)
$order_id = isset($_GET['order_id']) ? intval($_GET['order_id']) : 0;

if ($order_id === 0) {
    echo "Neplatné ID objednávky.";
    exit();
}

// Příprava SQL dotazu pro získání detailů objednávky
$stmt = $conn->prepare("SELECT * FROM Orders WHERE id = ?");
$stmt->bind_param("i", $order_id);
$stmt->execute();
$result = $stmt->get_result();

// Zkontroluj, zda byla objednávka nalezena
if ($result->num_rows === 0) {
    echo "Objednávka s tímto ID nebyla nalezena.";
    exit();
}

$order = $result->fetch_assoc();

// Uzavření spojení s databází
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potvrzení objednávky</title>
    <link rel="stylesheet" href="css/confirmation.css"> <!-- Připojte svůj CSS soubor pro styling -->
    <link rel="icon" type="image/png" href="images/logo_FG.png">
</head>

<body>
    <div class="confirmation-container">
        <h1>Potvrzení objednávky</h1>
        <p>Vítejte, <strong><?php echo htmlspecialchars($order['name']); ?></p>
        <p>Děkujeme za vaši objednávku. Během 24 hodin vás budeme kontaktovat na email <?php echo htmlspecialchars($order['email']); ?>.</p>

        <h3>Detaily objednávky:</h3>
        <p><strong>ID objednávky:</strong> <?php echo $order['id']; ?></p>
        <p><strong>Jméno:</strong> <?php echo htmlspecialchars($order['name']); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($order['email']); ?></p>
        <p><strong>Telefon:</strong> <?php echo htmlspecialchars($order['phone']); ?></p>

        <h4>Objednávka:</h4>
        <p><strong>Produkty:</strong> <?php echo htmlspecialchars($order['products']); ?></p>

        <p><strong>Druh doručení:</strong> <?php echo htmlspecialchars($order['Shipping_type']); ?></p>

        <h4>Cena:</h4>
        <p><strong>Celková cena:</strong> <?php echo htmlspecialchars($order['total']); ?> Kč</p>

        <br>
        <a href="eshop.php" class="btn-back">Zpět na stránky</a>
    </div>
</body>

</html>