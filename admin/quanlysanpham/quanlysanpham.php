<style>
    .toolbar {
    width: 100%;
    display: grid;
    height: 70px;
    grid-template-columns: repeat(2, 50%);
}
.toolbar .left {
    grid-column: 1 / 2;
    grid-row: 1 / 2;
}
.toolbar .right {
    grid-column: 2 /3;
    grid-row: 1 / 2;
}
.toolbar .left *, .toolbar .right * {
    display: inline-block;
    vertical-align: middle;
    cursor: pointer;
}
.toolbar .add-button {
    background-color: var(--red);
    padding: 5px;
    border-radius: 5px;
}
.toolbar .add-button p {
    color: white;
    margin-left: 10px;
}
.toolbar .search-bar {
    background-color: white;
    padding: 5px;
    border-radius: 5px;
    border: 1px solid var(--gray);
    margin-left: 10px;
}
.toolbar .search-bar input {
    border: unset;
    outline: none;
}
.right {
    text-align: right;
}
.right .filter-button {
    margin-right: 20px;
}
.right p {
    margin-left: 10px;
}
.list-product {
    background-color: white;
    border: 1px solid var(--gray);
    border-radius: 10px;
}
.list-product, .list-product table {
    width: 100%;
}
.list-product table td:nth-child(1) {
    width: 5%;
}
.list-product table td:nth-child(2) {
    width: 10%;
}
.list-product table td:nth-child(3) {
    width: 30%;
}
.list-product table td:nth-child(4) {
    width: 20%;
}
.list-product table td:nth-child(5) {
    width: 15%;
}
.list-product table td:nth-child(6) {
    width: 20%;
}
.list-product table tr:first-child td, .list-product table tr td:first-child, .list-product table tr td:last-child {
    text-align: center;
}
.list-product .product-image img{
    width: 75px;
    height: 75px;
    border-radius: 5px;
    overflow: hidden;
}
.list-product table {
    
    border-collapse: collapse;
}
.list-product table td, .cart table th {
    padding: 10px;
    text-align: center;
}
.list-product table tr:first-child {
    height: 50px;
}
.list-product table tr:not(:last-child) {
    border-bottom: 1px solid var(--gray);
}
.list-product table tr {
    height: 100px;
}
.product-action>* {
    background-color: var(--red);
    width: 30px;
    height: 30px;
    padding: 5px;
    border-radius: 5px;
    display: inline-block;
    vertical-align: middle;
    margin: 0px 5px;
    cursor: pointer;
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<main>
        <div class="toolbar">
            <div class="left">
                <div class="add-button">
                    <img src="<?=$IMAGE_DIR?>/icon/add.png" alt="">
                    <p><a href="<?=$ADMIN_URL?>/themsanpham" class="a" style="color: white";>Thêm sản phẩm</a></p>
                </div>
                <div class="search-bar">
                    <img src="<?=$IMAGE_DIR?>/icon/search-black.png" alt="">
                    <input type="text" placeholder="Tìm kiếm">
                </div>
            </div>
            <div class="right">
                <div class="filter-button">
                    <p>Lọc</p>
                    <img src="<?=$IMAGE_DIR?>/icon/filter.png" alt="">
                </div>
                <div class="sort-button">
                    <p>Sắp xếp</p>
                    <img src="<?=$IMAGE_DIR?>/icon/sort.png" alt="">
                </div>
            </div>
        </div>
        <div class="list-product">
            <table>
                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>Hình ảnh</td>
                    <td>Tên</td>
                    <td>Giá</td>
                    <td>Danh mục</td>
                    <td>Hành động</td>
                </tr>
                <?php foreach($products as $product) {extract($product); ?>
                <tr>
                    <td class="product-checkbox"><input type="checkbox" name="" id=""></td>
                    <td class="product-image"><img src="<?=$IMAGE_DIR?>/<?=$Image?>" alt=""></td>
                    <td class="product-name"><?=$Name?></td>
                    <td class="product-price"><?=number_format($Price)?> vnđ</td>
                    <td class="product-category"><?=get_category_name_by_product_id($Id)?></td>
                    <td class="product-action">
                        <div class="edit-button">
                            <a href="<?=$ADMIN_URL?>/suasanpham?id=<?=$Id?>" class="a">
                                <img src="<?=$IMAGE_DIR?>/icon/edit.png" alt="">
                            </a>
                        </div>
                        <div class="remove-button" data-product-id="<?=$Id?>">
                            <img src="<?=$IMAGE_DIR?>/icon/remove.png" alt="">
                        </div>
                    </td>
                </tr>
                <?php } ?>
            </table>
            
        </div>
    </main>
    <script>

        $(".remove-button").click(function() {
            var product_id = $(this).data("product-id");
            $.post("xoasanpham.php",
                {
                    product_id: product_id

                },
                function(data, textStatus, jqXHR) {
                    window.location.reload();
                }
            );
        });
    </script>