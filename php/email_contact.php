<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Získání dat z formuláře
    $name = htmlspecialchars($_POST['name']);
    $userEmail = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Nastavení základních informací
    $to = "KnapFilip@email.cz";
    $subject = "Logmodel-Kontakt";
    $headers = "From: dombla@email.cz\r\n";
    $headers .= "Reply-To: $userEmail\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Obsah emailu
    $body = "Zpráva od: $name\n\n";
    $body .= "$message\n\n";
    $body .= "Logmodel\n";
    $body .= "Web: cz1.helkor.eu:41034\n";
    $body .= "Email: Dombla@email.cz\n\n";
    $body .= "Vytvořil Knap Filip";

    // Odeslání na pevně daný email
    if (mail($to, $subject, $body, $headers)) {
        echo "Email úspěšně odeslán na $to.";
    } else {
        echo "Chyba při odesílání emailu na $to.";
    }

    // Odeslání na email zadaný uživatelem
    if (mail($userEmail, $subject, $body, $headers)) {
        echo " Email úspěšně odeslán na $userEmail.";
    } else {
        echo " Chyba při odesílání emailu na $userEmail.";
    }
}
