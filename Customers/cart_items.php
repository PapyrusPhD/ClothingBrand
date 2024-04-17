<?php
session_start();

if(!$_SESSION['user_email'])
{

    header("Location: ../index.php");
}

?>

<?php
 include("config.php");
 extract($_SESSION); 
		  $stmt_edit = $DB_con->prepare('SELECT * FROM users WHERE user_email =:user_email');
		$stmt_edit->execute(array(':user_email'=>$user_email));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
		
		?>
		
		<?php
 include("config.php");
		  $stmt_edit = $DB_con->prepare("select sum(order_total) as total from orderdetails where user_id=:user_id and order_status='Ordered'");
		$stmt_edit->execute(array(':user_id'=>$user_id));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
		
		?>
		
		<?php

	require_once 'config.php';
	
	if(isset($_GET['delete_id']))
	{
		
		
		
	
		$stmt_delete = $DB_con->prepare('DELETE FROM orderdetails WHERE order_id =:order_id');
		$stmt_delete->bindParam(':order_id',$_GET['delete_id']);
		$stmt_delete->execute();
		
		header("Location: cart_items.php");
	}

?>
<?php

	require_once 'config.php';
	
	if(isset($_GET['update_id']))
	{
		
		
		
	
		$stmt_delete = $DB_con->prepare('update orderdetails set order_status="Ordered" WHERE order_status="Pending" and user_id =:user_id');
		$stmt_delete->bindParam(':user_id',$_GET['update_id']);
		$stmt_delete->execute();
		echo "<script>alert('Item/s successfully ordered!')</script>";	
		
		header("Location: orders.php");
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DFFRNT Cloth SHOP</title>
	 <link rel="shortcut icon" href="../assets/img/logotech.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

    <!-- Add SweetAlert2 CSS and JS links -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.2/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.2/dist/sweetalert2.all.min.js"></script>


   
    
</head>
<body >
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">DFFRNT</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li><a href="index.php"> &nbsp; <span class='glyphicon glyphicon-home'></span> Home</a></li>
					<li><a href="shop.php?id=1"> &nbsp; <span class='glyphicon glyphicon-shopping-cart'></span> Shop Now</a></li>
					<li  class="active"><a href="cart_items.php"> &nbsp; <span class='fa fa-cart-plus'></span> Shopping Cart Lists</a></li>
					<li><a href="orders.php"> &nbsp; <span class='glyphicon glyphicon-list-alt'></span> My Ordered Items</a></li>
					<li><a href="view_purchased.php"> &nbsp; <span class='glyphicon glyphicon-eye-open'></span> Previous Items Ordered</a></li>
					<li><a data-toggle="modal" data-target="#setAccount"> &nbsp; <span class='fa fa-gear'></span> Account Settings</a></li>
					<li>
  <a href="#" onclick="confirmLogout();"> &nbsp; <span class='glyphicon glyphicon-off'></span> Logout</a>
</li>

<script>
function confirmLogout() {
  const logoutConfirmed = window.confirm("Are you sure you want to log out?");

  if (logoutConfirmed) {
    // If the user confirms the logout, redirect to the logout page.
    window.location.href = "logout.php";
  }
}
</script>
					
                    
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown messages-dropdown">
                        <a href="#"><i class="fa fa-calendar"></i>  <?php
                            $Today=date('y:m:d');
                            $new=date('l, F d, Y',strtotime($Today));
                            echo $new; ?></a>
                        
                    </li>
					<li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class='glyphicon glyphicon-shopping-cart'></span> Total Price Ordered: &#8369; <?php echo $total; ?> </b></a>
                       
                    </li>
					
					
                     <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $user_firstname;?> <?php echo $user_lastname;?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a data-toggle="modal" data-target="#setAccount"><i class="fa fa-gear"></i> Settings</a></li>
                            <li class="divider"></li>
                            <li>
  <a href="#" onclick="confirmLogout();"><span class='glyphicon glyphicon-off'></span> Logout</a></li>

<script>
function confirmLogout() {
  const logoutConfirmed = window.confirm("Are you sure you want to log out?");

  if (logoutConfirmed) {
    // If the user confirms the logout, redirect to the logout page.
    window.location.href = "logout.php";
  }
}
</script>                    

                        </ul>



                    </li>
                </ul>
            </div>
        </nav>
        <div id="page-wrapper">
            


      
			<div class="alert alert-default" style="color:white;background-color:#fff; border: 1px solid #000;">

         <center><h3 style="color:black;"> <span class="fa fa-cart-plus"></span> Shopping Cart Lists</h3></center>
        </div>
			
			<br />
						  
						  <!--<div class="table-responsive">-->
         <!--   <table class="display table table-bordered" id="example" cellspacing="0" width="50%">
              <thead>
                <tr>
                  <th>Item</th>
                  <th>Price</th>
				  <th>Quantity</th>
                  <th>Size</th>
				  <th>Total</th>
                  <th>Actions</th>
                 
                </tr>
              </thead>-->
              <tbody>
			  <?php
include("config.php");
 
$upload_dir = 'item_images/'; // Define the directory where item images are stored

$stmt = $DB_con->prepare("SELECT od.*, i.item_image, i.item_size
                         FROM orderdetails od
                         JOIN items i ON od.order_name = i.item_name
                         WHERE od.order_status='Pending' AND od.user_id=:user_id");
$stmt->bindParam(":user_id", $user_id);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
			
			?>
       <div class="order-details">
                <center>
 
    <li><strong>Item Name:</strong> <?php echo $order_name; ?></li>
    <p><img class="img img-thumbnail" src="../Admin/item_images/<?php echo $item_image; ?>" style="height: 350px; width: 350px;" /></p>
    <li><strong>Item Price:</strong> &#8369; <?php echo $order_price; ?></li>
    <li><strong>Color:</strong><?php echo $order_color; ?></li>
    <li><strong>Quantity:</strong> <?php echo $order_quantity; ?></li>
    <li><strong>Size:</strong><?php echo $order_size; ?></li>
    <li><strong>Total Price:</strong> &#8369; <?php echo $order_total; ?></li>
    
<div>
    <a class="btn btn-block btn-danger" href="?delete_id=<?php echo $row['order_id']; ?>" title="click for delete" onclick="return confirm('Are you sure to remove this item?')">
        <span class='glyphicon glyphicon-trash'></span> Remove Item
    </a>
</div>


               
              <?php
		}
		 include("config.php");
		  $stmt_edit = $DB_con->prepare("select sum(order_total) as totalx from orderdetails where user_id=:user_id and order_status='Pending'");
		$stmt_edit->execute(array(':user_id'=>$user_id));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
       // echo "<tr>";
		//echo "<tr>";
		//echo "<td colspan='3' align='right'>Total Price:";
		echo "<br>";
		//echo "<td>&#8369; ".$totalx;
		//echo "</td>";
		
		//echo "<td>";

            // Display the online payment option
           // echo "<a class='btn btn-block btn-success' href='gcash_payment.php?total=$total'><span class='glyphicon glyphicon-shopping-cart'></span> Pay with GCash</a>";
           // echo "<br>";
            // Display the COD option
            //echo "<a class='btn btn-block btn-success' href='?update_id=" . $user_id . "'><span class='glyphicon glyphicon-shopping-cart'></span> Cash On Delivery</a>";

            echo "<select id='payment_method' name='payment_method' class='form-control' style='width: auto;'>";
            echo "<option value='gcash'>GCash</option>";
            echo "<option value='cod'>Cash On Delivery</option>";
            echo "</select>";
            
echo "<br>";
echo "<button class='btn btn-block btn-success' onclick='processPayment()'><span class='glyphicon glyphicon-shopping-cart'></span> Proceed to Payment</button>";

echo "<script>
function processPayment() {
    var paymentMethod = document.getElementById('payment_method').value;
    if (paymentMethod === 'gcash') {
        window.location.href = 'gcash_payment.php?total=$total';
    } else if (paymentMethod === 'cod') {
        // Add logic for Cash On Delivery if needed
        var userConfirmed = window.confirm('Are you sure you want to buy this item?');
        if (userConfirmed) {
            window.location.href = '?update_id=$user_id';
        } else {
            // Optional: You can add additional logic here if the user cancels the confirmation
        }
    }
}
</script>";


    
		
	//	echo "</tr>";
	//	echo "</tbody>";
	//	echo "</table>";
	//	echo "</div>";
	//	echo "<br />";
		echo '<div class="alert alert-default" style="background-color:#fff;">
                       <p style="color:black;text-align:center;">
                       &copy 2023 DFFRNT Clothing shop| All Rights Reserved |  Project by : TechNexus Co.

						</p>
                        
                    </div>
	</div>';
	
		echo "</div>";
        
	}
	else
	{
		?>
		
			
        <div class="col-xs-12">
        	<div class="alert alert-warning">
            	<span class="glyphicon glyphicon-info-sign"></span> &nbsp; No Item Found ...
            </div>
        </div>
        </center>
     <?php
	}
	
