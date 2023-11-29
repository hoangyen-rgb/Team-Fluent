<?php
    require '../../global.php';
    require '../../dao/category.php';
    require '../../dao/product.php';
    extract($_REQUEST);
    $category = get_category_by_id($id);

    $VIEW_NAME = "suadanhmuc/suadanhmuc.php";
    require '../layout.php';  
?>