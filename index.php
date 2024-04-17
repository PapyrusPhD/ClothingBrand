<?php
session_start();

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>PROJECT DFFRNT SHOP</title>
    <link rel="shortcut icon" href="assets/img/logotech.png" type="image/x-icon" />


    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/flexslider.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!--   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
-->


</head>

<body>

    <!--style="background-image: url('border.png'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;"-->


    <!--   background-image: url("../border.png");
    height: 1000vh;
    background-size: cover;
    background-repeat: no-repeat;-->

    <div class="navbar navbar-inverse navbar-fixed-top " id="menu">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img class="logo-custom" src="assets/img/logoz.png" alt="" /></a>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="active" href="#home">HOME</a></li>
                    <li><a class="active" href="#shop-sec">SHOP</a></li>
                    <li><a class="active" href="#brand-sec">BRANDS</a></li>
                    <li><a class="active" href="#course-sec">CONTACTS</a></li>
                    <li><a class="active" href="#features-sec" img src="prototype1/admin.jpg" data-toggle="modal"
                            data-target="#ln">ACCOUNT</a></li>
                    <li>
                        <a href="#features-sec" data-toggle="modal" data-target="#an">
                            <!--class="btn btn-primary btn-lg" katabi ng #feature-sec-->
                            <span class="fas fa-user-shield"></span>
                        </a>
                    </li>


                </ul>
            </div>

        </div>
    </div>

    <div class="home-sec" id="home">
        <div class="overlay">
            <div class="container">
                <div class="row text-center ">

                    <div class="col-lg-12  col-md-12 col-sm-12">

                        <div class="flexslider set-flexi" id="main-section">
                            <ul class="slides move-me">
                                <!-- Slider 01 -->
                                <li>
                                    <h3>Welcome to DFFRNT</h3>
                                    <h1>WHAT ARE YOU WAITING FOR? SHOP NOW!</h1>
                                    <a href="#features-sec" class="btn btn-warning btn-lg" data-toggle="modal"
                                        data-target="#ln">
                                        LOG-IN
                                    </a>
                                    <a href="#features-sec" class="btn btn-success btn-lg" data-toggle="modal"
                                        data-target="#su">
                                        SIGN UP
                                    </a>


                                </li>
                                <!-- End Slider 01 -->

                                <!-- Slider 02 -->
                                <li>
                                    <h3>Welcome to DFFRNT</h3>
                                    <h1>It's an add to cart kinda day!</h1>
                                    <a href="#features-sec" class="btn btn-warning btn-lg" data-toggle="modal"
                                        data-target="#ln">
                                        LOG-IN
                                    </a>
                                    <a href="#features-sec" class="btn btn-success btn-lg" data-toggle="modal"
                                        data-target="#su">
                                        SIGN UP
                                    </a>

                                    <!--<a  href="#features-sec" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#an">
                                ADMIN
                            </a>-->
                                </li>
                                <!-- End Slider 02 -->

                                <!-- Slider 03 -->
                                <li>
                                    <h3>Welcome to DFFRNT</h3>
                                    <h1>BE DIFFERENT LIKE NO OTHER</h1>
                                    <a href="#features-sec" class="btn btn-warning btn-lg" data-toggle="modal"
                                        data-target="#ln">
                                        LOG-IN
                                    </a>
                                    <a href="#features-sec" class="btn btn-success btn-lg" data-toggle="modal"
                                        data-target="#su">
                                        SIGN UP
                                    </a>
                                    <!--<a  href="#features-sec" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#an">
                                ADMIN-->
                                    </a>
                                </li>
                                <!-- End Slider 03 -->
                            </ul>
                        </div>




                    </div>

                </div>
            </div>
        </div>

    </div>


    <!--HOME SECTION END-->

    <div class="tag-line">
        <div class="container">
            <div class="row  text-center">

                <div class="col-lg-12  col-md-12 col-sm-12">

                    <h2 data-scroll-reveal="enter from the bottom after 0.1s"><i class="fa fa-circle-o-notch"></i> Be
                        DFFRNT be like no other <i class="fa fa-circle-o-notch"></i> </h2>
                </div>
            </div>
        </div>

    </div>
    <!-- DFFRNT END -->

    <!-- ITEM -->
    <center>
        <!--End-->
        <div id="shop-sec" class="container set-pad">
            <div class="row text-center">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                    <div class="small-container">
                        <h2>Hot Releases</h2>
                        <div class="line1"></div>
                        <div class="child">
                            <div class="childprods">
                                <img src="Admin/item_images/DFFRNT GEARTH 5th.webp"></a>
                                <h4>Mugiwara Shirt</h4>
                                <p>₱ 410</p>
                            </div>
                            <div class="childprods">
                                <img src="assets/img/product-img/Theraphy.jpg"></a>
                                <h4>Theraphy Dffrnt Shirt </h4>
                                <p>₱ 410</p>
                            </div>
                            <div class="childprods">
                                <img src="assets/img/product-img/Dffrnt.jpg"></a>
                                <h4>Dffrnt T-shirt</h4>
                                <p>₱ 510</p>
                            </div>
                            <div class="childprods">
                                <img src="assets/img/product-img/back.jpg"></a>
                                <h4>Black Theraphy</h4>
                                <p>₱ 410</p>
                            </div>
                        </div>
    </center>

    <!-- LATEST RELEASE -->
    <center>
        <div id="brand-sec" class="container set-pad">
            <div class="row text-center">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                    <h1 data-scroll-reveal="enter from the bottom after 0.2s" class="header-line">LATEST RELEASES</h1>
                    <p data-scroll-reveal="enter from the bottom after 0.3s">
                        You can choose your favorite brand.
                    </p><br />


                </div>

            </div>
            <div class="line1"></div>
            <div class="child">
                <div class="childprods">
                    <img src="assets/img/cover-img/c5.webp"></a>
                    <h4>Dffrnt T-shirt</h4>
                    <p>₱520</p>
                </div>
                <div class="childprods">
                    <img src="assets/img/background-img/bckgrnd.webp"></a>
                    <h4>Blue Rocket T-Shirt</h4>
                    <p>₱520</p>
                </div>
                <div class="childprods">
                    <img src="assets/img/background-img/white.webp"></a>
                    <h4>White DFFRNT </h4>
                    <p>₱520</p>
                </div>
                <div class="childprods">
                    <img src="assets/img/cover-img/c2.webp"></a>
                    <h4>Couple Dffrnt T-shirt</h4>
                    <p>₱520</p>
                </div>
    </center>
    <!-- END -->


    <!-- COURSES SECTION END-->
    <div class="modal fade" id="su" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
        <div class="modal-dialog modal-sm">
            <div style="color:white;background-color:#1b2529" class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel" style="color: white;">Registration Form</h4>

                </div>
                <div class="modal-body">
                    <form role="form" method="post" action="register.php">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Firstname" name="ruser_firstname" type="text"
                                    required oninput="validateInput(this)">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Lastname" name="ruser_lastname" type="text"
                                    required oninput="validateInput(this)">
                            </div>

                            <script>
                                function validateInput(input) {
                                    // Use a regular expression to check if the input contains only letters
                                    const regex = /^[A-Za-z]+$/;
                                    if (!regex.test(input.value)) {
                                        input.setCustomValidity("Only letters are allowed in this field.");
                                    } else {
                                        input.setCustomValidity("");
                                    }
                                }
                            </script>
                            <div class="form-group">
                                <input class="form-control" placeholder="Contact Number" name="ruser_contactnumber"
                                    type="text" required
                                    oninput="this.value = this.value.replace(/\D/g, '').substring(0, 11);">
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="Email" name="ruser_email" type="email"
                                    required>
                            </div>


                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="ruser_password" type="password"
                                    minlength="8" required>
                            </div>
                            <!--<script src="assets/js/password.js"></script>-->
                            <!-- Country Selection Field 
                        <div class="form-group">
    <label for="country">Country</label>
    <input class="form-control" id="country" name="user_country" required value="Philippines" disabled>

         You can add more options here for other countries
    </select>
