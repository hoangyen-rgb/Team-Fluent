<?php
require '../../global.php';
require '../../dao/cart.php';
if(isset($_SESSION['LOGGED_IN_USER_ID'])) {
    echo get_product_count_by_user_id($_SESSION['LOGGED_IN_USER_ID']);
} else {
    echo (isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0);
}
?>