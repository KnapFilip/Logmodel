<?php
session_start();
require_once 'php/order_detail.php';

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
                <li class="active"><a href="admin.php">Objednávky</a></li>
                <li><a href="products.php">Produkty</a></li>
            </ul>
        </nav>
    </div>
    <h2>Seznam objednávek</h2>
    <table id="orderTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Jméno zákazníka</th>
                <th>Datum vytvoření</th>
                <th>Stav objednávky</th>
                <th>Počet položek a cena</th>
                <th>Detail</th>
            </tr>
        </thead>

        <tbody>
            <?php if (!empty($orders)): ?>
                <?php foreach ($orders as $order): ?>
                    <?php
                    // Formátování stavu objednávky
                    $status_class = strtolower($order['status']);
                    ?>
                    <tr>
                        <td><?php echo $order['id']; ?></td>
                        <td><?php echo $order['customer_name']; ?></td>
                        <td><?php echo $order['created_at']; ?></td>
                        <td>
                            <select class="status-select" data-order-id="<?php echo $order['id']; ?>">
                                <option value="completed" <?php echo ($order['status'] == 'completed') ? 'selected' : ''; ?>>Dokončeno</option>
                                <option value="pending" <?php echo ($order['status'] == 'pending') ? 'selected' : ''; ?>>Čekající</option>
                                <option value="preparing" <?php echo ($order['status'] == 'preparing') ? 'selected' : ''; ?>>V přípravě</option>
                            </select>
                        </td>
                        <td><?php echo $order['items_count']; ?> položek, <?php echo $order['total']; ?> Kč</td>
                        <td><button class="btn" onclick="showDetail(<?php echo $order['id']; ?>)">Detail</button></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6">Žádné objednávky</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <!-- Modal pro zobrazení detailů objednávky -->
    <div id="orderModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h3>Detail objednávky #<span id="orderId"></span></h3>
            <div id="orderDetails"></div>
        </div>
    </div>
</body>

<footer>
    <p>Created by <a href="https://www.knapf.eu">Filip Knap</a> with lot of ☕ and ❤️</p>
    <p>© 2025 Knap Filip Všechna práva vyhrazena.</p>
</footer>

</html>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="Javascript/detail.js"></script>
<script src="Javascript/status.js"></script>
<script src="Javascript/ajax.js"></script>