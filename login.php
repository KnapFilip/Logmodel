<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Logmodel</title>
    <link rel="icon" type="image/png" href="images/Logo2.png">
</head>

<body>
    <form action="php/login.php" method="post">
        <label for="username">Uživatelské jméno:</label><br>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Heslo:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Přihlásit se">
    </form>

</body>
<footer>
    <p>Created by <a href="https://www.knapf.eu">Filip Knap</a> with lot of ☕ and ❤️</p>
    <p>© 2025 Knap Filip Všechna práva vyhrazena.</p>
</footer>

</html>