</div>-->




                            <!-- Add more countries as needed -->

                            <!-- Region Selection Field-->
                            <div class="form-group">
                                <label for="region">Region</label>
                                <select class="form-control" id="region" name="ruser_region" required
                                    onchange="populateCities()">
                                    <option value="">Select Region</option>
                                    <option value="NCR">NCR</option>
                                    <option value="Region III">Region III(Central Luzon)</option>

                                </select>
                            </div>
                            <!-- Add more regions as needed -->
                            <!-- City Selection Field -->
                            <p style="color: white;">City:</p>
                            <select class="form-control" id="city" name="ruser_city" required>
                                <option value=""></option>
                            </select>

                            <script src="Customers/js/script.js"></script>
                            <!--for="country"-->
                            <label>Address</label>
                            <div class="form-group">
                                <input class="form-control" placeholder="Address" name="ruser_address" type="text"
                                    required>
                            </div>
                            <!--</fieldset>-->
                </div>
                <div class="modal-footer">
                    <button class="btn btn-md btn-warning btn-block" name="register">Sign Up</button>
                    <!-- Close button -->
                </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Script -->


    <div class="modal fade" id="ln" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
        <div class="modal-dialog modal-sm">
            <div style="color:white;background-color:#1b2529" class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 style="color:white" class="modal-title" id="myModalLabel">Customer Login</h4>
                </div>
                <div class="modal-body">


                    <form role="form" method="post" action="userlogin.php">
                        <fieldset>


                            <div class="form-group">
                                <input class="form-control" placeholder="Email" name="user_email" type="email" required>
                            </div>

                            <div class="form-group">
                                <div class="password-container">
                                    <input class="form-control" placeholder="Password" name="user_password"
                                        type="password" id="password-input" required>
                                    <i class="far fa-eye-slash toggle-password-icon" id="toggle-password"></i>
                                </div>

                            </div>


                            <script src="assets/js/password.js"></script>

                        </fieldset>


                </div>
                <div class="modal-footer">

                    <button class="btn btn-md btn-warning btn-block" name="user_login">Log-In</button>

                    <button type="button" class="btn btn-md btn-success btn-block" data-dismiss="modal">Cancel</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="an" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
        <div class="modal-dialog modal-sm">
            <div style="color:white;background-color:#1b2529" class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 style="color:white" class="modal-title" id="myModalLabel">Administrator Credentials</h4>
                </div>
                <div class="modal-body">


                    <form role="form" method="post" action="adminlogin.php">
                        <fieldset>


                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="admin_username" type="text"
                                    required>
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="admin_password" type="password"
                                    required>
                            </div>

                        </fieldset>


                </div>
                <div class="modal-footer">

                    <button class="btn btn-md btn-warning btn-block" name="admin_login">Login</button>

                    <button type="button" class="btn btn-md btn-success btn-block" data-dismiss="modal">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br />
    <br>
    <br>
    <!-- Script -->
    <!-- CONTACT SECTION END-->
    <div class="footer" id="footer">
        <div id="course-sec" class="container set-pad">
            <div class="container">
                <div class="child">
                    <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1"
                        data-scroll-reveal="enter from the bottom after 0.4s">


                        <div class="footerChild2">
                            <h3>Contact Us</h3>
                            <ul style="list-style-type: none; padding: 0; margin: 0;">
                                <li>
                                    <p><strong>Call:</strong> 0995-825-2189</p>
                                </li>
                                <li>
                                    <p><strong>Email:</strong> dffrnt@gmail.com</p>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="footerChild1">

                        <h3 class="text-uppercase">Follow us at: <a href="https://www.instagram.com/dffrnt_apprl/"><br>
                                <img src="https://img.icons8.com/color/48/000000/instagram-new.png">
                            </a>
                            <a href="https://www.facebook.com/profile.php?id=100091920976258&mibextid=ZbWKwL">
                                <img src="https://img.icons8.com/color/48/000000/facebook-new.png">
                            </a>
                        </h3>
                    </div>

                </div>
                <div class="belowfooter">
                    <p><a style="color: #fff" target="_blank">&copy 2023 DFFRNT| All Rights Reserved |Project by : Tech
                            Nexus Co.</a></p>
                </div>
            </div>
            <!-- FOOTER SECTION END-->

            <!--  Jquery Core Script -->
            <script src="assets/js/jquery-1.10.2.js"></script>
            <!--  Core Bootstrap Script -->
            <script src="assets/js/bootstrap.js"></script>
            <!--  Flexslider Scripts -->
            <script src="assets/js/jquery.flexslider.js"></script>
            <!--  Scrolling Reveal Script -->
            <script src="assets/js/scrollReveal.js"></script>
            <!--  Scroll Scripts -->
            <script src="assets/js/jquery.easing.min.js"></script>
            <!--  Custom Scripts -->
            <script src="assets/js/custom.js"></script>

</body>

</html>