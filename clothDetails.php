<?php
include('include/config.php');
session_start();
$url = '';
$wear_name= '';
$description = '';
$price = '';
$availableStock = '';
$category_name = '';
$collectionName = '';
$designer_name = '';
$Gender = '';
if(isset($_SESSION['ClothId'])){
    $clothquery = 'select * from clothing where id = '.$_SESSION['ClothId'];
    $clothResult = mysqli_query($conn, $clothquery);
    if($clothResult -> num_rows > 0){
        while($clothRow = $clothResult -> fetch_assoc()){
            $url = $clothRow['wear_name'];
            $wearName = explode('.', $clothRow['wear_name'], -1);
            $wear_name = $wearName[0];
            $description = $clothRow['wear_description'];
            $price = $clothRow['price'];
            $availableStock = $clothRow['available_pieces'];
            $collectionquery = 'select collectionName from collections where id = '.$clothRow['collectionId'];
            $fashionDesignerQuery = 'select designer_name from fashion_designers where id = '.$clothRow['fashion_designer_id'];
            $categoryQuery = 'Select category_name from wear_category where id = '.$clothRow['categoryId'];
            $Gender = $clothRow['Gender'];
            $resultcate = mysqli_query($conn, $categoryQuery);
            $resultcoll = mysqli_query($conn, $collectionquery);
            $resultfash = mysqli_query($conn, $fashionDesignerQuery);
            if($resultcate -> num_rows > 0){
                while($cateRow = $resultcate -> fetch_assoc()){
                    $category_name =  $cateRow['category_name'];
                }
            }
            if($resultcoll -> num_rows > 0){
                while($collRow = $resultcoll -> fetch_assoc()){
                    $collectionName =  $collRow['collectionName'];
                }
            }
            if($resultfash -> num_rows > 0){
                while($fashRow = $resultfash -> fetch_assoc()){
                    $designer_name =  $fashRow['designer_name'];
                }
            }
        }
    }
}
else {
    echo "
        <script>
            alert('Wrong Path, Moving Back to Home ');
            window.location.href='./index.php';
        </script>
    ";
}

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
                    <ul class="nav navbar-nav" style="margin-left: 40%;">
                        <li><a href="./index.php"><b>Home</b></a></li>
                        
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
            <div class="col-sm-12 text-center">
                <br/>
                <br/>
                <div class="row banner">
                    <div class="col-sm-6 white" >
                    <?php
                        if($Gender == 1 || $Gender == 3){
                            $url = './img/Mens/'.$url;
                        }
                        else {
                            $url = './img/Womens/'.$url;
                        }
                        $set = 'BUY';
                        $class = 'btn-info';
                        $disabled = '';
                        if((int)$availableStock <= 0){
                            $set = 'Out Of Stock';
                            $class = 'btn-disable';
                            $disabled = 'disabled';
                        }
                        echo "
                        <img src=\"$url\" style=\"width:auto;height:450px;\">
                        </div>
                        <div class=\"col-sm-6\"> 
                        <br>
                        <h1 class=\"text-muted h1\">$wear_name</h1>
                        <br>
                        <h3 class=\"text-muted\">$description</h3>
                        <h5 class=\"text-muted\">Collection: $collectionName</h5>
                        <h5 class=\"text-muted\">Designed BY $designer_name</h5>
                        <h5 class=\"text-muted\">Category: $category_name</h5>
                        <h2 class=\"text-muted\">Price: $price</h2>
                        <h6 class=\"text-muted\">Available Units: $availableStock</h6>
                        <form action=\"buy.php\" method=\"POST\">
                            <input type=\"hidden\" name=\"available\" value=\"$availableStock\"/>
                            <button class=\"btn $class\" style=\"width: fit-content;\" $disabled type=\"submit\">$set</button>
                        ";
                    ?>
                        
                            
                        </form>
                    </div>
                </div>
                <hr>
            </div>
            
            <div class="col-sm-12 text-center health1">
                        
                <br/><br/><br/>
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