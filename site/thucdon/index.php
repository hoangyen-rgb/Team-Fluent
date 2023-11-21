<?php
    require '../../global.php';
    require '../../dao/product.php';
    require '../../dao/category.php';
    extract($_REQUEST);
    $hot_categories = get_hot_categories(3);
    $categories = get_categories(null);
    // $_SESSION['category_filter'] = isset($category_id) ? $category_id : (isset($_SESSION['category_filter']) ? $_SESSION['category_filter'] : null);
    // $_SESSION['min_price_filter'] = isset($min_price_filter) ? $min_price_filter : (isset($_SESSION['min_price_filter']) ? $_SESSION['min_price_filter'] : null);
    // $_SESSION['max_price_filter'] = isset($max_price_filter) ? $max_price_filter : (isset($_SESSION['max_price_filter']) ? $_SESSION['max_price_filter'] : null);
    // $_SESSION['is_discount_filter'] = isset($is_discount) ? true : (isset($_SESSION['is_discount_filter']) ? $_SESSION['is_discount_filter'] : false);
    // $_SESSION['page'] = isset($page) ? $page : (isset($_SESSION['page']) ? $_SESSION['page'] : 1);
    // $limit = 9;
    $filter_by_category = isset($category_id) ? $category_id : null;
    $filter_by_min_price = isset($min_price) ? $min_price : null;
    $filter_by_max_price = isset($max_price) ? $max_price : null;
    $filter_by_discount = isset($is_discount) ? ($is_discount == "true" ? true : false) : false;
    $page = isset($page) ? $page : 1;
    $limit = 9;
    $sort = isset($sort_by) ? $sort_by : null;
    $products = get_product_by_filter($filter_by_category, $filter_by_min_price, $filter_by_max_price, $filter_by_discount, $limit, $page, $sort);
    $total_products = get_product_by_filter($filter_by_category, $filter_by_min_price, $filter_by_max_price, $filter_by_discount, null, null, $sort);
    $total_products_count = count($total_products);
    
    $VIEW_NAME = "thucdon/thucdon.php";
    require '../layout.php';  
?>