<?php
    require '../../global.php';
    require '../../dao/user.php';
    extract($_REQUEST);
    $user = get_user_by_id($_SESSION['LOGGED_IN_ADMIN_ID']);
    extract($user);
    require 'taikhoan.php';  
?>