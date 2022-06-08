<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once(__DIR__ . '/layout/header.php')?>
    <title>Sale</title>
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
                        <li class="header-row-item ">
                            <a href="./sanpham.html" class="header-row-link hover-primary-color">
                                / Danh mục
                            </a>
                        </li>
                        <li class="header-row-item">
                            / The Next Level - Random Sales /
                        </li>
                    </ul>
                </div>
            </div>

            <div class="content-product">
                <div class="grid">
                    <div class="grid-row">
                        <div class="grid__column-2">
                            <nav class="category" style="padding-bottom: 44px;">
                                <h3 class="category-heading">Thương hiệu</h3>
                                <div class="category-list border-bottom">
                                    <input type="checkbox" id="nextlv" class="category-input" >
                                    <label for="nextlv"> Next Level</label><br>
                                    <input type="checkbox" id="lvwibu" class="category-input" >
                                    <label for="lvwibu"> Next Level Wibu</label><br>
                                </div>

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
                                <h2 class="home-filter-title">The Next Level - Random Sales</h2>
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
                                        <div href="" alt="Áo thun You Are A Kirby" class="new-shirt-item">
                                            <div class="new-shirt-item-img" style="background-image: url('./asset/img/carehot1.jpg');">
                                                <span class="new-shirt-search">
                                                    <i class="ti-search js-product-details"></i>
                                                </span>
                                                <div class="backgr-sale">
                                                    <div class="number-sale"> -24%</div>
                                                </div>
                                            </div>
                                            <div class="new-shirt-item__price">
                                                <h4 class="new-shirt-item-name hover-primary-color">Áo thun You Are A Kirby</h4>
                                                <span class="new-shirt-item__price-current">220,000đ</span>
                                                <span class="new-shirt-item__price-old">290,000đ</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid__column-5 new-shirt-list">
                                      <a href="" alt="Áo thun Hades Chibi" class="new-shirt-item">
                                            <div class="new-shirt-item-img" style="background-image: url('./asset/img/carehot2.jpg');">
                                                <span class="new-shirt-search">
                                                    <i class="ti-search js-product-details"></i>
                                                </span>
                                                <div class="backgr-sale">
                                                    <div class="number-sale"> -24%</div>
                                                </div>
                                            </div>
                                            <div class="new-shirt-item__price">
                                                <h4 class="new-shirt-item-name hover-primary-color">Áo thun Hades Chibi</h4>
                                                <span class="new-shirt-item__price-current">220,000đ</span>
                                                <span class="new-shirt-item__price-old">290,000đ</span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="grid__column-5 new-shirt-list">
                                        <div href="" alt="Áo thun You Are A Kirby" class="new-shirt-item">
                                            <div class="new-shirt-item-img" style="background-image: url('./asset/img/carehot3.jpg');">
                                                <span class="new-shirt-search">
                                                    <i class="ti-search js-product-details"></i>
                                                </span>
                                                <div class="backgr-sale">
                                                    <div class="number-sale"> -24%</div>
                                                </div>
                                            </div>
                                            <div class="new-shirt-item__price">
                                                <h4 class="new-shirt-item-name hover-primary-color">Áo thun You Are A Kirby</h4>
                                                <span class="new-shirt-item__price-current">220,000đ</span>
                                                <span class="new-shirt-item__price-old">290,000đ</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid__column-5 new-shirt-list">
                                        <div href="" alt="Áo thun Giyu Tomioka" class="new-shirt-item">
                                            <div class="new-shirt-item-img" style="background-image: url('./asset/img/carehot4.jpg');">
                                                <span class="new-shirt-search">
                                                    <i class="ti-search js-product-details"></i>
                                                </span>
                                                <div class="backgr-sale">
                                                    <div class="number-sale"> -24%</div>
                                                </div>
                                            </div>
                                            <div class="new-shirt-item__price">
                                                <h4 class="new-shirt-item-name hover-primary-color">Áo thun Giyu Tomioka</h4>
                                                <span class="new-shirt-item__price-current">220,000đ</span>
                                                <span class="new-shirt-item__price-old">290,000đ</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid__column-5 new-shirt-list">
                                    <div href="" alt="Áo thun Disconnect" class="new-shirt-item">
                                            <div class="new-shirt-item-img" style="background-image: url('./asset/img/carehot5.jpg');">
                                                <span class="new-shirt-search">
                                                    <i class="ti-search js-product-details"></i>
                                                </span>
                                                <div class="backgr-sale">
                                                    <div class="number-sale"> -24%</div>
                                                </div>
                                            </div>
                                            <div class="new-shirt-item__price">
                                                <h4 class="new-shirt-item-name hover-primary-color">Áo thun Disconnect</h4>
                                                <span class="new-shirt-item__price-current">220,000đ</span>
                                                <span class="new-shirt-item__price-old">290,000đ</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                            </div>

                            <!-- <div class="home-number-page">
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
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>

            <?php require_once(__DIR__ . '/layout/footer.php')?>
        </div>
    </div>

    <?php require_once(__DIR__ . '/layout/script.php')?>
</body>
</html>