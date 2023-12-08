<?php
if (isset($_SESSION['LOGGED_IN_ADMIN_ID'])) {
    header("location: thongke");
} else {

    require 'dangnhap.php';
}
?>