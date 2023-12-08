<?php
    require '../../global.php';
    require '../../dao/order.php';
    extract($_REQUEST);
    if (isset($status)) {
        $sql = "UPDATE `order` SET Status = $status WHERE Id = $order_id";
        return pdo_execute($sql);
    }
    if (isset($point)) {
        $sql = "SELECT TotalPrice, UserId FROM `order` WHERE Id = $order_id";
        $row = pdo_query_one($sql);
        extract($row);
        $Point = ceil($TotalPrice/1000);
        $sql = "UPDATE user SET Point = Point + $Point WHERE Id = $UserId";
        return pdo_execute($sql);
    }
?>