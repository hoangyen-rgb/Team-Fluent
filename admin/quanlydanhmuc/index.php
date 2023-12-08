<?php
    require '../../global.php';
    require '../../dao/category.php';
    extract($_REQUEST);
    if (isset($add_category)) {
        $targetFile = $_SERVER['DOCUMENT_ROOT'] . "/content/image/" . basename($_FILES["category_image"]["name"]);
        move_uploaded_file($_FILES["category_image"]["tmp_name"], $targetFile);
        insert_category($category_name, basename($_FILES["category_image"]["name"]));

    }

    if (isset($edit_category)) {
        if (file_exists($_FILES['category_image']['tmp_name']) || is_uploaded_file($_FILES['category_image']['tmp_name'])) {
            $targetFile = $_SERVER['DOCUMENT_ROOT'] . "/content/image/" . basename($_FILES["category_image"]["name"]);
            move_uploaded_file($_FILES["category_image"]["tmp_name"], $targetFile);
            update_category($category_id, $category_name, basename($_FILES["category_image"]["name"]));
        } else {
            update_category($category_id, $category_name, "");
        }
    }
    if (isset($remove_category)) {
        remove_category($remove_category);
        header('location: '.$ADMIN_URL.'/quanlydanhmuc');
    }
    $categories = get_categories();
    $VIEW_NAME = "quanlydanhmuc/quanlydanhmuc.php";
    require '../layout.php';  
?>