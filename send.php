<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST['send'])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'carpoolkachow@gmail.com';
    $mail->Password = 'lndgepzfhhwhbnwc';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('carpoolkachow@gmail.com');

    $mail->addAddress($_POST['email']);

    $mail->isHTML(true);

    $mail->Subject = $_POST['name'];
    $mail->Body = $_POST['message'];

    $mail->send();

    // echo
    // "
    // <script>
    // alert('Sent Successfully');
    // document.location.href = index.php
    // </script>
    // ";
}
?>

