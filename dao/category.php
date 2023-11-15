<?php
    // require_once 'pdo.php';

    // function get_categories($limit = null) {
    //     $sql = "SELECT * FROM category".($limit == null ? "" : " LIMIT $limit");
    //     return pdo_query($sql);
    // }

    // function get_featured_categories($limit = null) {       
    //     $sql = "SELECT category.Id, category.Name, category.Image, SUM(product.Views) as total_views FROM product JOIN category on product.CategoryId = category.Id GROUP BY category.Id ORDER BY total_views DESC".($limit == null ? "" : " LIMIT $limit");
    //     return pdo_query($sql);
    // }

    // function get_total_products($id) {
    //     $sql = "SELECT COUNT(product.Id) as count FROM product WHERE CategoryId = $id GROUP BY product.CategoryId";
    //     return pdo_query_value($sql);
    // }

    // function get_category_by_id($id) {
    //     $sql = "SELECT * FROM category WHERE Id = $id";
    //     return pdo_query_one($sql);
    // }

    // function get_category_by_product_id($id) {
    //     $sql = "SELECT category.Id FROM category JOIN product ON product.CategoryId = category.Id  WHERE product.Id = $id";
    //     $row = pdo_query_one($sql);
    //     $category_id = $row["Id"];
    //     return get_category_by_id($category_id);
    // }
    // function get_category_name_by_product_id($id) {
    //     $category = get_category_by_product_id($id);
    //     return $category["Name"];
    // }
?>
