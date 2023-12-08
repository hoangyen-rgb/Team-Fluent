<?php
    require '../../global.php';
    require '../../dao/order.php';
    require '../../dao/product.php';
    extract($_REQUEST);
    $tab = isset($tab) ? $tab : "new";
    $orders = null;
    switch ($tab) {
        case "cancelled": $orders = get_order_by_status(5); break;
        case "delivering": $orders = (get_order_by_status(3) + get_order_by_status(4)); break;
        case "preparing": $orders = get_order_by_status(2); break;
        default: $orders = get_order_by_status(1); break;
    }
    $order_id = isset($order_id) ? $order_id : ($orders ? $orders[0]['Id'] : null);
    $order_focus = $order_id ? get_order_by_id($order_id) : null;
    $VIEW_NAME = "quanlydonhang/quanlydonhang.php";
    require '../layout.php';  
?>