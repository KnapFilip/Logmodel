<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    $to = "KnapFilip@email.cz";
    $subject = "Objednávka-Logmodel";
    $body = "Jméno: $name\nEmail: $email\nZpráva:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Zpráva byla úspěšně odeslána.";
    } else {
        echo "Nastala chyba při odesílání zprávy.";
    }
} else {
    echo "Neplatný požadavek.";
}
