<!-- css trang -->
<style>
    main {
    padding: 0px 100px;
}
main .container {
    width: 100%;
    margin: 50px auto;
    min-height: 500px;
    display: grid;
    grid-template-columns: 70% 30%;
    gap: 30px;
}
main .cart, main .checkout {
    border: 1px solid var(--gray);
    background-color: white;
    border-radius: 10px;
    height: fit-content;
}
main .cart, main .checkout, main .cart table {
    width: 100%;
}
main .cart table {
    border-collapse: collapse;
}
main .cart table tr:first-child td {
    font-size: 20px;
    font-weight: 600;
}
main .cart table td, main .cart table th {
    padding: 10px;
    text-align: center;
}
main .cart table tr:first-child {
    height: 50px;
}
main .cart table tr:not(:last-child) {
    border-bottom: 1px solid var(--gray);
}
main .cart table tr {
    height: 100px;
}
main .cart table td:nth-child(1) {
    width: 5%;
}
main .cart table td:nth-child(2) {
    width: 10%;
}.cart table td:nth-child(3) {
    width: 30%;
}.cart table td:nth-child(4) {
    width: 20%;
}.cart table td:nth-child(5) {
    width: 20%;
}.cart table td:nth-child(6) {
    width: 15%;
}
main .cart table td:nth-child(6) div {
    background-color: var(--red);
    width: 35px;
    height: 35px;
    margin: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 5px;
}
main .cart .product-image img{
    width: 100px;
    height: 100px;
    border-radius: 5px;
    border: 1px solid var(--gray);
}
main .product-buttons>*:not(:nth-child(2)) {
    background-color: var(--red);
    border-radius: 5px;
}
main .product-buttons>* {
    margin: auto 0px;
    font-size: 20px;
    font-weight: 600;
    cursor: pointer;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 35px;
    height: 35px;
    text-align: center;
    color: white;
    font-weight: 600;
}
main .product-quantity {
    margin: 0px 5px;
    color: var(--lightblack);
    background-color: white;
}
main .product-name {
    font-size: 18px;
    text-align: left !important;
}
main .product-original-price {
    text-decoration: line-through;
    color: var(--gray);
    font-size: 15px;
}
main .product-price {
    font-weight: 400;
    font-size: 20px;
}
main .checkout {
    height: fit-content;
    border-radius: 10px;
    overflow: hidden;
}
main .checkout-title {
    width: 100%;
    background-color: var(--red);
    padding: 10px 0px;
    text-align: center;
    font-weight: 20px;
    font-weight: 600;
    color: white;
}
main .cart-information {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    padding: 0px 10px;
}
main .cart-information>* {
    margin: 5px 0px;
}
main .cart-information .cart-information-title {
    grid-column: 1 / 3;
    font-weight: 20px;
    font-weight: 600;
}
main .cart-information .right {
    text-align: right;
    font-weight: 600;
}
main .cart-information .voucher-form {
    grid-column: 1 / 3;
    display: grid;
    grid-template-columns: auto 30px;
    gap: 10px;
}
main .cart-information .voucher-form button {
    width: 30px;
    height: 30px;
    border-radius: 5px;
    border: 1px solid var(--gray);
    display: flex;
    justify-content: center;
    align-items: center;
}
main .cart-information .voucher-form input {
    width: 1fr;
    height: 30px;
    border: 1px solid var(--gray);
    border-radius: 5px;
    outline: none;
    padding: 0px 10px;
}
main .checkout-buttons {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 10px;
}
main .checkout-buttons .note-button, main .checkout-buttons .add-to-cart-button {
    width: 80%;
    justify-self: center;
    height: 40px;
    border:unset;
    background-color: var(--red);
    color: white;
    border-radius: 5px;
    font-size: 16px;
    font-weight: 600;
    margin: 10px 0px;
}
main .checkout-buttons .note-button {
    background-color: unset;
    border: 2px solid var(--red);
}
main .checkout-buttons .note-button>* {
    display: inline-block;
    vertical-align: middle;
    color: var(--red);
}
main .checkout #otherAddress {
    margin: 10px 0px 10px 10px;
}
main .orderer-information, main .recipient-information {
    display: grid;
    padding: 0px 10px;
    height: 184px;
    transition: 0.3s;
    overflow: hidden;
}
main .orderer-information label, main .recipient-information label {
    font-size: 16px;
    font-weight: 600;
}
main .orderer-information input, main .recipient-information input {
    border-radius: 5px;
    outline: unset;
    border: 1px solid var(--gray);
    box-shadow: 1px 1px 1px var(--gray) inset;
    height: 30px;
    padding-left: 10px;
    margin: 5px 0px;
}
main .hidden {
    height: 0px;
}
</style>
<main>
    <div class="container">
        <div class="cart">
            <table>
                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>Hình ảnh</td>
                    <td>Tên</td>
                    <td>Số lượng</td>
                    <td>Giá</td>
                    <td>Xóa</td>
                </tr>
                <?php foreach ($cart as $product_in_cart) { $product = get_product_by_id($product_in_cart['Id']); extract($product); ?>
                    <tr data-id="<?=$Id?>">
                        <td class="product-checkbox"><input type="checkbox" name="" id=""></td>
                        <td class="product-image"><img src="<?=$IMAGE_DIR?>/<?=$Image?>" alt=""></td>
                        <td class="product-name"><?=$Name?></td>
                        <td class="product-buttons">
                            <button class="increase-button">+</button>
                            <button class="product-quantity"><?=$product_in_cart['Quantity']?></p>
                            <button class="decrease-button">-</button>
                        </td>
                        <td>
                            <p class="product-original-price"><?=$Price?> vnđ</p>
                            <p class="product-price"><?=$Price * (100 - $Discount) / 100?> vnđ</p>
                        </td>
                        <td>
                            <div>
                                <svg width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 4.32397C0 4.5755 0.0999182 4.81672 0.277774 4.99458C0.455629 5.17243 0.696853 5.27235 0.948379 5.27235H1.45418V16.479C1.45502 17.3065 1.78406 18.0999 2.36913 18.6851C2.95419 19.2702 3.74749 19.5994 4.57498 19.6005H12.425C13.2525 19.5994 14.0458 19.2702 14.6309 18.6851C15.2159 18.0999 15.545 17.3065 15.5458 16.479V5.27235H16.0516C16.3031 5.27235 16.5444 5.17243 16.7222 4.99458C16.9001 4.81672 17 4.5755 17 4.32397C17 4.07245 16.9001 3.83122 16.7222 3.65337C16.5444 3.47551 16.3031 3.37559 16.0516 3.37559H12.7323V2.39687C12.7323 1.07546 11.6575 0 10.3361 0H6.66394C5.34253 0 4.2677 1.07483 4.2677 2.39687V3.37496H0.948379C0.696853 3.37496 0.455629 3.47488 0.277774 3.65274C0.0999182 3.83059 0 4.07245 0 4.32397ZM6.16446 2.3975C6.16446 2.12121 6.38828 1.89739 6.66394 1.89739H10.3361C10.6117 1.89739 10.8355 2.12121 10.8355 2.3975V3.37559H6.16383V2.39687L6.16446 2.3975ZM3.35094 5.27235H13.6491V16.479C13.6487 16.8036 13.5197 17.1148 13.2902 17.3444C13.0608 17.574 12.7496 17.7032 12.425 17.7037H4.57498C4.25039 17.7032 3.93924 17.574 3.70978 17.3444C3.48032 17.1148 3.35127 16.8036 3.35094 16.479V5.27235Z" fill="white"/>
                                    <path d="M6.14271 15.9568C6.39424 15.9568 6.63546 15.8569 6.81332 15.679C6.99117 15.5011 7.09109 15.2599 7.09109 15.0084V7.96764C7.09109 7.71611 6.99117 7.47489 6.81332 7.29703C6.63546 7.11917 6.39424 7.01926 6.14271 7.01926C5.89119 7.01926 5.64996 7.11917 5.47211 7.29703C5.29425 7.47489 5.19434 7.71611 5.19434 7.96764V15.0084C5.19434 15.2599 5.29425 15.5011 5.47211 15.679C5.64996 15.8569 5.89119 15.9568 6.14271 15.9568ZM10.8568 15.9568C11.1083 15.9568 11.3495 15.8569 11.5274 15.679C11.7052 15.5011 11.8052 15.2599 11.8052 15.0084V7.96764C11.8052 7.71611 11.7052 7.47489 11.5274 7.29703C11.3495 7.11917 11.1083 7.01926 10.8568 7.01926C10.6053 7.01926 10.364 7.11917 10.1862 7.29703C10.0083 7.47489 9.90841 7.71611 9.90841 7.96764V15.0084C9.90841 15.2599 10.0083 15.5011 10.1862 15.679C10.364 15.8569 10.6053 15.9568 10.8568 15.9568Z" fill="white"/>
                                </svg>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
        <div class="checkout">
            <p class="checkout-title">Thông tin thanh toán</p>
            <div class="cart-information">
                <p class="cart-information-title">Thông tin Giỏ hàng</p>
                <p>Số sản phẩm</p>
                <p class="cart-product-count right">5</p>
                <p>Tạm tính</p>
                <p class="cart-total-price right">100.000 vnđ</p>
                <p>Tổng giảm giá</p>
                <p class="cart-total-discount right">10.000 vnđ</p>
                <div class="voucher-form">
                    <input type="text">
                    <button>
                        <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.0625 13.0435C19.5802 13.0435 20 13.4815 20 14.0217C20 14.517 19.6473 14.9263 19.1897 14.9911L19.0625 15H0.9375C0.419738 15 0 14.562 0 14.0217C0 13.5265 0.352696 13.1172 0.810288 13.0524L0.9375 13.0435H19.0625ZM19.0625 6.52174C19.5802 6.52174 20 6.95973 20 7.5C20 8.04026 19.5802 8.47826 19.0625 8.47826H0.9375C0.419738 8.47826 0 8.04026 0 7.5C0 6.95973 0.419738 6.52174 0.9375 6.52174H19.0625ZM19.0625 0C19.5802 0 20 0.437987 20 0.978261C20 1.51853 19.5802 1.95652 19.0625 1.95652H0.9375C0.419738 1.95652 0 1.51853 0 0.978261C0 0.437987 0.419738 0 0.9375 0H19.0625Z" fill="#BDBDBD"/>
                        </svg>                        
                    </button>
                </div>
                <p>Mã giảm giá</p>
                <p class="voucher-discount right">10.000 vnđ</p>
                <p>Tổng</p>
                <p class="cart-final-total-price right">90.000 vnđ</p>

            </div>
            <div class="line"></div>
            <div class="orderer-information">
                <label for="orderer-name">Tên người đặt hàng</label>
                <input type="text" name="orderer-name" id="orderer-name">
                <label for="orderer-phone-number">Số điện thoại</label>
                <input type="text" name="orderer-phone-number" id="orderer-phone-number">
                <label for="orderer-address">Địa chỉ</label>
                <input type="text" name="orderer-address" id="orderer-address">
            </div>
            <input type="checkbox" name="otherAddress" id="otherAddress">
            <label for="otherAddress">Giao đến địa chỉ khác</label>
            <div class="line"></div>
            <div class="recipient-information hidden">
                <label for="recipient-name">Tên người đặt hàng</label>
                <input type="text" name="recipient-name" id="recipient-name">
                <label for="recipient-phone-number">Số điện thoại</label>
                <input type="text" name="recipient-phone-number" id="recipient-phone-number">
                <label for="recipient-address">Địa chỉ</label>
                <input type="text" name="recipient-address" id="recipient-address">
            </div>
            <div class="checkout-buttons">
                <button class="note-button">
                    <svg width="15" height="19" viewBox="0 0 15 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.5625 0.59375C3.5625 0.265834 3.29667 0 2.96875 0C2.64083 0 2.375 0.265834 2.375 0.59375V1.1875H1.78125C0.797489 1.1875 0 1.98499 0 2.96875V17.2188C0 18.2025 0.797489 19 1.78125 19H8.3125V14.8438C8.3125 13.86 9.11003 13.0625 10.0938 13.0625H14.25V2.96875C14.25 1.98499 13.4525 1.1875 12.4688 1.1875H11.875V0.59375C11.875 0.265834 11.6091 0 11.2812 0C10.9534 0 10.6875 0.265834 10.6875 0.59375V1.1875H7.71875V0.59375C7.71875 0.265834 7.45287 0 7.125 0C6.79708 0 6.53125 0.265834 6.53125 0.59375V1.1875H3.5625V0.59375ZM3.5625 6.53125C3.5625 6.20333 3.82833 5.9375 4.15625 5.9375H10.0938C10.4216 5.9375 10.6875 6.20333 10.6875 6.53125C10.6875 6.85917 10.4216 7.125 10.0938 7.125H4.15625C3.82833 7.125 3.5625 6.85917 3.5625 6.53125ZM4.15625 9.5H10.0938C10.4216 9.5 10.6875 9.76588 10.6875 10.0938C10.6875 10.4216 10.4216 10.6875 10.0938 10.6875H4.15625C3.82833 10.6875 3.5625 10.4216 3.5625 10.0938C3.5625 9.76588 3.82833 9.5 4.15625 9.5ZM3.5625 13.6562C3.5625 13.3284 3.82833 13.0625 4.15625 13.0625H6.53125C6.85917 13.0625 7.125 13.3284 7.125 13.6562C7.125 13.9841 6.85917 14.25 6.53125 14.25H4.15625C3.82833 14.25 3.5625 13.9841 3.5625 13.6562Z" fill="#C34439"/>
                        <path d="M13.8809 14.25H10.0938C9.76588 14.25 9.5 14.5159 9.5 14.8438V18.6309C9.56092 18.5841 9.61899 18.5332 9.67385 18.4783L13.7283 14.4239C13.7832 14.369 13.8341 14.3109 13.8809 14.25Z" fill="#C34439"/>
                    </svg>
                    <p>Ghi chú</p>                            
                </button>
                <button class="add-to-cart-button">Thanh toán</button>
            </div>
        </div>
    </div>
</main>
<script>
        var otherAddress = document.getElementById("otherAddress");
        var recipient_information = document.getElementsByClassName("recipient-information")[0];
        otherAddress.addEventListener('change', function() {
            if (this.checked) {
                recipient_information.classList.remove("hidden");
            } else {
                recipient_information.classList.add("hidden");
            }
        });
</script>