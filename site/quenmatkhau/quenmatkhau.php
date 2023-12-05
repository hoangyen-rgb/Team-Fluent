<style>
       main>div {
        display: grid;
        grid-template-columns: 3fr 4fr;
        width: 850px;
        height: 650px;
        box-shadow: 0 0 5px gray;
        border-radius: 10px;
        margin: 50px auto;
        overflow: hidden;
    }

    main>div>img {
        width: 100%;
        height: 100%;
    }
    main>div>div {
        
        height: 100%;
    }
    main>div>div>form {
        display: flex;
        flex-direction: column;
        padding: 30px;
        gap: 10px;
        color: #4E4E4E;
        font-size: 0.9em;
        height: 100%;
        position: relative;
    }
    main>div>div>form>h2, main>div>div>form>p {
        color: var(--lightblack);
    }
    main>div>div>form>p {
            margin-bottom: 30px;
        }
    main>div>div>form>label {
        margin-top: 10px;
        border-bottom: 1px solid var(--gray);
        padding: 0px 10px;
        cursor: pointer;
    }
    main>div>div>form>label>p {
        margin-left: 20px;
    }
    main>div>div>form>label>div {
        display: grid;
        grid-template-columns: 20px auto;
        height: 40px;
    }
    main>div>div>form>label>div>* {
        align-self: center;
    }

    main>div>div>form>label input {
        padding-left: 15px;
        width: 1fr;
        border: none;
        outline: none;
        background-color: transparent;
    }
    main>div>div>form>label input::placeholder {
        color: var(--gray);
    }
    main>div>div>form>.submit{
        padding: 10px;
        width: 200px;
        border-radius: 5px;
        background-color: #c34439;
        color: white;
        border: none;
        font-size: 1.3em;
        position: absolute;
        bottom: 100px;
        left: 50%;
        transform: translate(-50%, 0%);
        cursor: pointer;
    }

    main>div>div>form>a{
        position: absolute;
        right: 30px;
        bottom: 30px;
    }
    main .inline-content>* {
        display: inline;
        vertical-align: middle;
        font-size: 20px;
        font-weight: 600;
    }
    .input-message {
        height: 20px;
        color: var(--red);
    }
</style>
<?php
if (isset($_POST['nutguiyeucau'])) {
    $email = $_POST['email'];
    $conn = new PDO("mysql:host=localhost; dbname=chickcuisine; charset=utf8", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM user WHERE Email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$email]);
    $count = $stmt->rowCount();

    if ($count == 0) {
        echo '<script>alert("Email bạn nhập chưa đăng ký thành viên với chúng tôi");</script>';
    } else {
        $matkhaumoi = substr(md5(rand(0, 999999)), 0, 8);
        $matkhaumoi_2 = password_hash($matkhaumoi, PASSWORD_DEFAULT);
        $sql = "UPDATE user SET password = ? WHERE Email = ?";
        $stmt = $conn->prepare($sql); // Tạo 1 prepare stement
        $stmt->execute([$matkhaumoi_2, $email]);
        // echo "Đã cập nhật";
        GuiMatKhauMoi($email,$matkhaumoi); 
    }
}

