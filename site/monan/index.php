<?php
    require '../../global.php';
    require '../../dao/product.php';
    require '../../dao/category.php';
    require '../../dao/comment.php';
    require '../../dao/user.php';
    extract($_REQUEST);
    $comment_form = false;
    // Xử lí hiện thị form bình luận
    if (isset($_SESSION['LOGGED_IN_USER_ID'])) {
        if (bought_product($_SESSION['LOGGED_IN_USER_ID'],$_GET['id'] ) && !commented($_SESSION['LOGGED_IN_USER_ID'],$_GET['id'] )) {
            $comment_form = true;
        }
    }

    if(!(isset($_GET['id']) || $_GET['id'])){ 
        header("location: ".$SITE_URL."/trangchu");
    }
    $filter = isset($filter) ? ($filter > 5 ? null : $filter) : null;
    $comments = get_comment_by_product_id($_GET['id'], $filter);
    $product = get_product_by_id($_GET['id']);
    $similar_products = get_similar_products_by_product_id($_GET['id'], 8, 1);
    increase_product_views($_GET['id']);
    $VIEW_NAME = "monan/monan.php";
    require '../layout.php';  
?>