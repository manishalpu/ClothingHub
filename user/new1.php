<?php
session_start();
include('../include/config.php');
$name = $_POST['name1'];
$email = $_POST['email1'];
$pass = $_POST['pass'];
$address = $_POST['address'];
$city = $_POST['city'];
$phone1 = $_POST['phone1'];
echo $email;
echo $pass;

$insertCustomer = "INSERT INTO customers(CustomerName, address, city, phoneNumnber) VALUES('$name', '$address', '$city', '$phone1');";

      
$result =mysqli_query($conn,$insertCustomer);
$custId = mysqli_insert_id($conn);
if($result)
{
    $sql3="INSERT INTO users(email,password,customerId) VALUES('$email', '$pass', '$custId')";
    $result = mysqli_query($conn,$sql3);
    if($result){
        echo "<script>
            alert('Sign Up Successfull please logged in');
            window.location.href='login.php';
            </script>";
    }
    else
    {
        $deleteCus = "DELETE FROM customers where id = '$custId';";
        $result = mysqli_query($conn,$deleteCus);
        echo "<script>
            alert('Sign Up Failed, please try again in some time');
            window.location.href='signup.php';
            </script>";
    }
}
else
{
    
  
    echo "<script>
    alert('Some Error Occured please SignUp Again');
    window.location.href='signup.php';
    </script>";
}
  

?> 