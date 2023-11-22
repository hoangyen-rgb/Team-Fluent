<?php
    require '../../global.php';
    require '../../dao/product.php';
    require '../../dao/cart.php';
    extract($_REQUEST);
    $cart = null;
<<<<<<< HEAD
    if (isset($cart_product_id) && isset($cart_product_quantity)) {
        if ($LOGGED_IN_USER_ID == null) {
            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = array();
            }
=======
    if ($LOGGED_IN_USER_ID == null) {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
    }
    if (isset($cart_product_id) && isset($cart_product_quantity)) {

>>>>>>> 7f6ae9d171763ced637dbc7928b237a4de64354d
            
            $product_to_cart = array(
                'Id' => $cart_product_id,
                'Quantity' => $cart_product_quantity
            );
    
            $productExists = false;
            foreach ($_SESSION['cart'] as &$item) {
                if ($item['Id'] == $product_to_cart['Id']) {
                    $item['Quantity'] += $product_to_cart['Quantity']; 
                    $productExists = true;
                    break;
                }
            }
            if (!$productExists) {
                $_SESSION['cart'][] = $product_to_cart;
            }
        } else {
            // thêm sp, tăng số lượng sp vào giỏ hàng user đã đăng nhập

        }
    }

    if ($LOGGED_IN_USER_ID == null) {
        $cart = $_SESSION['cart'];
    } else {
        $cart = get_cart_by_user_id($LOGGED_IN_USER_ID);
    }
    $VIEW_NAME = "giohang/giohang.php";
    require '../layout.php';  
?>