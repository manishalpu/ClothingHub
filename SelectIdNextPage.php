<?php
    session_start();
    $_SESSION['ClothId'] = $_GET['id'];
    echo "
        <script>
            window.location.href='./clothDetails.php';
        </script> ";

?>