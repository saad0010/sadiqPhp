<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


// Google Recaptcha API CONFIG
$siteKey = '6LeIJt0nAAAAANQEzEyLTDHlKpFhSn3NprCOmkkH';
$secretKey = '6LeIJt0nAAAAAH2_jrYzDYW-WXeF4up-eq2aGnaX';

// DB CONFIG & VALIDATION
$name = null;
$name_error = null;
$mobile = null;
$mobile_error = null;
$email = null;
$email_error = null;
$email_error1 = null;
$message = null;
$message_error = null;
$success = null;

// Email CONFIG
$toEmail = 'digipatchsolutions@gmail.com';
$fromName = 'Digi Patch Solutions';
$fromEmail = 'sender@digipatch.com';


if (isset($_POST['email-form'])) {
    $emailform = $_POST["emailform"];
    if (empty(trim($emailform))) {
        $email_error1 = "Enter Email Address ..";
    }

    $mail1 = new PHPMailer(true);
    $mail1->isSMTP();
    $mail1->SMTPAuth = true;
    $mail1->Username = 'digipatchsolutions@gmail.com';
    $mail1->Password = 'gndw zesg wnsv wrzv';
    $mail1->SMTPSecure = 'ssl';
    $mail1->Port = 465;
    $mail1->Host = 'smtp.gmail.com';

    $mail1->setFrom('info@digipatchsolutions.com');
    $mail1->addAddress($toEmail);
    $mail1->isHTML(true);
    $mail1->Subject = 'Email Subscription';
    $mail1->Body    = ' <h2>Email Subscription</h2>
    <p><b>Email: </b>' . $emailform . '</p>';
    $mail1->send();
    $email_error1 = "Message Sent ! We will get back to you soon.";
}

if (isset($_POST['contact-form'])) {
    $name = $_POST["name"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    if (empty(trim($name))) {
        $name_error = "Enter Name .. ";
    } else if (!preg_match("/^[a-zA-Z ]*$/", $_POST['name'])) {
        $name_error = "Invalid Input ! Only Letters & Space Allowed  ";
    } else if (empty(trim($mobile))) {
        $mobile_error = "Enter Mobile No ..";
    } else if (!preg_match("/^[+]?[0-9][0-9]{9,14}$/", $_POST['mobile'])) { //Checking 15 digit with + on start allowed
        $mobile_error = "Invalid Input ! Eg : +001328578547  ";
    } else if (empty(trim($email))) {
        $email_error = "Enter Email Address ..";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "Invalid Email Format ! ";
    } else if (empty(trim($message))) {
        $message_error = "Enter Message ..";
    }
} else if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '$response=' . $_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);

    //uf recaptcha is valid
    if ($responseData->success) {


        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'digipatchsolutions@gmail.com';
        $mail->Password = 'gndw zesg wnsv wrzv';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('info@digipatchsolutions.com');
        $mail->addAddress($toEmail);
        $mail->isHTML(true);
        $mail->Subject = 'Contact Form';
        $mail->Body    = ' <h2>Contact Request Details</h2>
    <p><b>Name: </b>' . $name . '</p><p><b>Email: </b>' . $email . '</p> <p><b>Mobile: </b>' . $mobile . '</p><p><b>Mobile: </b>' . $message . '</p>';
        $mail->send();
        $success = "Message Sent ! We will get back to you soon.";
        header('Location: index.php');
        // echo "<script>
        //             alert('Sent Successfully  ');
        //             document.location.href = 'index.php';
        //         </script>";
    }
}
    // }
// }