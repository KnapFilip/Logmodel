<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "cz1.helkor.eu:3306";
$username = "u1896_ko0EI8Lri7";
$password = "bg3UDf!h=F=zlTDKYIYXJg5a";
$dbname = "s1896_orders";

// Připojení k databázi
$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrola připojení
if ($conn->connect_error) {
    die("Připojení k databázi selhalo: " . $conn->connect_error);
}

// Zpracování formuláře po jeho odeslání
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Vložení dat do databáze
    $sql = "INSERT INTO emails (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Email byl úspěšně odeslán!";
    } else {
        echo "Chyba: " . $sql . "<br>" . $conn->error;
    }

    $conn->close(); // Uzavření připojení k DB
}
?>

<!-- HTML formulář -->
<form action="" method="POST">
    <label for="name">Jméno:</label><br>
    <input type="text" id="name" name="name" required><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br>
    <label for="subject">Čeho se email týká:</label><br>
    <input type="text" name="subject" id="subject" required><br>
    <label for="message">Zpráva:</label><br>
    <textarea id="message" name="message" required></textarea><br><br>
    <input type="submit" value="Odeslat">
</form>