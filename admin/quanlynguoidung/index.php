<?php
    require '../../global.php';
    require '../../dao/user.php';
    extract($_REQUEST);
    $users = get_users();

    $VIEW_NAME = "quanlynguoidung/quanlynguoidung.php";
    require '../layout.php';  
?>