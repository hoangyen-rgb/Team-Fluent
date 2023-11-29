<?php
    require '../../global.php';
    require '../../dao/category.php';
    require '../../dao/product.php';
    extract($_REQUEST);

    $VIEW_NAME = "themdanhmuc/themdanhmuc.php";
    require '../layout.php';  
?>