<?php
    require '../../global.php';
    require '../../dao/product.php';
    require '../../dao/category.php';
    $hot_categories = get_hot_categories(5);
    $categories = get_categories(null);
    $products = get_products(9, 1, null);
    $VIEW_NAME = "thucdon/thucdon.php";
    require '../layout.php';  
?>