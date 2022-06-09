<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once(__DIR__ . '/layout/header.php')?>
    <title>Liên Hệ</title>
    
</head>
<body>
    <div class="app">
    <?php require_once(__DIR__ . '/layout/header1.php')?>

        <div class="content-contact">
        <?php require_once(__DIR__ . '/layout/menu.php')?>

            <div class="header-row">
                <div class="grid">
                    <ul class="header-row-list">
                        <li class="header-row-item ">
                            <a href="./index.html" class="header-row-link hover-primary-color">
                                Trang chủ
                            </a>
                        </li>
                        <li class="header-row-item">
                            / Liên hệ /
                        </li>
                    </ul>
                </div>
            </div>

            <div class="contact-backgr">
                <div class="grid">
                    <div class="content-contact-form">
                        <h2 class="content-contact-title">The next level</h2>
                        <ul class="content-contact-info">
                            <li class="content-contact-item">
                                <i class="footer-info-icon ti-location-pin"></i>
                                Địa chỉ: 282 Nguyễn Huy Tưởng, Thanh Xuân, Hà Nội
                                </li>
                            <li class="content-contact-item">
                                <i class="footer-info-icon ti-mobile"></i>
                                Số điện thoại: <a href="" class="content-contact-link hover-primary-color">0989948814</a>
                            </li>
                            <li class="content-contact-item">
                                <i class="footer-info-icon ti-email"></i>
                                Email: <a href="" class="content-contact-link hover-primary-color">thenextlevelvn@gmail.com</a>
                            </li>
                        </ul>

                        <div class="content-contact-main">
                            <h3 class="contact-input-title">Liên hệ với chúng tôi</h3>
                            <div class="content-contact-input">
                                <input type="text" placeholder="Họ tên*" required class="content-contact-text">
                            </div>
                            <div class="content-contact-input">
                                <input type="email" placeholder="Email*" required class="content-contact-text">
                            </div>
                            <div class="content-contact-input">
                                <input type="text" placeholder="Số điện thoại*" required class="content-contact-text">
                            </div>
                            <div class="content-contact-input-main">
                                <textarea name="" id="" cols="30" rows="10" placeholder="Nhập nội dung*" class="content-contact-text-main"></textarea>
                            </div> 
                            <button class="contact-btn">Gửi liên hệ của bạn</button> 
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php require_once(__DIR__ . '/layout/footer.php')?>
    </div>

        <!--Back top  -->
        <?php require_once(__DIR__ . '/layout/script.php')?>
</body>
</html>