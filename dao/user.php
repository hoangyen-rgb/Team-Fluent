<?php
    require_once 'pdo.php';

    /**
     * Lấy người dùng theo id
     * 
     * @param int $user_id mã người dùng
     * 
     * @return mixed 1 người dùng
     */
    function get_user_by_id($user_id) {
        $sql = "SELECT * FROM user WHERE Id = $user_id";
        return pdo_query_one($sql);
    }
?>