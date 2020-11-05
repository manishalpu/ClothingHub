<?php
include('../include/config.php');
session_start();
$id = $_SESSION['id'];

if(isset($_POST['someAction1']))
{
    $id1 = $_POST['someAction1'];
    
    $sql6 = "UPDATE fac_appoint set userstatus='0' where id=$id1";
    if(mysqli_query($conn,$sql6))
    {
        unset($_POST['someAction1']);
        echo '<script>alert("Booking Cancelled");
              window.location.href="profile1.php";
              </script>';
    }
    else
    {
        echo mysqli_error($conn);
    }
    

    

}