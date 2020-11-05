<?php
session_start();
//error_reporting(0);
include('../include/config.php');


if(isset($_POST['submit']))
{
$specilization=$_POST['Doctorspecialization'];
$doctorid=$_POST['doctor'];
$userid=$_SESSION['id'];
$fees=$_POST['fees'];
$appdate=$_POST['appdate'];
$time=$_POST['apptime'];
$userstatus=1;
$docstatus=1;
echo $specilization;
echo $doctorid;
echo $userid;
echo $fees;
echo $appdate;
echo $time;

$sql = "INSERT into appointment(specs,doctorid,userid,fees,date1,time1,userstatus,doctorstatus) values('$specilization','$doctorid','$userid','$fees','$appdate','$time','$userstatus','$docstatus')";
$query=mysqli_query($conn,$sql);
	if($query)
	{
		
        echo "<script>
        alert('Facility Appointment Successfully Fixed');
        window.location.href='profile1.php';
        </script>";
	}
	else
	{
		echo mysqli_error($con);

	}

}
?>
