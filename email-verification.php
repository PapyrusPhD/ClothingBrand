<?php
include ("db_conection.php");

if (isset($_POST["verify_email"])) {
    $email = $_POST["email"];
    $verfication_code = $_POST["verification_code"];

    echo "email = " . $email . " verification code = " . $verfication_code . "";

    $sql = "UPDATE users SET email_verified_at = NOW() WHERE user_email = '" . $email . "' AND verification_code = '" . $verfication_code . "'";

    $result = mysqli_query($dbcon, $sql);

    if (mysqli_affected_rows($dbcon) == 0) {
        //insert html tag for verification code failed
        die("verification code failed");
    }

    //insert html tag for verification successful
    echo "<p> You can now log in </p>";
    exit();
}
?>

<form method="POST">
    <input type="Hidden" name="email" value="<?php echo $_GET['email']; ?>" required>
    <input type="text" name="verification_code" placeholder="Enter verification code" required>

    <input type="submit" name="verify_email" placeholder="Verify Email" required>
</form>