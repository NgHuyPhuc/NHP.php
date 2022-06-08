<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once(__DIR__ . '/layout/header.php'); ?>
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
                            <a href="./sanpham.html" class="header-row-link hover-primary-color">
                                / Danh mục
                            </a>
                        </li>
                        <li class="header-row-item">
                            / Tất cả các sản phẩm áo Wibu /
                        </li>
                    </ul>
                </div>
            </div>

            <div class="content-product">
                <div class="grid">
                    <div class="grid-row">
                        <div class="grid__column-2">
                            <nav class="category">
                                <h3 class="category-heading">Mức giá</h3>
                                <div class="category-list border-bottom">
                                    <input type="checkbox" id="price-min" class="category-input">
                                    <label for="price-min"> Dưới 100.000đ</label><br>
                                    <input type="checkbox" id="min-second" class="category-input">
                                    <label for="min-second"> 100.000đ-200.000đ</label><br>
                                    <input type="checkbox" id="min-third" class="category-input">
                                    <label for="min-third"> 200.000đ-300.000đ</label><br>
                                    <input type="checkbox" id="price-medium" class="category-input">
                                    <label for="price-medium"> 300.000đ-500.000đ</label><br>
                                    <input type="checkbox" id="nearest" class="category-input">
                                    <label for="nearest"> 500.000đ-1.000.000đ</label><br>
                                    <input type="checkbox" id="max" class="category-input">
                                    <label for="max"> Trên 1.000.000đ</label><br>
                                </div>

                                <h3 class="category-heading">Loại</h3>
                                <div class="category-list">
                                    <input type="checkbox" id="T-Shirt" class="category-input" >
                                    <label for="T-Shirt"> Basic T-Shirt</label><br>
                                    <input type="checkbox" id="long-sleeves" class="category-input" >
                                    <label for="long-sleeves"> Áo dài tay</label><br>
                                    <input type="checkbox" id="Sweater" class="category-input" >
                                    <label for="Sweater"> Sweater</label><br>
                                    <input type="checkbox" id="Hoodie" class="category-input" >
                                    <label for="Hoodie"> Hoodie</label><br>
                                    <input type="checkbox" id="end" class="category-input" >
                                    <label for="end"> HSBT</label><br>
                                </div>

                                <div class="product-care">
                                    <div class="product-title">
                                        <h3>Có thể bạn quan tâm</h3>
                                    </div>
                                    
                                    <div class="product-care-hot">
                                        <img src="./asset/img/carehot1.jpg" alt="Áo thun You Are A Kirby" class="product-care-hot-img">
                                        <div class="product-care-profile">
                                            <p class="product-care-name hover-primary-color">Áo thun You Are A Kirby</p>
                                            <div class="product-care-price">
                                                <p class="product-care-new-price">220.000đ</p>
                                                <p class="product-care-old-price">290.000đ</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-care-hot">
                                        <img src="./asset/img/carehot2.jpg" alt="Áo thun Hades Chibi" class="product-care-hot-img">
                                        <div class="product-care-profile">
                                            <p class="product-care-name hover-primary-color">Áo thun Hades Chibi</p>
                                            <div class="product-care-price">
                                                <p class="product-care-new-price">220.000đ</p>
                                                <p class="product-care-old-price">290.000đ</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-care-hot">
                                        <img src="./asset/img/carehot3.jpg" alt="Áo thun Zhongli - Genshin Impact" class="product-care-hot-img">
                                        <div class="product-care-profile">
                                            <p class="product-care-name hover-primary-color">Áo thun Zhongli - Genshin Impact</p>
                                            <div class="product-care-price">
                                                <p class="product-care-new-price">220.000đ</p>
                                                <p class="product-care-old-price">290.000đ</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-care-hot">
                                        <img src="./asset/img/carehot4.jpg" alt="Áo thun Giyu Tomioka" class="product-care-hot-img">
                                        <div class="product-care-profile">
                                            <p class="product-care-name hover-primary-color">Áo thun Giyu Tomioka</p>
                                            <div class="product-care-price">
                                                <p class="product-care-new-price">220.000đ</p>
                                                <p class="product-care-old-price">290.000đ</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-care-hot">
                                        <img src="./asset/img/carehot5.jpg" alt="Áo thun Disconnect" class="product-care-hot-img">
                                        <div class="product-care-profile">
                                            <p class="product-care-name hover-primary-color">Áo thun Disconnect</p>
                                            <div class="product-care-price">
                                                <p class="product-care-new-price">220.000đ</p>
                                                <p class="product-care-old-price">290.000đ</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>

                        <div class="grid__column-10 product-main">
                            <div class="home-filter border-bottom">
                                <h2 class="home-filter-title">Tất cả các sản phẩm áo Wibu</h2>
                                <span class="home-filter__label">Sắp xếp:</span>
                                <button class="Home-filter__btn">Tên A
                                    <i class="home-filter-icon ti-arrow-right"></i> Z</button>
                                <button class="Home-filter__btn">Tên Z
                                    <i class="home-filter-icon ti-arrow-right"></i> A</button>
                                <button class="Home-filter__btn">Giá tăng dần</button>
                                <button class="Home-filter__btn">Giá giảm dần</button>
                                <button class="Home-filter__btn">Hàng mới</button>
                            </div>

                            <div class="home-product">
                                <div class="grid-row">
                                    <div class="grid__column-5 new-shirt-list">
                                        <div href="" alt="Hoodie Beast of Darkness - Berserk" class="new-shirt-item">
                                            <div class="new-shirt-item-img" style="background-image: url('./asset/img/wibu1.jpg');">
                                                <span class="new-shirt-search">
                                                    <i class="ti-search js-product-details"></i>
                                                </span>
                                            </div>
                                            <div class="new-shirt-item__price">
                                                <h4 class="new-shirt-item-name hover-primary-color">Hoodie Beast of Darkness - Berserk</h4>
                                                <span class="new-shirt-item__price-current">410,000đ</span>
                                                <span class="new-shirt-item__price-old">450,000đ</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid__column-5 new-shirt-list">
                                        <div href="" alt="Sweater Beast of Darkness - Berserk" class="new-shirt-item">
                                            <div class="new-shirt-item-img" style="background-image: url('./asset/img/wibu2.jpg');">
                                                <span class="new-shirt-search">
                                                    <i class="ti-search js-product-details"></i>
                                                </span>
                                            </div>
                                            <div class="new-shirt-item__price">
                                                <h4 class="new-shirt-item-name hover-primary-color">Sweater Beast of Darkness - Berserk</h4>
                                                <span class="new-shirt-item__price-current">360,000đ</span>
                                                <span class="new-shirt-item__price-old">400,000đ</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid__column-5 new-shirt-list">
                                        <div href="" alt="Áo thun dài tay Beast of Darkness - Berserk" class="new-shirt-item">
                                            <div class="new-shirt-item-img" style="background-image: url('./asset/img/wibu3.jpg');">
                                                <span class="new-shirt-search">
                                                    <i class="ti-search js-product-details"></i>
                                                </span>
                                            </div>
                                            <div class="new-shirt-item__price">
                                                <h4 class="new-shirt-item-name hover-primary-color">Áo thun dài tay Beast of Darkness - Berserk</h4>
                                                <span class="new-shirt-item__price-current">280,000đ</span>
                                                <span class="new-shirt-item__price-old">320,000đ</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid__column-5 new-shirt-list">
                                        <div href="" alt="Áo thun Beast of Darkness - Berserk" class="new-shirt-item">
                                            <div class="new-shirt-item-img" style="background-image: url('./asset/img/wibu4.jpg');">
                                                <span class="new-shirt-search">
                                                    <i class="ti-search js-product-details"></i>
                                                </span>
                                            </div>
                                            <div class="new-shirt-item__price">
                                                <h4 class="new-shirt-item-name hover-primary-color">Áo thun Beast of Darkness - Berserk</h4>
                                                <span class="new-shirt-item__price-current">250,000đ</span>
                                                <span class="new-shirt-item__price-old">290,000đ</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid__column-5 new-shirt-list">
                                        <div href="" alt="Hoodie Giyu Tomioka" class="new-shirt-item">
                                            <div class="new-shirt-item-img" style="background-image: url('./asset/img/wibu5.jpg');">
                                                <span class="new-shirt-search">
                                                    <i class="ti-search js-product-details"></i>
                                                </span>
                                            </div>
                                            <div class="new-shirt-item__price">
                                                <h4 class="new-shirt-item-name hover-primary-color">Hoodie Giyu Tomioka</h4>
                                                <span class="new-shirt-item__price-current">410,000đ</span>
                                                <span class="new-shirt-item__price-old">450,000đ</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid__column-5 new-shirt-list">
                                        <div href="" alt="Sweater Giyu Tomioka" class="new-shirt-item">
                                            <div class="new-shirt-item-img" style="background-image: url('./asset/img/wibu6.jpg');">
                                                <span class="new-shirt-search">
                                                    <i class="ti-search js-product-details"></i>
                                                </span>
                                            </div>
                                            <div class="new-shirt-item__price">
                                                <h4 class="new-shirt-item-name hover-primary-color">Sweater Giyu Tomioka</h4>
                                                <span class="new-shirt-item__price-current">3600,000đ</span>
                                                <span class="new-shirt-item__price-old">400,000đ</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid__column-5 new-shirt-list">
                                        <div href="" alt="Áo thun dài tay Giyu Tomioka" class="new-shirt-item">
                                            <div class="new-shirt-item-img" style="background-image: url('./asset/img/wibu7.jpg');">
                                                <span class="new-shirt-search">
                                                    <i class="ti-search js-product-details"></i>
                                                </span>
                                            </div>
                                            <div class="new-shirt-item__price">
                                                <h4 class="new-shirt-item-name hover-primary-color">Áo thun dài tay Giyu Tomioka</h4>
                                                <span class="new-shirt-item__price-current">280,000đ</span>
                                                <span class="new-shirt-item__price-old">320,000đ</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid__column-5 new-shirt-list">
                                        <div href="" alt="Áo thun Giyu Tomioka" class="new-shirt-item">
                                            <div class="new-shirt-item-img" style="background-image: url('./asset/img/carehot4.jpg');">
                                                <span class="new-shirt-search">
                                                    <i class="ti-search js-product-details"></i>
                                                </span>
                                            </div>
                                            <div class="new-shirt-item__price">
                                                <h4 class="new-shirt-item-name hover-primary-color">Áo thun Giyu Tomioka</h4>
                                                <span class="new-shirt-item__price-current">250,000đ</span>
                                                <span class="new-shirt-item__price-old">290,000đ</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid__column-5 new-shirt-list">
                                        <div href="" alt="Hoodie Wings of Freedom" class="new-shirt-item">
                                            <div class="new-shirt-item-img" style="background-image: url('./asset/img/wibu8.jpg');">
                                                <span class="new-shirt-search">
                                                    <i class="ti-search js-product-details"></i>
                                                </span>
                                            </div>
                                            <div class="new-shirt-item__price">
                                                <h4 class="new-shirt-item-name hover-primary-color">Hoodie Wings of Freedom</h4>
                                                <span class="new-shirt-item__price-current">410,000đ</span>
                                                <span class="new-shirt-item__price-old">450,000đ</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid__column-5 new-shirt-list">
                                        <div href="" alt="Sweater Wings of Freedom" class="new-shirt-item">
                                            <div class="new-shirt-item-img" style="background-image: url('./asset/img/wibu9.jpg');">
                                                <span class="new-shirt-search">
                                                    <i class="ti-search js-product-details"></i>
                                                </span>
                                            </div>
                                            <div class="new-shirt-item__price">
                                                <h4 class="new-shirt-item-name hover-primary-color">Sweater Wings of Freedom</h4>
                                                <span class="new-shirt-item__price-current">360,000đ</span>
                                                <span class="new-shirt-item__price-old">400,000đ</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid__column-5 new-shirt-list">
                                        <div href="" alt="Áo thun dài tay Wings of Freedom" class="new-shirt-item">
                                            <div class="new-shirt-item-img" style="background-image: url('./asset/img/wibu10.jpg');">
                                                <span class="new-shirt-search">
                                                    <i class="ti-search js-product-details"></i>
                                                </span>
                                            </div>
                                            <div class="new-shirt-item__price">
                                                <h4 class="new-shirt-item-name hover-primary-color">Áo thun dài tay Wings of Freedom</h4>
                                                <span class="new-shirt-item__price-current">280,000đ</span>
                                                <span class="new-shirt-item__price-old">320,000đ</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid__column-5 new-shirt-list">
                                        <div href="" alt="Áo thun Wings of Freedom" class="new-shirt-item">
                                            <div class="new-shirt-item-img" style="background-image: url('./asset/img/wibu11.jpg');">
                                                <span class="new-shirt-search">
                                                    <i class="ti-search js-product-details"></i>
                                                </span>
                                            </div>
                                            <div class="new-shirt-item__price">
                                                <h4 class="new-shirt-item-name hover-primary-color">Áo thun Wings of Freedom</h4>
                                                <span class="new-shirt-item__price-current">250,000đ</span>
                                                <span class="new-shirt-item__price-old">290,000đ</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid__column-5 new-shirt-list">
                                        <div href="" alt="Áo thun dài tay Loki - Back To The Sacred Timeline" class="new-shirt-item">
                                            <div class="new-shirt-item-img" style="background-image: url('./asset/img/homeproduct9.jpg');">
                                                <span class="new-shirt-search">
                                                    <i class="ti-search js-product-details"></i>
                                                </span>
                                            </div>
                                            <div class="new-shirt-item__price">
                                                <h4 class="new-shirt-item-name hover-primary-color">Áo thun dài tay Loki - Back To The Sacred Timeline</h4>
                                                <span class="new-shirt-item__price-current">280,000đ</span>
                                                <span class="new-shirt-item__price-old">320,000đ</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid__column-5 new-shirt-list">
                                        <div href="" alt="Áo thun Loki - Back To The Sacred Timeline" class="new-shirt-item">
                                            <div class="new-shirt-item-img" style="background-image: url('./asset/img/new_shirt4.jpg');">
                                                <span class="new-shirt-search">
                                                    <i class="ti-search js-product-details"></i>
                                                </span>
                                            </div>
                                            <div class="new-shirt-item__price">
                                                <h4 class="new-shirt-item-name hover-primary-color">Áo thun Loki - Back To The Sacred Timeline</h4>
                                                <span class="new-shirt-item__price-current">250,000đ</span>
                                                <span class="new-shirt-item__price-old">290,000đ</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid__column-5 new-shirt-list">
                                        <div href="" alt="Hoodie Son Goku Đánh Bi-a" class="new-shirt-item">
                                            <div class="new-shirt-item-img" style="background-image: url('./asset/img/homeproduct10.jpg');">
                                                <span class="new-shirt-search">
                                                    <i class="ti-search js-product-details"></i>
                                                </span>
                                            </div>
                                            <div class="new-shirt-item__price">
                                                <h4 class="new-shirt-item-name hover-primary-color">Hoodie Son Goku Đánh Bi-a</h4>
                                                <span class="new-shirt-item__price-current">410,000đ</span>
                                                <span class="new-shirt-item__price-old">450,000đ</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="home-number-page">
                                <ul class="number-page-list">
                                    <li class="number-page-item">
                                        <a href="" class="number-page-link">
                                            <i class="ti-angle-left number-page-icon"></i>
                                        </a></li>

                                    <li class="number-page-item">
                                        <a href="" class="number-page-link">1</a>
                                    </li>

                                    <li class="number-page-item ">
                                        <a href="" class="number-page-link number-page-active">2</a>
                                    </li>

                                    <li class="number-page-item">
                                        <a href="" class="number-page-link">3</a>
                                    </li>

                                    <li class="number-page-item">
                                        <a href="" class="number-page-link">...</a>
                                    </li>

                                    <li class="number-page-item">
                                        <a href="" class="number-page-link">8</a>
                                    </li>

                                    <li class="number-page-item">
                                        <a href="" class="number-page-link">
                                            <i class="ti-angle-right"></i>
                                        </a></li>
                                </ul>
                            </div>
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
    </div>

        <!-- Modal layout -->
        <div class="modal1 js-modal">
            <div class="modal1-container js-modal-container">
                <i class="modal-icon-close ti-close js-modal-close"></i>
                <div class="modal__img">
                    <div id="main-img">
                        <img src="./asset/img/modalimg.jpg" alt="Áo thun Assassin's Creed Valhalla " id="modal__img-big"> 
                    </div>
    
                    <ul class="modal__img-list">
                        <l><img class="modal__img-small" src="./asset/img/modalimg.jpg" alt="Áo thun Assassin's Creed Valhalla" onclick="changeImage('one')" id="one"></l>
                        <l><img class="modal__img-small" src="./asset/img/modal-img-white.jpg" alt="Áo thun Assassin's Creed Valhalla" onclick="changeImage('two')" id="two"></l>
                    </ul>
                    <script src="./asset/js/img.js"></script>
                </div>
    
                <div class="modal__content">
                    <h3 class="modal__content-title">Áo thun Assassin's Creed Valhalla</h3>
                    <p class="modal__content-trademark">Thương hiệu: <span href="" style="color:var(--primary-color);">Next Level</span> |
                    Mã sản phẩm: <span href="" style="color:var(--primary-color);">Đang cập nhật</span>
                    </p>
    
                    <div class="modal__price">
                        <div class="modal__price_new">250.000đ</div>
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
                        <h3  class="modal__shirt-color-title" >Màu sắc:</h3>
                        <div  class="modal__shirt-color-black modal__shirt-color-active"></div>
                        <div class="modal__shirt-color-white"></div>
                    </div>
    
                    <div class="modal-reduce">
                        <h3 class="modal-reduce-text">Số Lượng:</h3>
                        <input aria-label="quantity" class="input-qty" max="999" min="1" name="" type="number" value="1">
                    </div>
    
                    <div class="modal__add-cart">
                        <input type="button" value="Thêm vào giỏ hàng" id="btn-modal-add">
                        <script language="javascript">
                            var button = document.getElementById("btn-modal-add");
                            button.onclick = function(){
                                swal("Xác nhận!", "Thêm sản phẩm thành công");
                            }
                        </script>
                    </div>
                </div>
    
            </div>
        </div>
    
        <!-- JS open/close modal -->
         <script>
            const buyBtns = document.querySelectorAll('.js-product-details')
            const modal = document.querySelector('.js-modal')
            const modalClose = document.querySelector('.js-modal-close')
            const modalContainer = document.querySelector('.js-modal-container')
            
            // Hàm hiển thị modal chi tiết sp (thêm class open vào modal1)
            function showProductDetails(){
                modal.classList.add('open')
            }
            
            // Hàm ẩn modal chi tiết sp (gỡ bỏ class open vào modal1)
            function hideProductDetails(){
                modal.classList.remove('open')
            }
            
            //Lặp qua từng thẻ div và nghe hành vi click 
            for(const buyBtn of buyBtns){
                buyBtn.addEventListener('click', showProductDetails)
            }
    
            // Nghe hành vi click vào div close
            modalClose.addEventListener('click', hideProductDetails)
            modal.addEventListener('click', hideProductDetails)
            modalContainer.addEventListener('click', function(event) {
                event.stopPropagation()
            })
        </script> 
    
        <!--Back top  -->
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
    
        <!-- Alert -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>