?>
<?php
function GuiMatKhauMoi($email,$matkhaumoi) {
    require "../../PHPMailer-master/src/PHPMailer.php"; 
    require "../../PHPMailer-master/src/SMTP.php"; 
    require '../../PHPMailer-master/src/Exception.php'; 
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);//true:enables exceptions
    try {
        $mail->SMTPDebug = 0; //0,1,2: chế độ debug
        $mail->isSMTP();  
        $mail->CharSet  = "utf-8";
        $mail->Host = 'smtp.gmail.com';  //SMTP servers
        $mail->SMTPAuth = true; // Enable authentication
        $mail->Username = 'nhatmminh25@gmail.com'; // SMTP username
        $mail->Password = 'zbyhbakwniwmfzbc';   // SMTP password
        $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
        $mail->Port = 465;  // port to connect to                
        $mail->setFrom('nhatmminh25@gmail.com', 'Chick Cuisine' ); 
        $mail->addAddress($email); 
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = 'Thử gửi lại mật khẩu';
        $noidungthu = "<p>Bạn nhận được thư này, do bạn hoặc ai đó yêu cầu mật khẩu mới từ Chick Cuisine<br>
        Mật khẩu mới của bạn là: {$matkhaumoi}</p>"; 
        $mail->Body = $noidungthu;
        $mail->smtpConnect( array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
        ));
        $mail->send();
        echo '<script>alert("Đã gửi thông tin thành công! Vui lòng kiểm tra email! ");</script>';
    } catch (Exception $e) {
            echo "Gửi email thất bại. Lỗi: {$mail->ErrorInfo}";
        
    }

}
?>
<main>
    <div>
        <img src="<?=$IMAGE_DIR?>/login-image.png" alt>
        <div>
            <form method="post" onsubmit="return check_form();">
                <h2>Quên mật khẩu</h2>
                <p>Mời bạn nhập gmail để lấy mật khẩu!</p>
                <label>
                    <p class="input-message" id="email-message"></p>
                    <div>
                        <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path id="Vector" d="M13.5 0H1.5C0.675 0 0.00749999 0.632812 0.00749999 1.40625L0 9.84375C0 10.6172 0.675 11.25 1.5 11.25H13.5C14.325 11.25 15 10.6172 15 9.84375V1.40625C15 0.632812 14.325 0 13.5 0ZM13.2 2.98828L7.8975 6.09609C7.6575 6.23672 7.3425 6.23672 7.1025 6.09609L1.8 2.98828C1.6125 2.87578 1.5 2.68594 1.5 2.48203C1.5 2.01094 2.0475 1.72969 2.475 1.97578L7.5 4.92188L12.525 1.97578C12.9525 1.72969 13.5 2.01094 13.5 2.48203C13.5 2.68594 13.3875 2.87578 13.2 2.98828Z" fill="#BDBDBD"/>
                        </svg>                                
                        <input required class="email" type="text" placeholder="Email" name="email" value="<?php if(isset($email)==true) echo $email?>">
                    </div>
                </label>
                
                <p style="width: fit-content; align-self:self-end; font-weight: 600; cursor:pointer;"><a href="<?=$SITE_URL?>/dangnhap">Đăng Nhập?</a></p>
                <input class="submit" type="submit" name="nutguiyeucau" value="Xác nhận">
                <a href="<?=$SITE_URL?>/dangky" class="inline-content">
                    <p>Chuyển sang đăng ký</p>
                    <svg width="12" height="15" viewBox="0 0 25 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path id="Vector" d="M0 9.44109C0 8.65897 0.671578 8.02493 1.5 8.02493H19.0739L12.4998 2.47157C11.8824 1.95004 11.8297 1.05476 12.3821 0.471886C12.9345 -0.110989 13.8828 -0.160724 14.5002 0.360802L24.0001 8.38571C24.3181 8.65437 24.4999 9.0382 24.4999 9.44109C24.4999 9.844 24.3181 10.2278 24.0001 10.4965L14.5002 18.5214C13.8828 19.0429 12.9345 18.9933 12.3821 18.4104C11.8297 17.8275 11.8824 16.9321 12.4998 16.4106L19.0739 10.8573H1.5C0.671578 10.8573 0 10.2232 0 9.44109Z" fill="#4E4E4E"/>
                    </svg>                                                                   
                </a>
            </form>
        </div>
    </div>
</main>
<script>
    function check_form() {
        var email_input = document.querySelector(".email");
        var pass_input = document.querySelector(".pass");

        var email_message = document.querySelector("#email-message");
        var pass_message = document.querySelector("#pass-message");

        var format_email = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        
        if (format_email.test(email_input.value) == false) {
            email_message.innerHTML = "Email không đúng!";
            email_input.value = "";
            return false;
        }
        return true;

    }
</script>