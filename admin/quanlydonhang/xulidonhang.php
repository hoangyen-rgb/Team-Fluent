<?php
    require '../../global.php';
    require '../../dao/order.php';
    extract($_REQUEST);
    if (isset($order_id)) {
        $sql = "UPDATE `order` SET Status = $status WHERE Id = $order_id";
        return pdo_execute($sql);
    }
?>