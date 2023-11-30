<?php
    require '../../global.php';
    require '../../dao/voucher.php';
    extract($_REQUEST);
    if(isset($get_voucher_list)) {
        $vouchers = get_valid_vouchers($order_price);
        $vouchers_list_html = "";
        foreach($vouchers as $voucher) {
            extract($voucher);
            $vouchers_list_html .= '
            <div class="voucher" onclick="select_voucher(\''.$Code.'\')">
                <p class="code">'.$Code.'</p>';
            if ($DiscountPrice != 0) {
                $vouchers_list_html .= '<p class="discount">giảm '.number_format($DiscountPrice, 0, ".", ".").' vnđ</p>';
            } else {
                $vouchers_list_html .= '<p class="discount">giảm '.$DiscountPercentage.'%</p><p class="max-discount">(tối đa '.$MaxDiscountPrice.' vnđ)</p>';
            }
            $vouchers_list_html .= '
            </div>
            ';
        }
        if ($vouchers_list_html == "") {
            $vouchers_list_html .= '<div class="empty-voucher-list">Không có mã hoặc giá trị đơn hàng chưa đủ</div>';
        }
        echo $vouchers_list_html;
    }
    if (isset($get_voucher)) {
        $voucher = get_voucher_by_code($voucher_code);
        if ($voucher == null) {
            echo "0";
        } else {
            extract($voucher);
            if ($MinOrderPrice > $order_price) {
                echo "0";
            } else {
                if ($DiscountPrice != 0) {
                    echo $DiscountPrice.=" vnđ";
                } else {
                    $Discount = 0;
                    if ($order_price * $DiscountPercentage / 100 > $MaxDiscountPrice) {
                        $Discount = $MaxDiscountPrice;
                    } else {
                        $Discount = $order_price * (100 - $DiscountPercentage) / 100;
                    }
                    echo $Discount.=" vnđ";
                }
            }

        }
    }
?>