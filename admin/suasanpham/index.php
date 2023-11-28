<?php
    require '../../global.php';
    require '../../dao/product.php';
    require '../../dao/category.php';
    extract($_REQUEST);
    $product = get_product_by_id($id);
    $categories = get_categories();
    $VIEW_NAME = "suasanpham/suasanpham.php";
    require '../layout.php';  
?>