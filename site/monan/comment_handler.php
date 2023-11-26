<?php
    require '../../global.php';
    require '../../dao/comment.php';
        // Xử lí gửi bình luận
    extract($_REQUEST);
    if (isset($_SESSION['LOGGED_IN_USER_ID'])) {
        insert_comment($content, $rating, $_SESSION['LOGGED_IN_USER_ID'], $product_id);
    }
?>