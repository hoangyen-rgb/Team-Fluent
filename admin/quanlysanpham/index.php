<?php
    require '../../global.php';
    require '../../dao/category.php';
    require '../../dao/product.php';
    extract($_REQUEST);
    $VIEW_NAME = "quanlysanpham/quanlysanpham.php";
    if (isset($add_product)==true ) {
        $special = isset($special) ? 1 : 0;
        move_uploaded_file($_FILES['image']['tmp_name'], "C:/xampp/htdocs/chickcuisine/content/images/".basename($_FILES["image"]["name"]));
        insert_product($name, $_FILES['image']['name'], $description, $price, $discount, 0, $special, $category);

    }

    if (isset($edit_product)==true ) {
        $special = isset($special) ? 1 : 0;
        if (file_exists($_FILES['image']['tmp_name']) || is_uploaded_file($_FILES['image']['tmp_name'])) {
            move_uploaded_file($_FILES['image']['tmp_name'], "C:/xampp/htdocs/chickcuisine/content/images/".basename($_FILES["image"]["name"]));
            update_product($id, $name, $_FILES['image']['name'], $description, $price, $discount, $special, $category);
        } else {
            update_product($id, $name, "", $description, $price, $discount, $special, $category);
        }
        

    }
    
    $products =  get_products();
    
    require '../layout.php';  
?>