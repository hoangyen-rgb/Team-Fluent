<?php
    require '../../global.php';
    require '../../dao/user.php';
    require '../../dao/order.php';
    require '../../dao/product.php';
    extract($_REQUEST);
    $user = get_user_by_id($_SESSION['LOGGED_IN_USER_ID']);
    $orders = get_orders_by_user_id($_SESSION['LOGGED_IN_USER_ID']);
    $order_id = isset($order_id) ? $order_id : ($orders ? $orders[0]['Id'] : null);
    if (isset($logout)) {
        $_SESSION['LOGGED_IN_USER_ID'] = null;
        header("location: ".$SITE_URL."/trangchu");
    }
    if (isset($update_name) && $update_name) {
        update_user_name($_SESSION['LOGGED_IN_USER_ID'], $update_name);
    }
    if (isset($_FILES['update_avatar']) && $_FILES['update_avatar']) {
        $targetFile = $_SERVER['DOCUMENT_ROOT'] . $IMAGE_DIR . "/" . basename($_FILES["update_avatar"]["name"]);
        move_uploaded_file($_FILES["update_avatar"]["tmp_name"], $targetFile);
        update_user_avatar($_SESSION['LOGGED_IN_USER_ID'], basename($_FILES["update_avatar"]["name"]));

    }
    if (isset($update_phone_number) && $update_phone_number) {
        update_user_phone_number($_SESSION['LOGGED_IN_USER_ID'], $update_phone_number);
    }
    if (isset($update_password) && $update_password) {
        if (password_verify($old_password, $user['Password'])) {
            update_user_password($_SESSION['LOGGED_IN_USER_ID'], password_hash($update_password, PASSWORD_DEFAULT));
        } else {
            $MESSAGE = "Mật khẩu cũ không đúng!";
        }
    }
    $VIEW_NAME = "taikhoan/taikhoan.php";

// // PHP update_Name
// if (isset($_POST['capnhat_Name'])) {
//     $table='Name';
//     $data = $_POST['ten_dn'];
//     $id = $_POST['id'];
//     update_user_by_id($id,$table,$data);
//     $_SESSION['user']['Name'] = $data;
// }

// // PHP update_Image
// if (isset($_POST['xacnhan_hinhanh'])) {
//     $table='Avatar';
//     $id = $_POST['id'];
//     $data = $_FILES['image']['name'];
//     $upload_dir = "../../content/image/user/";
//     $upload_file = $upload_dir . $data;
//     update_user_by_id($id,$table,$data);
//     if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
//         if (move_uploaded_file($_FILES['image']['tmp_name'], $upload_file)) {
            
//             echo "Tệp ảnh đã được di chuyển thành công vào thư mục image.";
//         } else {
//             echo "Lỗi khi di chuyển tệp ảnh vào thư mục image.";
//         }
//     } else {
//         echo "Lỗi khi tải lên tệp ảnh.";
//     }
//     header('location: http://localhost/chickcuisine/site/taikhoan/');
// }

// // // PHP update_Phone
// // if(isset($_POST['capnhat_Phone'])){
// //     $table = 'PhoneNumber';
// //     $data = $_POST['phone'];
// //     $id = $_POST['id'];
// //     update_user_by_id($id,$table,$data);
// //     $_SESSION['user']['PhoneNumber'] = $phone;
// // }



// if (isset($_POST['capnhat_Phone'])) {
//     // Get the submitted phone number and user ID
//     $newPhone = $_POST['phone'];
//     $userId = $_POST['id'];

//     // Check if the new phone number is in the correct format
//     $isValidPhone = validate_phone_number($newPhone);

//     if (!$isValidPhone) {
//         $errorMessage = 'Định dạng số điện thoại không hợp lệ.';
//         echo '<script>alert("' . $errorMessage . '");</script>';
//     } else {
//         // Check if the new phone number is already used by another user
//         $existingUser = get_user_by_phonenumber($newPhone);

//         if ($existingUser) {
//             $errorMessage = 'Số điện thoại này đã được người dùng khác sử dụng.';
//             echo '<script>alert("' . $errorMessage . '");</script>';
//         } else {
//             // The new phone number is not taken and in the correct format, proceed with the update
//             $table = 'PhoneNumber';
//             $data = $newPhone;
//             $id = $userId;
//             update_user_by_id($id, $table, $data);
//             $_SESSION['user']['PhoneNumber'] = $newPhone;
//         }
//     }
// }
// function validate_phone_number($phone) {
//     $pattern = '/^\d{10}$/';
//     return preg_match($pattern, $phone);
// }

// // // PHP update_Password
// if (isset($_POST['xacnhan_matkhau'])) {
//     $password_old = $_POST['password_old'];
//     $password_new = $_POST['password_new'];
//     $password_again = $_POST['password_again'];
//     $id = $_POST['id'];
//     $hashed_password = $_SESSION['user']['Password'];

//     if (!password_verify($password_old, $hashed_password)) {
//         echo '<script>alert("Mật khẩu cũ không đúng, Xin vui lòng nhập lại");</script>';
//     } else if ($password_new !== $password_again) {
//         echo '<script>alert("Mật khẩu mới không giống nhau, vui lòng nhập lại");</script>';
//     } else {
//         $new_hashed_password = password_hash($password_new, PASSWORD_DEFAULT);
//         update_user_by_password($new_hashed_password, $id);
//         echo '<script>alert("Cập nhật thành công!");</script>';
//     }
// }
    require '../layout.php';  
?>