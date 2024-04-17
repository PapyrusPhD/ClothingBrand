<!DOCTYPE html>
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
            </div>
           
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DFFRNT Cloth SHOP</title>
	 <link rel="shortcut icon" href="../assets/img/logotech.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    

   
    
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
                    <li class="active"><a href="index.php"> &nbsp; <span class='glyphicon glyphicon-home'></span> Home</a></li>
					<li><a href="shop.php?id=1"> &nbsp; <span class='glyphicon glyphicon-shopping-cart'></span> Shop Now</a></li>
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $user_firstname;?> <?php echo $user_lastname;?><b class="caret"></b></a>
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
            
			
			
			
			
			
			<div id="my-carousel" class="carousel slide hero-slide hidden-xs" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#my-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#my-carousel" data-slide-to="1"></li>
        <li data-target="#my-carousel" data-slide-to="2"></li>
		<li data-target="#my-carousel" data-slide-to="3"></li>
        <li data-target="#my-carousel" data-slide-to="4"></li>
		<li data-target="#my-carousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
		
            <img src="../assets/img/cover-img/c5.webp" alt="Hero Slide" style="width:100%;height:1000px;">

            <div class="carousel-caption">
                <h1 style="font-family:Century Gothic"><b></b></h1>

                <h2></h2>
            </div>
        </div>
        <div class="item">
            <img src="../assets/img/cover-img/c4.webp" alt="..." style="width:100%;height:1000px;">

            <div class="carousel-caption">
               
            </div>
        </div>
        <div class="item">
            <img src="../assets/img/cover-img/c6.webp" alt="..." style="width:100%;height:1000px;">

            <div class="carousel-caption">
		

                <p></p>
            </div>
        </div>
		
		<div class="item">
            <img src="../assets/img/cover-img/c2.webp" alt="..." style="width:100%;height:1000px;">

            <div class="carousel-caption">
		

                <p></p>
            </div>
        </div>
		
		<div class="item">
            <img src="../assets/img/cover-img/c3.webp" alt="..." style="width:100%;height:1000px;">

            <div class="carousel-caption">
		

                <p></p>
            </div>
        </div>
		
		<div class="item">
            <img src="../assets/img/cover-img/c1.webp" alt="..." style="width:100%;height:1000px;">

            <div class="carousel-caption">
		

                <p></p>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#my-carousel" role="button" data-slide="prev">
	
      <span class="icon-prev"></span>
       
    </a>
    <a class="right carousel-control" href="#my-carousel" role="button" data-slide="next">
       
       <span class="icon-next"></span>
    </a>

<!-- #my-carousel-->
			
			</div>
			
			
		<br />	
			 <div class="alert alert-info">
                        
                     <center>   &nbsp; &nbsp;Welcome to our world of DFFRNT fashion and style! 
                        Our clothing website is your ultimate destination for all things trendy, elegant, and comfortable. 
                        Whether you're on the hunt for the perfect outfit to make a statement at a special occasion or simply want to refresh your everyday wardrobe,
                         we've got you covered. Explore our carefully curated collection of apparel, from chic dresses to cozy loungewear,
                         all designed to keep you looking and feeling your best. With a focus on quality, affordability, and the latest fashion trends, 
                         we're here to make sure you not only stay fashionable but also express your unique style effortlessly. Join us on this fashion journey,
                         and let's elevate your wardrobe together. Happy shopping!</center>
                    </div>
					<br />
			<footer>
			<div class="alert alert-default" style="background-color:#fff;">
                       <p style="color:black;text-align:center;">
                       &copy 2023 DFFRNT Clothing shop| All Rights Reserved |  Project by : TechNexus Co.

						</p>
                        
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
              <div class="modal-body"> <!-- Adjust the value (5px) as needed -->
         
				
			
				
              <form enctype="multipart/form-data" method="post" action="settings.php" style="padding: 5px;"> 
                   <fieldset>
					
						
                            <p>Firstname:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Firstname" name="user_firstname" type="text" value="<?php  echo $user_firstname; ?>" required>
                           
							 
							</div>
							
							
							<p>Lastname:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Lastname" name="user_lastname" type="text" value="<?php  echo $user_lastname; ?>" required>
                           
							 
							</div>

                            <!--<p>Country:</p>

                            <div class="form-group">
                            <input class="form-control" placeholder="Region" name="user_region" type="text" value="Philippines" //?php echo $user_region; ?> disabled required>-->			
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
               
				
				 <!--<button type="button" class="btn btn-block btn-danger btn-md" data-dismiss="modal">Cancel</button>-->
                 <button class="btn btn-block btn-success btn-md" name="user_save">Save</button>

				
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
