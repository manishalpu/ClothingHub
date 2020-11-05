<html>
    <head>
        <title>Healthcare </title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../css/mdb.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <script type="text/javascript" src="../js/mdb.min.js"></script>
        <script type="text/javascript" src="../js/popper.min.js"></script>
       
        <style>
        .modal
        {
            display:inline-block;
        }
        </style>
    </head>
    <body>
            <?php
            include('../include/header.php');
            ?>

            <div class="col-sm-12 header">
                <h3 class="h3" style="color:white;">Home > User >login</h3>
            </div>
            <div class="col-md-3">

            </div>
            <div class="col-md-6 text-center pt2">
                <div class="card">
                        <br>
                        <br>
                        <h1 class="text-muted h1">User Login </h1> 
                        <br>
                        <div class="row">
                            <div class="col-sm-2">

                            </div>
                            <div class="col-sm-8">
                                <form action="new.php" method="POST">
                                    <div class="form-group">
                                        <input class="form-control form-style" type="text" name="email1" placeholder="Enter Email">
                                        <br>
                                        <input class="form-control form-style" type="password" name="pass" placeholder="Enter Password">
                                        <br>
                                        <button class="btn btn-info" type="submit">Submit</button>
                                    </div>
                                </form>
                                <br>
                                <h3 class="text-muted">Don't Have A Account ? Create One <a href="signup.php">Sign Up</a></h3>
                            </div>
                        </div>

                </div>
                
                
            </div>
    </body>
</html>