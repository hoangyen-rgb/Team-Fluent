<?php
    require_once 'pdo.php';

    function get_user_by_id($user_id) {
        $sql = "SELECT * FROM user WHERE Id = $user_id";
        return pdo_query_one($sql);
    }
?>