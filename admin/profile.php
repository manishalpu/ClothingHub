<?php
include('../include/config.php');
session_start();
$id = $_SESSION['id'];
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



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 
</head>
<body>
    <a href="logout.php">Logout</a>
    <div class="col-sm-12">
        Doctors
            <div class="card">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse1">View Doctors</a>
                    </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                    <div class="panel-body">
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
                    
                </table></div>
                    <div class="panel-footer">Panel Footer</div>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </div>
    <div class="col-sm-12">
        
            <div class="card">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse2">View Vendors</a>
                    </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body"><table class="table table-bordered table-responsive">
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
                    
                </table></div>
                    <div class="panel-footer">Panel Footer</div>
                    </div>
                </div>
            </div>

                
            </div>
        </div>
    </div>
    <div class="col-sm-12">
            <div class="card">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse3">View Users</a>
                    </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body">
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
                    
                </table></div>
                    <div class="panel-footer">Panel Footer</div>
                    </div>
                </div>
            </div>

                
                
            </div>
        </div>
    </div>

    <div class="col-sm-12">
            <div class="card">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse4">Doctor's Appointment</a>
                    </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                    <div class="panel-body">
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
                    
                </table></div>
                    <div class="panel-footer">Panel Footer</div>
                    </div>
                </div>
            </div>

                
                <!-- <table class="table table-bordered table-responsive">
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
                    
                </table> -->
            </div>
        </div>
    </div>


    <div class="col-sm-12">
            <div class="card">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse5">Vendor's Appointment</a>
                    </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse">
                    <div class="panel-body">
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
                    
                </table></div>
                    <div class="panel-footer">Panel Footer</div>
                    </div>
                </div>
            </div>

                
            </div>
        </div>
    </div>


    <!-- <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapse1">Collapsible panel</a>
            </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse">
            <div class="panel-body">Panel Body</div>
            <div class="panel-footer">Panel Footer</div>
            </div>
        </div>
    </div> -->

    





</body>
</html>