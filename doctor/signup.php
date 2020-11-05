<?php
include('../include/config.php');
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
                <h3 class="h3" style="color:white;">Home > Doctor > Signup</h3>
            </div>
            <div class="col-md-3">

            </div>
            <div class="col-md-6 text-center pt2">
                <div class="card">
                        <br>
                        <br>
                        <h1 class="text-muted h1">Doctor Signup </h1> 
                        <br>
                        <div class="row">
                            <div class="col-sm-2">

                            </div>
                            <div class="col-sm-8">
                                <form action="new1.php" method="POST">
                                    <div class="form-group">
                                        <input class="form-control form-style" type="text" name="name1" placeholder="Enter Name" required>
                                        <br>
                                        <input class="form-control form-style" type="email" name="email1" placeholder="Enter Email" required>
                                        <br>
                                        <input class="form-control form-style" type="password" name="pass" placeholder="Enter Password" required>
                                        <br>
                                        
                                        <input class="form-control form-style" type="text" name="address" placeholder="Enter Address" required>
                                        <br>
                                        
                                        <select name="specilization" class="form-control" onChange="getdoctor1(this.value);" required="required">
                                        <option value="">Select Specialization</option>
                                            <?php 
                                            $ret="SELECT * from specs";
                                            $result = mysqli_query($conn,$ret);
                                            while($row=mysqli_fetch_assoc($result))
                                            {
                                            ?>
                                        <option value="<?php echo htmlentities($row['specilization']);?>">
                                            <?php echo htmlentities($row['specilization']);?>
                                        </option>
                                        <?php } ?>
                                        
                                    </select>
                                        <br>
                                        <input class="form-control form-style" type="text" name="number" placeholder="Enter Phone No." required>
                                        <br>
                                        
                                        <input class="form-control form-style" type="text" name="fees" placeholder="Enter fees" required>
                                        <br>

                                        <button class="btn btn-info" type="submit">Submit</button>
                                    </div>
                                </form>
                                <br>
                                <h3 class="text-muted">Already Have A Account ?  <a href="login.php">Login</a></h3>
                            </div>
                        </div>

                </div>
                
                
            </div>
    </body>
</html>