
<?php
include("db_conection.php");
if(isset($_POST['gcash']))
{
$user_id = $_POST['user_id'];
$order_payment = $_POST['item_payment'];
$order_status='Pending';




 
$save_order_details="insert into orderdetails (user_id,order_payment) VALUE ('$user_id','$order_payment',CURDATE())";
mysqli_query($dbcon,$save_order_gcash_details);
echo "<script>alert('Item successfully added to cart!')</script>";				
echo "<script>window.open('orders.php?id=1','_self')</script>";


				
	
			
		
	
		

}

?>
