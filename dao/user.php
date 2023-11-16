<?php
<<<<<<< HEAD
    require_once 'pdo.php';

    function get_user_by_id($user_id) {
        $sql = "SELECT * FROM user WHERE Id = $user_id";
        return pdo_query_one($sql);
    }
=======
    // require_once 'pdo.php';

    // function get_user_by_id($id) {
    //     $sql = "SELECT * FROM users WHERE Id = $id";
    //     return pdo_query($sql);
    // }
>>>>>>> 852cb5c37a5d9637d549861ccb6bba0bc10d0f9f
?>