<?php
session_start();

include ("db_conection.php");

require __DIR__ . '\vendor\phpmailer\phpmailer\src\Exception.php';
require __DIR__ . '\vendor\phpmailer\phpmailer\src\PHPMailer.php';
require __DIR__ . '\vendor\phpmailer\phpmailer\src\SMTP.php';

use PHPMAILER\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['register'])) {
    $user_email = $_POST['ruser_email'];
    $user_password = $_POST['ruser_password'];
    $user_firstname = $_POST['ruser_firstname'];
    $user_lastname = $_POST['ruser_lastname'];
    $user_contactnum = $_POST['ruser_contactnumber'];
    $user_address = $_POST['ruser_address'];
    $user_region = $_POST['ruser_region'];
    $user_city = $_POST['ruser_city'];

    $mail = new PHPMailer(true);
    $mail->IsSMTP();

    try {
        $mail->SMTPDebug = 3; // debugging: 1 = errors and messages, 2 = messages only
        $mail->SMTPAuth = true; // authentication enabled
        $mail->Host = 'smtp.gmail.com';
        //host account email
        $mail->Username = "devcookie014@gmail.com";
        //host account password
        $mail->Password = "gkqh hnet nyrb beor";
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->addAddress($user_email, $user_firstname . " " . $user_lastname);
        $mail->isHTML(true);
        $verificationCode = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
        $mail->Subject = 'Email Verification';
        $mail->Body = '<p>Your verification code is: <b style="font-size: 30px;"">' . $verificationCode . '</b></p>';
        $mail->send();
        // Check if the contact number has exactly 11 digits
        if (strlen($user_contactnum) !== 11 || !is_numeric($user_contactnum)) {
            echo "<script>alert('Contact number must have exactly 11 numeric digits!')</script>";
            echo "<script>window.open('index.php','_self')</script>";
            exit();
        }

        $check_user = "SELECT * FROM users WHERE user_email='$user_email'";
        $run_query = mysqli_query($dbcon, $check_user);

        if (mysqli_num_rows($run_query) > 0) {
            echo "<script>alert('Customer is already exist, Please try another one!')</script>";
            echo "<script>window.open('index.php','_self')</script>";
            exit();
        }

        $saveaccount = "INSERT INTO users (user_email, user_password, user_firstname, user_contactnumber, user_lastname, user_address, user_region, user_city, verification_code) VALUES ('$user_email', '$user_password', '$user_firstname', '$user_contactnum', '$user_lastname', '$user_address', '$user_region', '$user_city', '$verificationCode')";

        if (mysqli_query($dbcon, $saveaccount)) {
            echo "<script>alert('Data successfully saved, You may now login!')</script>";
            echo "<script>window.open('index.php','_self')</script>";

            header("Location email-verification.php?email=" . $email);
            exit();
        } else {
            echo "<script>alert('Error saving data!')</script>";
        }
    } catch (Exception $e) {
        echo "Message could not load due to Mailer Error: {$mail->ErrorInfo}";
    }
}
?>