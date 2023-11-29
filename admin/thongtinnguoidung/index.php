<?php
    require '../../global.php';
    require '../../dao/user.php';
    extract($_REQUEST);
    $user = get_user_by_id($id);
    $VIEW_NAME = "thongtinnguoidung/thongtinnguoidung.php";
    require '../layout.php';  
?>