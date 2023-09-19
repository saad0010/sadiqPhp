<?php

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
$message = null;
$message_error = null;
$success = null;

// Email CONFIG
$toEmail = 'consentraders@gmail.com';
$fromName = 'Digi Patch';
$fromEmail = 'sender@digipatch.com';


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
    // } else if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
    //     $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '$response=' . $_POST['g-recaptcha-response']);
    //     $responseData = json_decode($verifyResponse);

    //     //uf recaptcha is valid
    //     if ($responseData->success) {


            $subject = "New Contact Request";
            $htmlContent = "
            <h2>Contact Request Details</h2>
            <p><b>Name: </b>" . $name . "</p>
            <p><b>Email: </b>" . $email . "</p>
            <p><b>Mobile: </b>" . $mobile . "</p>
            <p><b>Mobile: </b>" . $message . "</p>
            ";

            //Always set Content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            //Headers For Sender Info
            $headers .= "From:" . $fromName . "<" . $formEmail . ">" . "\r\n";

            //send Email
            mail($toEmail, $subject, $htmlContent, $headers);
            $success = "Thank You ! Your Contact Request has been submitted. We will get back to you soon.";
        }
    } else {
        // $success = "Message Sent ! We will get back to you soon.";

        // //Save TO DB
        // $conn = mysqli_connect("localhost", "root", "", "sadiq") or die("Connect Failed");

        // $name = mysqli_real_escape_string($conn, $name);
        // $mobile = mysqli_real_escape_string($conn, $mobile);
        // $email = mysqli_real_escape_string($conn, $email);
        // $message = mysqli_real_escape_string($conn, $message);

        // $sql = "INSERT INTO contact(name, mobile, email, message) VALUES ('{$name}', '{$mobile}' , '{$email}' , '{$message}')";
        // $result = mysqli_query($conn,  $sql) or die("Query Failed");

        // if ($result) {

        //     header("location: contact.php ");
        // } else {
        //     echo "Some Thing Went Wrong !" + mysqli_error($conn);
        // }
        // mysqli_close($conn);



        // //Email
        // $subject = "New Contact Request";
        // $htmlContent = "
        // <h2>Contact Request Details</h2>
        // <p><b>Name: </b>" . $name . "</p>
        // <p><b>Email: </b>" . $email . "</p>
        // <p><b>Mobile: </b>" . $mobile . "</p>
        // <p><b>Mobile: </b>" . $message . "</p>
        // ";

        // //Always set Content-type when sending HTML email
        // $headers = "MIME-Version: 1.0" . "\r\n";
        // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // //Headers For Sender Info
        // $headers .= "From:" . $fromName . "<" . $formEmail . ">" . "\r\n";

        // //send Email
        // mail($toEmail, $subject, $htmlContent, $headers);
        // $success = "Thank You ! Your Contact Request has been submitted. We will get back to you soon.";
    }
}



// $name = $_POST["name"];
// $mobile = $_POST["mobile"];
// $email = $_POST["email"];
// $message = $_POST["message"];

 //$conn = mysqli_connect("localhost", "root", "", "sadiq") or die("Connect Failed");

// $sql = "INSERT INTO contact(name, mobile, email, message) VALUES ('{$name}', '{$mobile}' , '{$email}' , '{$message}')";
// $result = mysqli_query($conn,  $sql) or die("Query Failed");

// if ($result) {

//     header("location: contact.php ");
// } else {
//     echo "Some Thing Went Wrong !";
// }
// mysqli_close($conn);