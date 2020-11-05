<?php
include('../include/config.php');
session_start();
if(empty($_SESSION['id']))
{
  echo "<script>
    alert('Please Login To Continue');
    window.location.href='login.php';
    </script>";
    
}
else
{
  
  



}



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
                <h3 class="h3" style="color:white;">Home > Admin > Profile</h3>
            </div>
            <div class="col-sm-3 ">
                <div class="card side-header">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#home">User</a></li>
                            <li><a data-toggle="tab" href="#menu1">Doctor</a></li>
                            <li><a data-toggle="tab" href="#menu2">Vendor</a></li>
                            <li><a data-toggle="tab" href="#menu3">Doctors Appointments</a></li>
                            <li><a data-toggle="tab" href="#menu4">Facility Appointments</a></li>
                            
                        </ul>
                </div>
                    
                        
            </div>
            <div class="col-sm-9 pt3">
                
                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <table class="table table-bordered table-responsive">
                                <tr class="warning">
                                            
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>City</th>
                                        <th>Gender</th>
                                        
                                        
                                </tr>
                                
                                    <?php
                                    $i =0;
                                    $sql1 = "SELECT * from users";
                                    $result = mysqli_query($conn,$sql1);
                                    if(mysqli_num_rows($result) > 0)
                                        {

                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                $i=$i+1;
                                                echo '<tr>
                                                <td>'.$i.'</td>
                                                <td>'.$row["fullname"].'</td>
                                                <td>'.$row["email"].'</td>
                                                <td>'.$row["address"].'</td>
                                                <td>'.$row["city"].'</td>
                                                <td> '.$row["gender"].'</td>';
                                            



                                            }
                                        }
                                        else
                                        {
                                        echo mysqli_error($conn);
                                        }

                                        ?>
                                


                                </tr>
                                
                            </table>
                                                                                    
                        </div>
                        <div id="menu1" class="tab-pane fade">
                        <table class="table table-bordered table-responsive">
                            <tr class="warning">
                                        
                                    
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Specialization</th>
                                    <th>Fees</th>
                                    <th>Contact</th>
                                    
                            </tr>
                            
                                <?php
                                $sql1 = "SELECT * from doctors";
                                $result = mysqli_query($conn,$sql1);
                                if(mysqli_num_rows($result) > 0)
                                    {

                                        while($row = mysqli_fetch_assoc($result))
                                        {
                                            echo '<tr>
                                            <td>'.$row["name1"].'</td>
                                            <td>'.$row["email1"].'</td>
                                            <td>'.$row["address"].'</td>
                                            <td>'.$row["specilization"].'</td>
                                            <td> '.$row["fees"].'</td>
                                            <td>'.$row["contactno"].'</td>';
                                        



                                        }
                                    }
                                    else
                                    {
                                    echo mysqli_error($conn);
                                    }

                                    ?>
                            


                            </tr>
                            
                        </table>
                            
                        </div>
                        <div id="menu2" class="tab-pane fade">
                        <table class="table table-bordered table-responsive">
                            <tr class="warning">
                                        
                                    
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Category</th>
                                    <th>Fees</th>
                                    <th>Contact</th>
                                    
                            </tr>
                            
                                <?php
                                $sql1 = "SELECT * from facility";
                                $result = mysqli_query($conn,$sql1);
                                if(mysqli_num_rows($result) > 0)
                                    {

                                        while($row = mysqli_fetch_assoc($result))
                                        {
                                            echo '<tr>
                                            <td>'.$row["name1"].'</td>
                                            <td>'.$row["email"].'</td>
                                            <td>'.$row["address"].'</td>
                                            <td>'.$row["cat"].'</td>
                                            <td> '.$row["rate"].'</td>
                                            <td>'.$row["phone"].'</td>';
                                        



                                        }
                                    }
                                    else
                                    {
                                    echo mysqli_error($conn);
                                    }

                                    ?>
                            


                            </tr>
                            
                        </table>        
                        </div>
                        <div id="menu3" class="tab-pane fade">
                            
                        <table class="table table-bordered table-responsive">
                            <tr class="warning">
                                        
                                    <th>Id</th>
                                    <th>Specification</th>
                                    <th>Doctor Id</th>
                                    <th>User Id</th>
                                    <th>Fees</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>User Status</th>
                                    <th>Doctor Status</th>
                                    
                                    
                            </tr>
                            
                                <?php
                                $i =0;
                                $sql1 = "SELECT * from appointment";
                                $result = mysqli_query($conn,$sql1);
                                if(mysqli_num_rows($result) > 0)
                                    {

                                        while($row = mysqli_fetch_assoc($result))
                                        {
                                            $i=$i+1;
                                            echo '<tr>
                                            <td>'.$i.'</td>
                                            <td>'.$row["specs"].'</td>
                                            <td>'.$row["doctorid"].'</td>
                                            <td>'.$row["userid"].'</td>
                                            <td>'.$row["fees"].'</td>
                                            <td> '.$row["date1"].'</td>
                                            <td> '.$row["time1"].'</td>
                                            <td> '.$row["userstatus"].'</td>
                                            <td> '.$row["doctorstatus"].'</td>';
                                        



                                        }
                                    }
                                    else
                                    {
                                    echo mysqli_error($conn);
                                    }

                                    ?>
                            


                            </tr>
                            
                        </table>
                        </div>
                        <div id="menu4" class="tab-pane fade">
                            
                        <table class="table table-bordered table-responsive">
                            <tr class="warning">
                                        
                                    <th>Id</th>
                                    <th>Facility</th>
                                    <th>Vendor Id</th>
                                    <th>User Id</th>
                                    <th>Fees</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>User Status</th>
                                    <th>Vendor Status</th>
                                    
                                    
                            </tr>
                            
                                <?php
                                $i =0;
                                $sql1 = "SELECT * from fac_appoint";
                                $result = mysqli_query($conn,$sql1);
                                if(mysqli_num_rows($result) > 0)
                                    {

                                        while($row = mysqli_fetch_assoc($result))
                                        {
                                            $i=$i+1;
                                            echo '<tr>
                                            <td>'.$i.'</td>
                                            <td>'.$row["facility"].'</td>
                                            <td>'.$row["facid"].'</td>
                                            <td>'.$row["userid"].'</td>
                                            <td>'.$row["fees"].'</td>
                                            <td> '.$row["date1"].'</td>
                                            <td> '.$row["time1"].'</td>
                                            <td> '.$row["userstatus"].'</td>
                                            <td> '.$row["facstatus"].'</td>';
                                        



                                        }
                                    }
                                    else
                                    {
                                    echo mysqli_error($conn);
                                    }

                                    ?>
                            


                            </tr>
                            
                        </table>
                                 
                        </div>
                        
                    </div>
            </div>
            
    </body>
</html>