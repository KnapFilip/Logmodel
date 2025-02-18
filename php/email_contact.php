<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Získání dat z formuláře
    $name = htmlspecialchars($_POST['name']);
    $userEmail = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Nastavení základních informací
    $to = "KnapFilip@email.cz";
    $subject = "Logmodel-Kontakt";
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $headers .= "From: Logmodel <dombla@email.cz>\r\n";
    $headers .= "Reply-To: $userEmail\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Obsah emailu
    $body = "Zpráva od: $name\n\n";
    $body .= "$message\n\n";
    $body .= "Logmodel\n";
    $body .= "Web: cz1.helkor.eu:41034\n";
    $body .= "Email: Dombla@email.cz\n\n";
    $body .= "Vytvořil Knap Filip";

    // Odeslání na pevně daný email
    $sendToFixed = mail($to, $subject, $body, $headers);

    // Odeslání na email zadaný uživatelem
    $sendToUser = mail($userEmail, $subject, $body, $headers);

    // Přesměrování zpět na contact.html s parametrem v URL
    if ($sendToFixed && $sendToUser) {
        header("Location: http://cz1.helkor.eu:41034/contact.html?status=success");
    } else {
        header("Location: http://cz1.helkor.eu:41034/contact.html?status=error");
    }
    exit();
}
