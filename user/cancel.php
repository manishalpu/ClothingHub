<?php
include('../include/config.php');
session_start();
$id = $_SESSION['id'];

if(isset($_POST['someAction']))
{
    $id1 = $_POST['someAction'];
    echo $_POST['someAction'];
    $sql5 = "UPDATE appointment set userstatus='0' where id=$id1";
    if(mysqli_query($conn,$sql5))
    {
        unset($_POST['someAction']);
        echo '<script>alert("Booking Cancelled");
        
            window.location.href="login.php";
            </script>';
    }
    else
    {
        echo mysqli_error($conn);
    }
    



}