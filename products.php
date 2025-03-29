<?php
session_start();

// Kontrola, zda je uživatel přihlášen
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Přesměrování na přihlašovací stránku
    exit();
}

// Nastavení připojení k databázi
$host     = 'cz1.helkor.eu:3306';
$user     = 'u1896_ko0EI8Lri7';
$password = 'bg3UDf!h=F=zlTDKYIYXJg5a';
$dbname   = 's1896_orders';

// Vytvoření spojení pomocí MySQLi
$mysqli = new mysqli($host, $user, $password, $dbname);
if ($mysqli->connect_error) {
    die("Chyba připojení: " . $mysqli->connect_error);
}

// Zpracování formuláře pro změnu ceny
if (isset($_POST['update'])) {
    $id       = intval($_POST['id']);
    $nova_cena = floatval($_POST['nova_cena']);

    // Připravíme dotaz na aktualizaci ceny
    $stmt = $mysqli->prepare("UPDATE products SET price = ? WHERE id = ?");
    $stmt->bind_param("di", $nova_cena, $id);
    $stmt->execute();
    $stmt->close();
}

// Zpracování formuláře pro změnu množství
if (isset($_POST['update'])) {
    $id       = intval($_POST['id']);
    $nove_mnozstvi = floatval($_POST['nove_mnozstvi']);

    // Připravíme dotaz na aktualizaci množství
    $stmt = $mysqli->prepare("UPDATE products SET amount = ? WHERE id = ?");
    $stmt->bind_param("di", $nove_mnozstvi, $id);
    $stmt->execute();
    $stmt->close();
}

// Načtení dat z databáze – předpokládáme, že tabulka se jmenuje 'produkty'
$result = $mysqli->query("SELECT * FROM products");
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
                <li><a href="catalog.php">Katalog</a></li>
                <li><a href="eshop.php">Eshop</a></li>
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

    <table>
        <tr>
            <th>Produkt</th>
            <th>Množství</th>
            <th>Aktuální cena</th>
            <th>Nové množství</th>
            <th>Nová cena</th>
            <th>Změna</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo htmlspecialchars($row['produkt']); ?></td>
                <td><?php echo number_format($row['amount'], 2, ',', ' '); ?></td>
                <td><?php echo number_format($row['price'], 2, ',', ' ') . ' Kč'; ?></td>
                <td>
                    <!-- Formulář pro zadání nové ceny -->
                    <form method="post" action="">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <input type="number" step="0.01" name="nove_mnozstvi" placeholder="Nové množství" required>
                </td>
                <td>
                    <!-- Formulář pro zadání nového mnižství -->
                    <form method="post" action="">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <input type="number" step="0.01" name="nova_cena" placeholder="Nová cena" required>
                </td>
                <td>
                    <button type="submit" name="update">Změnit</button>
                    </form>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>

</body>

<footer>
    <p>Created by <a href="https://www.knapf.eu">Filip Knap</a> with lot of ☕ and ❤️</p>
    <p>© 2025 Knap Filip Všechna práva vyhrazena.</p>
</footer>

</html>
<?php
// Uzavření spojení s databází
$mysqli->close();
?>