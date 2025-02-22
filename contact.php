<?php require("php/email.php"); ?>
<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $response = "Všechna pole musí být vyplněna";
} else {
    $response = sendemail($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contact.css">
    <title>Logmodel</title>
    <link rel="icon" type="image/png" href="images/Logo2.png">
</head>
<header>
    <h1 class="header">Logmodel</h1>
</header>

<br>
<br>

<body>
    <div class="info">
        <div class="preface">
            <h1>Kontakt</h1>
        </div>

        <div class="nav">
            <nav>
                <ul>
                    <li><a href="index.html">Úvod</a></li>
                    <li><a href="about.html">O nás</a></li>
                    <li><a href="catalog.html">Katalog</a></li>
                    <li><a href="eshop.html">Eshop</a></li>
                    <li class="active"><a href="contact.html">Kontakt</a></li>
                </ul>
            </nav>
        </div>

        <div class="contact">
            <div class="contact_info">
                <h2>Kontakt na nás</h2>
                <p>Email: dombla@email.cz</p>
                <p>Tel: +420 722 198 937</p>
            </div>

            <div class="form">
                <form action="" method="POST">
                    <label for="name">Jméno:</label><br>
                    <input type="text" id="name" name="name" required><br>
                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" required><br>
                    <label for="subject">Čeho se email týká:</label>
                    <input type="text" name="subject" id="subject" required>
                    <label for="message">Zpráva:</label><br>
                    <textarea id="message" name="message" required></textarea><br><br>
                    <input type="submit" value="Odeslat">

                    <?php
                    if (@$response == "success") {
                        echo "<p>Email úspěšně odeslán.</p>";
                    } else {
                        echo "<p>Chyba při odesílání emailu.</p>";
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>

</body>
<footer>
    <p>Created by Filip Knap with lot of ☕ and ❤️</p>
    <p>© 2025 Knap Filip</p>
</footer>

</html>