<?php
session_start();

if(!$_SESSION['user_email']) {
    header("Location: ../index.php");
    exit(); // You should exit after redirecting to prevent further execution
}

include("db_conection.php");

if(isset($_POST['user_save'])) {
    $user_firstname = $_POST['user_firstname'];
    $user_lastname = $_POST['user_lastname'];
    $user_contactnum = $_POST['user_contactnumber']; // Corrected the variable name
    $user_region = $_POST['user_region'];
    $user_city = $_POST['user_city'];
    $user_address = $_POST['user_address'];
    $user_password = $_POST['user_password'];
    $user_id = $_POST['user_id'];
 
    $update_profile = "UPDATE users SET user_password='$user_password', user_firstname='$user_firstname', user_lastname='$user_lastname', user_contactnumber='$user_contactnum',  user_region='$user_region', user_city ='$user_city', user_address='$user_address' WHERE user_id='$user_id'";
    
    if(mysqli_query($dbcon, $update_profile)) {
        echo "<script>alert('Account successfully updated!')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    } else {
        echo "<script>alert('Error Found!')</script>";
    }
}
?>
