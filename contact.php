<?php  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.9">
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
                    <li><a href="catalog.php">Katalog</a></li>
                    <li><a href="eshop.php">Eshop</a></li>
                    <li class="active"><a href="contact.php">Kontakt</a></li>
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
                <form action="php/order_to_db.php   " method="POST">
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
            </div>
        </div>
    </div>

</body>
<footer>
    <p>Created by <a href="https://www.knapf.eu">Filip Knap</a> with lot of ☕ and ❤️</p>
    <p>© 2025 Knap Filip Všechna práva vyhrazena.</p>
    </footer>

</html>