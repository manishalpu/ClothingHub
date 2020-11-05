<?php
session_start();
include('include/config.php');

?>
<html>
    <head>
        <title>Healthcare </title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

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
                        <li><a href="./index.php"><b>Home</b></a></li>
                        <li><a href="./homecare.php"><b>Homecare</b></a></li>
                        <li class="active"><a href="./healthcare.php"><b>Healthcare</b></a></li>
                        
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                        if(empty($_SESSION['id']))
                        {
                            echo '<li><a href="./login.php"><span class="glyphicon glyphicon-log-in"></span><b> Login</b></a></li>';
                        }
                        else
                        {
                            echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span><b>Logout</b></a></li>';
                        }
                        ?>
                        
                    </ul>
                    </div>
                </div>
            </nav>
            <div class="col-sm-12 text-center">
                <br>
                <br>
                <h1 class="text-muted h1"> Top Doctor's For You</h1>
                <br>
                <?php
                $sql1= "SELECT * FROM doctors";
                $result = mysqli_query($conn,$sql1);
                if(mysqli_num_rows($result)>0)
                {
                    while($row=mysqli_fetch_assoc($result))
                    {
                
                    echo '<div class="col-sm-3 text-center pt3">
                    <div class="card">
                        <div class="card-header">
                            <img class="card-img-top" src="'.$row['img'].'" style="width:100%;height:200px;">
                        </div>
                        <div class="card-body">
                            <h3 class="text-muted">'.$row["name1"].'</h3>
                            <h4 class="text-muted">'.$row["specilization"].'</h4>
                            <span>Address : '.$row["address"].'</span>&nbsp;&nbsp; | &nbsp;&nbsp;<span>Fees : '.$row["fees"].'</span>
                        </div>
                        <div class="card-footer">
                        <btn class="btn btn-primary"><a  href="../homecare1/user/login.php" style="color:#fff;">Book</a></btn>
                        </div>
                    </div>
                </div>';
                    }
                }
                else
                {

                }
                ?>


                
                
            </div>
    </body>
</html>