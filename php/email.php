<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Set up PHPMailer
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.seznam.cz';                        // Seznam SMTP server
        $mail->SMTPAuth = true;                                // Enable SMTP authentication
        $mail->Username = 'KnapFilip@email.cz';              // Your Seznam email address
        $mail->Password = 'ReXReX1219@9';                     // Your Seznam email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;    // Use TLS encryption
        $mail->Port = 587;                                     // TCP port to connect to (587 for TLS)

        //Recipients
        $mail->setFrom('your_email@seznam.cz', 'Your Name');
        $mail->addAddress('recipient@example.com');            // Set recipient's email address

        // Content
        $mail->isHTML(true);                                   // Set email format to HTML
        $mail->Subject = $subject;                             // Use the subject from the form
        $mail->Body    = "<strong>Name:</strong> $name<br><strong>Email:</strong> $email<br><strong>Message:</strong><br>" . nl2br($message);

        // Send the email
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
