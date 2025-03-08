<?php
session_start();

$host = 'cz1.helkor.eu'; // Host
$dbname = 's1896_orders'; // Název databáze
$user = 'u1896_ko0EI8Lri7'; // Uživatelské jméno databáze
$pass = 'bg3UDf!h=F=zlTDKYIYXJg5a'; // Heslo databáze

try {
    $pdo = new PDO("mysql:host=$host;port=3306;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Chyba připojení k databázi.");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if (!empty($username) && !empty($password)) {
        $stmt = $pdo->prepare("SELECT * FROM User WHERE username = :username");
        $stmt->bindValue(':username', $username, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            session_regenerate_id(true); // Zabrání session hijackingu
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header("Location: ../admin.php");
            exit;
        } else {
            $error = "Neplatné uživatelské jméno nebo heslo.";
        }
    } else {
        $error = "Vyplňte prosím všechna pole.";
    }
}
