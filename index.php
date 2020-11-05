<?php
include('include/config.php');

?>
<html>
    <head>
        <title>Healthcare </title>
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
                    <a class="navbar-brand" href="#"><b>HHC</b></a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav" style="margin-left: 30%;">
                        <li class="active"><a href="./index.php"><b>Home</b></a></li>
                        <li><a href="./homecare.php"><b>Homecare</b></a></li>
                        <li><a href="./healthcare.php"><b>Healthcare</b></a></li>
                        
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                        if(empty($_SESSION['id']))
                        {
                            echo '<li><a href="./login.php"><span class="glyphicon glyphicon-log-in"></span><b> Login</b></a></li>';
                        }
                        else
                        {
                            echo '<li><a href="./logout.php"><span class="glyphicon glyphicon-log-in"></span><b>Logout</b></a></li>';
                        }
                        ?>
                        
                    </ul>
                    </div>
                </div>
            </nav>
        
            <div class="col-sm-12 text-center main-header pt5">
                <div id="particles-js"></div>
                <h3 class="text-muted h1 " style="color:#fff;">The Best Health and Home Care Website</h3>
                <h5 class="text-muted h2" style="color:#fff;">We Believe To Deliver Feelings</h5>
                <br><br>
                <button class="btn btn-warning h3"><a href="healthcare.php" style="color:#fff;">Healthcare</a></button><button class="btn btn-danger h3"><a href="homecare.php" style="color:#fff;">Homecare</a></button>
            </div>
            <div class="col-sm-12 text-center">
                <br>
                <h2 class="text-muted h1">Who We Are</h2>
                <br>
                <div class="row banner">
                        <div class="col-sm-6 white" >
                                <img src="img/works.png" style="width:100%;height:450px;">
                            </div>
                            <div class="col-sm-6"> 
                                <br>
                                <h1 class="text-muted h1">Healthcare</h1>
                                <br><br>
                                <h3 class="text-muted">Health Care includes the skilled medical professionals which help you to take the best doctors appointments near you.</h5>
                            </div>

                </div>
                
                <div class="row banner">
                        <div class="col-sm-6"> 
                            <br>
                            <h1 class="text-muted h1">Homecare</h1>
                            <br>
                                <br>
                            <h3 class="text-center">Home Care offers a variety of home services. The vendors come with fully equipped with cleaning supplies to provide the best services.</h5>
                        </div>
                        <div class="col-sm-6">
                                <img src="img/facility.png" style="width:100%;height:450px;">
    
                        </div>

                </div>
                
            </div>
            <div class="col-sm-12 text-center  health1" style="background:#2c3e50;" >
                
                <div clas="row">
                    
                    <div class="col-md-12">
                        <br><br>
                
                        <h3 class="text-muted h1" style="color:#fff;">Healthcare Services We Provide</h3>
                        <br>
                        <div class="col-sm-4 text-center pt2" >
                            <div class="card">
                                <img src="img/healthcare/physi1.jpg" style="width:100%;height:140px;" >
                                <h3 class="text-muted" style="margin-left:-40px;">General Physician</h3>
                            </div>
                        </div>
                        <div class="col-sm-4 text-center pt2" >
                            <div class="card">
                                <img src="img/healthcare/radio1.jpg"  style="width:100%;height:140px;">
                                <h3 class="text-muted" style="margin-left:-40px;">Sonography</h3>
                            </div>
                        </div>
                        <div class="col-sm-4 text-center pt2"  >
                            <div class="card">
                                <img src="img/healthcare/cardio.png" style="height:140px;width:100%;" >
                                <h3 class="text-muted" style="margin-left:-40px;">Cardiologist</h3>
                            </div>
                        </div>
                        <div class="col-sm-4 text-center pt2">
                            <div class="card">
                                <img src="img/healthcare/eye1.jpg"  style="width:100%;height:140px;">
                                <h3 class="text-muted" style="margin-left:-40px;">Eye Specialist</h3>
                            </div>
                        </div>
                        <div class="col-sm-4 text-center pt2 " >
                            <div class="card">
                                <img src="img/healthcare/dentist1.jpg"  style="width:100%;height:140px;">
                                <h3 class="text-muted" style="margin-left:-40px;">Dentist</h3>
                            </div>
                        </div>
                        <div class="col-sm-4 text-center pt2" >
                            <div class="card">
                                <img src="img/healthcare/lab1.jpg"  style="width:100%;height:140px;">
                                <h3 class="text-muted" style="margin-left:-40px;">Homeopathy</h3>
                            </div>
                        </div>

                        
                        
                        
                    </div>
                    <br><br><br>
                </div>
            </div>
            
            <div class="col-sm-12 text-center  health1" style="background:#2c3e50;" >
                <br><br>
                <h3 class="text-muted h1" style="color:#fff;">Homecare Services We Provide</h3>
                <br>
                

                <div class="col-sm-4 text-center pt2" >
                    <div class="card">
                        <img src="img/homecare/cleaning.jpg" style="width:100%;height:140px;" >
                        <h3 class="text-muted" style="margin-left:-40px;">Home Cleaning</h3>
                    </div>
                </div>
                <div class="col-sm-4 text-center pt2" >
                    <div class="card">
                        <img src="img/homecare/cough.jpg" style="width:100%;height:140px;" >
                        <h3 class="text-muted" style="margin-left:-40px;">Sofa Fitting</h3>
                    </div>
                </div>
                
                <div class="col-sm-4 text-center pt2" >
                    <div class="card" >
                        <img src="img/homecare/gardening.jpg" style="width:100%;height:140px;" >
                        <h3 class="text-muted" style="margin-left:-40px;">Gardening</h3>
                    </div>
                </div>
                <div class="col-sm-4 text-center pt2">
                    
                    <div class="card">
                        <img src="img/homecare/tap.jpg" style="width:100%;height:140px;" >
                        <h3 class="text-muted" style="margin-left:-40px;">Plumber</h3>
                    </div>
                </div>
                <div class="col-sm-4 text-center pt2" >
                    <div class="card">
                        <img src="img/homecare/electrician.jpeg" style="width:100%;height:140px;">
                        <h3 class="text-muted" style="margin-left:-40px;">Electrician</h3>
                    </div>
                </div>
                <div class="col-sm-4 text-center pt2" >
                    <div class="card">
                        <img src="img/homecare/wall_painting.jpg" style="width:100%;height:140px;" >
                        <h3 class="text-muted" style="margin-left:-40px;">Wall Painting</h3>
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
                                    $sql1 = "SELECT * FROM doctors";
                                    $result=mysqli_query($conn,$sql1);
                                    $row = mysqli_num_rows($result);
                                    echo $row;

                                    ?></b></h1>
                                <h3 class="text-muted" style="color:#fff;">Doctor's</h3>
                            
                        </div>
                        <div class="col-sm-3 text-center pt2" >
                            
                                <h1 class="text-black" style="color:#fff;"><b>
                                <?php
                                    $sql1 = "SELECT * FROM facility";
                                    $result=mysqli_query($conn,$sql1);
                                    $row = mysqli_num_rows($result);
                                    echo $row;

                                    ?>
                                </b></h1>
                                <h3 class="text-muted" style="color:#fff;">Vendor's</h3>
                            
                        </div>
                        <div class="col-sm-3 text-center pt2" >
                            
                                <h1 class="text-black" style="color:#fff;"><b>
                                <?php
                                    $sql1 = "SELECT * FROM appointment";
                                    $result=mysqli_query($conn,$sql1);
                                    $row = mysqli_num_rows($result);

                                    $sql2 = "SELECT * FROM fac_appoint";
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
                                    $sql1 = "SELECT * FROM users";
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
                        <h3 class="h3" style="color:#fff;">Home n Health Care</h3>
                        <h4 style="color:#fff;">Contact : 994959908</h4>
                        <h4 style="color:#fff;">Queries & help : bachurahul111@gmail.com</h4>
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
                  bachurahul</h4>
                </div>
                    <!-- Copyright -->

                
            </div>
            
                
        
        
    </body>
</html>