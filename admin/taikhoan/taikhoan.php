<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý bán hàng</title>
    <link rel="icon" href="<?=$IMAGE_DIR?>/mini-logo.png" type="image/png">
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
        --green: #56D237;
    }
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: var(--lightgray);
        color: var(--lightblack);
    }
    a, a * {
        text-decoration: none;
        color: var(--lightblack);
    }
    button {
        cursor: pointer;
        border: none;
    }
    .line {
        border-bottom: 1px solid var(--gray);
        width: 100%;
        height: 1px;
        margin: 10px auto;
    }
    .vertical-line {
        border-right: 1px solid var(--gray);
        width: 1px;
        height: 100%;
    }
    .whitediv {
        background-color: white;
        border: 1px solid var(--gray);
        box-shadow: 0px 0px 5px var(--gray);
        border-radius: 10px;
    }
    .jumpAnimate {
        animation:jump 1s ease 0s 1 normal;
    }

    @keyframes jump{
        0%{ transform:translateY(0); }
        20%{ transform:translateY(0); }
        40%{ transform:translateY(-30px); }
        50%{ transform:translateY(0); }
        60%{ transform:translateY(-15px); }
        80%{ transform:translateY(0); }
        100%{ transform:translateY(0); }
    }
    

</style>
<!-- style trang -->
<style>
main {
    position: absolute;
    inset: 0;
    margin: 0;
    background: linear-gradient(to right bottom, rgba(195, 68, 57, 0.1), rgb(255, 177, 27, 0.1));
    z-index: -2;
}

main>form{
    position: relative;
    width: 600px;
    margin: 150px auto;
    background-color: white;
    border-radius: 5px;
    box-shadow: 0 0 3px gray;
}

main>form>.banhrang1{
    position: absolute;
    right: 80px;
    top: -80px;
    width: 80px;
}
main>form>.banhrang2{
    position: absolute;
    width: 175px;
    right: -85px;
    top: -75px;
    z-index: -1;
}
main>form>.banhrang3{
    position: absolute;
    width: 135px;
    right: -85px;
    top: 85px;
    z-index: -1;
}



main>form>div>img {
    width: 175px;
    margin: auto;
    border-radius: calc(175px / 2);
}

main>form>div>h1 {
    margin: 0;
    text-align: center;
}

main>form>div {
    display: flex;
    flex-direction: column;
    padding: 30px 20px 10px 20px;
    gap: 20px;
    color: #4E4E4E;
    font-size: 0.9em;
}

main>form>div>.line{
    background-color: rgb(181, 181, 181);
    width: 90%;
    height: 1px;
    margin: 20px auto;
}
main>form>div>label {
    position: relative;
    margin-top: 10px;
    width: 90%;
    margin: auto;
}

main>form>div>label>img {
    width: 15px;
}

main>form>div>label>span,
main>form>div>label>input {
    padding: 5px 10px;
    border: none;
    outline: none;
    background-color: transparent;
    color: black;
    font-size: 16px;
}

main>form>div>.submit{
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    padding: 10px;
    margin-top: 20px;
    width: 200px;
    border-radius: 5px;
    background-color: #c34439;
    color: white;
    border: none;
    font-size: 1.3em;
    margin: 20px auto;
}
    .hidden {
        display: none !important;
    }


