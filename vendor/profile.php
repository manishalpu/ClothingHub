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
        <div class="card">
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
                    $sql1 = "SELECT * from facility where id ='$id'";
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
    </div>
    <div class="col-sm-12">

        <div class="card">
        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse1">My Appointments</a>
                </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table table-bordered table-responsive">
                        <tr class="warning">
                                    
                                <th>Id</td>
                                <th>Name</th>
                                <th>Specilization</th>
                                <th>Fees</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Status</th>
                        </tr>
                        
                            <?php
                            $sql2 = "SELECT users.fullname as fname,fac_appoint.*  from fac_appoint join users on users.id=fac_appoint.userid where fac_appoint.facid='$id'";
                            $result = mysqli_query($conn,$sql2);
                            if(mysqli_num_rows($result) > 0)
                                {
                                    
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                        
                                        $status = '';
                                        if(($row['userstatus']==1) && ($row['facstatus']==1))  
                                        {
                                        // echo "Active";
                                        $status = "Active";
                                        }
                                        if(($row['userstatus']==0) && ($row['facstatus']==1))  
                                        {
                                        // echo "Cancel by You";
                                        $status = "Cancelled By You";

                                        }

                                        if(($row['userstatus']==1) && ($row['facstatus']==0))  
                                        {
                                        //echo "Cancel by Doctor";
                                        $status = "Cancelled By Doctor";
                                        }
                                        
                                    
                                        echo '<tr><td>'.$row["id"].'</td>
                                        <td>'.$row["fname"].'</td>
                                        <td>'.$row["facility"].'</td>
                                        <td>'.$row["fees"].'</td>
                                        <td>'.$row["date1"].'</td>
                                        <td> '.$row["time1"].'</td>
                                        <td>'.$status.'</td></tr>';
                                    



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
                <div class="panel-footer">Panel Footer</div>
                </div>
            </div>
        </div>
            
        </div>
    </div>




</body>
</html>