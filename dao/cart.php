<?php
    // require_once 'pdo.php';

    // function add_product_to_cart($id, $price, $userid) {
    //     create_cart($userid);
    //     $cart = get_cart_by_user_id($userid);
    //     $row = pdo_query("SELECT * FROM CartDetail WHERE ProductId = $id");
    //     if (empty($row)) {
    //         $sql = "INSERT INTO cartdetail (Quantity, Price, ProductId, CartId) VALUES (?,?,?,?)";
    //         return pdo_execute($sql, 1, $price, $id, $cart["Id"]);
    //     } else {
    //         $sql = "UPDATE CartDetail SET Quantity = Quantity + 1 WHERE ProductId = ? AND CartId = ?";
    //         return pdo_execute($sql, $id, $cart["Id"]);
    //     }
        
    // }

    // function create_cart($userid) {
    //     $sql = "INSERT IGNORE INTO Cart (UserId) VALUES (?)";
    //     return pdo_execute($sql, $userid);
    // }

    // function get_cart_by_user_id($id) {
    //     $sql = "SELECT * FROM Cart WHERE UserId = $id";
    //     return pdo_query_one($sql);
    // }

    // function get_cartdetail_by_user_id($id) {
    //     $cart = get_cart_by_user_id($id);
    //     $cartid = $cart["Id"];
    //     $sql = "SELECT * FROM CartDetail WHERE CartId = $cartid";
    //     return pdo_query($sql);
    // }
    
