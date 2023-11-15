<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChickCuisine</title>
</head>
<!-- css global -->
<style>
    :root {
        --red: #c34439;
        --black: #202020;
        --lightblack: #4E4E4E;
        --gray: #BDBDBD;
        --lightgray: #faf9f8;
        --yellow: #FFB11B;
    }
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        color: var(--black);
    }
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: var(--lightgray);
    }
    a {
        text-decoration: none;
    }
    /* Đường gạch ngang */
    .line {
        border-bottom: 1px solid var(--gray);
        width: 85%;
        margin: 10px auto;
    }
    
</style>
<!-- css header footer --> 
<style>
    header {
        width: 100%;
        padding: 10px 100px;
        background-color: #171717;
        display: inline-grid;
        grid-template-columns: 2fr 350px 4fr 1fr 137px;
        gap: 10px;
        justify-content: space-around;
        align-items: center;
    }
    header>* {
        text-align: center;
    }
    header * {
        font-size: 18px;
    }
    header .logo {
        width: 193px;
    }
    header .menu {
        display: flex;
        justify-content: space-around;
        padding-left: 20px;
    }
    header .menu a {
        color: white;
        margin-right: 20px;
    }
    header .search-box {
        border: 1px solid var(--gray);
        padding: 5px 0px 5px 10px;
        height: 42px;
        border-radius: 21px;
        width: 100%;
        min-width: 150px;
        text-align: left;
    }
    header .search-box>* {
        margin: auto;
        vertical-align: middle;
    }
    header .search-box input {
        outline: none;
        border: none;
        background-color: unset;
        color: white;
        width: 80%;
    }
    header .search-box input::placeholder {
        color: white;
    }
    header .cart {
        text-align: right;
        padding-right: 20px;
    }
    header .cart img {
        height: fit-content;
    }
    header .account {
        text-align: center;
        background-color: var(--red);
        padding: 5px;
        border-radius: 5px;
        width: 137px;
    }
    header .account:hover {
        transform: scale(1.1);
        transition: 0.3s;
        cursor: pointer;
    }
    header .account>* {
        display: inline-block;
        vertical-align: top;
        margin: 0px 5px;
        color: white;
    }
    footer {
        width: 100%;
        margin-top: 200px;
        background-image: url('<?=$IMAGE_DIR?>/background-footer.png');
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        padding: 10px 100px 50px;
    }
    footer .gallery {
        width: 100%;
        position: absolute;
        top: 0px;
        left: 50%;
        transform: translate(-50%, 0);
        z-index: 1;
        display: flex;
        justify-content: space-around;
    }
    footer .gallery img {
        border-radius: 10px;
        width: 1fr;
        height: fit-content;
    }
    footer .about {
        color: var(--lightgray);
        font-size: 20px;
        width: 100%;
        margin: 500px auto 100px;
        text-align: center;
    }
    footer .menu-box {
        border: 1px solid white;
        position: relative;
        width: 100%;
        margin: auto;
        padding: 20px;
        display: grid;
        grid-template-columns: repeat(2, auto);
    }
    footer .logo-footer {
        width: 150px;
        position: absolute;
        top: -50px;
        left: 50%;
        transform: translateX(-50%);
        backdrop-filter: blur(50px);
    }
    footer .footer-menu {
        grid-column: 1 / 2;
        grid-row: 1 / 2;
    }
    footer .footer-menu a {
        text-decoration: none;
        color: white;
        font-size: 20px;
        margin: 0px 10px;
    }
    footer .social-icons {
        vertical-align: middle;
        text-align: right;
        grid-column: 2 / 3;
        grid-row: 1 / 2;
    }
    footer .social-icons>img {
        margin: 0px 5px;
        width: 30px;
    }
    footer .footer-line {
        grid-row: 2 / 3;
        grid-column: 1 / 3;
    }
    footer .more-info {
        grid-column: 1 / 3;
        grid-row: 3 / 4;
        text-align: right;
    }
    footer .more-info ul li {
        color: white;
        display: inline-block;
        margin: 0px 20px;
    }
    @media (max-width: 1300px) {
        footer .gallery img:nth-child(5) {
            display: none;
        }
    }
    @media (max-width: 1050px) {
        footer .gallery img:nth-child(4) {
            display: none;
        }
    }
    @media (max-width: 780px) {
        footer .gallery img:nth-child(3) {
            display: none;
        }
    }
</style>
<body>
    <header>
        <img src="<?=$IMAGE_DIR?>/horizontal-logo-red.png" alt="" class="logo">
        <img src="<?=$IMAGE_DIR?>/logo-red.png" alt="" class="logo" style="display: none;">
        <div class="menu">
            <a href="">Trang chủ</a>
            <a href="">Thực đơn</a>
            <a href="">Giới thiệu</a>
        </div>
        <div class="search-box">
            <img src="<?=$IMAGE_DIR?>/icon/search.png" alt="">
            <input type="text" placeholder="Tìm món">
        </div>
        <a href="" class="cart">
            <img src="<?=$IMAGE_DIR?>/icon/cart.png" alt="">
        </a>
        <div class="account">
            <img src="<?=$IMAGE_DIR?>/icon/user.png" alt="">
            <p>Tài khoản</p>
        </div>
    </header>
    <main><?php require $VIEW_NAME;?></main>
    <footer>
        <div class="gallery">
            <img style="margin-top: -100px;" src="<?=$IMAGE_DIR?>/Image.png" alt="">
            <img style="margin-top: -25px;" src="<?=$IMAGE_DIR?>/Image-1.png" alt="">
            <img style="margin-top: -50px;" src="<?=$IMAGE_DIR?>/Image-2.png" alt="">
            <img style="margin-top: -75px;" src="<?=$IMAGE_DIR?>/Image-3.png" alt="">
            <img style="margin-top: -50px;" src="<?=$IMAGE_DIR?>/Image-4.png" alt="">
        </div>
        <div class="about">
            ChickCuisine tự hào cung cấp những món ăn ngon nhất từ khắp nơi trên thế giới đến ngay tận bàn ăn của bạn. Chúng tôi cam kết về chất lượng và sự hài lòng của khách hàng. Hãy theo dõi chúng tôi trên các trang mạng xã hội để cập nhật thông tin mới nhất và các ưu đãi đặc biệt!
        </div>
        <div class="menu-box">
            <img class="logo-footer" src="<?=$IMAGE_DIR?>/logo-white.png" alt="">
            <div class="footer-menu">
                <a href="">Trang chủ</a>
                <a href="">Thực đơn</a>
                <a href="">Giới thiệu</a>
            </div>
            <div class="social-icons">
                <img src="<?=$IMAGE_DIR?>/icon/Vector.png" alt="">
                <img src="<?=$IMAGE_DIR?>/icon/Vector-1.png" alt="">
                <img src="<?=$IMAGE_DIR?>/icon/Vector-2.png" alt="">
                <img src="<?=$IMAGE_DIR?>/icon/Vector-3.png" alt="">
            </div>
            <div class="line footer-line"></div>
            <div class="more-info">
                <ul>
                    <li>Mở cửa 6h-23h mỗi ngày</li>
                    <li>Tp. Hồ Chí Minh</li>
                    <li>Hotline: 0903252xxx</li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>