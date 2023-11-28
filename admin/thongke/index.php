<?php
    require '../../global.php';
    require '../../dao/statistic.php';
    extract($_REQUEST);
    $time_frame = isset($time_frame) ? $time_frame : 'current';
    $interval = isset($interval) ? $interval : 'month';
    $revenue =  get_revenue($time_frame, $interval);
    $total_orders = get_total_orders($time_frame, $interval);

    $interval_name = $interval == "day" ? "ngày" : ($interval == "week" ? "tuần" : "tháng");
    $time_frame_name = $time_frame == "previous" ? "trước" : "hiện tại";

    $profit = get_profit($time_frame, $interval);
    $total_products_cost = get_total_products_cost($time_frame, $interval);

    $revenue_statistic = get_current_month_revenue_statistic($time_frame, $interval);

    $cancelled_orders_count = get_cancelled_orders_count($time_frame, $interval);
    $successful_orders_count = get_successful_orders_count($time_frame, $interval);
    $cancelled_orders_percentage = ($successful_orders_count + $cancelled_orders_count) != 0 ? $cancelled_orders_count / ($successful_orders_count + $cancelled_orders_count) * 100 : 0;
    $successful_orders_percentage = ($successful_orders_count + $cancelled_orders_count) != 0 ? $successful_orders_count / ($successful_orders_count + $cancelled_orders_count) * 100 : 0;
    // Giá trị tối đa của biểu đồ
    $max_revenue_statistic_value = 200000;
    $VIEW_NAME = "thongke/thongke.php";
    require '../layout.php';  
?>