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
        
        color: var(--lightblack);
    }
    a {
        text-decoration: none;
    }
    /* Đường gạch ngang */
    .line {
        border-bottom: 1px solid var(--gray);
        width: 100%;
        margin: 10px auto;
    }
    .whitediv {
        background-color: white;
        border: 1px solid var(--gray);
        box-shadow: 0px 0px 5px var(--gray);
        border-radius: 10px;
            overflow: hidden;
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
        /* justify-content: space-around; */
        /* padding-left: 20px; */
        
    }

    header .menu a {
        color: white;
        width: 100%;
    }
    header .menu a svg {
       display: none;
    }
    header .menu a:nth-child(4) {
       display: none;
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
        position: absolute;
        top: 0px; 
        left:8.5%;
        z-index: 1;
        display: flex;
        justify-content: space-around;
    }
    footer .gallery img {
        border-radius: 10px;
        height: fit-content;
        margin-right:3%
        
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
    @media screen and (max-width: 720px){
        main{
            padding: 0px 15px !important;
        }
        header > img{
            width: 120px !important;
            margin-bottom: 8%;
        }
        footer .menu-box > .logo-footer{
            width: 110px !important;
            margin-top: 6%;

        }
        header{
            padding: 10px 25px  !important;
            grid-template-columns:auto auto auto auto auto;
            gap: 5px;
        }
        .search-an{
            display: block !important;
        }
        header .search-box{
            position: absolute;
            width: 50%;
            top: 75px;
            left:25%;
            display: none;
        }
        .search-box.ghim-search{
            display: block;
            z-index: 3;
        }
        header .menu {
            margin: 0 !important;
            position: absolute;
            top:59px !important;
            background-color: #202020;
            display: grid;
            grid-template-columns: auto;
            z-index: 2;
            padding: 0 !important;
            width: 45%;
            left: -100%;
        }
        .menu.open{
            left: 0;
        }
        header .menu a svg {
            margin-left: 15%;
            width: 25px;
            margin-right: 10%;
            display: block;
            
        }
        header .menu a:hover{
            background-color: #c34439;
            width: 100%; 
            
        }
        header .menu a:nth-child(4){
            display: block;
        }
        header .menu a{
            display: flex!important;
            padding: 20px 0 !important;
            width: 100%;
            transition: transform 0.5s ease-in-out;
            align-items: center !important;
            
        }
        header .cart{
            padding-right:0px !important;
        }
        header .iconmenu {
            display: block !important;
        }
        header .account{
            background-color: black;
            padding: 1px !important;
            width: 100% !important;
        }
        header .account p{
            display: none;
        }

        footer{
            padding: 10px 25px  !important;
        }
        footer .gallery {
        left:0px;
        }

        footer .gallery > img {
            width: 30% !important;

        }
        footer .gallery img:nth-child(1){
            margin-left: 3%;
        }
        footer .gallery img:nth-child(3),
        footer .gallery img:nth-child(4){
            display: none;
        }
        footer .about{
            margin: 80% auto 100px !important;
        }
        footer .about >*{
            display: none;
            
        }
        .footer-menu {
            position: absolute !important;
            top: 0;
        }
        footer .footer-menu a{
            display: none;

        }
        footer .iconmenu {
            display: block !important;
            margin-top: 5%;
        }
        footer .logo-footer img{
            width: 89px !important;
            /* height: 34px; */
        }
        footer .more-info ul li:nth-child(1){
            margin-right: 0;
        }
        
        footer .more-info li:nth-child(2),li:nth-child(3){
            display: none !important;
        }
        
        /* Responsive main */
    }

</style>
<body>
    <header>
        <div class="iconmenu" style="display: none;"><img src="<?=$IMAGE_DIR?>/icon/more.png" alt=""></div>
        <img src="<?=$IMAGE_DIR?>/horizontal-logo-red.png" alt="" class="logo">
        <div class="menu" id="menu">
            <a href="<?=$SITE_URL?>/trangchu"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none">
            <path d="M12.3335 2H10.6668C10.4828 2 10.3335 2.14924 10.3335 2.33333V2.37261L12.6668 4.23927V2.33333C12.6668 2.14924 12.5176 2 12.3335 2Z" fill="white"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.16675 6.33333C7.16675 5.87309 7.53988 5.5 8.00008 5.5C8.46035 5.5 8.83341 5.87309 8.83341 6.33333C8.83341 6.7936 8.46035 7.16667 8.00008 7.16667C7.53988 7.16667 7.16675 6.7936 7.16675 6.33333Z" fill="white"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8335 7.30679L14.3545 7.72359C14.5702 7.89605 14.8848 7.86112 15.0573 7.64545C15.2298 7.42985 15.1948 7.11519 14.9792 6.94265L9.5619 2.60887C8.64889 1.87843 7.3515 1.87843 6.43844 2.60887L1.02117 6.94265C0.805535 7.11519 0.770575 7.42985 0.943082 7.64545C1.11558 7.86112 1.43023 7.89605 1.64586 7.72359L2.16685 7.30679V14.1665H1.33352C1.05737 14.1665 0.833515 14.3903 0.833515 14.6665C0.833515 14.9426 1.05737 15.1665 1.33352 15.1665H14.6668C14.943 15.1665 15.1668 14.9426 15.1668 14.6665C15.1668 14.3903 14.943 14.1665 14.6668 14.1665H13.8335V7.30679ZM6.16685 6.33312C6.16685 5.3206 6.98763 4.49979 8.00016 4.49979C9.0127 4.49979 9.8335 5.3206 9.8335 6.33312C9.8335 7.34565 9.0127 8.16645 8.00016 8.16645C6.98763 8.16645 6.16685 7.34565 6.16685 6.33312ZM8.0331 8.83312C8.47636 8.83312 8.85823 8.83305 9.16409 8.87419C9.49183 8.91825 9.80603 9.01765 10.0608 9.27245C10.3157 9.52732 10.415 9.84145 10.4591 10.1693C10.4976 10.4559 10.5 10.8095 10.5002 11.2178C10.5002 11.2451 10.5002 11.2725 10.5002 11.3002V14.1665H9.50016V11.3331C9.50016 10.8476 9.49909 10.5337 9.46803 10.3025C9.4389 10.0856 9.39183 10.0177 9.35376 9.97959C9.31569 9.94152 9.24769 9.89445 9.03083 9.86525C8.79956 9.83419 8.48569 9.83312 8.00016 9.83312C7.51463 9.83312 7.20076 9.83419 6.96956 9.86525C6.75269 9.89445 6.68469 9.94152 6.64663 9.97959C6.60856 10.0177 6.56149 10.0856 6.53233 10.3025C6.50124 10.5337 6.50018 10.8476 6.50018 11.3331V14.1665H5.50018V11.3002C5.50015 10.857 5.50014 10.4751 5.54125 10.1693C5.58532 9.84145 5.68469 9.52732 5.93952 9.27245C6.19435 9.01765 6.50853 8.91825 6.8363 8.87419C7.1421 8.83305 7.52403 8.83312 7.96729 8.83312H8.0331Z" fill="white"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.16675 6.33333C7.16675 5.87309 7.53988 5.5 8.00008 5.5C8.46035 5.5 8.83341 5.87309 8.83341 6.33333C8.83341 6.7936 8.46035 7.16667 8.00008 7.16667C7.53988 7.16667 7.16675 6.7936 7.16675 6.33333Z" fill="white"/>
            </svg>Trang chủ</a>
            <a href="<?=$SITE_URL?>/thucdon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none">
            <path d="M12.3335 2H10.6668C10.4828 2 10.3335 2.14924 10.3335 2.33333V2.37261L12.6668 4.23927V2.33333C12.6668 2.14924 12.5176 2 12.3335 2Z" fill="white"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.16675 6.33333C7.16675 5.87309 7.53988 5.5 8.00008 5.5C8.46035 5.5 8.83341 5.87309 8.83341 6.33333C8.83341 6.7936 8.46035 7.16667 8.00008 7.16667C7.53988 7.16667 7.16675 6.7936 7.16675 6.33333Z" fill="white"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8335 7.30679L14.3545 7.72359C14.5702 7.89605 14.8848 7.86112 15.0573 7.64545C15.2298 7.42985 15.1948 7.11519 14.9792 6.94265L9.5619 2.60887C8.64889 1.87843 7.3515 1.87843 6.43844 2.60887L1.02117 6.94265C0.805535 7.11519 0.770575 7.42985 0.943082 7.64545C1.11558 7.86112 1.43023 7.89605 1.64586 7.72359L2.16685 7.30679V14.1665H1.33352C1.05737 14.1665 0.833515 14.3903 0.833515 14.6665C0.833515 14.9426 1.05737 15.1665 1.33352 15.1665H14.6668C14.943 15.1665 15.1668 14.9426 15.1668 14.6665C15.1668 14.3903 14.943 14.1665 14.6668 14.1665H13.8335V7.30679ZM6.16685 6.33312C6.16685 5.3206 6.98763 4.49979 8.00016 4.49979C9.0127 4.49979 9.8335 5.3206 9.8335 6.33312C9.8335 7.34565 9.0127 8.16645 8.00016 8.16645C6.98763 8.16645 6.16685 7.34565 6.16685 6.33312ZM8.0331 8.83312C8.47636 8.83312 8.85823 8.83305 9.16409 8.87419C9.49183 8.91825 9.80603 9.01765 10.0608 9.27245C10.3157 9.52732 10.415 9.84145 10.4591 10.1693C10.4976 10.4559 10.5 10.8095 10.5002 11.2178C10.5002 11.2451 10.5002 11.2725 10.5002 11.3002V14.1665H9.50016V11.3331C9.50016 10.8476 9.49909 10.5337 9.46803 10.3025C9.4389 10.0856 9.39183 10.0177 9.35376 9.97959C9.31569 9.94152 9.24769 9.89445 9.03083 9.86525C8.79956 9.83419 8.48569 9.83312 8.00016 9.83312C7.51463 9.83312 7.20076 9.83419 6.96956 9.86525C6.75269 9.89445 6.68469 9.94152 6.64663 9.97959C6.60856 10.0177 6.56149 10.0856 6.53233 10.3025C6.50124 10.5337 6.50018 10.8476 6.50018 11.3331V14.1665H5.50018V11.3002C5.50015 10.857 5.50014 10.4751 5.54125 10.1693C5.58532 9.84145 5.68469 9.52732 5.93952 9.27245C6.19435 9.01765 6.50853 8.91825 6.8363 8.87419C7.1421 8.83305 7.52403 8.83312 7.96729 8.83312H8.0331Z" fill="white"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.16675 6.33333C7.16675 5.87309 7.53988 5.5 8.00008 5.5C8.46035 5.5 8.83341 5.87309 8.83341 6.33333C8.83341 6.7936 8.46035 7.16667 8.00008 7.16667C7.53988 7.16667 7.16675 6.7936 7.16675 6.33333Z" fill="white"/>
            </svg>Thực đơn</a>
            <a href="<?=$SITE_URL?>/gioithieu"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none">
            <path d="M12.3335 2H10.6668C10.4828 2 10.3335 2.14924 10.3335 2.33333V2.37261L12.6668 4.23927V2.33333C12.6668 2.14924 12.5176 2 12.3335 2Z" fill="white"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.16675 6.33333C7.16675 5.87309 7.53988 5.5 8.00008 5.5C8.46035 5.5 8.83341 5.87309 8.83341 6.33333C8.83341 6.7936 8.46035 7.16667 8.00008 7.16667C7.53988 7.16667 7.16675 6.7936 7.16675 6.33333Z" fill="white"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8335 7.30679L14.3545 7.72359C14.5702 7.89605 14.8848 7.86112 15.0573 7.64545C15.2298 7.42985 15.1948 7.11519 14.9792 6.94265L9.5619 2.60887C8.64889 1.87843 7.3515 1.87843 6.43844 2.60887L1.02117 6.94265C0.805535 7.11519 0.770575 7.42985 0.943082 7.64545C1.11558 7.86112 1.43023 7.89605 1.64586 7.72359L2.16685 7.30679V14.1665H1.33352C1.05737 14.1665 0.833515 14.3903 0.833515 14.6665C0.833515 14.9426 1.05737 15.1665 1.33352 15.1665H14.6668C14.943 15.1665 15.1668 14.9426 15.1668 14.6665C15.1668 14.3903 14.943 14.1665 14.6668 14.1665H13.8335V7.30679ZM6.16685 6.33312C6.16685 5.3206 6.98763 4.49979 8.00016 4.49979C9.0127 4.49979 9.8335 5.3206 9.8335 6.33312C9.8335 7.34565 9.0127 8.16645 8.00016 8.16645C6.98763 8.16645 6.16685 7.34565 6.16685 6.33312ZM8.0331 8.83312C8.47636 8.83312 8.85823 8.83305 9.16409 8.87419C9.49183 8.91825 9.80603 9.01765 10.0608 9.27245C10.3157 9.52732 10.415 9.84145 10.4591 10.1693C10.4976 10.4559 10.5 10.8095 10.5002 11.2178C10.5002 11.2451 10.5002 11.2725 10.5002 11.3002V14.1665H9.50016V11.3331C9.50016 10.8476 9.49909 10.5337 9.46803 10.3025C9.4389 10.0856 9.39183 10.0177 9.35376 9.97959C9.31569 9.94152 9.24769 9.89445 9.03083 9.86525C8.79956 9.83419 8.48569 9.83312 8.00016 9.83312C7.51463 9.83312 7.20076 9.83419 6.96956 9.86525C6.75269 9.89445 6.68469 9.94152 6.64663 9.97959C6.60856 10.0177 6.56149 10.0856 6.53233 10.3025C6.50124 10.5337 6.50018 10.8476 6.50018 11.3331V14.1665H5.50018V11.3002C5.50015 10.857 5.50014 10.4751 5.54125 10.1693C5.58532 9.84145 5.68469 9.52732 5.93952 9.27245C6.19435 9.01765 6.50853 8.91825 6.8363 8.87419C7.1421 8.83305 7.52403 8.83312 7.96729 8.83312H8.0331Z" fill="white"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.16675 6.33333C7.16675 5.87309 7.53988 5.5 8.00008 5.5C8.46035 5.5 8.83341 5.87309 8.83341 6.33333C8.83341 6.7936 8.46035 7.16667 8.00008 7.16667C7.53988 7.16667 7.16675 6.7936 7.16675 6.33333Z" fill="white"/>
            </svg>Giới thiệu</a>
            <a href="<?=$SITE_URL?>/lienhe"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none">
            <path d="M12.3335 2H10.6668C10.4828 2 10.3335 2.14924 10.3335 2.33333V2.37261L12.6668 4.23927V2.33333C12.6668 2.14924 12.5176 2 12.3335 2Z" fill="white"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.16675 6.33333C7.16675 5.87309 7.53988 5.5 8.00008 5.5C8.46035 5.5 8.83341 5.87309 8.83341 6.33333C8.83341 6.7936 8.46035 7.16667 8.00008 7.16667C7.53988 7.16667 7.16675 6.7936 7.16675 6.33333Z" fill="white"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8335 7.30679L14.3545 7.72359C14.5702 7.89605 14.8848 7.86112 15.0573 7.64545C15.2298 7.42985 15.1948 7.11519 14.9792 6.94265L9.5619 2.60887C8.64889 1.87843 7.3515 1.87843 6.43844 2.60887L1.02117 6.94265C0.805535 7.11519 0.770575 7.42985 0.943082 7.64545C1.11558 7.86112 1.43023 7.89605 1.64586 7.72359L2.16685 7.30679V14.1665H1.33352C1.05737 14.1665 0.833515 14.3903 0.833515 14.6665C0.833515 14.9426 1.05737 15.1665 1.33352 15.1665H14.6668C14.943 15.1665 15.1668 14.9426 15.1668 14.6665C15.1668 14.3903 14.943 14.1665 14.6668 14.1665H13.8335V7.30679ZM6.16685 6.33312C6.16685 5.3206 6.98763 4.49979 8.00016 4.49979C9.0127 4.49979 9.8335 5.3206 9.8335 6.33312C9.8335 7.34565 9.0127 8.16645 8.00016 8.16645C6.98763 8.16645 6.16685 7.34565 6.16685 6.33312ZM8.0331 8.83312C8.47636 8.83312 8.85823 8.83305 9.16409 8.87419C9.49183 8.91825 9.80603 9.01765 10.0608 9.27245C10.3157 9.52732 10.415 9.84145 10.4591 10.1693C10.4976 10.4559 10.5 10.8095 10.5002 11.2178C10.5002 11.2451 10.5002 11.2725 10.5002 11.3002V14.1665H9.50016V11.3331C9.50016 10.8476 9.49909 10.5337 9.46803 10.3025C9.4389 10.0856 9.39183 10.0177 9.35376 9.97959C9.31569 9.94152 9.24769 9.89445 9.03083 9.86525C8.79956 9.83419 8.48569 9.83312 8.00016 9.83312C7.51463 9.83312 7.20076 9.83419 6.96956 9.86525C6.75269 9.89445 6.68469 9.94152 6.64663 9.97959C6.60856 10.0177 6.56149 10.0856 6.53233 10.3025C6.50124 10.5337 6.50018 10.8476 6.50018 11.3331V14.1665H5.50018V11.3002C5.50015 10.857 5.50014 10.4751 5.54125 10.1693C5.58532 9.84145 5.68469 9.52732 5.93952 9.27245C6.19435 9.01765 6.50853 8.91825 6.8363 8.87419C7.1421 8.83305 7.52403 8.83312 7.96729 8.83312H8.0331Z" fill="white"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.16675 6.33333C7.16675 5.87309 7.53988 5.5 8.00008 5.5C8.46035 5.5 8.83341 5.87309 8.83341 6.33333C8.83341 6.7936 8.46035 7.16667 8.00008 7.16667C7.53988 7.16667 7.16675 6.7936 7.16675 6.33333Z" fill="white"/>
            </svg>Liên hệ</a>
        </div>
        <div class="search-an" style="display: none;">
            <img src="<?=$IMAGE_DIR?>/icon/search.png" alt="">
        </div>
        <div class="search-box">
            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path id="Vector" d="M8.02421 0C12.4559 0 16.0484 3.62885 16.0484 8.10526C16.0484 9.94489 15.4417 11.6414 14.4193 13.0017L20.4695 19.1132C20.8968 19.5448 20.8968 20.2446 20.4695 20.6763C20.081 21.0687 19.4732 21.1043 19.0448 20.7833L18.9221 20.6763L12.8717 14.5649C11.525 15.5977 9.84544 16.2105 8.02421 16.2105C3.59256 16.2105 0 12.5817 0 8.10526C0 3.62885 3.59256 0 8.02421 0ZM8.02421 2.21053C4.80119 2.21053 2.18842 4.84969 2.18842 8.10526C2.18842 11.3608 4.80119 14 8.02421 14C11.2472 14 13.86 11.3608 13.86 8.10526C13.86 4.84969 11.2472 2.21053 8.02421 2.21053Z" fill="white"/>
            </svg>                
            <input type="text" placeholder="Tìm món">
        </div>
        <a href="<?=$SITE_URL?>/giohang" class="cart">
            <svg width="30" height="30" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.851191 0C0.381095 0 0 0.368234 0 0.822466C0 1.2767 0.381095 1.64493 0.851191 1.64493H1.26947C1.6495 1.64493 1.9835 1.88836 2.0879 2.24145L4.78713 11.3699C5.10033 12.4292 6.10232 13.1595 7.24244 13.1595H15.0201C16.0642 13.1595 17.0032 12.5452 17.391 11.6084L19.9008 5.54571C20.348 4.46522 19.5244 3.28986 18.3202 3.28986H4.16842L3.72478 1.78955C3.41157 0.7303 2.40958 0 1.26947 0H0.851191Z" fill="white"/>
                <path d="M7.66075 19.7391C9.07105 19.7391 10.2143 18.6344 10.2143 17.2717C10.2143 15.9091 9.07105 14.8043 7.66075 14.8043C6.25045 14.8043 5.10718 15.9091 5.10718 17.2717C5.10718 18.6344 6.25045 19.7391 7.66075 19.7391Z" fill="white"/>
                <path d="M14.4702 19.7391C15.8805 19.7391 17.0238 18.6344 17.0238 17.2717C17.0238 15.9091 15.8805 14.8043 14.4702 14.8043C13.0599 14.8043 11.9166 15.9091 11.9166 17.2717C11.9166 18.6344 13.0599 19.7391 14.4702 19.7391Z" fill="white"/>
            </svg>
            <div id="cart-count">
                <p></p>
            </div>      
        </a>
        <!-- check nếu đã đăng nhập, chuyển sang trang tài khoảng, chưa đăng nhập, chuyển sang đăng ký -->
        <div class="account">
            <svg width="16" height="20" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.75 7.5C10.9926 7.5 12 8.50735 12 9.75C12 11.4241 11.3115 12.7654 10.1818 13.6722C9.06987 14.5647 7.57962 15 6 15C4.42038 15 2.93013 14.5647 1.81823 13.6722C0.688455 12.7654 0 11.4241 0 9.75C0 8.58051 0.892315 7.61933 2.03328 7.5103L2.24997 7.5H9.75ZM6 0C7.65686 0 9 1.34314 9 3C9 4.65686 7.65686 6 6 6C4.34314 6 3 4.65686 3 3C3 1.34314 4.34314 0 6 0Z" fill="white"/>
            </svg>
                
            <p>Tài khoản</p>
        </div>
    </header>
    <?php require $VIEW_NAME;?>
    <footer>
        <div class="gallery">
            <img style="margin-top: -100px;" src="<?=$IMAGE_DIR?>/footer-image (1).png" alt="">
            <img style="margin-top: -25px;" src="<?=$IMAGE_DIR?>/footer-image (2).png" alt="">
            <img style="margin-top: -50px;" src="<?=$IMAGE_DIR?>/footer-image (3).png" alt="">
            <img style="margin-top: -75px;" src="<?=$IMAGE_DIR?>/footer-image (4).png" alt="">
            <img style="margin-top: -50px;" src="<?=$IMAGE_DIR?>/footer-image (5).png" alt="">
        </div>
        <div class="about">
            <p style="color: whi;">ChickCuisine tự hào cung cấp những món ăn ngon nhất từ khắp nơi trên thế giới đến ngay tận bàn ăn của bạn. Chúng tôi cam kết về chất lượng và sự hài lòng của khách hàng. Hãy theo dõi chúng tôi trên các trang mạng xã hội để cập nhật thông tin mới nhất và các ưu đãi đặc biệt!</p>
        </div>
        <div class="menu-box">
            <img class="logo-footer" src="<?=$IMAGE_DIR?>/logo-white.png" alt="">
            
            <div class="footer-menu">
                <div class="iconmenu" style="display: none;"><img src="<?=$IMAGE_DIR?>/icon/more.png" alt=""></div>
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
<script>
    document.querySelector('.iconmenu').addEventListener('click', function() {
    document.querySelector('.menu').classList.toggle('open');
    }); 
    document.querySelector('.footer-menu .iconmenu').addEventListener('click', function() {
    document.querySelector('.menu').classList.toggle('open');
    });
    document.querySelector('.search-an').addEventListener('click', function() {
    document.querySelector('.search-box').classList.toggle('ghim-search');
    });
</script>
</body>
</html>