?>
		



			
			
			
		
		
		
					
                </div>
            </div>

           

           
        </div>
		
		
		
    </div>
    <!-- /#wrapper -->

	
	<!-- Mediul Modal -->
    <div class="modal fade" id="setAccount" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-sm">
            <div style="color:white;background-color:#1b2529" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel">Account Settings</h2>
              </div>
              <div class="modal-body">
         
				
			
				
              <form enctype="multipart/form-data" method="post" action="settings.php">
                   <fieldset>
					
						
                            <p>Firstname:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Firstname" name="user_firstname" type="text" value="<?php  echo $user_firstname; ?>" required>
                           
							 
							</div>
							
							
							<p>Lastname:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Lastname" name="user_lastname" type="text" value="<?php  echo $user_lastname; ?>" required>
                           
							 
							</div>
							
                            <label for="region">Region:</label>
<select class="form-control" id="region" name="user_region" required onchange="populateCities()">
    <option value="" <?php if ($user_region === '') echo 'selected'; ?>>Select Region</option>
    <option value="NCR" <?php if ($user_region === 'NCR') echo 'selected'; ?>>NCR</option>
    <option value="Region III" <?php if ($user_region === 'Region III') echo 'selected'; ?>>Region III (Central Luzon)</option>
</select>

<br>

