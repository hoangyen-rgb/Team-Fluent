<?php
    require_once 'pdo.php';

    function get_users() {
        $sql = "SELECT * FROM user WHERE Role <> 0";
        return pdo_query($sql);
    }

    /**
     * Lấy người dùng theo id
     * 
     * @param int $user_id mã người dùng
     * 
     * @return mixed 1 người dùng
     */
    function get_user_by_id($user_id) {
        $sql = "SELECT * FROM user WHERE Id = $user_id";
        return pdo_query_one($sql);
    }

    
    function get_user_by_phonenumber($phonenumber) {
        $sql = "SELECT * FROM user WHERE PhoneNumber = ?";
        return pdo_query_one($sql, $phonenumber);
    }
    function get_user_by_email_admin($email) {
        $sql = "SELECT * FROM user WHERE Email = ?";
        return pdo_query_one($sql,$email);
    }
    function get_user_by_email($email) {
        $sql = "SELECT * FROM user WHERE Email = ?";
        return pdo_query_one($sql,$email);
    }

    function get_user_id_by_email($email) {
        $sql = "SELECT user.Id FROM user WHERE Email = ?";
        return pdo_query_value($sql, $email);
    }


    function insert_user($email, $password, $phonenumber, $role) {
        $sql = "INSERT INTO user (Email, Password, PhoneNumber, Role, Point) VALUES (?, ?, ?, ?, 500)";
        return pdo_execute($sql, $email, $password, $phonenumber, $role);
    }

    function update_user_name($id, $name) {
        $sql = "UPDATE user SET Name = ? WHERE Id = $id";
        return pdo_execute($sql, $name);
    }

    function update_user_avatar($id, $avatar) {
        $sql = "UPDATE user SET Avatar = ? WHERE Id = $id";
        return pdo_execute($sql, $avatar);
    }

    function update_user_phone_number($id, $phone_number) {
        $sql = "UPDATE user SET PhoneNumber = ? WHERE Id = $id";
        return pdo_execute($sql, $phone_number);
    }

    function update_user_password($id, $password) {
        $sql = "UPDATE user SET Password = ? WHERE Id = $id";
        return pdo_execute($sql, $password);
    }
?>