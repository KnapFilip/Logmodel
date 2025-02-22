<?php

//Co to má používat z PHP mailer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

//Cesta k PHPmailer

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Config.php s informacemi o Emailu
require 'config/config.php';

function sendemail($name, $email, $subject, $message)
{
    global $config;
    // Vytvoří nová proces v PHPmailer
    $mail = new PHPMailer(true);

    //Použití SMTP protokolu k odeslání emailu
    $mail->isSMTP();
    $mail->SMTPDebug = SMTP::DEBUG_OFF;                      // Enable verbose debug output
    $mail->SMTPAuth = true;                                   // Enable SMTP authentication
    $mail->SMTPSecure = 'tls';                                 // Enable TLS encryption
    $mail->Host = $config['mailhost'];                    // SMTP server address
    $mail->Port = 587;                                         // SMTP server port
    $mail->Username = $config['username'];               // SMTP server username
    $mail->Password = $config['password'];               // SMTP server password

    // Odesílatel
    $mail->setFrom($config['send_from'], $config['send_from_name']);

    // Příjemce
    $mail->addAddress($email);

    // Odpověd
    $mail->addReplyTo($config['reply_to'], $config['reply_to_name']);

    // Odeslání HTML emailu
    $mail->isHTML(true);

    // Předmět
    $mail->Subject = $subject;

    // Zpráva
    $mail->Body = $message;

    // Zpráva
    $mail->AltBody = $message;

    // Odeslání emailu
    if(!$mail->send()){
        return "Email nebylo možné odeslat, zkuste znovu";}
    else{ 
        return "Email byl úspěšně odeslán";}
    
}
