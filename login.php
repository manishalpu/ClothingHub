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
                    <a class="navbar-brand" href="#">HHC</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav" style="margin-left: 30%;">
                        <li class="active"><a href="./index.php">Home</a></li>
                        <li><a href="./homecare.php">Homecare</a></li>
                        <li><a href="./healthcare.php">Healthcare</a></li>
                        
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                        if(empty($_SESSION['id']))
                        {
                            echo '<li><a href="./login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
                        }
                        else
                        {
                            echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>';
                        }
                        ?>
                        
                    </ul>
                    </div>
                </div>
            </nav>
            <div class="col-sm-12 header">
                <h3 class="h3" style="color:white;">Home  > Login</h3>
            </div>
        <div class="col-sm-12 text-center ">
            <br>
            <br>
            <h3 class="text-muted h1">Login To Continue</h3>
            <br>
            

            <div class="row">
                    <div class="col-sm-6 pt1">
                        <div class="card pt3">
                            <br>
                            <img src="img/user.png" style="width:180px;height:94px;border-radius:50%;">
                            <h3 class="text-muted"><a href="user/login.php">User's Login / Signup</a></h3>
                            <h5 class="text-muted">Login  Or SignUp to view And Make Bookings.</h5>
                        </div>
                    </div>
                    <div class="col-sm-6 pt1">
                        <div class="card pt3">
                        <br>
                        <img src="img/doctor.png" style="width:180px;height:94px;border-radius:50%;">
                            <h3 class="text-muted"><a href="doctor/login.php">Doctors Login / SignUp</a></h3>
                            <h5 class="text-muted">Login to view all the details of the Appointments </h5>
                        </div>
                    </div>
                    <div class="col-sm-6 pt1">
                        <div class="card pt3">
                        <br>
                        <img src="img/vendor.png" style="width:180px;height:94px;border-radius:50%;">
                            <h3 class="text-muted"><a href="vendor/login.php">Vendors Login / SignUp</a></h3>
                            <h5 class="text-muted">Login to view all the details of the Facility Appointments</h5>
                        </div>
                    </div>
                    <div class="col-sm-6 pt1">
                        <div class="card pt3">
                        <br>
                        <img src="img/admin.png" style="width:180px;height:94px;border-radius:50%;">
                            <h3 class="text-muted"><a href="admin/login.php">Admin Login</a></h3>
                            <h5 class="text-muted">Login to view all the details </h5>
                        </div>
                    </div>

            </div>
            <br>
            <br>
            
        </div>
    </body>
</html>