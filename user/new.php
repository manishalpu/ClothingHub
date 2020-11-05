<?php
session_start();
include('../include/config.php');
$email = $_POST['email1'];
$pass = $_POST['pass'];
$sql3="SELECT id FROM users WHERE email='$email' AND pass='$pass'";
      
$result =mysqli_query($conn,$sql3);
if(mysqli_num_rows($result) > 0)
{
  while($row = mysqli_fetch_assoc($result))
  {
    echo $row['id'];
    $_SESSION['id'] = $row['id'];
    $_SESSION['usern_name'] = $row['fullname'];

    echo "<script>
    alert('Successfully logged in');
    window.location.href='profile1.php';
    </script>";
  }



}
else
{
  echo "<script>
    alert('Email Password not correct please login Again');
    window.location.href='login.php';
    </script>";
}
  

?> 