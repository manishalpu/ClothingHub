<?php
    session_start();
    $gender = $_GET['gender'];
    if($gender == 1){
        $_SESSION['maleWhereFilter'] = 'categoryId = '.$_GET['category'];
        echo "
            <script>
                window.location.href='./mens.php';
            </script> ";
    }
    else{
        $_SESSION['femaleWhereFilter'] = 'categoryId = '.$_GET['category'];
        echo "
            <script>
                window.location.href='./womens.php';
            </script> ";
    }

?>