<?php
    // require_once 'pdo.php';

    // function get_products($limit = null) {
    //     $sql = "SELECT * FROM product".($limit == null ? "" : " LIMIT $limit");
    //     return pdo_query($sql);
    // }

    // function get_featured_products($limit = null) {       
    //     $sql = "SELECT * FROM product order by Views DESC".($limit == null ? "" : " LIMIT $limit");
    //     return pdo_query($sql);
    // }

    // function get_discount_products($limit = null) {       
    //     $sql = "SELECT * FROM product order by Discount DESC".($limit == null ? "" : " LIMIT $limit");
    //     return pdo_query($sql);
    // }
    
    // function get_product_by_id($id) {
    //     $sql = "SELECT * FROM product WHERE id = $id";
    //     return pdo_query_one($sql);
    // }

    // function increase_product_views($id) {
    //     $sql = "UPDATE product SET Views = Views + 1 WHERE id = $id"; 
    //     return pdo_execute($sql);
    // }

    // function get_similar_products ($id, $limit = null) {
    //     $product = get_product_by_id($id);
    //     $category_id = $product["CategoryId"];
    //     $sql = "SELECT * FROM product WHERE CategoryId = $category_id".($limit == null ? "" : " LIMIT $limit");
    //     return pdo_query($sql);
    // }
    // function get_product_name_by_id($id) {
    //     $sql = "SELECT Name FROM product WHERE Id = $id";
    //     return pdo_query_value($sql);
    // }
    // function get_product_price_by_id($id) {
    //     $sql = "SELECT Price FROM product WHERE Id = $id";
    //     return pdo_query_value($sql);
    // }
    // function get_product_image_by_id($id) {
    //     $sql = "SELECT Image FROM product WHERE Id = $id";
    //     return pdo_query_value($sql);
    // }

    // function insert_product($name, $image, $description, $price, $discount, $views, $isspecial, $categoryid) {
    //     $sql = "INSERT INTO product (Name, Image, Description, Price, Discount, Views, IsSpecial, CategoryId) VALUES (?,?,?,?,?,?,?,?)";
    //     return pdo_execute($sql, $name, $image, $description, $price, $discount, $views, $isspecial, $categoryid);
    // }

    // function delete_product($id) {
    //     $sql = "DELETE FROM product WHERE Id = $id";
    //     return pdo_execute($sql);
    // }
    // function update_product($id, $name, $image, $description, $price, $discount, $isspecial, $categoryid) {
    //     if ($image == "") {
    //         $sql = "UPDATE product SET Name = ?, Description = ?, Price = ?, Discount = ?, IsSpecial = ?, Categoryid = ? WHERE Id =$id";
    //         return pdo_execute($sql, $name, $description, $price, $discount, $isspecial, $categoryid);
    //     } else {
    //         $sql = "UPDATE product SET Name = ?, Image = ?, Description = ?, Price = ?, Discount = ?, IsSpecial = ?, Categoryid = ? WHERE Id =$id";
    //         return pdo_execute($sql, $name, $image, $description, $price, $discount, $isspecial, $categoryid);
    //     }
    // }
?>