<p>City:</p>
<select class="form-control" id="city" name="user_city" required>
    <option value=""><?php echo $user_city; ?></option>
</select>

<script>
    function populateCities() {
        const regionSelect = document.getElementById("region");
        const citySelect = document.getElementById("city");

        // Clear the city dropdown
        citySelect.innerHTML = '<option value="">Select City</option>';

        const selectedRegion = regionSelect.value;

        // Define city options based on selected region
        const cityOptions = {
            'NCR': ['Caloocan', 'Las Piñas', 'Makati', 'Malabon', 'Mandaluyong', 'Manila', 'Marikina', 'Muntilupa', 'Navotas', 'Parañaque', 'Pasay', 'Pasig', 'Pateros', 'Quezon City', 'San Juan', 'Taguig', 'Valenzuela'],
            'CAR': ['Baguio', 'Benguet', 'Kalinga'],
            'Region III': ['Angeles City', 'Aurora', 'Bataan', 'Bulacan', 'Nueva Ecija', 'Olongapo', 'Pampanga', 'Tarlac', 'Zambales'],
            // Add more regions and cities as needed
        };

        if (selectedRegion in cityOptions) {
            // Populate the city dropdown based on the selected region
            cityOptions[selectedRegion].forEach(city => {
                const option = document.createElement("option");
                option.value = city;
                option.text = city;
                citySelect.appendChild(option);
            });
        }
    }
</script>
                            <br>

							<p>Address:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Address" name="user_address" type="text" value="<?php  echo $user_address; ?>" required>
                           
                                <br> <p>Contact Number:</p>
								<div class="form-group">
            <input class="form-control" placeholder="Contact Number" name="user_contactnumber" type="text" value="<?php echo $user_contactnumber; ?>" required
            oninput="this.value =this.value.replace(/\D/g, '').substring(0, 11);">
		</div>
							</div>
							
							<p>Password:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Password" name="user_password" type="password" value="<?php  echo $user_password; ?>" required>
                           
							 
							</div>
							
							<div class="form-group">
							
                                <input class="form-control hide" name="user_id" type="text" value="<?php  echo $user_id; ?>" required>
                           
							 
							</div>
							
							
							
							
				
							
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-block btn-success btn-md" name="user_save">Save</button>
				
				<!-- <button type="button" class="btn btn-block btn-danger btn-md" data-dismiss="modal">Cancel</button>-->
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
        </div>
	  	  <script>
   
    $(document).ready(function() {
        $('#priceinput').keypress(function (event) {
            return isNumber(event, this)
        });
    });
  
    function isNumber(evt, element) {

        var charCode = (evt.which) ? evt.which : event.keyCode

        if (
            (charCode != 45 || $(element).val().indexOf('-') != -1) &&      
            (charCode != 46 || $(element).val().indexOf('.') != -1) &&      
            (charCode < 48 || charCode > 57))
            return false;

        return true;
    }    
</script>
</body>
</html>
