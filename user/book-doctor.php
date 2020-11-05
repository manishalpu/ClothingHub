<?php
session_start();
include('../include/config.php');
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
function getdoctor1(val) {
	$.ajax({
	type: "POST",
	url: "get-doctor.php",
	data:'specilizationid='+val,
	success: function(data){
		$("#doctor").html(data);
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
		$("#fees").html(data);
	}
	});
}
</script>
</head>
<body>
    <div class="row">
        <div class="col-md-12">
            
            <div class="row margin-top-30">
                <div class="col-lg-8 col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <h5 class="panel-title">Book Appointment</h5>
                        </div>
                        <div class="panel-body">
                            <p style="color:red;"><?php echo htmlentities($_SESSION['msg1']);?>
                            	
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
                                    <select name="doctor" class="form-control" id="doctor" onChange="getfee1(this.value);" required="required">
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
            
            </div>
        </div>
    </div>
</body>
</html>
    