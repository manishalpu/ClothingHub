<?php
    include('include/config.php');
    session_start();
    
    $sql1 = 'SELECT * FROM clothing where (Gender = 1 or Gender = 3)';
    if(isset($_SESSION['maleWhereFilter']) && $_SESSION['maleWhereFilter'] != -1){
        $sql1 = $sql1.' and '.$_SESSION['maleWhereFilter'];
        $_SESSION['maleWhereFilter'] = -1;
    }
    $resultSet = mysqli_query($conn,$sql1);
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
                        <li><a href="./index.php"><b>Home</b></a></li>
                        <li class="active"><a href="./mens.php"><b>Men</b></a></li>
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
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="myfilterOptions">
                    <form action="filterApplyMen.php" method="POST">
                    <ul class="nav navbar-nav" style="margin-top: 0.5%;">
                        <li>
                            <label>Category: </label> &ensp;
                        </li>
                        <?php

                        $categoryList = 'Select * from wear_category;';
                        $resultCategorySet = mysqli_query($conn, $categoryList);
                        $categoryRowNum = mysqli_num_rows($resultCategorySet);
                        if($categoryRowNum > 0 ){
                            while($categoryRow = $resultCategorySet -> fetch_assoc()){
                                $value = $categoryRow['id'];
                                $type = $categoryRow['category_name'];
                                echo "
                                    <li>
                                        <input type=\"checkbox\" name=\"categoryList[]\" value = '$value'>
                                        <label>$type</label> &ensp;
                                    </li> 
                                ";
                            }
                        }
                        ?>
                        <br/>
                        <li>
                        <label>Price: </label> &ensp;<input type="number" style="background-color:#2c3e50;" name = "priceL" placeholder="lowest"/>
                        </li>
                        <li>
                        &ensp;<input form-style type="number" style="background-color:#2c3e50;" name = "priceH" placeholder="Highest"/>
                        </li>

                        <li>
                        &ensp;&ensp;&ensp;&ensp; <button class="btn-info" type="submit">Apply Filter</button>
                        </li>
                    </ul>
                    </form>
                    </div>
                </div>
            </nav>
            <div class="col-sm-12 text-center  health1" style="background:#2c3e50;" >
                <div clas="row">
                    
                    <div class="col-md-12">
                        <br><br>
                        <h3 class="text-muted h1" style="color:#fff;">Men's Collection</h3>
                        <?php 
                            if($noOfRow > 0){
                                while($clothSet = $resultSet -> fetch_assoc()){
                                    $nameOfCloth = explode('.', $clothSet['wear_name'], -1);
                                    $nameOfCloth = substr($nameOfCloth[0],0,20);
                                    $nameOfCloth = $nameOfCloth."...";
                                    $clothUrl =  $clothSet['wear_name'];
                                    $price = 'Rs. '.$clothSet['price'].'.00';
                                    $id = $clothSet['id'];
                        
                                    echo "
                                    <div class=\"col-sm-4 text-center pt2\" >
                                        <div class=\"card\">
                                            <a href='SelectIdNextPage.php?id=$id'>
                                                <img src=\"./img/Mens/$clothUrl\" style=\"width:auto;height:240;\" >
                                                <h4 class=\"text-muted\" style=\"margin-left:-40px;\">$nameOfCloth</h4>
                                                <h5 class=\"text-muted\" style=\"margin-left:-40px;\">$price</h5>
                                            </a>
                                        </div>
                                    </div>";

                        
                               }
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