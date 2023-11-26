<?php
    require_once '../../dao/pdo.php';
    $product_id = $_POST['product_id'];
    $sql = "DELETE FROM product WHERE Id = $product_id";
    pdo_execute($sql);
    unset($_POST['product_id']);
?>