<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if(isset($_POST['send'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];

    $mail = new PHPMailer(true);
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';
    $mail->Username = '';
    $mail->Password = '';

    $mail->Subject = $_POST['subject'];
    $mail->setFrom('Innocantoscents@gmail.com', 'Innocanto');
    $mail->isHTML(true);

    $mail->Body = $_POST['message'];
    $mail->addAddress('Innocantoscents@gmail.com', $_POST['email']);

    // Send the email to the business email
    if($mail->send()){
        // Send an automatic response to the user
        $mail->clearAddresses();
        $mail->addAddress($_POST["email"]);
        $mail->Subject = $subject;
        $mail->Body = 'Dear ' . $_POST['name'] . ',<br><br>Your feedback/concern was sent. We will see to it that we respond to you as soon as we can.<br><br>Warm Wishes,<br>Innocanto Perfume';
        
        $mail->send();
        // Alert the user that their feedback was successfully submitted
        echo 
        "
        <script>
        alert('Thank you for sending your feedback. We appreciate that you reached out to us to further improve our services.');
        window.location = 'https://innocanto.shop/index.php'
        </script>
        ";
         
    } else{
        // Alert the user if there was an error sending the message
        echo 
        "
        <script>
        alert('There was an error in sending your message. Please try again later.');
        </script>
        ";
    }
}

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
?>

