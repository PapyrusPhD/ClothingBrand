<?php
session_start();

include("db_conection.php");

if(isset($_POST['adminregister']))
{
    $admin_username = $_POST['admin_username'];
    $admin_password = $_POST['admin_password']; // Add a semicolon here

    $check_admin = "SELECT * FROM admin WHERE admin_username='$admin_username'";
    $run_query = mysqli_query($dbcon, $check_admin);

    if(mysqli_num_rows($run_query) > 0)
    {
        echo "<script>alert('Account is already exist, Please try another one!')</script>";
        echo "<script>window.open('Admin/index.php,'_self')</script>";
        exit();
    }


    $saveaccount = "INSERT INTO admin (admin_username, admin_password) VALUES ('$admin_username', '$admin_password')";
    
    if(mysqli_query($dbcon, $saveaccount))
    {
        echo "<script>alert('Data successfully saved, You may now login!')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
    else
    {
        echo "<script>alert('Error saving data!')</script>";
    }
}
?>
