<?php
include('include/config.php');
session_start();
?>
<html>
    <head>
        <title>Clothing Hub</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://use.fontawesome.com/4d8ec76cab.js"></script>

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/mdb.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="js/mdb.min.js"></script>
        <script type="text/javascript" src="js/popper.min.js"></script>
        <script type="text/javascript" src="js/app.js"></script>
        <script type="text/javascript" src="js/particles.js"></script>
        <style>
        .font1
        {
            padding-left:10px;
            padding-right:10px;
            color:#fff;
        }
        </style>
    </head>
    <body>
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><b>CHI</b></a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav" style="margin-left: 35%;">
                        <li class="active"><a href="./index.php"><b>Home</b></a></li>
                        <li><a href="./mens.php"><b>Men</b></a></li>
                        <li><a href="./womens.php"><b>Women</b></a></li>
                        
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                        if(empty($_SESSION['id']))
                        {
                            echo '<li><a href="./user/login.php"><span class="glyphicon glyphicon-log-in"></span><b> Login</b></a></li>';
                        }
                        else
                        {   
                            $userName = $_SESSION['userName'];
                            echo "<li><a href='./user/profile.php'><span class='glyphicon-log-in'></span><b>$userName</b></a></li>";
                            echo '<li><a href="./user/logout.php"><span class="glyphicon glyphicon-log-in"></span><b>Logout</b></a></li>';
                        }
                        ?>
                        
                    </ul>
                    </div>
                </div>
            </nav>
        
            <div class="col-sm-12 text-center main-header pt5">
                <div id="particles-js"></div>
                <h3 class="text-muted h1 " style="color:#fff;">Style is a way to say who you are without having to speak</h3>
                <h5 class="text-muted h2" style="color:#fff;">We Believe To Deliver Best of You</h5>
                <br><br>
                <button class="btn btn-warning h3"><a href="mens.php" style="color:#fff;">Men</a></button>
                <button class="btn btn-danger h3"><a href="womens.php" style="color:#fff;">Women</a></button>
            </div>
            <div class="col-sm-12 text-center">
                <br>
                <h2 class="text-muted h1">Who We Are</h2>
                <br>
                <div class="row banner">
                        <div class="col-sm-6 white" >
                                <img src="img/Mens/CoatsSet.jpg" style="width:auto;height:450px;">
                            </div>
                            <div class="col-sm-6"> 
                                <br>
                                <h1 class="text-muted h1">Men</h1>
                                <br><br>
                                <h3 class="text-muted">We Provide you with Best Style and Fashion with quick delivery.</h5>
                            </div>

                </div>
                
                <div class="row banner">
                        <div class="col-sm-6"> 
                            <br>
                            <h1 class="text-muted h1">Womens</h1>
                            <br> <br>
                            <h3 class="text-center">Deliver you with Unique and Iconic Fashion from around the world and provide you with fashion designs of best designer's in the world.</h5>
                        </div>
                        <div class="col-sm-6">
                                <img src="img/Womens/Street9WomenSolidMaxiDress.png" style="width:auto;height:450px;">
                        
                        </div>
                </div>
                
            </div>
            
            <br/>
            <div class="col-sm-12 text-center  health1" style="background:#2c3e50;" >
                
                <div clas="row">
                    
                    <div class="col-md-12">
                        <br><br>
                
                        <h3 class="text-muted h1" style="color:#fff;">Men's Collection</h3>
                        <br>
                        <div class="col-sm-4 text-center pt2" >
                            <div class="card">
                                <a href="categoryFilterSelect.php?category=1&gender=1">
                                    <img src="img/Mens/StripedMenRoundTShirtTopWear.jpeg" style="width:auto;height:240;" >
                                    <h3 class="text-muted" style="margin-left:-40px;">Top Wear</h3>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4 text-center pt2" >
                            <div class="card">
                                <a href="categoryFilterSelect.php?category=2&gender=1">
                                    <img src="img/Mens/SlimMenDarkBlueJeansBottomWear.jpeg"  style="width:auto;height:240;">
                                    <h3 class="text-muted" style="margin-left:-40px;">Bottom Wear</h3>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4 text-center pt2"  >
                            <div class="card">
                                <a href="categoryFilterSelect.php?category=3&gender=1">
                                    <img src="img/Mens/ParkAvenueBandhgalaSuitSolidMenSuit.jpeg" style="width:auto;height:240;" >
                                    <h3 class="text-muted" style="margin-left:-40px;">Suit, Blazers & Waistcoats</h3>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4 text-center pt2">
                            <div class="card">
                                <a href="categoryFilterSelect.php?category=4&gender=1">
                                    <img src="img/Mens/FullSleeveSolidMenSweatshirt.jpeg"  style="width:auto;height:240;">
                                    <h3 class="text-muted" style="margin-left:-40px;">Winter Wear</h3>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4 text-center pt2 " >
                            <div class="card">
                                <a href="categoryFilterSelect.php?category=5&gender=1">
                                    <img src="img/Mens/ElepantsMenSolidCottonBlendStraightKurta.jpeg"  style="width:auto;height:240;">
                                    <h3 class="text-muted" style="margin-left:-40px;">Ethnic Wear</h3>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4 text-center pt2" >
                            <div class="card">
                                <a href="categoryFilterSelect.php?category=6&gender=1">
                                    <img src="img/Mens/aadiCasualLongBoots.jpeg"  style="width:auto;height:240;">
                                    <h3 class="text-muted" style="margin-left:-40px;">FootWear</h3>
                                </a>
                            </div>
                        </div>

                        
                        
                        
                    </div>
                    <br><br><br>
                </div>
            </div>
            
            <div class="col-sm-12 text-center  health1" style="background:#2c3e50;" >
                <br><br>
                <h3 class="text-muted h1" style="color:#fff;">Women</h3>
                <br>
                

                <div class="col-sm-4 text-center pt2" >
                    <div class="card">
                        <a href="categoryFilterSelect.php?category=1&gender=2">
                            <img src="img/Womens/DillingerPrintedWomenRoundNeckDarkBlueT-Shirt.jpeg" style="width:auto;height:240;" >
                            <h3 class="text-muted" style="margin-left:-40px;">Top Wear</h3>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 text-center pt2" >
                    <div class="card">
                        <a href="categoryFilterSelect.php?category=7&gender=2">
                            <img src="img/Womens/MissChaseWomen Maxi Brown Dress.jpeg" style="width:auto;height:240;" >
                            <h3 class="text-muted" style="margin-left:-40px;">Dresses</h3>
                        </a>
                    </div>
                </div>
                
                <div class="col-sm-4 text-center pt2" >
                    <div class="card" >
                        <a href="categoryFilterSelect.php?category=5&gender=2">
                            <img src="img/Womens/Solid Fashion Lycra Blend Saree  (Purple).jpeg" style="width:auto;height:240;" >
                            <h3 class="text-muted" style="margin-left:-40px;">Ethnic Wear</h3>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 text-center pt2">
                    
                    <div class="card">
                        <a href="categoryFilterSelect.php?category=8&gender=2">
                            <img src="img/Womens/Skinny Women Blue Jeans.jpeg" style="width:auto;height:240;" >
                            <h3 class="text-muted" style="margin-left:-40px;">Jeans</h3>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 text-center pt2" >
                    <div class="card">
                        <a href="categoryFilterSelect.php?category=6&gender=2">
                            <img src="img/Womens/Flip Flops.jpeg" style="width:auto;height:240;">
                            <h3 class="text-muted" style="margin-left:-40px;">FootWear</h3>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 text-center pt2" >
                    <div class="card">
                        <a href="categoryFilterSelect.php?category=4&gender=2">
                            <img src="img/Womens/Full Sleeve Solid Women Denim Jacket.jpeg" style="width:auto;height:240;" >
                            <h3 class="text-muted" style="margin-left:-40px;">Winter Wear</h3>
                        </a>
                    </div>
                </div>

                    </div>

                </div>
                <div class="col-sm-12 pb-5" ></div>
                <br><br><br>
            </div>
                
                
            </div>
            <div class="col-sm-12 text-center  right-health" style="background-image:url('img/banner.jpg');background-size:cover;background-repeat:no-repeat;">
                    
                    <div clas="row">
                        <div class="col-sm-3 text-center pt2" > 
 
                            
                                <h1 style="color:#fff;"><b>
                                    <?php
                                    $sql1 = "SELECT * FROM fashion_designers";
                                    $result=mysqli_query($conn,$sql1);
                                    $row = mysqli_num_rows($result);
                                    echo $row;

                                    ?></b></h1>
                                <h3 class="text-muted" style="color:#fff;">Fashion Designers's</h3>
                            
                        </div>
                        <div class="col-sm-3 text-center pt2" >
                            
                                <h1 class="text-black" style="color:#fff;"><b>
                                <?php
                                    $sql1 = "SELECT * FROM collections";
                                    $result=mysqli_query($conn,$sql1);
                                    $row = mysqli_num_rows($result);
                                    echo $row;

                                    ?>
                                </b></h1>
                                <h3 class="text-muted" style="color:#fff;">Collection's</h3>
                            
                        </div>
                        <div class="col-sm-3 text-center pt2" >
                            
                                <h1 class="text-black" style="color:#fff;"><b>
                                <?php
                                    $sql2 = "SELECT * FROM orders";
                                    $result1=mysqli_query($conn,$sql2);
                                    $row1 = mysqli_num_rows($result1);
                                    echo $row+$row1;

                                    ?>
                                </b></h1>
                                <h3 class="text-muted" style="color:#fff;">Bookings</h3>
                            
                        </div>
                        <div class="col-sm-3 text-center pt2" >
                            
                                <h1 class="text-black" style="color:#fff;"><b>
                                <?php
                                    $sql1 = "SELECT * FROM customers";
                                    $result=mysqli_query($conn,$sql1);
                                    $row = mysqli_num_rows($result);
                                    echo $row;

                                    ?>
                                </b></h1>
                                <h3 class="text-muted" style="color:#fff;">Happy Clients</h3>
                            
                        </div>
                        
                        
                    </div>
            </div>
                                    
                                        
                                        
                                        
            
        
                      
            
            
            <div class="col-sm-12 text-center" >
                    <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d13643.401706586357!2d75.69427628297362!3d31.252563703342236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d31.244287999999997!2d75.702272!4m5!1s0x391a5a594d22b88d%3A0x4cc934c58d0992ec!2slovely%20professional%20university!3m2!1d31.255188099999998!2d75.70503289999999!5e0!3m2!1sen!2sin!4v1573579141463!5m2!1sen!2sin" width="100%;" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
            <div class="col-sm-12 text-center health1">
                <div class="row">
                    <div class="col-sm-6 text-left">
                        <h3 class="h3" style="color:#fff;">Clothing Hug Inc</h3>
                        <h4 style="color:#fff;">Contact : 7464324825</h4>
                        <h4 style="color:#fff;">Queries & help : clothinghubinc@gmail.com</h4>
                        <h4 style="color:#fff;">Address : Lovely Professional University</h4>
                    </div>
                    <div class="col-sm-6 pt3">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-twitter fa-3x font1"></i></a></li >
                            <li><a href="#"><i class="fa fa-facebook fa-3x font1"></i></a></li>
                            <li><a href="#"><i class="fa fa-google fa-3x font1"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin fa-3x font1"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram fa-3x font1"></i></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Copyright -->
                <div class="footer-copyright text-center py-3" style="color:#fff;"><h4>© 2019 Copyright:
                  Clothing Inc.</h4>
                </div>
                    <!-- Copyright -->

                
            </div>
            
                
        
        
    </body>
</html>