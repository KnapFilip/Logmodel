<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'config.php';

function sendemail($name, $email, $subject, $message)
{
    global $config;
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = $config['username'];
        $mail->Password = $config['password'];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        $mail->setFrom($config['send_from'], $config['send_from_name']);
        $mail->addAddress($config['send_from'], 'Admin'); // Poslat adminovi
        $mail->addCC($email, $name); // Kopie uživateli
        $mail->addReplyTo($config['reply_to'], $config['reply_to_name']);

        $mail->isHTML(true);
        $mail->Subject = htmlspecialchars($subject, ENT_QUOTES, 'UTF-8');
        $mail->Body = nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8'));
        $mail->AltBody = html_entity_decode(strip_tags($message));

        if ($mail->send()) {
            return "Email byl úspěšně odeslán!";
        } else {
            return "Chyba: Email se nepodařilo odeslat.";
        }
    } catch (Exception $e) {
        return "Chyba při odesílání emailu: " . $mail->ErrorInfo;
    }
}

// Testovací volání (odkomentuj pro test)
// echo sendemail('Testovací uživatel', 'tvuj@email.cz', 'Testovací email', 'Toto je testovací zpráva.');

?>
