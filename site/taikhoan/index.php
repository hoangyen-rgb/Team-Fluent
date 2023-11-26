<?php
    require '../../global.php';
    require '../../dao/user.php';
    extract($_REQUEST);
    if (isset($logout)) {
        $_SESSION['LOGGED_IN_USER_ID'] = null;
        header("location: ".$SITE_URL."/trangchu");
    }
    $VIEW_NAME = "taikhoan/taikhoan.php";
    require '../layout.php';  
?>