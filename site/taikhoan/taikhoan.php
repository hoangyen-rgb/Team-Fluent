<!-- style trang -->
<style>
    main {
        padding: 0px 100px;
    }
    .container {
        margin-top: 70px;
        width: 100%;
        display: grid;
        grid-template-columns: 470px auto;
        grid-template-rows: auto 120px;
        gap: 20px;
        height: 720px;
    }
    .container .profile {
        grid-row: 1 / 3;
        text-align: center;
        position: relative;
        padding-top: 30px;
    }
    .profile .user-avatar {
        width: 100%;
        text-align: center;
    }
    .profile .user-avatar img {
        width: 175px;
        height: 175px;
        border-radius: calc(175px / 2);
    }
    .profile .tennguoidung {
        font-size: 24px;
        font-weight: 600;
    }
    .profile .sdt {
        font-size: 16px;
        font-weight: 400;
    }
    .profile .diemvahang {
        text-align: center;
        display: grid;
        grid-template-columns: auto 10px auto;
        height: 70px;
    }
    .profile .diemvahang>* {
        align-self: center;
    }
    .profile .diemvahang img {
        height: 20px;
    }
    .profile .diemvahang>div>p:first-child {
        font-size: 20px;
        font-weight: 600;
    }
    .profile .diemvahang>div>p:first-child, .profile .diemvahang>div>img {
        display: inline-block;
        vertical-align: middle;
    }
    .update-info-button {
        width: 100%;
        height: 30px;
        padding: 10px 0px;
        margin: 20px 20px;
        cursor: pointer;
        text-align: left;
    }
    .update-info-button>* {
        display: inline-block;
        vertical-align: middle;
        font-size: 20px;
        font-weight: 400;
        margin-left: 10px;
    }
    .logout-button {
        background-color: var(--red);
        border: none;
        padding: 10px 15px;
        border-radius: 5px;
        position: absolute;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        cursor: pointer;
    }
    .logout-button>* {
        display: inline-block;
        vertical-align: middle;
        color: white;
        font-size: 20px;
        font-weight: 400;
    }
    .address {
        display: grid;
        grid-template-columns: auto 340px;
        gap: 20px;
        padding: 10px;
    }
    .address .form {
        padding: 10px;
        padding-bottom: 0px;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        column-gap: 20px;
        height: 400px;
    }
    .address :is(label:nth-child(1), label:nth-child(2), label:nth-child(3)) {
        grid-column: 1 / 3;
    }
    .address label {
        align-self: flex-end;
    }
    .address label input {
        width: 100%;
        height: 40px;
        border-radius: 5px;
        border: 1px solid var(--gray);
        box-shadow: 1px 1px 1px var(--gray) inset;
        padding-left: 10px;
        margin: 5px 0px 10px;
    }
    .bando {
        height: 390px;
        border-radius: 5px;
        overflow: hidden;
    }
    .capnhat {
        grid-column: 2 / 3;
        text-align: right;

    }
    .capnhat>button {
        background-color: var(--red);
        border: none;
        padding: 10px 15px;
        border-radius: 5px;
        cursor: pointer;
        margin-right: 20px;
    }
    .capnhat>button>* {
        display: inline-block;
        vertical-align: middle;
    }
    .capnhat>button>p {
        color: white;
        font-size: 20px;
        font-weight: 400;
    }
    .point {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: repeat(3, 1fr);
        padding: 10px 20px;
    }
    .point p {
        font-size: 16px;
        font-weight: 400;
    }
    .point span {
        font-weight: 600;
    }
    .point .diemvahang img {
        height: 20px;
    }
    .point .tong {
        grid-column: 1 / 3;
        padding: 10px;
        position: relative;
    }
    .point .tong>div {
        height: 5px;
    }
    .point .require-point {
        position: absolute;
        left: 0px;
        top: 10px;
        z-index: 1;
        width: 100%;
        background-color: var(--gray);
    }
    .point .user-point {
        position: absolute;
        left: 0px;
        top: 10px;
        z-index: 2;
        width: 50%;
        background-color: var(--red);
    }
    .point .diemvahang {
        grid-column: 1 / 3;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }
    .point .diemvahang>div>* {
        display: inline-block;
        vertical-align: middle;
    }
