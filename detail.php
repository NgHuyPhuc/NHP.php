<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once(__DIR__ . '/layout/header.php') ?>
</head>

<body>
    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "select *from quanao where Mahh=$id";
        $detail = $db->fetchOne($sql);
    }
    ?>

    <div class="content">
        <?php require_once(__DIR__ . '/layout/header1.php') ?>

        <div class="content-contact">
            <?php require_once(__DIR__ . '/layout/menu.php') ?>


            <div class="header-row">
                <div class="grid">
                    <ul class="header-row-list">
                        <li class="header-row-item ">
                            <a href="./index.php" class="header-row-link hover-primary-color">
                                Trang chủ
                            </a>
                        </li>
                        <li class="header-row-item ">
                            <a href="./sanpham.php" class="header-row-link hover-primary-color">
                                / Danh mục
                            </a>
                        </li>
                        <li class="header-row-item">
                            / Chi tiết sản phẩm /
                        </li>
                    </ul>
                </div>
            </div>


            <div class="details__form">
                <div class="grid">
                    <div class="details__form-product">
                        <h2 class="details__form-title">Chi tiết sản phẩm</h2>
                        <div class="modal1-container ">
                            <div class="modal__img">
                                <div id="main-img">
                                    <img src="<?php echo $base_url . $detail['Anh'] ?>" alt="Áo thun Assassin's Creed Valhalla " id="modal__img-big">
                                </div>

                                <ul class="modal__img-list">
                                    <l><img class="modal__img-small" src="<?php echo $base_url . $detail['Anh'] ?>" alt="<?php echo $detail['Tenhh'] ?>" onclick="changeImage('one')" id="one"></l>
                                    <l><img class="modal__img-small" src="<?php echo $base_url . $detail['Anh'] ?>" alt="<?php echo $detail['Tenhh'] ?>" onclick="changeImage('two')" id="two"></l>
                                </ul>
                                <script src="./asset/js/img.js"></script>
                            </div>

                            <div class="modal__content">
                                <h3 class="modal__content-title"><?php echo $detail['Tenhh'] ?></h3>
                                <p class="modal__content-trademark">
                                    Thương hiệu: <span href="" style="color:var(--primary-color);"><?php echo $detail['Producer'] ?></span> |
                                    Mã sản phẩm: <span href="" style="color:var(--primary-color);"><?php echo $detail['Mahh'] ?></span>
                                </p>

                                <div class="modal__price">
                                    <div class="modal__price_new"><?php echo $detail['DongGia'] ?></div>
                                    <div class="modal__price_old">300.000đ</div>
                                </div>

                                <div class="modal-size">
                                    <ul class="modal-size-list">
                                        <h3 class="modal-size-title">Kích thước:</h3>
                                        <li class="modal-size-item">S</li>
                                        <li class="modal-size-item">M</li>
                                        <li class="modal-size-item">L</li>
                                        <li class="modal-size-item">XL</li>
                                        <li class="modal-size-item modal-size-active">XXL</li>
                                        <li class="modal-size-item">3XL</li>
                                        <li class="modal-size-item">4XL</li>
                                        <li class="modal-size-item">5XL</li>
                                    </ul>
                                </div>

                                <div class="modal__shirt-color">
                                    <h3 class="modal__shirt-color-title">Màu sắc:</h3>
                                    <div class="modal__shirt-color-black modal__shirt-color-active"></div>
                                    <div class="modal__shirt-color-white"></div>
                                </div>
                                <div class="modal-reduce">
                                    <h3 class="modal-reduce-text">Số Lượng:</h3>
                                    <input aria-label="quantity" class="input-qty" max="999" min="1" name="soluong" type="number" value="1">
                                </div>

                                <div class="modal__add-cart">
                                    <a style="text-decoration: none" type="submit" id="btn-modal-add" href="./modules/cart/cart_add.php?Mahh=<?php echo $detail['Mahh'] ?>& SoLuong=1">
                                        Thêm vào giỏ hàng
                                    </a>

                                    <script language="javascript">
                                        var button = document.getElementById("btn-modal-add");
                                        button.onclick = function() {
                                            swal("Xác nhận!", "Thêm sản phẩm thành công");
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="description">
                <div class="grid">
                    <div class="description__form">
                        <h2 class="description__form-title">Mô tả sản phẩm</h2>
                        <div class="description__form-desc">
                            <p class="description__form-text">
                                <?php echo $detail['Mota'] ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php require_once(__DIR__ . '/layout/footer.php') ?>


</body>
<?php require_once(__DIR__ . '/layout/script.php') ?>

</html>