<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once(__DIR__ . '/layout/header.php'); ?>
</head>

<body>
    <?php
    if (isset($_SESSION['MaKH']))
        $makh = $_SESSION['MaKH'];
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
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $tongtien = $_SESSION['tongtien'];
        $data =
            [
                "MaNV" => "2",
                "MaKH" => "$makh",
                "NgayHD" => date("Y-m-d"),
                "TongTien" => "$tongtien",
                "TrangThai" => "Yes",
            ];

        $insert = $db->insert('hoadon', $data);
        if ($insert > 0) {
            $_SESSION['error'] = "Thêm thành công";
            //header('Location: ./index.php');
            $arrCart = [];
            foreach ($_SESSION['Cart'] as $key => $value) {
                $arrCart[$key] = $value;
                $sql_cthoadon = "SELECT * FROM `cthoadon` WHERE MaHD = $key";
                $cthoadon = $db->fetchOne($sql_cthoadon);

                $data_cthoadon = [
                    "MaHD" => $insert,
                    "Mahh" => $key,
                    "SoLuong" => $value,
                ];
                $insert_cthoadon = $db->insert('cthoadon', $data_cthoadon);
            }
            header('location:./index.php'); 
            unset($_SESSION['Cart']);
            unset($_SESSION['Soluong']);
            //header("Location:./modules/sendMail.php?billID=$insert");
        } else
            $_SESSION['error'] = "không thành công";
    }
    ?>
    <div class="app">

        <?php require_once(__DIR__ . '/layout/header1.php') ?>
        <div class="content">
            <?php require_once(__DIR__ . '/layout/menu.php') ?>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="pay-form ">
                    <div class="grid pay-grid">
                        <div class="pay__form-1">
                            <h2 class="pay__form-name-shop">Hoàn Phúc Shop </h2>
                            <div class="pay__form-breadcrumb">
                                <span class="pay__form-cart hover-primary-color">Giỏ hàng</span>
                                <i class="pay__form-icon-right ti-angle-right"></i>
                                <span class="pay__form-mini-title">Thông tin giao hàng</span>
                            </div>
                            <h3 class="pay__form-nomal-title">Thông tin giao hàng</h3>
                            <div class="pay__form-questtion-login">
                                <span class="pay__form-questtion">Bạn đã có tài khoản?</span>
                                <a href="./Login.html" class="pay__form-login">Đăng nhập</a>
                            </div>

                            <div class="pay__form-info">
                                <input type="text" class="pay__form-item" placeholder="Họ và tên">
                                <div class="pay__form-contact">
                                    <input type="email" class="pay__form-item pay__form-email" placeholder="Email">
                                    <input type="text" class="pay__form-item pay__form-sdt" placeholder="Số điện thoại">
                                </div>
                                <input type="text" class="pay__form-item" placeholder="Địa chỉ">
                            </div>

                            <div class="pay__shipping-method">
                                <h3>Phương thức vận chuyển</h3>
                                <div class="pay__shipping-content">
                                    <div class="pay__ship">
                                        <div class="pay__shipping-check"></div>
                                        <div class="pay__shipping-method-delivery">Giao hàng tận nơi (Toàn quốc)</div>
                                    </div>
                                    <span class="pay__ship-price">30.000đ</span>
                                </div>
                            </div>

                            <div class="pay__shipping-method">
                                <h3>Phương thức thanh toán</h3>
                                <div class="pay__shipping-content">
                                    <div class="pay__ship">
                                        <div class="pay__shipping-check"></div>
                                        <div class="pay__shipping-method-delivery">Thanh toán khi giao hàng (COD)</div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="pay__form-2">
                            <ul class="pay__form-list-sp">
                                <?php if (count($_SESSION['Cart']) > 0) : ?>
                                    <?php foreach ($cart as $key => $item) : ?>
                                        <li class="pay__form-item-sp">
                                            <img src="<?php echo $item['Anh'] ?>" alt="<?php echo $item['Tenhh'] ?>" class="pay__form-item-img">
                                            <div class="pay__form-item-info">
                                                <div class="row">
                                                    <p class="pay__form-item-name"><?php echo $item['Tenhh'] ?> </p>
                                                    <span style="font-size: 13px;" class="pay__form-item-classify">Phân loại hàng: <?php echo $item['Tenloai'] ?></span>
                                                </div>
                                                <p class="pay__form-item-price"><?php echo $item['DongGia'] ?>đ</p>
                                            </div>
                                        </li>
                                    <?php endforeach ?>
                                <?php else : ?>
                                    <li class="pay__form-item-sp">
                                        <div style="color: red;font-size: 20px;">Không có sản phẩm nào</div>

                                    </li>
                                <?php endif ?>
                            </ul>

                            <div class="pay__form-discount">
                                <input type="text" placeholder="Mã giảm giá" name="" class="pay__form-discout-code" id="">
                                <button class="pay__form-discout-done">Sử dụng</button>
                            </div>

                            <div class="pay__form-cost">
                                <div class="pay__form-money">
                                    <span class="pay__form-cost-expected">Tạm tính</span>
                                    <?php if (count($_SESSION['Cart']) > 0) : ?>
                                        <?php foreach ($cart as $index => $item) : ?>
                                            <?php $tongtien += $item['DongGia'] * $arr_sl[$item['Mahh']] ?>
                                        <?php endforeach ?>
                                    <?php endif ?>
                                    <span class="pay__form-cost-expected-price"><?php echo $tongtien ?>đ</span>
                                </div>

                                <div class="pay__form-cost-tele">
                                    <span class="pay__form-cost-fee">Phí vận chuyển</span>
                                    <?php if (count($_SESSION['Cart']) > 0) : ?>
                                        <span class="pay__form-cost-transport-fee">30000đ</span>
                                    <?php else : ?>
                                        <span class="pay__form-cost-transport-fee">0đ</span>
                                    <?php endif ?>
                                </div>
                            </div>

                            <div class="pay__form-price-closing">
                                <span class="pay__form-total">Tổng cộng</span>
                                <?php if (count($_SESSION['Cart']) > 0) : ?>
                                    <span class="pay__form-total-price"><?php echo $tongtien + 30000 ?>đ</span>
                                <?php else : ?>
                                    <span class="pay__form-cost-transport-fee">0đ</span>

                                <?php endif ?>

                            </div>
                            <!-- Thanh toán -->
                            <!-- <input type="button" value="Thực hiện thanh toán" id="pay__btn-pay"> -->
                            <?php if (isset($_SESSION['MaKH'])) : ?>
                                <button type="submit" id="pay__btn-pay"> Xác Nhận Đặt Hàng</button>
                                <script language="javascript">
                                var button = document.getElementById("pay__btn-pay");
                                button.onclick = function() {
                                    swal("Xác nhận!", "Thanh toán thành công!");
                                }
                            </script>
                            <?php else : ?>
                                <button type="button" id="pay__btn-pay"> Xác Nhận Đặt Hàng</button>
                                <script language="javascript">
                                var button = document.getElementById("pay__btn-pay");
                                button.onclick = function() {
                                    swal("Xác nhận!", "Bạn chưa đăng nhập!");
                                }
                            </script>
                            <?php endif ?>
                            
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <?php require_once(__DIR__ . '/layout/footer.php') ?>
    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php require_once(__DIR__ . '/layout/script.php') ?>
</body>

</html>