</style>
<body>
    <main>
        
        <form action="" method="post" enctype="multipart/form-data">

            <img class="banhrang1" src="<?=$IMAGE_DIR?>/Group 27.png" alt="">
            <img class="banhrang2" src="<?=$IMAGE_DIR?>/Group 28.png" alt="">
            <img class="banhrang3" src="<?=$IMAGE_DIR?>/Group 29.png" alt="">

            <div>

                <img src="<?=$IMAGE_DIR?>/<?=$Avatar ? $Avatar : 'default.png'?>" alt="">
                <h1><?=$Name?></h1>

                <div class="line"></div>

                <label class="capnhatten update-info-button">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.76856 8.22803C9.83125 8.22803 11.5186 6.54049 11.5186 4.47803C11.5186 2.41557 9.83125 0.728027 7.76856 0.728027C5.70586 0.728027 4.01855 2.41557 4.01855 4.47803C4.01855 6.54049 5.70586 8.22803 7.76856 8.22803ZM7.76856 10.103C5.28426 10.103 0.268555 11.3687 0.268555 13.853V15.728H15.2686V13.853C15.2686 11.3687 10.2529 10.103 7.76856 10.103Z" fill="#4E4E4E"/>
                </svg>

                    <input class="" value="Cập nhật tên">
                </label>
                <label  class="capnhatanhdaidien update-info-button">
                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.49961 10.4904C8.82509 10.4904 9.89961 9.41591 9.89961 8.09043C9.89961 6.76495 8.82509 5.69043 7.49961 5.69043C6.17413 5.69043 5.09961 6.76495 5.09961 8.09043C5.09961 9.41591 6.17413 10.4904 7.49961 10.4904Z" fill="#4E4E4E"/>
                    <path d="M5.25 0.590332L3.8775 2.09033H1.5C0.67125 2.09033 0 2.76158 0 3.59033V12.5903C0 13.4191 0.67125 14.0903 1.5 14.0903H13.5C14.3287 14.0903 15 13.4191 15 12.5903V3.59033C15 2.76158 14.3287 2.09033 13.5 2.09033H11.1225L9.75 0.590332H5.25ZM7.5 11.8403C5.43 11.8403 3.75 10.1603 3.75 8.09033C3.75 6.02033 5.43 4.34033 7.5 4.34033C9.57 4.34033 11.25 6.02033 11.25 8.09033C11.25 10.1603 9.57 11.8403 7.5 11.8403Z" fill="#4E4E4E"/>
                </svg>
                    <input class="" value="Cập nhật ảnh đại diện">
                </label>
                <label class="doimatkhau update-info-button">
                <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.4561 7.40283V5.52783C12.4561 2.90283 10.3936 0.840332 7.76855 0.840332C5.14355 0.840332 3.08105 2.90283 3.08105 5.52783V7.40283C1.4873 7.40283 0.268555 8.62158 0.268555 10.2153V16.7778C0.268555 18.3716 1.4873 19.5903 3.08105 19.5903H12.4561C14.0498 19.5903 15.2686 18.3716 15.2686 16.7778V10.2153C15.2686 8.62158 14.0498 7.40283 12.4561 7.40283ZM4.95605 5.52783C4.95605 3.93408 6.1748 2.71533 7.76855 2.71533C9.3623 2.71533 10.5811 3.93408 10.5811 5.52783V7.40283H4.95605V5.52783ZM8.7998 13.4966L8.70605 13.5903V14.9028C8.70605 15.4653 8.33105 15.8403 7.76855 15.8403C7.20605 15.8403 6.83105 15.4653 6.83105 14.9028V13.5903C6.26855 13.0278 6.1748 12.1841 6.7373 11.6216C7.2998 11.0591 8.14355 10.9653 8.70605 11.5278C9.26855 11.9966 9.3623 12.9341 8.7998 13.4966Z" fill="#4E4E4E"/>
                </svg>
                    <input class="" value="Đổi mật khẩu">
                </label>

                <button class="submit" type="submit"name="logout"><img src="<?=$IMAGE_DIR?>/dangxuat.png" alt=""> Đăng xuất</button>

            </div>

        </form>
        <style>
        .hidden-box {        
            width: 100%;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.6);
            position: fixed;
            z-index: 100;
            top: 0px;
            left: 0px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .hidden-box>* {    
            width: 500px;
            height: fit-content;
            padding: 15px;
        }
        .hidden-box .message {
            height: 20px;
            font-weight: 400;
            color: var(--red);
        }
        .hidden-box .title {
            font-weight: 600;
            color: var(--lightblack);
        }
        .hidden-box input[type="text"] {
            width: 100%;
            height: 40px;
            border-radius: 5px;
            border: 1px solid var(--gray);
            outline: none;
            margin: 5px 0px 10px;
            padding-left: 10px;
        }
        .hidden-box .buttons {
            width: 100%;
            text-align: right;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
        }
        .hidden-box .buttons>* {
            display: inline-flex;
            width: 1fr;
            height: 40px;
            background-color: var(--red);
            color: white;
            justify-content: center;
            align-items: center;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
        }
        .buttons * {
            color: white;
        }
        .hidden-box .buttons .upload-file {
            grid-column: 1 / 3;
        }
        .hidden-box .buttons .cancel {
            grid-column: 3 / 4;
        }
        .hidden-box .buttons .confirm {
            grid-column: 4 / 5;
        }
        .hidden-box .image-box {
            margin: 50px 0px;
            text-align: center;
        }
        .hidden-box .image-box img {
            border-radius: 50%;
        }
        .order-history {
            position: relative;
        }
        .scroll {
            min-height: 500px;
            max-height: 500px;
            overflow-y: scroll;
            -ms-overflow-style: none;
            scrollbar-width: none;
            padding: 10px 0px;
        }
        .order-history .order {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            row-gap: 10px;
            padding: 10px;
            cursor: pointer;
        }
        .order-history .order:not(:last-child) {
            border-bottom: 1px solid var(--gray);
            margin-top: 10px;
        }
        .order-history .order .right {
            text-align: right;
        }
        .order-history .order .code {
            font-size: 18px;
        }
        .order-history .order .status>* {
            display: inline-block;
        }
        .order-history .order .color {
            width: 10px;
            height: 10px;
            border-radius: 5px;
        }
        .grid {
            
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            justify-content: center;
            width: 1000px;
        }
        .grid>* {
            
            padding: 15px;
            height: 100%;
        }
        .order-detail {
            height: 100%;
        }
        .product-list {
            width: 100%;
        }
        .product-list .product {
            height: 100px;
            display: grid;
            grid-template-columns: 90px 200px 1fr 3fr;
        }
        .product-list :not(tr:last-child) {
            border-bottom: 1px solid var(--gray);
        }
        .product-list .product img {
            width: 75px;
            height: 75px;
            border-radius: 5px;
        }
        .product-list .product td {
            font-size: 18px;
            font-weight: 400;
            text-align: center;
            align-self: center;
            border: none;
            text-wrap: nowrap;
        }
        .product-list .product tr td:nth-child(2) {
            text-align: left !important;
        }
         .order-detail .order-total-price {
            font-weight: 600;
            text-align: right;
            height: 20px;
            width: 100%;
            margin-bottom: 10px;
        }
        .image-box img{
            
        width: 300px;
        height: 300px;
        border-radius: 150px;
        }
    </style>
    <div class="hidden-box hidden capnhatten">
        <form class="change-name whitediv" method="post">
            <p class="title">Cập nhật tên</p>
            <p class="message"></p>
            <input type="text" name="update_name" value="">
            <div class="buttons">
                <div class="cancel">Hủy</div>
                <button class="confirm">Xác nhận</button>
            </div>
        </form>
    </div>
    <div class="hidden-box hidden capnhatanhdaidien">
        <form class="change-avatar whitediv" enctype="multipart/form-data" method="post" action="">
            <p class="title">Cập nhật ảnh đại diện</p>
            <div class="image-box">
                <img src="" alt="" id="preview">
            </div>
            <div class="buttons">
                <div class="upload-file">
                    <label for="avatar">
                        
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.71 5.70501L9 3.40501V12.995C9 13.2602 9.10536 13.5146 9.29289 13.7021C9.48043 13.8897 9.73478 13.995 10 13.995C10.2652 13.995 10.5196 13.8897 10.7071 13.7021C10.8946 13.5146 11 13.2602 11 12.995V3.40501L13.29 5.70501C13.383 5.79874 13.4936 5.87314 13.6154 5.9239C13.7373 5.97467 13.868 6.00081 14 6.00081C14.132 6.00081 14.2627 5.97467 14.3846 5.9239C14.5064 5.87314 14.617 5.79874 14.71 5.70501C14.8037 5.61205 14.8781 5.50145 14.9289 5.37959C14.9797 5.25773 15.0058 5.12703 15.0058 4.99501C15.0058 4.863 14.9797 4.7323 14.9289 4.61044C14.8781 4.48858 14.8037 4.37798 14.71 4.28501L10.71 0.285014C10.6149 0.193973 10.5028 0.122608 10.38 0.0750135C10.1365 -0.0250045 9.86346 -0.0250045 9.62 0.0750135C9.49725 0.122608 9.3851 0.193973 9.29 0.285014L5.29 4.28501C5.19676 4.37825 5.1228 4.48894 5.07234 4.61076C5.02188 4.73259 4.99591 4.86315 4.99591 4.99501C4.99591 5.12687 5.02188 5.25744 5.07234 5.37926C5.1228 5.50108 5.19676 5.61178 5.29 5.70501C5.38324 5.79825 5.49393 5.87221 5.61575 5.92267C5.73757 5.97313 5.86814 5.9991 6 5.9991C6.13186 5.9991 6.26243 5.97313 6.38425 5.92267C6.50607 5.87221 6.61676 5.79825 6.71 5.70501ZM19 9.99501C18.7348 9.99501 18.4804 10.1004 18.2929 10.2879C18.1054 10.4754 18 10.7298 18 10.995V16.995C18 17.2602 17.8946 17.5146 17.7071 17.7021C17.5196 17.8897 17.2652 17.995 17 17.995H3C2.73478 17.995 2.48043 17.8897 2.29289 17.7021C2.10536 17.5146 2 17.2602 2 16.995V10.995C2 10.7298 1.89464 10.4754 1.70711 10.2879C1.51957 10.1004 1.26522 9.99501 1 9.99501C0.734784 9.99501 0.48043 10.1004 0.292893 10.2879C0.105357 10.4754 0 10.7298 0 10.995V16.995C0 17.7907 0.316071 18.5537 0.87868 19.1163C1.44129 19.6789 2.20435 19.995 3 19.995H17C17.7956 19.995 18.5587 19.6789 19.1213 19.1163C19.6839 18.5537 20 17.7907 20 16.995V10.995C20 10.7298 19.8946 10.4754 19.7071 10.2879C19.5196 10.1004 19.2652 9.99501 19 9.99501Z" fill="white"/>
                        </svg>
                        <span>Tải ảnh lên</span>
                        <input id="avatar" name="update_avatar" type="file" style="display: none;">
                    </label>
                </div>
                <div class="cancel">Hủy</div>
                <button class="confirm">Xác nhận</button>
            </div>
        </form>
        <script>
                function readImage(input) {
                    if (input.files && input.files[0]) {
                        let reader = new FileReader();
                        reader.onload = function (e) {
                            var img = document.getElementById('preview');
                            img.src = e.target.result;
                        }
                        reader.readAsDataURL(input.files[0]);
                    }
                }

                var fileInput = document.getElementById('avatar');
                fileInput.addEventListener('change', function() { readImage(this); });
        </script>
    </div>
    <div class="hidden-box hidden doimatkhau">
        <form class="change-password whitediv" method="post" onsubmit="return check_password();">
            <p class="title">Cập nhật mật khẩu</p>
            <p class="message"></p>
            <label for="old-password">Mật khẩu cũ</label>
            <input type="text" id="old-password" value="" name="old_password">
            <label for="new-password">Mật khẩu mới</label>
            <input type="text" id="new-password" value="" name="update_password">
            <label for="confirm-password">Xác nhận mật khẩu mới</label>
            <input type="text" id="confirm-password" value="">
            <div class="buttons">
                <div class="cancel">Hủy</div>
                <button class="confirm">Xác nhận</button>
            </div>
        </form>
        <script>
            function check_password() {
                let confirm_password = document.querySelector("#confirm-password").value;
                let new_password = document.querySelector("#new-password").value;
                if (confirm_password !== new_password) {
                    alert("Xác nhận mật khẩu không đúng");
                }
                return (confirm_password === new_password);
            }
        </script>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        
        document.querySelectorAll(".update-info-button").forEach(function(element) {
            element.addEventListener("click", function () {
                div_name = Array.from(element.classList)[0];
                div = document.querySelectorAll("." + div_name)[1];
                div.classList.toggle("hidden");

            });
        });

        document.querySelectorAll(".cancel").forEach(function(element) {
            element.addEventListener("click", function () {
                div = element.closest(".hidden-box")
                div.classList.toggle("hidden");

            });
        });

        document.querySelectorAll(".confirm").forEach(function(element) {
            element.addEventListener("click", function () {
                div = element.closest(".hidden-box")
                div.classList.toggle("hidden");

            });
        });

        function filter(key, value) {
            this.key = key;
            this.value = value;
        }
        function ApplyFilters(...filters) {
            var current_url = new URL(window.location.href);
            var params = new URLSearchParams(current_url.search);
            var redirectToCategory = false;
            filters.forEach(filter => {
                if (filter.value === "") {
                    return;
                }
                params.set(filter.key, filter.value);
            });
            if (redirectToCategory) {
                return;
            }
            var filter_array = [];
            if (params.get("order_id") != null) {
                filter_array.push("order_id=" + params.get("order_id"));
            
            }
            var url = "<?=$SITE_URL?>/taikhoan/?" + filter_array.join("&");
            

            window.location.href = url;
        }

        function cancel_order(id) {
            $.post("<?=$SITE_URL?>/taikhoan/",
                {
                    cancel_order_id: id
                },
                function(data, textStatus, jqXHR) {
                    window.location.href = "<?=$SITE_URL?>/taikhoan";
                }
            );
        }
    </script>
    </main>
</body>
</html>