</style>
<!-- popup -->
<main>
    <div class="container">
        <div class="profile  whitediv">
            <div class="user-avatar">
                <img src="<?=$IMAGE_DIR?>/default.png" alt="">
                <div class="tennguoidung">
                    Tên người dùng
                </div>
                <div class="sdt">
                    0903522XXX
                </div>
            </div>

            <div class="line"></div>
            <div class="diemvahang">
                <div class="diemmuahang">
                    <p>1000</p>
                    <img src="<?=$IMAGE_DIR?>/point.png" alt="">
                    <p>điểm mua hàng</p>
                </div>
                <div class="vertical-line" ></div>
                <div class="hangthanh">
                    <p>Kim cương</p>
                    <img src="<?=$IMAGE_DIR?>/diamond.png" alt="">
                    <p>Hạng thành viên</p>
                </div>
            </div>
            <div class="line"></div>
            <div class="capnhatten update-info-button">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.76856 8.22803C9.83125 8.22803 11.5186 6.54049 11.5186 4.47803C11.5186 2.41557 9.83125 0.728027 7.76856 0.728027C5.70586 0.728027 4.01855 2.41557 4.01855 4.47803C4.01855 6.54049 5.70586 8.22803 7.76856 8.22803ZM7.76856 10.103C5.28426 10.103 0.268555 11.3687 0.268555 13.853V15.728H15.2686V13.853C15.2686 11.3687 10.2529 10.103 7.76856 10.103Z" fill="#4E4E4E"/>
                </svg>
                <p>Cập nhật tên</p>
            </div>
            <div class="capnhatanhdaidien update-info-button">
                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.49961 10.4904C8.82509 10.4904 9.89961 9.41591 9.89961 8.09043C9.89961 6.76495 8.82509 5.69043 7.49961 5.69043C6.17413 5.69043 5.09961 6.76495 5.09961 8.09043C5.09961 9.41591 6.17413 10.4904 7.49961 10.4904Z" fill="#4E4E4E"/>
                    <path d="M5.25 0.590332L3.8775 2.09033H1.5C0.67125 2.09033 0 2.76158 0 3.59033V12.5903C0 13.4191 0.67125 14.0903 1.5 14.0903H13.5C14.3287 14.0903 15 13.4191 15 12.5903V3.59033C15 2.76158 14.3287 2.09033 13.5 2.09033H11.1225L9.75 0.590332H5.25ZM7.5 11.8403C5.43 11.8403 3.75 10.1603 3.75 8.09033C3.75 6.02033 5.43 4.34033 7.5 4.34033C9.57 4.34033 11.25 6.02033 11.25 8.09033C11.25 10.1603 9.57 11.8403 7.5 11.8403Z" fill="#4E4E4E"/>
                </svg>
                <p>Cập nhật ảnh đại diện</p>
            </div>
            <div class="capnhatsodienthoai update-info-button">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.34554 4.0323C6.1503 1.78523 3.80746 0.682657 3.70831 0.637654C3.61562 0.594057 3.51175 0.580127 3.41086 0.597766C0.706168 1.04677 0.29934 2.62187 0.282985 2.68733C0.260734 2.77855 0.264273 2.87416 0.293207 2.96348C3.51921 12.9787 10.2237 14.835 12.4275 15.4456C12.5972 15.4927 12.7372 15.5305 12.8435 15.5653C12.9648 15.605 13.0967 15.5973 13.2125 15.5438C13.28 15.5131 14.8726 14.7624 15.262 12.3138C15.2793 12.207 15.2621 12.0973 15.213 12.0009C15.1782 11.9334 14.3451 10.347 12.035 9.78652C11.9566 9.76647 11.8746 9.76576 11.7959 9.78447C11.7172 9.80318 11.6442 9.84074 11.5832 9.89392C10.8544 10.5168 9.84753 11.1806 9.4131 11.2491C6.50091 9.82437 4.87462 7.09045 4.81329 6.57189C4.77751 6.28039 5.445 5.25658 6.21266 4.42403C6.2609 4.37163 6.29765 4.30971 6.32054 4.24224C6.34343 4.17477 6.35194 4.10326 6.34554 4.0323Z" fill="#4E4E4E"/>
                </svg>
                <p>Cập nhật số điện thoại</p>
            </div>
            <div class="doimatkhau update-info-button">
                <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.4561 7.40283V5.52783C12.4561 2.90283 10.3936 0.840332 7.76855 0.840332C5.14355 0.840332 3.08105 2.90283 3.08105 5.52783V7.40283C1.4873 7.40283 0.268555 8.62158 0.268555 10.2153V16.7778C0.268555 18.3716 1.4873 19.5903 3.08105 19.5903H12.4561C14.0498 19.5903 15.2686 18.3716 15.2686 16.7778V10.2153C15.2686 8.62158 14.0498 7.40283 12.4561 7.40283ZM4.95605 5.52783C4.95605 3.93408 6.1748 2.71533 7.76855 2.71533C9.3623 2.71533 10.5811 3.93408 10.5811 5.52783V7.40283H4.95605V5.52783ZM8.7998 13.4966L8.70605 13.5903V14.9028C8.70605 15.4653 8.33105 15.8403 7.76855 15.8403C7.20605 15.8403 6.83105 15.4653 6.83105 14.9028V13.5903C6.26855 13.0278 6.1748 12.1841 6.7373 11.6216C7.2998 11.0591 8.14355 10.9653 8.70605 11.5278C9.26855 11.9966 9.3623 12.9341 8.7998 13.4966Z" fill="#4E4E4E"/>
                </svg>
                <p>Đổi mật khẩu</p>
            </div>
            <div class="lichsudathang update-info-button">
                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.14286 0C0.959389 0 0 0.959389 0 2.14286V12.8571C0 14.0406 0.959389 15 2.14286 15H12.8571C14.0406 15 15 14.0406 15 12.8571V2.14286C15 0.959389 14.0406 0 12.8571 0H2.14286ZM4.82143 4.55357C4.82143 4.99737 4.46165 5.35714 4.01786 5.35714C3.57406 5.35714 3.21429 4.99737 3.21429 4.55357C3.21429 4.10978 3.57406 3.75 4.01786 3.75C4.46165 3.75 4.82143 4.10978 4.82143 4.55357ZM4.01786 8.57143C3.57406 8.57143 3.21429 8.21164 3.21429 7.76786C3.21429 7.32406 3.57406 6.96429 4.01786 6.96429C4.46165 6.96429 4.82143 7.32406 4.82143 7.76786C4.82143 8.21164 4.46165 8.57143 4.01786 8.57143ZM4.82143 10.9821C4.82143 11.4259 4.46165 11.7857 4.01786 11.7857C3.57406 11.7857 3.21429 11.4259 3.21429 10.9821C3.21429 10.5384 3.57406 10.1786 4.01786 10.1786C4.46165 10.1786 4.82143 10.5384 4.82143 10.9821ZM6.96429 4.28571H11.25C11.5458 4.28571 11.7857 4.52556 11.7857 4.82143C11.7857 5.11729 11.5458 5.35714 11.25 5.35714H6.96429C6.66842 5.35714 6.42857 5.11729 6.42857 4.82143C6.42857 4.52556 6.66842 4.28571 6.96429 4.28571ZM6.42857 8.03571C6.42857 7.73989 6.66842 7.5 6.96429 7.5H11.25C11.5458 7.5 11.7857 7.73989 11.7857 8.03571C11.7857 8.33154 11.5458 8.57143 11.25 8.57143H6.96429C6.66842 8.57143 6.42857 8.33154 6.42857 8.03571ZM6.96429 10.7143H11.25C11.5458 10.7143 11.7857 10.9542 11.7857 11.25C11.7857 11.5458 11.5458 11.7857 11.25 11.7857H6.96429C6.66842 11.7857 6.42857 11.5458 6.42857 11.25C6.42857 10.9542 6.66842 10.7143 6.96429 10.7143Z" fill="#4E4E4E"/>
                </svg>
                <p>Lịch sử đặt hàng</p>
            </div>
            <button type="submit" name="logout" class="logout-button">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.44441 8.58792L6.71942 10.3054C6.64913 10.3751 6.59333 10.4581 6.55525 10.5495C6.51718 10.6409 6.49757 10.7389 6.49757 10.8379C6.49757 10.9369 6.51718 11.0349 6.55525 11.1263C6.59333 11.2177 6.64913 11.3007 6.71942 11.3704C6.78914 11.4407 6.87209 11.4965 6.96349 11.5346C7.05488 11.5727 7.15291 11.5923 7.25192 11.5923C7.35093 11.5923 7.44896 11.5727 7.54035 11.5346C7.63174 11.4965 7.71469 11.4407 7.78442 11.3704L10.7844 8.37042C10.8527 8.2991 10.9062 8.21499 10.9419 8.12293C11.0169 7.94033 11.0169 7.73552 10.9419 7.55293C10.9062 7.46087 10.8527 7.37676 10.7844 7.30543L7.78442 4.30545C7.71449 4.23552 7.63147 4.18005 7.5401 4.1422C7.44874 4.10436 7.35081 4.08488 7.25192 4.08488C7.15302 4.08488 7.0551 4.10436 6.96373 4.1422C6.87237 4.18005 6.78935 4.23552 6.71942 4.30545C6.64949 4.37537 6.59402 4.45839 6.55618 4.54976C6.51833 4.64112 6.49885 4.73905 6.49885 4.83794C6.49885 4.93684 6.51833 5.03476 6.55618 5.12613C6.59402 5.21749 6.64949 5.30051 6.71942 5.37044L8.44441 7.08793H1.25195C1.05304 7.08793 0.862273 7.16695 0.721622 7.3076C0.58097 7.44825 0.501953 7.63902 0.501953 7.83793C0.501953 8.03684 0.58097 8.2276 0.721622 8.36825C0.862273 8.50891 1.05304 8.58792 1.25195 8.58792H8.44441ZM8.00191 0.337965C6.60024 0.331708 5.22486 0.718373 4.03179 1.4541C2.83871 2.18983 1.87569 3.24518 1.25195 4.50044C1.16244 4.67946 1.14771 4.88671 1.211 5.07659C1.2743 5.26647 1.41043 5.42343 1.58945 5.51294C1.76847 5.60245 1.97571 5.61718 2.16559 5.55388C2.35547 5.49059 2.51243 5.35446 2.60194 5.17544C3.07608 4.21794 3.79731 3.40441 4.69109 2.81894C5.58488 2.23347 6.61879 1.8973 7.68598 1.84515C8.75318 1.79301 9.81494 2.02679 10.7615 2.52234C11.7081 3.01788 12.5052 3.75722 13.0705 4.66394C13.6357 5.57066 13.9485 6.61187 13.9767 7.67997C14.0048 8.74806 13.7472 9.8043 13.2305 10.7395C12.7138 11.6747 11.9568 12.455 11.0376 12.9997C10.1184 13.5444 9.07037 13.8338 8.00191 13.8379C6.88358 13.8427 5.78654 13.5322 4.8367 12.9418C3.88686 12.3515 3.12271 11.5053 2.63194 10.5004C2.54243 10.3214 2.38547 10.1853 2.19559 10.122C2.00571 10.0587 1.79847 10.0734 1.61945 10.1629C1.44043 10.2524 1.3043 10.4094 1.241 10.5993C1.17771 10.7891 1.19244 10.9964 1.28195 11.1754C1.87657 12.372 2.78008 13.3881 3.89904 14.1184C5.018 14.8488 6.31176 15.2669 7.64651 15.3296C8.98126 15.3923 10.3085 15.0973 11.491 14.475C12.6735 13.8528 13.6683 12.9259 14.3724 11.7903C15.0766 10.6547 15.4646 9.35152 15.4962 8.01568C15.5279 6.67983 15.2021 5.35978 14.5526 4.19207C13.903 3.02436 12.9533 2.05138 11.8016 1.37379C10.6499 0.696197 9.33813 0.338593 8.00191 0.337965Z" fill="white"/>
                </svg>
                    
                <a href="<?=$SITE_URL?>/taikhoan?logout=true">Đăng xuất</a>
            </button>

        </div>
        <div class="address whitediv">
            <div class="form">
                <label>Số nhà / đường<input type="text" placeholder="Địa chỉ giao hàng" id="sonha"></label>
                <label>Khu phố<input type="text" placeholder="Địa chỉ giao hàng" id="khupho"></label>
                <label>Xã<input type="text" placeholder="Địa chỉ giao hàng" id="xa"></label>
                <label>Tỉnh<input type="text" placeholder="Địa chỉ giao hàng" id="tinh"></label>
                <label>Huyện<input type="text" placeholder="Địa chỉ giao hàng" id="huyen"></label>
            </div>
            <div class="bando">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d17041.468210147563!2d106.618228!3d10.8482083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1svi!2s!4v1699604988752!5m2!1svi!2s"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div class="capnhat">
                <button onclick="return validateForm()">
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path  d="M12.7602 2.28284C10.18 -0.201661 6.21114 -0.480165 3.31694 1.42303L3.30884 0.330448C3.30747 0.146554 3.15377 -0.00145398 2.96553 1.07789e-05L2.28429 0.00520378C2.09618 0.00660197 1.94493 0.15674 1.94629 0.340502L1.96509 2.83226C1.96775 3.19832 2.2725 3.49287 2.6464 3.49287C2.64776 3.49287 2.64974 3.49287 2.65172 3.49287L5.20185 3.4745C5.39003 3.47317 5.54142 3.32289 5.53999 3.139L5.53467 2.47313C5.53324 2.2893 5.37961 2.1415 5.19156 2.14283L4.75812 2.14589C7.039 1.0332 9.88871 1.38747 11.8035 3.23081C13.6411 5.00105 14.1433 7.66226 13.099 9.94416C13.0247 10.1066 13.0856 10.2959 13.2478 10.3769L13.8558 10.6805C14.0281 10.7666 14.246 10.6972 14.326 10.5251C15.625 7.72857 15.0162 4.45609 12.7602 2.28284ZM12.3537 11.5072C12.3523 11.5072 12.3503 11.5072 12.3484 11.5072L9.79823 11.5255C9.61005 11.5269 9.45867 11.6771 9.4601 11.861L9.46541 12.5269C9.46684 12.7106 9.62048 12.8584 9.80852 12.8572L10.2416 12.8541C7.96054 13.9665 5.11131 13.6119 3.19656 11.7692C1.35893 9.99895 0.856809 7.33768 1.90105 5.05584C1.97538 4.89339 1.91447 4.7041 1.75232 4.62307L1.14425 4.31947C0.97195 4.23344 0.754068 4.30275 0.674082 4.47486C-0.625036 7.27136 -0.0161509 10.5438 2.23973 12.7172C3.69746 14.1209 5.59906 14.8206 7.49922 14.8206C8.96233 14.8206 10.424 14.4043 11.6829 13.5762L11.691 14.6695C11.6924 14.8534 11.8461 15.0014 12.0344 15L12.7156 14.9948C12.9037 14.9933 13.055 14.8432 13.0536 14.6594L13.0348 12.1677C13.0323 11.8017 12.7277 11.5072 12.3537 11.5072Z" fill="white"/>
                    </svg>
                <p>Cập nhật</p>
                </button>
            </div>
        </div>


        <div class="point whitediv">
            <div class="tong">
                <div class="require-point"></div>
                <div class="user-point"></div>
            </div>
            <div class="diemvahang">
                <div class="diem">
                    <p>Điểm mua hàng: <span>1000 / 2000</span></p>
                    <img src="<?=$IMAGE_DIR?>/point.png" alt="">
                </div>

                <div class="hang">
                    <p>Hạng tiếp theo: <span>Lục bảo</span></p>
                    <img src="<?=$IMAGE_DIR?>/emerald.png" alt="">
                </div>
            </div>
            <div class="luuy" style="grid-row: 3 / 4; ">
                <p style="color: var(--red);" >Lưu ý: điểm mua hàng sẽ được làm mới mỗi tháng</p>
            </div>
        </div>
    </div>
    
</main>