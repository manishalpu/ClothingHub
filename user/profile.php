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
  
  
  $id = $_SESSION['id'];

  $sql3 = "SELECT * FROM users WHERE id='$id'";
        
  $result =mysqli_query($conn,$sql3);
  if(mysqli_num_rows($result) > 0)
  {
    while($row = mysqli_fetch_assoc($result))
    {
      echo $row['id'];
      $_SESSION['id'] = $row['id'];
      echo $row['fullname'];

    }
  }
  else
  {
    echo mysqli_error($conn);
  }



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
  <script>
function getdoctor(val) {
	$.ajax({
	type: "POST",
	url: "get-facility.php",
	data:'specilizationid='+val,
	success: function(data){
		$("#doctor").html(data);
	}
	});
}
</script>	


<script>
function getfee(val) {
	$.ajax({
	type: "POST",
	url: "get-facility.php",
	data:'doctor='+val,
	success: function(data){
		$("#fees").html(data);
	}
	});
}
</script>
<script>
function getdoctor1(val) {
	$.ajax({
	type: "POST",
	url: "get-doctor.php",
	data:'specilizationid='+val,
	success: function(data){
		$("#doctor1").html(data);
	}
	});
}
</script>	


<script>
function getfee1(val) {
	$.ajax({
	type: "POST",
	url: "get-doctor.php",
	data:'doctor='+val,
	success: function(data){
		$("#fees1").html(data);
	}
	});
}
</script>

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
                        <th>City</th>
                        <th>Gender</th>
                        
                </tr>
                
                    <?php
                    $sql1 = "SELECT * from users where id ='$id'";
                    $result = mysqli_query($conn,$sql1);
                    if(mysqli_num_rows($result) > 0)
                        {

                            while($row = mysqli_fetch_assoc($result))
                            {
                                echo '<tr>
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
    </div>
    <div class="col-sm-12">
        <div class="card">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse1">Facility Appointment's</a>
                    </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                    <div class="panel-body">
                        <table class="table table-bordered table-responsive">
                            <tr class="warning">
                                        
                                    <th>Id</td>
                                    <th>Name</th>
                                    <th>Facilty</th>
                                    <th>Fees</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Status</th>
                            </tr>
                            
                                <?php
                                $sql1 = "SELECT facility.name1 as fac_name,fac_appoint.*  from fac_appoint join facility on facility.id=fac_appoint.facid where fac_appoint.userid='$id'";
                                $result = mysqli_query($conn,$sql1);
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
                                            <td>'.$row["fac_name"].'</td>
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

    <div class="col-sm-12">
        <div class="card">
        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse2">Doctor's Appointment</a>
                </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table table-bordered table-responsive">
                        <tr class="warning">
                                    
                                <th>Id</td>
                                <th>Name</th>
                                <th>Doctor</th>
                                <th>Fees</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Status</th>
                        </tr>
                        
                            <?php
                            $sql1 = "SELECT doctors.name1 as doc_name,appointment.*  from appointment join doctors on doctors.id=appointment.doctorid where appointment.userid='$id'";
                            $result = mysqli_query($conn,$sql1);
                            if(mysqli_num_rows($result) > 0)
                                {

                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                        $status = '';
                                        if(($row['userstatus']==1) && ($row['doctorstatus']==1))  
                                        {
                                        // echo "Active";
                                        $status = "Active";
                                        }
                                        if(($row['userstatus']==0) && ($row['doctorstatus']==1))  
                                        {
                                        // echo "Cancel by You";
                                        $status = "Cancelled By You";

                                        }

                                        if(($row['userstatus']==1) && ($row['doctorstatus']==0))  
                                        {
                                        //echo "Cancel by Doctor";
                                        $status = "Cancelled By Doctor";
                                        }
                                        
                                    
                                        echo '<tr><td>'.$row["id"].'</td>
                                        <td>'.$row["doc_name"].'</td>
                                        <td>'.$row["specs"].'</td>
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


    <div class="col-md-12 ">
        <div class="card">
        
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5 class="panel-title">
                        <a data-toggle="collapse" href="#collapse3">Book Facility</a></h5>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">
                            
                                
                            <form role="form" name="book"  action="facilitydata.php" method="post" >
                                


                                <div class="form-group">
                                    <label for="DoctorSpecialization">
                                        Facility 
                                    </label>
                                    <select name="Doctorspecialization" class="form-control" onChange="getdoctor(this.value);" required="required">
                                        <option value="">Select Facilty</option>
                                            <?php 
                                            $ret="SELECT * from faccat";
                                            $result = mysqli_query($conn,$ret);
                                            while($row=mysqli_fetch_assoc($result))
                                            {
                                            ?>
                                        <option value="<?php echo htmlentities($row['facility']);?>">
                                            <?php echo htmlentities($row['facility']);?>
                                        </option>
                                        <?php } ?>
                                        
                                    </select>
                                </div>




                                <div class="form-group">
                                    <label for="doctor">
                                        Select Vendor
                                    </label>
                                    <select name="doctor" class="form-control" id="doctor" onChange="getfee(this.value);" required="required">
                                    <option value="">Select Vendor</option>
                                    </select>
                                </div>





                                <div class="form-group">
                                    <label for="consultancyfees">
                                        Charge
                                    </label>
                                    <select name="fees" class="form-control" id="fees"  readonly>
                                        
                                        </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="AppointmentDate">
                                        Date
                                    </label>
                                    <input class="form-control datepicker" name="appdate"  type="date" required="required" data-date-format="yyyy-mm-dd">

                                </div>
                                
                                <div class="form-group">
                                    <label for="Appointmenttime">
                                
                                    Time
                            
                                    </label>
                                    <input class="form-control" name="apptime"  type="time" required="required">eg : 13:15 (1:15 PM)
                                </div>														
                                
                                <button type="submit" name="submit" class="btn btn-o btn-primary">
                                    Submit
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            
                
        
        </div>
    
    </div>
    

    
    <div class="col-md-12">
        <div class="card">
        
        
            
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5 class="panel-title">
                        <a data-toggle="collapse" href="#collapse4">Book Facility</a></h5>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body">
                            
                                
                            <form role="form" name="book"  action="doctordata.php" method="post" >
                                


                                <div class="form-group">
                                    <label for="DoctorSpecialization">
                                        Facility 
                                    </label>
                                    <select name="Doctorspecialization" class="form-control" onChange="getdoctor1(this.value);" required="required">
                                        <option value="">Select Facilty</option>
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
                                </div>




                                <div class="form-group">
                                    <label for="doctor">
                                        Select Vendor
                                    </label>
                                    <select name="doctor" class="form-control" id="doctor1" onChange="getfee1(this.value);" required="required">
                                    <option value="">Select Vendor</option>
                                    </select>
                                </div>





                                <div class="form-group">
                                    <label for="consultancyfees">
                                        Charge
                                    </label>
                                    <select name="fees" class="form-control" id="fees1"  readonly>
                                        
                                        </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="AppointmentDate">
                                        Date
                                    </label>
                                    <input class="form-control datepicker" name="appdate"  type="date" required="required" data-date-format="yyyy-mm-dd">

                                </div>
                                
                                <div class="form-group">
                                    <label for="Appointmenttime">
                                
                                    Time
                            
                                    </label>
                                    <input class="form-control" name="apptime"  type="time" required="required">eg : 13:15 (1:15 PM)
                                </div>														
                                
                                <button type="submit" name="submit" class="btn btn-o btn-primary">
                                    Submit
                                </button>
                            </form>
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
    </div>   -->

</body>
</html>