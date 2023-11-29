<?php
    require_once 'pdo.php';
    
    function insert_order($total_price, $note, $date, $status, $user_id, $recipient_name, $recipient_phonenumber, $recipient_address) {
        $sql = "INSERT INTO `order` (TotalPrice, Note, Date, Status, UserId, RecipientName, RecipientPhoneNumber, RecipientAddress) VALUES (?, ?, ?, ?, ?,  ?, ?, ?)";
        return pdo_execute($sql, $total_price, $note, $date, $status, $user_id, $recipient_name, $recipient_phonenumber, $recipient_address);
    }

    function insert_order_detail($quantity, $price, $order_id, $product_id) {
        if(get_order_by_id($order_id) != null) {
            $sql = "INSERT INTO orderdetail (Quantity, Price, OrderId, ProductId) VALUES (?, ?, ?, ?)";
            return pdo_execute($sql, $quantity, $price, $order_id, $product_id);
        }
    }

    function get_order_by_id($order_id) {
        $sql = "SELECT * FROM `order` WHERE Id = $order_id";
        return pdo_query_one($sql);
    }

    function get_order_by_status(...$status) {
        $statusPlaceholders = implode(', ', $status);
        $sql = "SELECT * FROM `order` WHERE Status IN ($statusPlaceholders)";
        return pdo_query($sql);
    }

    function get_order_detail_by_order_id($order_id) {
        $sql = "SELECT * FROM orderdetail WHERE OrderId = $order_id";
        return pdo_query($sql);
    }
?>