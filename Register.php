<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once(__DIR__ . '/layout/header.php'); ?>
</head>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // upload file
        if(isset($_FILES['file'])){
            $errors= array();
            $file_name = $_FILES['file']['name'];
            $file_size =$_FILES['file']['size'];
            $file_tmp =$_FILES['file']['tmp_name'];
            $file_type=$_FILES['file']['type'];
            $file_ext=strtolower(end(explode('.',$_FILES['file']['name'])));
            $expensions= array("jpeg","jpg","png");
            
            if(in_array($file_ext,$expensions)=== false){
               $errors[]="Không chấp nhận định dạng ảnh có đuôi này, mời bạn chọn JPEG hoặc PNG.";
        }
                        
            if(empty($errors)==true){
               move_uploaded_file($file_tmp, '../../public/img/user/'.$file_name);
               
            }
        }
        //
        $data =
            [
                "TaiKhoan" => $_POST['TaiKhoan'] ? $_POST['TaiKhoan'] : '',
                "MatKhau" => md5($_POST['MatKhau']),
                "Anh" => "public/img/user/".$file_name,
                "MaKH" => $_POST['MaKH'] ? $_POST['MaKH'] : '',
            ];
        
        $insert = $db->insert('acckhach', $data);
        if ($insert > 0) {
            $_SESSION['error']="Thêm thành công";
            header('Location: ./index.php');
        } else
            $_SESSION['error']="không thành công";
    }
    
?>
<body>
    <div class="app">
        <?php require_once(__DIR__ . '/layout/header1.php') ?>

        <div class="content-contact">
            <?php require_once(__DIR__ . '/layout/menu.php') ?>

            <div class="header-row">
                <div class="grid">
                    <ul class="header-row-list">
                        <li class="header-row-item ">
                            <a href="./index.html" class="header-row-link hover-primary-color">
                                Trang chủ
                            </a>
                        </li>
                        <li class="header-row-item ">
                            <a href="./Login.html" class="header-row-link hover-primary-color">
                                / Tài khoản
                            </a>
                        </li>
                        <li class="header-row-item">
                            / Đăng ký /
                        </li>
                    </ul>
                </div>
            </div>

            <div class="contact-backgr">
                <div class="grid">
                    <div class="content-contact-form ">
                        <h2 class="content-contact-title">Đăng ký tài khoản</h2>
                        <p class="content-contact-mini-title">Bạn đã có tài khoản?
                            <a href="./Login.html" class="hover-decoration hover-primary-color">
                                Đăng nhập tại đây
                            </a>
                        </p>
                        <div class="content-form-login ">
                            <h3 class="register-title">Thông tin cá nhân</h3>
                            <div class="form-login-title">
                                <p class="form-login-text">Họ <span>*</span></p>
                                <input type="text" placeholder="Email" required class="form-login-input">
                            </div>

                            <div class="form-login-title">
                                <p class="form-login-text">Tên <span>*</span></p>
                                <input type="text" placeholder="Email" required class="form-login-input">
                            </div>

                            <div class="form-login-title">
                                <p class="form-login-text">Số Điện Thoại <span>*</span></p>
                                <input type="text" placeholder="Email" required class="form-login-input">
                            </div>

                            <div class="form-login-title">
                                <p class="form-login-text">Email <span>*</span></p>
                                <input type="email" placeholder="Email" required class="form-login-input">
                            </div>

                            <div class="form-login-title">
                                <p class="form-login-text">Mật khẩu <span>*</span></p>
                                <input type="password" placeholder="Mật khẩu" required class="form-login-input">
                            </div>
                        </div>

                        <div class="login">
                            <div class="login-text">Đăng Ký</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="footer-email">
                <p class="footer-email-title">Đăng ký nhận tên</p>
                <div class="footer-email-import">
                    <input type="email" class="footer-email-text" required placeholder="Nhập địa chỉ email">
                    <button class="btn-submit">Submit</button>
                </div>
            </div>

            <div class="footer-info">
                <div class="grid footer-info-flex">
                    <div class="grid__column-4 footer-info-form">
                        <p class="footer-info-title">Về Chúng Tôi</p>
                        <ul class="footer-info-list">
                            <li class="footer-info-item">HP - Sự lựa chọn của mọi Game Thủ</li>
                            <li class="footer-info-item">
                                <i class="footer-info-icon ti-location-pin"></i>
                                Địa chỉ: 282 Nguyễn Huy Tưởng, Thanh Xuân, Hà Nội
                            </li>
                            <li class="footer-info-item">
                                <i class="footer-info-icon ti-mobile"></i>
                                Số điện thoại: <p class="hover-decoration" style="display: inline-block; margin: 0;"> 0989948814</p>
                            </li>
                            <li class="footer-info-item">
                                <i class="footer-info-icon ti-email"></i>
                                Email: <p class="hover-decoration" style="display: inline-block; margin: 0;">thenextlevelvn@gmail.com</p>
                            </li>
                        </ul>
                    </div>

                    <div class="grid__column-4 footer-info-form">
                        <p class="footer-info-title">Chính Sách</p>
                        <ul class="footer-info-list">
                            <li class="footer-info-item">
                                <a href="" class="footer-info-link hover-decoration">
                                    Chính sách bán hàng</a>
                            </li>
                            <li class="footer-info-item">
                                <a href="" class="footer-info-link hover-decoration">
                                    Chính sách đổi trả</a>
                            </li>
                            <li class="footer-info-item">
                                <a href="" class="footer-info-link hover-decoration">
                                    Chính sách bảo mật</a>
                            </li>
                            <li class="footer-info-item">
                                <a href="" class="footer-info-link hover-decoration">
                                    Điều khoản dịch vụ</a>
                            </li>

                        </ul>
                    </div>

                    <div class="grid__column-4 footer-info-form">
                        <p class="footer-info-title">Thông Tin</p>
                        <ul class="footer-info-list">
                            <li class="footer-info-item">
                                <a href="" class="footer-info-link hover-decoration">
                                    Hướng dẫn chọn size</a>
                            </li>
                            <li class="footer-info-item">
                                <a href="" class="footer-info-link hover-decoration">
                                    Hướng dẫn bảo quản</a>
                            </li>
                        </ul>
                    </div>

                    <div class="grid__column-4 footer-info-form">
                        <p class="footer-info-title">Theo Dõi Chúng Tôi</p>
                        <ul class="footer-info-list footer-list-icon">
                            <li class="footer-info-item">
                                <a href="https://www.facebook.com/thenextlevelvn" class="footer-info-link ">
                                    <i class="footer-link-connect ti-facebook"></i>
                                </a>
                            </li>
                            <li class="footer-info-item">
                                <a href="https://twitter.com/" class="footer-info-link ">
                                    <i class="footer-link-connect ti-twitter-alt"></i>
                                </a>
                            </li>
                            <li class="footer-info-item">
                                <a href="https://www.pinterest.com/" class="footer-info-link ">
                                    <i class="footer-link-connect ti-pinterest"></i>
                                </a>
                            </li>
                            <li class="footer-info-item">
                                <a href="https://www.instagram.com/thenextlevelnepal/" class="footer-info-link ">
                                    <i class="footer-link-connect ti-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer-license">
                <div class="grid">
                    <div class="footer-license-form">
                        <p class="footer-license-text">Bản quyền thuộc về The Next Level |</p>
                        <a href="https://www.haravan.com/?utm_campaign=poweredby&utm_medium=haravan&utm_source=onlinestore" class="footer-license-link"> Powered by Haravan</a>
                    </div>
                </div>
            </div>
        </div>
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