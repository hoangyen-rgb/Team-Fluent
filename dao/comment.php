<?php
    require_once 'pdo.php';

    function get_comment_by_product_id($product_id) {
        $sql = "SELECT * FROM comment WHERE ProductId = $product_id";
        return pdo_query($sql);
    }
?>