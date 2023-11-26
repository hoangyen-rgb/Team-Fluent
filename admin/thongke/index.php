<?php
    require '../../global.php';
    require '../../dao/statistic.php';
    extract($_REQUEST);
    $time_frame = isset($time_frame) ? $time_frame : 'current';
    $interval = isset($interval) ? $interval : 'month';
    $revenue =  get_revenue($time_frame, $interval);
    $total_orders = get_total_orders($time_frame, $interval);

    $profit = get_profit($time_frame, $interval);
    $total_products_cost = get_total_products_cost();

    $revenue_statistic = get_current_month_revenue_statistic();

    $cancelled_orders_count = get_cancelled_orders_count();
    $successful_orders_count = get_successful_orders_count();
    $cancelled_orders_percentage = $cancelled_orders_count / ($successful_orders_count + $cancelled_orders_count) * 100;
    $successful_orders_percentage = $successful_orders_count / ($successful_orders_count + $cancelled_orders_count) * 100;

    $VIEW_NAME = "thongke/thongke.php";
    require '../layout.php';  
?>