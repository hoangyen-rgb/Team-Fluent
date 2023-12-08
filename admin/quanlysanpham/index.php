<?php
    require '../../global.php';
    require '../../dao/category.php';
    require '../../dao/product.php';
    extract($_REQUEST);
    if (isset($add_product)) {
        $is_special = isset($is_special) ? 1 : 0;
        $targetFile = $_SERVER['DOCUMENT_ROOT'] . "/content/image/" . basename($_FILES["product_image"]["name"]);
        move_uploaded_file($_FILES["product_image"]["tmp_name"], $targetFile);
        insert_product($product_name, basename($_FILES["product_image"]["name"]), $product_description, $product_price, $product_cost, $product_discount ? $product_discount : 0, 0, $is_special, $product_category);

    }

    if (isset($edit_product)) {
        $is_special = isset($is_special) ? 1 : 0;
        if (file_exists($_FILES['product_image']['tmp_name']) || is_uploaded_file($_FILES['product_image']['tmp_name'])) {
            $targetFile = $_SERVER['DOCUMENT_ROOT'] . "/content/image/" . basename($_FILES["product_image"]["name"]);
            move_uploaded_file($_FILES["product_image"]["tmp_name"], $targetFile);
            update_product($product_id, $product_name, basename($_FILES["product_image"]["name"]), $product_description, $product_price, $product_cost, $product_discount ? $product_discount : 0, $is_special, $product_category);
        } else {
            update_product($product_id, $product_name, "", $product_description, $product_price, $product_cost, $product_discount ? $product_discount : 0, $is_special, $product_category);
        }
    }
    if (isset($remove_product)) {
        remove_product($remove_product);
        header('location: '.$ADMIN_URL.'/quanlysanpham');
    }
    
    $products =  get_products();
    
    $VIEW_NAME = "quanlysanpham/quanlysanpham.php";
    require '../layout.php';  
?>