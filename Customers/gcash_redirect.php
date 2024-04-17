<?php
// Verify if the necessary parameters are present
if (isset($_GET['order_id']) && isset($_GET['status'])) {
    $orderID = $_GET['order_id'];
    $paymentStatus = $_GET['status'];

    // Check if the payment status is successful
    if ($paymentStatus === 'success') {
        // Payment was successful; update your database or mark the order as paid
        // You will need to implement your database logic here

        // Example: Update the order status in your database
        // $db->query("UPDATE orders SET status = 'Paid' WHERE order_id = '$orderID'");

        // Redirect the user to a success page or display a success message
        header("Location: payment_success.php");
    } else {
        // Payment was not successful; you may want to handle this differently
        // Display an error message or redirect to a failure page
        header("Location: payment_failure.php");
    }
} else {
    // Handle cases where the required parameters are missing
    // Display an error message or redirect to an error page
    echo "Invalid request. Missing parameters.";
}
?>
