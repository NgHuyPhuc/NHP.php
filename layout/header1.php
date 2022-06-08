<div class="header">
    <?php
    require_once(__DIR__ . '/../lib/autoload.php');
    ?>
    <?php
    $tongsl = 0;
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
            $sql = "SELECT quanao.* ,loaisp.TenLoai as `Tenloai` 
            FROM quanao , loaisp
            WHERE quanao.id=loaisp.id and Mahh IN($str_sql)";
            $cart = $db->fetchAll($sql);
        }
    }

    ?>
    <div class="grid">
        <div class="header-navbar">
            <div class="header-navbar-logo" style="margin-top: 8px;">
                <a href="<?php echo $base_url ?>index.php">
                    <!-- img src="../asset/img/logo.jpg" alt="Logo Shop" class="header-navbar-img"> -->
                    <img src="./asset/img/logo.jpg" alt="Logo Shop" class="header-navbar-img">
                </a>
            </div>
            <form class="header-search" action="<?php echo $base_url ?>searchten.php" method="GET">
                <input type="text" name="name" placeholder="Tìm kiếm sản phẩm" class="header-search-input">
                <button type="submit" class="header-search-btn ">
                    <i class="header-search-btn-icon ti-search"></i>
                </button>
            </form>
            <div class="header-navbar-info">
                <div class="header-navbar-help-user">
                    <i class="ti-headphone-alt"></i>
                    <ul class="header-navbar-help">
                        <li style="cursor: default;">Hỗ trợ khách hàng</li>
                        <li class="header-phone-number hover-primary-color">0989948814</li>
                    </ul>
                </div>

                <div class="header-navbar-help-user">
                    <?php if (isset($_SESSION['khach'])) : ?>
                        <img width="40" height="40" src="<?php echo $base_url . $_SESSION['Anh'] ?>">
                    <?php else : ?>
                        <i class="ti-user"></i>
                    <?php endif ?>
                    <ul class="header-navbar-user">
                        <?php if (isset($_SESSION['khach'])) : ?>
                            <li><a class="hover-primary-color" href="./Login.php"><?php echo $_SESSION['khach'] ?></a></li>
                            <li><a class="hover-primary-color" href="./logout.php">Logout</a></li>
                        <?php else : ?>
                            <li><a class="hover-primary-color" href="./Login.php">Đăng nhập</a></li>
                            <li><a class="hover-primary-color" href="./Register.php">Đăng ký</a></li>
                        <?php endif ?>

                    </ul>
                </div>
            </div>

            <!-- Cart -->
            <div class="header-navbar-cart">
                <div class="header-cart-wrap">
                    <i class="ti-shopping-cart"></i>
                    <?php if (count($_SESSION['Cart']) > 0) : ?>
                        <?php foreach ($cart as $index => $item) : ?>
                            <span class="header-cart-wrap-notice"><?php echo $tongsl += $arr_sl[$item['Mahh']] ?></span>
                        <?php endforeach ?>
                    <?php else : ?>
                        <span class="header-cart-wrap-notice">0</span>
                    <?php endif ?>
                    <div class="header-cart-list">
                        <!-- ko có sản phẩm nào thì class header-cart-nothing: display: block -->
                        <div class="header-cart-nothing">
                            <p class="header-cart-nothing-msg">Không có sản phẩm nào</p>
                        </div>
                        <!-- Cart có sản phẩm -->
                        <h4 class="header-cart-heading">Sản phẩm đã thêm</h4>
                        <ul class="header-cart-list-item">
                            <?php if (count($_SESSION['Cart']) > 0) : ?>
                                <?php foreach ($cart as $index => $item) : ?>
                                    <li class="header-cart-item">
                                        <a href="<?php echo $base_url ?>detail.php?id=<?php echo $item['Mahh'] ?>">
                                            <img src="<?php echo $item['Anh'] ?>" alt="" class="header__cart-item-img">
                                        </a>
                                        <div class="header-cart-item-info">
                                            <div class="header-cart-item-head">
                                                <a style="text-decoration: none;" href="<?php echo $base_url ?>detail.php?id=<?php echo $item['Mahh'] ?>">
                                                    <h5 class="header-cart-item-name"><?php echo $item['Tenhh'] ?></h5>
                                                </a>
                                                <div class="header-cart-item-price-wrap">
                                                    <span class="header-cart-item-price"> <?php echo $item['DongGia'] ?>đ</span>
                                                    <span class="header-cart-item-multiphy">x </span>
                                                    <span class="header-cart-item-qnt"><?php echo $arr_sl[$item['Mahh']] ?></span>
                                                </div>
                                            </div>

                                            <div class="header__cart-item-body">
                                                <span class="header-cart-item-decription">Phân loại hàng: <?php echo $item['Tenloai'] ?></span>
                                                <a style="text-decoration: none" href="<?php echo $base_url ?>/modules/cart/minicart_delete.php?Mahh=<?php echo $item['Mahh'] ?>">
                                                    <span class="header-cart-item-clear">Xóa</span>
                                                </a>

                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach ?>
                            <?php else : ?>
                                <div style="color: red;" class="header-cart-heading">Chưa có sản phẩm nào</div>
                            <?php endif ?>
                        </ul>

                        <a href="<?php echo $base_url ?>cart.php" class=" btn-go-to-payment">Tiến hành thanh toán</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>