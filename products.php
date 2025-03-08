<?php
session_start();

// Kontrola, zda je uživatel přihlášen
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Přesměrování na přihlašovací stránku
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.9">
    <link rel="stylesheet" href="css/admin.css">
    <title>Logmodel</title>
    <link rel="icon" type="image/png" href="images/Logo2.png">
</head>
<header>
    <h1 class="header">Administrace</h1>
</header>

<body>
    <div class="navbar">
        <nav>
            <ul>
                <li><a href="index.html">Úvod</a></li>
                <li><a href="about.html">O nás</a></li>
                <li><a href="catalog.html">Katalog</a></li>
                <li><a href="eshop.html">Eshop</a></li>
                <li><a href="contact.php">Kontakt</a></li>
                <li class="active"><a href="admin.php">Dashboard</a></li>
                <li><a href="php/logout.php">Odhlásit se</a></li>
            </ul>
        </nav>
    </div>
    <p>Vítej, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
    <div class="navleft">
        <nav>
            <ul>
                <li><a href="admin.php">Objednávky</a></li>
                <li class="active"><a href="products.php">Produkty</a></li>
            </ul>
        </nav>
    </div>

</body>

<footer>
    <p>Created by <a href="https://www.knapf.eu">Filip Knap</a> with lot of ☕ and ❤️</p>
    <p>© 2025 Knap Filip Všechna práva vyhrazena.</p>
</footer>

</html>