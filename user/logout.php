<?php
session_start();



session_unset();

if(empty($_SESSION['id']))
{

    echo "<script>
    alert('Successfully logged Out');
    window.location.href='../login.php';
    </script>";

}
else
{
    echo $_SESSION['id'];
}

