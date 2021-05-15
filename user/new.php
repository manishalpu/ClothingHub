<?php
session_start();
include('../include/config.php');
$email = $_POST['email1'];
$pass = $_POST['pass'];

$sql3="SELECT id, customerId FROM users WHERE email='$email' AND password='$pass'";
      
$result = $conn -> query($sql3);

echo $result -> num_rows;

if($result -> num_rows  > 0)
{
  while($row = $result -> fetch_assoc())
  {
    $id = $row['id'];
    $selectCust = "SELECT CustomerName from customers WHERE id = ".$row['customerId'].";";
    $cusResult = $conn -> query($selectCust);
    if($cusResult -> num_rows > 0){
      $_SESSION['id'] = $id;
      while($cusRow = $cusResult -> fetch_assoc()){
        $_SESSION['userName'] = $cusRow['CustomerName'];
        echo "<script>
        alert('Successfully logged in ');
        window.location.href='./../index.php';
        </script>";
      }
    }
    else{
      echo "<script>
      alert('User not found, Please try again');
      window.location.href='login.php';
      </script>";
    }
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