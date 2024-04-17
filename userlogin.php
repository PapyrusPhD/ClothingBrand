<?php
session_start();
?>
<?php

include ("db_conection.php");

if (isset($_POST['user_login'])) {
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $check_user = "SELECT * FROM users WHERE user_email='$user_email' AND user_password='$user_password'";
    $run = mysqli_query($dbcon, $check_user);
    $user = mysqli_fetch_object($run);

    if ($user->email_verified_at == null) {
        //redirect to email verification
        die("Please verify your email in <a href='email-verification.php?email=" . $user_email . "'>from here</a>");
    }

    if (mysqli_num_rows($run)) {
        echo "<script>alert('You're successfully login!')</script>";
        echo "<script>window.open('Customers/index.php','_self')</script>";

        $_SESSION['user_email'] = $user_email;
    } else {
        echo "<script>alert('Email or password is incorrect!')</script>";
        echo "<script>window.open('index.php','_self')</script>";

        exit();
    }
}
?>