<?php
    require '../../global.php';
    require '../../dao/product.php';
    require '../../dao/cart.php';
    require '../../dao/order.php';
    require '../../dao/user.php';
    require '../../dao/voucher.php';
    extract($_REQUEST);
    $_SESSION['message'] = isset($_POST['message']) ? $_SESSION['message'] : false;
    $cart = null;
    if (!isset($_SESSION['LOGGED_IN_USER_ID'])) {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }
        $cart = $_SESSION['cart'];
    } else {
        $cart = get_cart_by_user_id($_SESSION['LOGGED_IN_USER_ID']);
    }
    if (isset($cart_product_id) && isset($cart_product_quantity)) {  
        $product_to_cart = array(
            'Id' => $cart_product_id,
            'Quantity' => $cart_product_quantity
        );
        $productExists = false;
        if (!isset($_SESSION['LOGGED_IN_USER_ID'])) {
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

            $_SESSION['cart'] = array_filter($_SESSION['cart'], function ($item) use ($product_to_cart) {
                return $item['Quantity'] != 0;
            });
        } else {
            add_product_to_cart($cart_product_id, $cart_product_quantity, $_SESSION['LOGGED_IN_USER_ID']);
            $cart = get_cart_by_user_id($_SESSION['LOGGED_IN_USER_ID']);
        }
        
        unset($cart_product_id);
        unset($cart_product_quantity);
    }
    if (isset($paybutton)) {
        
        $user_id = null;
        $note = $note ? $note : null;
        $total_price = 0;
        foreach ($cart as $product_in_cart) {
            $product = get_product_by_id($product_in_cart['Id']);
            extract($product);
            if ($Discount == 0) {
                $total_price += $Price * $product_in_cart['Quantity'];
            } else {
                $total_price += ($Price * (100 - $Discount) / 100)* $product_in_cart['Quantity'];
            }
        }
        
        $voucher = $code ? get_voucher_by_code($code) : null;
        if ($voucher) {
            extract($voucher);
            if ($DiscountPrice) {
                $total_price -= $DiscountPrice;
            } else {
                $total_price -=  $total_price*$DiscountPercentage/100;
            }
        }
        $other_address = isset($other_address) ? true : false;
        $recipientname = null;
        $recipientphonenumber = null;
        $recipientaddress = null;
        if (!$other_address) {
            $recipientname = $orderer_name;
            $recipientphonenumber = $orderer_phone_number;
            $recipientaddress = $orderer_address;
        } else {
            if (isset($recipient_name) && isset($recipient_phone_number) && isset($recipient_address)) {
                $recipientname = $recipient_name;
                $recipientphonenumber = $recipient_phone_number;
                $recipientaddress = $recipient_address;
            }
        }
        $date = date("Y-m-d H:i:s");
        if (isset($_SESSION['LOGGED_IN_USER_ID'])) {
            $user_id = $_SESSION['LOGGED_IN_USER_ID'];
        } else {
            $user_id = insert_user(null, null, null, 0);
        }
        
        $id_order = insert_order($total_price, $note, $date, 1, $user_id, $recipientname, $recipientphonenumber, $recipientaddress);
        foreach ($cart as $product_in_cart) {
            $product = get_product_by_id($product_in_cart['Id']);
            extract($product);
            insert_order_detail($product_in_cart['Quantity'], ($Price * (100 - $Discount) / 100), $id_order, $Id);
        }
        clear_cart_by_user_id($user_id);
        $cart = null;
        $_SESSION['cart'] = null;
        $_SESSION['message'] = true;
        unset($paybutton);
    }
    $VIEW_NAME = "giohang/giohang.php";
    require '../layout.php';  
?>