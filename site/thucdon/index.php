<?php
    require '../../global.php';
    require '../../dao/product.php';
    require '../../dao/category.php';
    extract($_REQUEST);
    $hot_categories = get_hot_categories(3);
    $categories = get_categories(null);
    $products = get_products(9, 1, null);

    $category_filter = null;
    $min_price_filter = null;
    $max_price_filter = null;
    $is_discount_filter = null;
    $limit = null;
    $page_filter = null;
    if(isset($category_id)) {
        $category_filter = $category_id;
    }
    if(isset($min_price)) {
        $min_price_filter  = $min_price;
    }
    if(isset($max_price)) {
        $max_price_filter = $max_price;
    }
    if(isset($is_discount)) {
        $is_discount_filter = $is_discount;
    }
    if(isset($page)) {
        $page_filter = $page;
        $limit = 9;
    }
    
    $product = get_product_by_filter($category_filter, $min_price_filter, $max_price_filter, null, null, null, null);
    $VIEW_NAME = "thucdon/thucdon.php";
    require '../layout.php';  
?>