<?php
    include('./../include/config.php');
    session_start();
    $id = $_SESSION['id'];
    $userDetailsQuery = "select u.email,c.* from users u, customers c where c.id = u.customerId and u.id = $id;";
    $orderDetailsQuery = "select c.wear_name, c.price,c.Gender from orders o ,clothing c, users u where o.clothId = c.id and o.userId = u.id and u.id = $id;";
    $resultSet = mysqli_query($conn,$orderDetailsQuery);
    $userResultSet = mysqli_query($conn, $userDetailsQuery);
    $noOfUser = mysqli_num_rows($userResultSet);
    $noOfRow = mysqli_num_rows($resultSet);
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
        <link rel="stylesheet" href="./../css/mdb.min.css">
        <link rel="stylesheet" href="./../css/style.css">
        <script type="text/javascript" src="./../js/mdb.min.js"></script>
        <script type="text/javascript" src="./../js/popper.min.js"></script>
        <script type="text/javascript" src="./../js/app.js"></script>
        <script type="text/javascript" src="./../js/particles.js"></script>
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
                    <a class="navbar-brand" href="./../index.php"><b>CHI</b></a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav" style="margin-left: 35%;">
                        <li><a href="./../index.php"><b>Home</b></a></li>
                        <li><a href="./../mens.php"><b>Men</b></a></li>
                        <li><a href="./../womens.php"><b>Women</b></a></li>
                        
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
                            echo "<li class=\"active\"><a href='./user/profile.php'><span class='glyphicon-log-in'></span><b>$userName</b></a></li>";
                            echo '<li><a href="./logout.php"><span class="glyphicon glyphicon-log-in"></span><b>Logout</b></a></li>';
                        }
                        ?>
                        
                    </ul>
                    </div>
                </div>
            </nav>
            <div class="col-sm-12 text-center">
                <br/>
                <br/>
                <div class="row banner">
                    <div class="col-sm-6 white" >
                    <h3 class="text-muted h1" style="color:#fff;">User's Details</h3>
                    <?php
                        if($noOfUser > 0){
                            while($userSet = $userResultSet -> fetch_assoc()){
                                $email = $userSet['email'];
                                $customerName = $userSet['CustomerName'];
                                $address = $userSet['address'];
                                $city = $userSet['city'];
                                $phoneNumber = $userSet['phoneNumnber'];
                                echo "
                                <img src='./../img/user.png' style=\"width:auto;height:300px;\">
                                </div>
                                <div class=\"col-sm-6\"> 
                                <br>
                                <h3 class=\"text-muted h1\">userName: $email</h3>
                                <br>
                                <h3 class=\"text-muted\">Name: $customerName</h3>
                                <h3 class=\"text-muted\">Address: $address</h3>
                                <h3 class=\"text-muted\">city: $city</h3>
                                <h3 class=\"text-muted\">Phone Number $phoneNumber</h3>
                                ";
                            }
                        }
                    ?>
                        
                            <br/>
                    </div>
                </div>
                <hr>
            </div>
            <div class="col-sm-12 text-center  health1" style="background:#2c3e50;" >
                <div clas="row">
                    
                    <div class="col-md-12">
                        <br><br>
                        <h3 class="text-muted h1" style="color:#fff;">Order Details</h3>
                        <?php 
                            if($noOfRow > 0){
                                while($clothSet = $resultSet -> fetch_assoc()){
                                    $nameOfCloth = explode('.', $clothSet['wear_name'], -1);
                                    $nameOfCloth = substr($nameOfCloth[0],0,20);
                                    $nameOfCloth = $nameOfCloth."...";
                                    $clothUrl =  $clothSet['wear_name'];
                                    $price = 'Rs. '.$clothSet['price'].'.00';
                                    $Gender = (int)$clothSet['Gender'];
                                    if($Gender == 1 || $Gender == 3){
                                        echo "
                                        <div class=\"col-sm-4 text-center pt2\" >
                                            <div class=\"card\">
                                                    <img src=\"./../img/Mens/$clothUrl\" style=\"width:400;height:auto;\" >
                                                    <h2 class=\"text-muted\" style=\"margin-left:-40px;\">$nameOfCloth</h2>
                                                    <h2 class=\"text-muted\" style=\"margin-left:-40px;\">$price</h2>
                                                    <h1 class=\"text-muted\" style=\"margin-left:-40px; color: green; font-weight: bold;\">Delivered</h1>
                                            </div>
                                        </div>";
                                    }
                                    else {
                                        echo "
                                        <div class=\"col-sm-4 text-center pt2\" >
                                            <div class=\"card\">
                                                    <img src=\"./../img/Womens/$clothUrl\" style=\"width:400;height:auto;\" >
                                                    <h2 class=\"text-muted\" style=\"margin-left:-40px;\">$nameOfCloth</h2>
                                                    <h2 class=\"text-muted\" style=\"margin-left:-40px;\">$price</h2>
                                                    <h1 class=\"text-muted\" style=\"margin-left:-40px; color: green; font-weight: bold;\">Delivered</h1>
                                            </div>
                                        </div>";
                                    }

                        
                               }
                               
                            }
                            else {
                                echo "
                                            <h1 class=\"text-muted\" style=\"margin-left:-40px; color: red; font-weight: bold;\">You currently have no Orders</h1>";
                               }
                        ?>
                        
                        
                    </div>
                    <br><br><br>
                </div>
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