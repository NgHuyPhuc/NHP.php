<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once(__DIR__ . '/layout/header.php') ?>
</head>

<body>
    <?php
    $tongtien = 0;
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_SESSION['Cart']) && count($_SESSION['Cart']) > 0) {
            $arr_mahh = [];
            $arr_sl = [];
            foreach ($_SESSION['Cart'] as $key => $value) {
                $arr_id[] = $key;
                $arr_sl[$key] = $value;
            }
            $str_sql = implode(",", $arr_id);
            $sql = "SELECT * FROM quanao WHERE Mahh IN($str_sql)";
            $cart = $db->fetchAll($sql);
            
        }

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
                        <li class="header-row-item">
                            / Giỏ hàng /
                        </li>
                    </ul>
                </div>
            </div>


            <div class="add__cart-form">
                <div class="grid">
                    <div class="add__cart-form-product ">
                        <div class="add__cart-form-title">Giỏ hàng</div>
                        <div class="add_cart-form-separate">
                            <div class="add__cart-1">
                                <ul class="add__form-list">
                                    <?php if (count($_SESSION['Cart']) > 0) : ?>
                                        <?php foreach ($cart as $index => $item) : ?>
                                            <li class="add__cart-item">
                                                <div class="add__cart-img-name">
                                                    <a style="text-decoration: none" href="<?php echo $base_url ?>/modules/cart/cart_delete.php?Mahh=<?php echo $item['Mahh'] ?>">
                                                        <span class="add__cart-item-delete">Xóa</span>
                                                    </a>
                                                    <a href="<?php echo $base_url ?>detail.php?id=<?php echo $item['Mahh'] ?>">
                                                        <img src="<?php echo $base_url . $item['Anh'] ?>" alt="<?php echo $item['Tenhh'] ?>" class="add__cart-item-img">
                                                    </a>

                                                    <a style="text-decoration: none" href="<?php echo $base_url ?>detail.php?id=<?php echo $item['Mahh'] ?>" class="add__cart-item-name hover-primary-color"><?php echo $item['Tenhh'] ?></a>
                                                </div>

                                                <div class="add__cart-price-quantily">
                                                    <a class="btn_ref" type="submit" style="margin-right: 30px" href="<?php echo $base_url ?>modules/cart/cart_update.php?Mahh=<?php echo $item['Mahh'] ?>&SoLuong=<?php echo $arr_sl[$item['Mahh']] ?>">
                                                        <img style="width:32px;height:32px;background-color:white;border:none" src="./asset/Image/reset.png" />
                                                    </a>
                                                    <span class="add__cart-price"><?php echo $item['DongGia'] ?> đ</span>
                                                    <input aria-label="quantity" class="input-qty" max="999" min="1" name="soluong" type="number" value="<?php echo $arr_sl[$item['Mahh']] ?>">
                                                </div>
                                            </li>
                                        <?php endforeach ?>
                                    <?php endif ?>
                                </ul>
                            </div>
                            <div class="add__cart-2">
                                <div class="add__cart-total-money">
                                    <span class="add__cart-total-text">Tổng tiền:</span>
                                    <?php if (count($_SESSION['Cart']) > 0) : ?>
                                        <?php foreach ($cart as $index => $item) : ?>
                                            <?php $_SESSION['tongtien'] = $tongtien += $item['DongGia'] * $arr_sl[$item['Mahh']] ?>

                                        <?php endforeach ?>
                                    <?php endif ?>
                                    <span class="add__cart-total-price"><?php echo $tongtien ?>đ</span>
                                </div>

                                <a href="<?php echo $base_url ?>thanhtoan.php" class="add__cart-payment">Tiến hành thanh toán</a>

                                <div class="add__cart-back-home">
                                    <a href="<?php echo $base_url ?>sanpham.php" class="add__cart-back">
                                        <i class="ti-arrow-left add__cart-back-icon"></i>
                                        Tiếp tục mua hàng
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <?php require_once(__DIR__ . '/layout/footer.php') ?>
        <script>
            let arrQty = document.querySelectorAll('.input-qty');
            let arr_ref = document.querySelectorAll('.btn_ref');
            arrQty.forEach(element => {
                element.addEventListener('input', updateHref);
            });

            function updateHref() {
                arr_ref.forEach((item, index) => {
                    let tmp_href = arr_ref[index].attributes['href'].value;
                    tmp_href = tmp_href.split('&');
                    tmp_href[1] = "SoLuong=" + parseInt(arrQty[index].value);
                    arr_ref[index].attributes['href'].value = tmp_href.join('&');
                    console.log(tmp_href.join('&'));
                });
            }
        </script>
</body>
<?php require_once(__DIR__ . '/layout/script.php') ?>

</html>