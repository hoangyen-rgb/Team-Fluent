<?php
    require '../../global.php';
    require '../../dao/category.php';
    extract($_REQUEST);
    $categories = get_categories();
    $VIEW_NAME = "themsanpham/themsanpham.php";
    require '../layout.php';  
?>