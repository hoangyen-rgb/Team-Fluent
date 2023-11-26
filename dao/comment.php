<?php
    require_once 'pdo.php';

    /**
     * Lấy bình luận của sản phẩm
     * 
     * @param int $product_id mã sản phẩm
     * 
     * @return array danh sách bình luận
     */
    function get_comment_by_product_id($product_id) {
        $sql = "SELECT * FROM comment WHERE ProductId = $product_id";
        return pdo_query($sql);
    }

    function insert_comment($content, $rating, $user_id, $product_id) {
        $sql = "INSERT INTO comment (Content, Rating, Time, UserId, ProductId) VALUES (?, ?, NOW(), ?, ?)";
        return pdo_execute($sql, $content, $rating, $user_id, $product_id);
    }
    function bought_product($user_id, $product_id) {
        $sql = "SELECT user.Id AS UserId, user.Name AS UserName, product.Id AS ProductId, product.Name AS ProductName FROM user JOIN `order` ON user.Id = `order`.UserId  JOIN orderdetail ON `order`.Id = orderdetail.OrderId JOIN product ON orderdetail.ProductId = product.Id WHERE user.Id = $user_id AND product.Id = $product_id AND `order`.Status = 4";
        $row = pdo_query($sql);
        return ($row ? true : false);
    }
    function commented($user_id, $product_id) {
        $sql = "SELECT * FROM comment WHERE UserId = $user_id AND ProductId = $product_id";
        $row = pdo_query($sql);
        return ($row ? true : false);
    }
?>