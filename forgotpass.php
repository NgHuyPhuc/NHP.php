<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/Home.css">
    <link rel="stylesheet" href="./asset/css/Chung.css">
    <link rel="stylesheet" href="./asset/css/login.css">
    <link rel="stylesheet" href="./asset/css/lienhe.css">
    <link rel="stylesheet" href="./asset/css/forgotpass.css">
    <link rel="stylesheet" href="./asset/fonts/themify-icons-font/themify-icons/themify-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Quên mật khẩu</title>
    
</head>
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
                            / Đăng nhập /
                        </li>
                    </ul>
                </div>
            </div>

            <div class="contact-backgr">
                <div class="grid">
                    <div class="content-contact-form">
                        <h2 class="content-contact-title ">Đăng nhập tài khoản</h2>
                        <p class="content-contact-mini-title">Bạn chưa có tài khoản 
                            <a href="./Register.html" class="hover-decoration hover-primary-color">
                                Đăng ký tại đây
                            </a>
                        </p>
                        
                        <div class="forgot-pass-form">
                            <h3 class="forgot-pass-title">Đặt lại mật khẩu</h3>
                            <p class="forgot-pass-notification">
                                Chúng tôi sẽ gửi cho bạn một email để kích hoạt việc đặt lại mật khẩu.
                            </p>
                            <input type="email" required placeholder="Email" class="form-login-input">
                        </div>
                        
                        <div class="login">
                            <div class="login-text">Đăng Nhập</div>
                        </div>

                        <a href="./Login.html" class="forgot-pass-return hover-primary-color hover-decoration">
                            Quay lại
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="footer-email">
                <p class="footer-email-title">Đăng ký nhận tên</p>
                <div class="footer-email-import">
                    <input type="email"class="footer-email-text" required placeholder="Nhập địa chỉ email">
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
                                    Chính sách bán hàng</a></li>
                            <li class="footer-info-item">
                                <a href="" class="footer-info-link hover-decoration">
                                    Chính sách đổi trả</a></li>
                            <li class="footer-info-item">
                                <a href="" class="footer-info-link hover-decoration">
                                    Chính sách bảo mật</a></li>
                            <li class="footer-info-item">
                                <a href="" class="footer-info-link hover-decoration">
                                    Điều khoản dịch vụ</a></li>
                            
                        </ul>
                    </div>

                    <div class="grid__column-4 footer-info-form">
                        <p class="footer-info-title">Thông Tin</p>
                        <ul class="footer-info-list">
                            <li class="footer-info-item">
                                <a href="" class="footer-info-link hover-decoration">
                                    Hướng dẫn chọn size</a></li>
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
                                </a></li>
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

    <div id="backtop">
        <i class="ti-angle-up backtop-icon"></i>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if($(this).scrollTop()){
                    $('#backtop').fadeIn();
                }else{
                    $('#backtop').fadeOut();
                }
            });
            $('#backtop').click(function(){
                $('html, body').animate({
                    scrollTop: 0
                }, 500);
            });
        });
    </script>
</body>
</html>