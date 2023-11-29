<?php
    require_once 'pdo.php';

    /**
     * Lấy doanh thu
     * 
     * @param string $time_frame khung thời gian 'current': hiện tại, 'previous': trước
     * @param string $interval khoảng thời gian 'day': ngày, 'week': tuần, 'month': tháng
     * 
     * @return int doanh thu
     */
    function get_revenue($time_frame = 'current', $interval = 'day') {
        $dateFunction = 'CURDATE()';
        if ($time_frame === 'previous') {
            $dateFunction = 'DATE_SUB(CURDATE(), INTERVAL 1 ' . strtoupper($interval) . ')';
        }
    
        $sql = "SELECT SUM(TotalPrice) FROM `order` WHERE ";
    
        switch ($interval) {
            case 'month':
                $sql .= "MONTH(`order`.Date) = MONTH($dateFunction)";
                break;
            case 'week':
                $sql .= "WEEK(`order`.Date, 1) = WEEK($dateFunction, 1)";
                break;
            case 'day':
                $sql .= "DATE(`order`.Date) = $dateFunction";
                break;
        }
    
        $sql .= " AND YEAR(`order`.Date) = YEAR($dateFunction) AND `order`.Status = 4";
        return pdo_query_value($sql);
    }

    function get_total_orders($time_frame = 'current', $interval = 'day') {
        $dateFunction = 'CURDATE()';
        if ($time_frame === 'previous') {
            $dateFunction = 'DATE_SUB(CURDATE(), INTERVAL 1 ' . strtoupper($interval) . ')';
        }
        $sql = "SELECT COUNT(*) FROM `order` WHERE ";
        switch ($interval) {
            case 'month':
                $sql .= "MONTH(`order`.Date) = MONTH($dateFunction)";
                break;
            case 'week':
                $sql .= "WEEK(`order`.Date, 1) = WEEK($dateFunction, 1)";
                break;
            case 'day':
                $sql .= "DATE(`order`.Date) = $dateFunction";
                break;
        }
        $sql .= " AND YEAR(`order`.Date) = YEAR($dateFunction) AND `order`.Status = 4";
        return pdo_query_value($sql);
    }

    function get_profit($time_frame = 'current', $interval = 'day') {
        return get_revenue($time_frame, $interval) - get_total_products_cost($time_frame, $interval);
    }

    function get_total_products_cost($time_frame = 'current', $interval = 'day') {
        $dateFunction = 'CURDATE()';
        if ($time_frame === 'previous') {
            $dateFunction = 'DATE_SUB(CURDATE(), INTERVAL 1 ' . strtoupper($interval) . ')';
        }
    
        $sql = "SELECT SUM(product.Cost *orderdetail.Quantity) FROM `order` JOIN orderdetail ON `order`.Id = orderdetail.OrderId JOIN product ON orderdetail.ProductId = product.Id WHERE ";
    
        switch ($interval) {
            case 'month':
                $sql .= "MONTH(`order`.Date) = MONTH($dateFunction)";
                break;
            case 'week':
                $sql .= "WEEK(`order`.Date, 1) = WEEK($dateFunction, 1)";
                break;
            case 'day':
                $sql .= "DATE(`order`.Date) = $dateFunction";
                break;
        }
    
        $sql .= " AND YEAR(`order`.Date) = YEAR($dateFunction) AND `order`.Status = 4";
        return pdo_query_value($sql);
    }
    function get_current_month_revenue_statistic($time_frame = 'current', $interval = 'month') {
        $dateFunction = 'CURDATE()';
        if ($time_frame === 'previous') {
            $dateFunction = 'DATE_SUB(CURDATE(), INTERVAL 1 ' . strtoupper($interval) . ')';
        }
    
        $sql = "SELECT ";
        switch ($interval) {
            case 'month':
                $sql .= "MONTH(`order`.Date) AS Period, ";
                break;
            case 'week':
                $sql .= "WEEK(`order`.Date, 1) AS Period, ";
                break;
            case 'day':
                $sql .= "DATE(`order`.Date) AS Period, ";
                break;
        }
    
        $sql .= "SUM(orderdetail.Quantity * product.Cost) AS TotalCost, SUM(`order`.TotalPrice) AS TotalPrice ";
        $sql .= "FROM `order` ";
        $sql .= "JOIN orderdetail ON `order`.Id = orderdetail.OrderId ";
        $sql .= "JOIN product ON orderdetail.ProductId = product.Id ";
    
        switch ($interval) {
            case 'month':
                $sql .= "WHERE MONTH(`order`.Date) = MONTH($dateFunction) ";
                break;
            case 'week':
                $sql .= "WHERE WEEK(`order`.Date, 1) = WEEK($dateFunction, 1) ";
                break;
            case 'day':
                $sql .= "WHERE DATE(`order`.Date) = $dateFunction ";
                break;
        }
    
        $sql .= "AND YEAR(`order`.Date) = YEAR($dateFunction) AND `order`.Status = 4 ";
        $sql .= "GROUP BY Period ";
    
        $sql .= "UNION SELECT ";
        $sql .= "p AS Period, 0 AS TotalProductCost, 0 AS TotalSales ";
        $sql .= "FROM (SELECT 1 AS p UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5 UNION SELECT 6 UNION SELECT 7 UNION SELECT 8 UNION SELECT 9 UNION SELECT 10 UNION SELECT 11 UNION SELECT 12) AS periods ";
        $sql .= "WHERE ";
    
        switch ($interval) {
            case 'month':
                $sql .= "p NOT IN (SELECT MONTH(`order`.Date) FROM `order` WHERE YEAR(`order`.Date) = YEAR(CURRENT_DATE())) ";
                break;
            case 'week':
                $sql .= "p NOT IN (SELECT WEEK(`order`.Date, 1) FROM `order` WHERE YEAR(`order`.Date) = YEAR(CURRENT_DATE())) ";
                break;
            case 'day':
                $sql .= "p NOT IN (SELECT DATE(`order`.Date) FROM `order` WHERE YEAR(`order`.Date) = YEAR(CURRENT_DATE())) ";
                break;
        }
    
        $sql .= "ORDER BY Period";
    
        return pdo_query($sql);
    }

    function get_cancelled_orders_count($time_frame = 'current', $interval = 'month') {

        $dateFunction = 'CURDATE()';
        if ($time_frame === 'previous') {
            $dateFunction = 'DATE_SUB(CURDATE(), INTERVAL 1 ' . strtoupper($interval) . ')';
        }
    
        $sql = "SELECT COUNT(Id) FROM `order` WHERE ";
    
        switch ($interval) {
            case 'month':
                $sql .= "MONTH(`order`.Date) = MONTH($dateFunction)";
                break;
            case 'week':
                $sql .= "WEEK(`order`.Date, 1) = WEEK($dateFunction, 1)";
                break;
            case 'day':
                $sql .= "DATE(`order`.Date) = $dateFunction";
                break;
        }
    
        $sql .= " AND YEAR(`order`.Date) = YEAR($dateFunction) AND `order`.Status = 5";
        return pdo_query_value($sql);
    }

    function get_successful_orders_count($time_frame = 'current', $interval = 'month') {
        $dateFunction = 'CURDATE()';
        if ($time_frame === 'previous') {
            $dateFunction = 'DATE_SUB(CURDATE(), INTERVAL 1 ' . strtoupper($interval) . ')';
        }
    
        $sql = "SELECT COUNT(Id) FROM `order` WHERE ";
    
        switch ($interval) {
            case 'month':
                $sql .= "MONTH(`order`.Date) = MONTH($dateFunction)";
                break;
            case 'week':
                $sql .= "WEEK(`order`.Date, 1) = WEEK($dateFunction, 1)";
                break;
            case 'day':
                $sql .= "DATE(`order`.Date) = $dateFunction";
                break;
        }
    
        $sql .= " AND YEAR(`order`.Date) = YEAR($dateFunction) AND `order`.Status = 4";
        return pdo_query_value($sql);
    }

    function get_products_count() {
        $sql = "SELECT COUNT(Id) FROM product";
        return pdo_query_value($sql);
    }

    function get_categories_count() {
        $sql = "SELECT COUNT(Id) FROM category";
        return pdo_query_value($sql);
    }

    function get_users_count() {
        $sql = "SELECT COUNT(Id) FROM user WHERE Role <> 0";
        return pdo_query_value($sql);
    }

    function get_orders_count() {
        $sql = "SELECT COUNT(Id) FROM `order`";
        return pdo_query_value($sql);
    }

    function get_comments_count() {
        $sql = "SELECT COUNT(Id) FROM comment";
        return pdo_query_value($sql);
    }






?>
    
