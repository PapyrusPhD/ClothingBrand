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

	error_reporting( ~E_NOTICE );
	
	require_once 'config.php';
	
	if(isset($_GET['cart']) && !empty($_GET['cart']))
	{
		$id = $_GET['cart'];
		$stmt_edit = $DB_con->prepare('SELECT * FROM items WHERE item_id =:item_id');
		$stmt_edit->execute(array(':item_id'=>$id));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
	}
	else
	{
		header("Location: shop.php");
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
<body>
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
					<li class="active"><a href="shop.php?id=1"> &nbsp; <span class='glyphicon glyphicon-shopping-cart'></span> Shop Now</a></li>
					<li><a href="cart_items.php"> &nbsp; <span class='fa fa-cart-plus'></span> Shopping Cart Lists</a></li>
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $user_firstname . ' ' . $user_lastname; ?><b class="caret"></b></a>

                        <ul class="dropdown-menu">
                            <li><a data-toggle="modal" data-target="#setAccount"><i class="fa fa-gear"></i> Settings</a></li>
                            <li class="divider"></li>
                            <li>
  <a href="#" onclick="confirmLogout();"><span class='glyphicon glyphicon-off'></span> Logout</a>
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
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">
            
	
			
					
					
					
					
 <form role="form" method="post" action="save_order.php">
	
    
    <?php
	if(isset($errMSG)){
		?>
       
        <?php
	}
	?>
   	<div class="container">
    <div class="box">
    <div class="alert alert-default" style="color:white;background-color:#fff">
         <center><h3 style="color:black;"> <span class="glyphicon glyphicon-info-sign"></span> Order Details</h3></center>
        </div>

        <td><input class="form-control" type="hidden" name="order_name" value="<?php echo $item_name; ?>" /></td>
        <td><input class="form-control" type="hidden" name="order_price" value="<?php echo $item_price; ?>" /></td>
        <td><input class="form-control" type="hidden" name="order_image" value="<?php echo $item_image;?>"/></td>
        <td><input class="form-control" type="hidden" name="order_color" value="<?php echo $item_color;?>"/></td>
        <td><input class="form-control" type="hidden" name="order_size" value="<?php echo $item_size; ?>" /></td>
        <td><input class="form-control" type="hidden" name="order_quantity" value="<?php echo $item_quantity; ?>" /></td>
        <td><input class="form-control" type="hidden" name="user_id" value="<?php echo $user_id; ?>" /></td>

	<!--<table class="table table-bordered table-responsive">-->
	 
	<center> 
    <label class="control-label">Name of Item <br> <?php echo $item_name; ?></label>

<label class="control-label"></label>
<p><img class="img img-thumbnail" src="../Admin/item_images/<?php echo $item_image; ?>" style="height: 350px; width: 350px;" /></p>
<br>
<label class="control-label">Price <br>&#8369 <?php echo $item_price; ?></label><br>
<!-- Output to Display Quantity -->


<!-- Add a select input for COLOR -->
<td>
<label class="control-label"> Color</label>
<select class="form-control" name="order_color" style="width: auto;">
    <option value="Black"<?php if($item_color == 'Black') echo 'selected'; ?>>Black</option>
    <option value="White"<?php if($item_color == 'White') echo 'selected'; ?>>White</option>
    <option value="Blue"<?php if($item_color == 'Blue') echo 'selected'; ?>>Blue</option>
    <option value="Cream"<?php if($item_color == 'Cream') echo 'selected'; ?>>Cream</option>
    <option value="Brown"<?php if($item_color == 'Brown') echo 'selected'; ?>>Brown</option>
</select>

<!-- Add a select input for item size -->
<td>
<label class="control-label">Size</label>

<select class="form-control" name="order_size" style="width: auto;">
    <option value="Small" <?php if ($item_size == 'Small') echo 'selected'; ?>>Small</option>
    <option value="Medium" <?php if ($item_size == 'Medium') echo 'selected'; ?>>Medium</option>
    <option value="Large" <?php if ($item_size == 'Large') echo 'selected'; ?>>Large</option>
    <option value="XL" <?php if ($item_size == 'XL') echo 'selected'; ?>>Extra Large</option>
    <!-- Add more size options as needed -->
</select>
</td>

<label class="control-label"> Quantity</label>
<input class="form-control" type="number" name="order_quantity" value="1" min="1" max="5" onkeypress="return isNumber(event)" onpaste="return false" required style="width:auto"/><br>





    <td colspan="2">
        
        <a class="btn btn-danger" href="shop.php?id=1"> <span class="glyphicon glyphicon-backward"></span> Back </a>
        <button type="submit" name="order_save" class="btn btn-primary">
            <span class="glyphicon glyphicon-shopping-cart"></span> Order
        </button>
  
        </center>
    <!--</table>-->
    
</form>
					
					
					
					
					
					<br />
			
			<div class="alert alert-default" style="background-color:#fff;">
                       <p style="color:black;text-align:center;">
                       &copy 2023 DFFRNT Clothing shop| All Rights Reserved |  Project by : TechNexus Co.

						</p>
                        
                    </div>
            
                </div>
            </div>

           

           
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
				
				 <!--<button type="button" class="btn btn-block btn-danger btn-md" data-dismiss="modal">Cancel</button>-->
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
	
	
</body>

<script>
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
</script>
</html>
