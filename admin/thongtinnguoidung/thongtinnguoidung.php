
<!-- style trang -->
<style>
    input {
        border: 1px solid var(--gray);
        outline: none;
        font-size: 15px;
    }
    .toolbar {
        width: 100%;
        height: 50px;
        text-align: right;
    }
    .toolbar * {
        display: inline-block;
        vertical-align: middle;
        color: white;
    }
    .toolbar>* {
        background-color: var(--red);
        border-radius: 5px;
        padding: 5px 10px;
        margin: 0px 10px;
        display: inline-flex;
        justify-content: center;
    }
    .toolbar .add-button a * {
        display: inline-block;
        vertical-align: top;
    }
    .toolbar .add-button p {
        color: white;
        margin-left: 10px;
    }
    .container {
        width: 100%;
        display: grid;
        grid-template-columns: auto 475px;
        gap: 20px;
        height: 380px;
    }
    .container * {
        display: block;
    }
    .container .left {
        background-color: white;
        border-radius: 10px;
        border: 1px solid var(--gray);
        padding: 10px;
        height: fit-content;
        width: 100%;
        align-items: center;
        display: grid;
        gap: 20px 15px;

    }
    .container .left label {
        font-size: 18px;
    }
    .container .left input {
        margin-top: 10px;
        height: 42px;
        width: 100%;
        resize: none;
        border-radius: 5px;
        outline: none;
        padding-left: 10px;
    }

    .container .right {
        height: 100%;
        padding: 10px;
        background-color: white;
        border-radius: 10px;
        border: 1px solid var(--gray);
        overflow: hidden;
    }
    .container .right .img-box {
        width: 100%;
        height: 100%;
        overflow: hidden;
        border-radius: 10px;
        border: 1px solid var(--gray);
        background-image: url('<?=$IMAGE_DIR?>/background-blank.jpg');
        display: flex;
        justify-content: center;
        position: relative;
    }
    .container .right img {
        height: 100%;
    }
    .container input {
        cursor: not-allowed;
    }
</style>

<div class="toolbar">
            <div class="cancel-button">
                <a href="<?=$ADMIN_URL?>/quanlynguoidung">Quay lại</a>
            </div>
        </div>
        <div class="container">
            <?php extract($user); ?>
            <div class="left">
                <div style="grid-column: 1 / 4; grid-row: 1 / 2;">
                    <label for="user-name">Tên người dùng</label>
                    <input type="text" id="user-name" value="<?=$Name?>" readonly>
                </div>
                <div style="grid-column: 1 / 2; grid-row: 2 / 3;">
                    <label for="user-phonenumber">Số điện thoại</label>
                    <input type="text" id="user-phonenumber" value="<?=$PhoneNumber?>"readonly>
                </div>
                <div style="grid-column: 2 / 3; grid-row: 2 / 3;">
                    <label for="user-email">Email</label>
                    <input type="text" id="user-email" value="<?=$Email?>"readonly>
                </div>
                <div style="grid-column: 3 / 4; grid-row: 2 / 3;">
                    <label for="user-role">Vai trò</label>
                    <?php if($Role == 1) { ?>
                        <input type="text" id="user-role" value="Khách hàng"readonly>
                    <?php } else { ?>   
                        <input type="text" id="user-role" value="Quản trị"readonly>
                    <?php } ?>   
                </div>
            </div>
            <div class="right">
                <div class="img-box">
                    <img src="<?=$IMAGE_DIR?>/<?=$Avatar?>" alt="">
                </div>
            </div>
        </div>