<?php
include('../include/config.php');
session_start();
$id = $_SESSION['id'];

if(isset($_POST['someAction']))
{
    $id = $_POST['someAction'];
    echo $_POST['someAction'];
    $sql5 = "UPDATE appointment set doctorstatus='0' where id=$id";
    if(mysqli_query($conn,$sql5))
    {
        unset($_POST['someAction']);
        echo '<script>alert("Booking Cancelled");
        
            window.location.href="profile1.php";
            </script>';
    }
    else
    {
        echo mysqli_error($conn);
    }
    



}