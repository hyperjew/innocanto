<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// if(isset($_POST['name']) && isset($_POST['email'])){
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $message = $_POST['message'];

//     require_once 'phpmailer/src/PHPMailer.php';
//     require_once 'phpmailer/src/SMTP.php';
//     require_once 'phpmailer/src/Exception.php';

//     $mail = new PHPMailer();

//     // smtp settings
//     $mail->isSMTP();
//     $mail->Host = 'smtp.gmail.com';
//     $mail->SMTPAuth = true;
//     $mail->Username = 'carpoolkachow@gmail.com';
//     $mail->Password = 'lndgepzfhhwhbnwc';
//     $mail->SMTPSecure = 'ssl';
//     $mail->Port = 465;

//     // email settings
//     $mail->isHTML(true);
//     $mail->setFrom($email, $name);
//     $mail->addAddress("carpoolkachow@gmail.com");
//     $mail->Body = $message;

//     if($mail->send()) {
//         $status = "success";
//         $response = "Feedback is sent!";
//     }
//     else
//     {
//         $status = "failed";
//         $response = "Something is wrong: <br>" . $mail->ErrorInfo;
//     }

//     exit(json_encode(array("status" => $status, "response" => $response)));

// }


if(isset($_POST['send'])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'carpoolkachow@gmail.com';
    $mail->Password = 'lndgepzfhhwhbnwc';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom($email, $name);
    $mail->addAddress("carpoolkachow@gmail.com");

    $mail->isHTML(true);

    $mail->Subject = $_POST['name'];
    $mail->Body = $_POST['message'];

    $mail->send();

    echo
    "
    <script>
    alert('Sent Successfully');
    document.location.href = index.php
    </script>
    ";
}
?>

