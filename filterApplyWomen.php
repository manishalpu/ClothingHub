<?php
    session_start();
    $category = [];
    $priceL = -1;
    $priceH = -1;
    if(isset($_POST['categoryList']) && !empty($_POST['categoryList'])){
        $category =  $_POST['categoryList'];
    }
    if(isset($_POST['priceL']) && !empty($_POST['priceL'])){
        $priceL = 'price >= '.$_POST['priceL'];
    }
    if(isset($_POST['priceH']) && !empty($_POST['priceH']) ){
        $priceH = 'price <= '.$_POST['priceH'];
    }
    $count = count($category);
    $whereCondition = -1;
    if($count > 0){
        $whereCondition = '( categoryId = '.$category[0];
        for($i = 1; $i < $count; $i++){
            $whereCondition = $whereCondition.' or categoryId = '.$category[$i];
        }
        $whereCondition = $whereCondition.' )';
    }
    if($priceL != -1){
        if($whereCondition != -1){
            $whereCondition = $whereCondition.' and '.$priceL;
        }
        else{
            $whereCondition = $priceL;
        }
    }
    if($priceH != -1){
        if($whereCondition != -1){
            $whereCondition = $whereCondition.' and '.$priceH;
        }
        else{
            $whereCondition = $priceH;
        }
    }
    $_SESSION['femaleWhereFilter'] = $whereCondition;

    echo "
        <script>
            window.location.href='./womens.php';
        </script>
    ";
?>