<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once(__DIR__ . '/layout/header.php'); ?>
</head>
<?php
if (isset($_SESSION['khach'])) {
    //header("location:./index.php");
} else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["Taikhoan"]) || empty($_POST['Matkhau'])) {
            //echo "<script>alert('Không được bỏ trống')</script>";
        } else {
            $Taikhoan  = $_POST["Taikhoan"];
            $Matkhau  = md5($_POST["Matkhau"]);

            $sql = "select * from acckhach where Taikhoan = '$Taikhoan' and Matkhau = '$Matkhau'  ";

            $rs = $db->fetchOne($sql);
            if ($rs > 0) {
                echo "Đăng Nhập Thành Công";
                $_SESSION['khach'] = $rs['TaiKhoan'];
                $_SESSION['Anh'] = $rs['Anh'];
                $_SESSION['Taikhoan'] = $rs['TaiKhoan'];
                $_SESSION['Matkhau'] = md5($rs['Matkhau']);
                $_SESSION['MaKH'] = $rs['MaKH'];
                $_SESSION['ID']=$rs['ID'];
                //$_SESSION['avt_Admin'] = $rs['avatarImg'];
                header("location:./index.php");
            } else {
                echo "Đăng Nhập Thất Bại";
            }
        }
    }
}
?>

<body>
    <div class="app">
        <?php require_once(__DIR__ . '/layout/header1.php') ?>

        <div class="content-contact">
            <?php require_once(__DIR__ . '/layout/menu.php') ?>
            <div class="header-row">
                <?php if (isset($_SESSION['khach'])) : ?>
                    <div class="grid">
                        <ul class="header-row-list">
                            <li class="header-row-item ">
                                <a href="./index.php" class="header-row-link hover-primary-color">
                                    Trang chủ
                                </a>
                            </li>
                            <li class="header-row-item ">
                                <a href="./Login.php" class="header-row-link hover-primary-color">
                                    / Tài khoản
                                </a>
                            </li>
                        </ul>
                    </div>
                <?php else : ?>
                    <div class="grid">
                        <ul class="header-row-list">
                            <li class="header-row-item ">
                                <a href="./index.php" class="header-row-link hover-primary-color">
                                    Trang chủ
                                </a>
                            </li>
                            <li class="header-row-item ">
                                <a href="./Login.php" class="header-row-link hover-primary-color">
                                    / Tài khoản
                                </a>
                            </li>
                            <li class="header-row-item">
                                / Đăng nhập /
                            </li>
                        </ul>
                    </div>
                <?php endif ?>
            </div>
            <?php if (isset($_SESSION['khach'])) : ?>
                <div class="contact-backgr">
                    <div class="grid">
                        <div class="content-contact-form">
                            <div class="container-fluid mt-3">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 style="font-size: 20px;" class="card-title">Thông tin khách hàng</h4>
                                            <div class="basic-form">
                                                <form method="POST" action="" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <img src="<?php echo $base_url . $_SESSION['Anh'] ?>" width="100" height="100" alt="">
                                                        <!-- <input type="file" name="file" class="form-control-file"> -->
                                                    </div>
                                                    <div class="form-row">
                                                        <div style="margin-bottom: 20px;" class="form-group col-md-6">
                                                            <label style="font-size: 20px;">Tên hiển thị:<?php echo $_SESSION['Taikhoan'] ?></label>
                                                            <!-- <input type="text" name="TaiKhoan" required class="form-control" placeholder="TaiKhoan" value="<?php echo $user['TaiKhoan'] ?>"> -->
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label style="font-size: 20px;">Mật Khẩu:<?php echo $_SESSION['Matkhau'] ?></label>
                                                            <span class="show-btn"><i class="fas fa-eye"></i></span>
                                                            <!-- <input type="text" name="MatKhau" required class="form-control" value="<?php echo $user['MatKhau'] ?>"> -->
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label style="font-size: 20px;">ID:<?php echo $_SESSION['ID'] ?></label>
                                                            <span class="show-btn"><i class="fas fa-eye"></i></span>
                                                            <!-- <input type="text" name="MatKhau" required class="form-control" value="<?php echo $user['MatKhau'] ?>"> -->
                                                        </div>
                                                        
                                                    </div>

                                                    <a href="<?php echo $base_url?>edittk.php?id=<?php echo $_SESSION['ID']?>" style="font-size: 20px;" class="btn btn-dark">Sửa Tài Khoản</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php else : ?>
                <div class="contact-backgr">
                    <div class="grid">
                        <form class="mt-5 mb-5 login-input" action="" method="POST">
                            <div class="content-contact-form">
                                <h2 class="content-contact-title">Đăng nhập tài khoản</h2>
                                <p class="content-contact-mini-title">Bạn chưa có tài khoản
                                    <a href="./Register.php" class="hover-decoration hover-primary-color">
                                        Đăng ký tại đây
                                    </a>
                                </p>
                                <div class="content-form-login">
                                    <div class="form-login-title">
                                        <p class="form-login-text">Tài Khoản <span>*</span></p>
                                        <input name="Taikhoan" type="account" placeholder="Tài khoản" required class="form-login-input">
                                    </div>

                                    <div class="form-login-title">
                                        <p class="form-login-text">Mật Khẩu <span>*</span></p>
                                        <input name="Matkhau" type="password" placeholder="Mật khẩu" required class="form-login-input">
                                    </div>
                                </div>

                                <div class="forgot-password">
                                    Quên mật khẩu? Nhấn vào <a href="./forgotpass.php">đây </a>
                                </div>

                                <div class="login">
                                    <button class="login-text" type="submit">Đăng Nhập</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            <?php endif ?>
        </div>
    </div>

    <?php require_once(__DIR__ . '/layout/footer.php') ?>
    </div>

    <!--Back top  -->
    <div id="backtop">
        <i class="ti-angle-up backtop-icon"></i>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop()) {
                    $('#backtop').fadeIn();
                } else {
                    $('#backtop').fadeOut();
                }
            });
            $('#backtop').click(function() {
                $('html, body').animate({
                    scrollTop: 0
                }, 500);
            });
        });
    </script>
</body>

</html>