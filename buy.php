<?php
    session_start();
    include('./include/config.php');
    buy($conn);
    function buy($conn){
        if(!isset($_SESSION['id']) || $_SESSION['id'] == ''){
            echo "<script>
            alert('Please Login Before Buying".$_SESSION['id']."');
            window.location.href='./index.php';
            </script>";
            return;
        }
        if(!isset($_SESSION['ClothId']) || $_SESSION['ClothId'] == ''){
            echo "<script>
            alert('Please try again.');
            window.location.href='./index.php';
            </script>";
            return;
        }
        if(isset($_POST['available']) && (int)$_POST['available'] <= 0){
            echo "<script>
            alert('Please try again after some time currently out of stock');
            window.location.href='./index.php';
            </script>";
            return;
        }
        $query = "insert into orders(userId, clothId) values(".$_SESSION['id'].','.$_SESSION['ClothId'].')';
        $result = mysqli_query($conn,$query);
        if($result){
            $avai = ((int)$_POST['available']) - 1;
            $updateQuery = "update clothing set available_pieces = ".$avai." where id = ".$_SESSION['ClothId'].";";
            $updateResult = mysqli_query($conn, $updateQuery);
            if($updateResult){
                unset($_SESSION['ClothId']);
                echo "<script>
                alert('Purchased Successful, Product will be delivered on your address.');
                window.location.href='./index.php';
                </script>";
            }
        }
        else{
            echo "<script>
            alert('Failed to make Purchase, Please try again in some time');
            window.location.href='./index.php';
            </script>";
        }
        echo $query;
    }
?>