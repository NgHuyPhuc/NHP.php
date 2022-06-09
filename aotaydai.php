<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once(__DIR__ . '/layout/header.php')?>
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
                            / Áo dài tay mới nhất /
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
                                    <input type="checkbox" id="goty2020" class="category-input" >
                                    <label for="goty2020"> GOTY2020</label><br>
                                    <input type="checkbox" id="HSBT" class="category-input" >
                                    <label for="HSBT"> HSBT</label><br>
                                </div>

                                <h3 class="category-heading">Mức giá</h3>
                                <div class="category-list border-bottom">
                                    <input type="checkbox" id="price-min" class="category-input">
                                    <label for="price-min"> Dưới 10.000đ</label><br>
                                    <input type="checkbox" id="min-second" class="category-input">
                                    <label for="min-second"> 10.000đ-200.000đ</label><br>
                                    <input type="checkbox" id="min-third" class="category-input">
                                    <label for="min-third"> 20.000đ-300.000đ</label><br>
                                    <input type="checkbox" id="price-medium" class="category-input">
                                    <label for="price-medium"> 30.000đ-500.000đ</label><br>
                                    <input type="checkbox" id="nearest" class="category-input">
                                    <label for="nearest"> 50.000đ-1.000.000đ</label><br>
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
                                <h2 class="home-filter-title">Áo dài tay mới nhất</h2>
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
                                        <div href="" alt="" class="new-shirt-item">
                                            <div class="new-shirt-item-img" style="background-image: url('./asset/img/banner1.jpg');">
                                                <span class="new-shirt-search">
                                                    <i class="ti-search js-product-details"></i>
                                                </span>
                                            </div>
                                            <div class="new-shirt-item__price">
                                                <h4 class="new-shirt-item-name hover-primary-color">Áo thun dài tay Snorlax Đừng Làm Phiền</h4>
                                                <span class="new-shirt-item__price-current">280,000đ</span>
                                                <span class="new-shirt-item__price-old">320,000đ</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid__column-5 new-shirt-list">
                                        <div href="" alt="Áo thun dài tay Dark Souls 3 - Soul of Cinder" class="new-shirt-item">
                                            <div class="new-shirt-item-img" style="background-image: url('./asset/img/banner2.jpg');">
                                                <span class="new-shirt-search">
                                                    <i class="ti-search js-product-details"></i>
                                                </span>
                                            </div>
                                            <div class="new-shirt-item__price">
                                                <h4 class="new-shirt-item-name hover-primary-color">Áo thun dài tay Dark Souls 3 - Soul of Cinder</h4>
                                                <span class="new-shirt-item__price-current">280,000đ</span>
                                                <span class="new-shirt-item__price-old">320,000đ</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid__column-5 new-shirt-list">
                                        <div href="" alt="Áo thun dài tay Yasuo & Yone" class="new-shirt-item">
                                            <div class="new-shirt-item-img" style="background-image: url('./asset/img/banner3.jpg');">
                                                <span class="new-shirt-search">
                                                    <i class="ti-search js-product-details"></i>
                                                </span>
                                            </div>
                                            <div class="new-shirt-item__price">
                                                <h4 class="new-shirt-item-name hover-primary-color">Áo thun dài tay Yasuo & Yone</h4>
                                                <span class="new-shirt-item__price-current">280,000đ</span>
                                                <span class="new-shirt-item__price-old">320,000đ</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid__column-5 new-shirt-list">
                                        <div href="" alt="Áo thun dài tay Dark Souls - Game Là Dễ" class="new-shirt-item">
                                            <div class="new-shirt-item-img" style="background-image: url('./asset/img/banner4.jpg');">
                                                <span class="new-shirt-search">
                                                    <i class="ti-search js-product-details"></i>
                                                </span>
                                            </div>
                                            <div class="new-shirt-item__price">
                                                <h4 class="new-shirt-item-name hover-primary-color">Áo thun dài tay Dark Souls - Game Là Dễ</h4>
                                                <span class="new-shirt-item__price-current">280,000đ</span>
                                                <span class="new-shirt-item__price-old">320,000đ</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid__column-5 new-shirt-list">
                                        <div href="" alt="Áo thun dài tay Chạy đi T-Rex" class="new-shirt-item">
                                            <div class="new-shirt-item-img" style="background-image: url('./asset/img/banner5.jpg');">
                                                <span class="new-shirt-search">
                                                    <i class="ti-search js-product-details"></i>
                                                </span>
                                            </div>
                                            <div class="new-shirt-item__price">
                                                <h4 class="new-shirt-item-name hover-primary-color">Áo thun dài tay Chạy đi T-Rex</h4>
                                                <span class="new-shirt-item__price-current">280,000đ</span>
                                                <span class="new-shirt-item__price-old">320,000đ</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid__column-5 new-shirt-list">
                                        <div href="" alt="Áo thun dài tay Ayanami Rei - Neon Genesis Evangelion" class="new-shirt-item">
                                            <div class="new-shirt-item-img" style="background-image: url('./asset/img/aotaydai1.jpg');">
                                                <span class="new-shirt-search">
                                                    <i class="ti-search js-product-details"></i>
                                                </span>
                                            </div>
                                            <div class="new-shirt-item__price">
                                                <h4 class="new-shirt-item-name hover-primary-color">Áo thun dài tay Ayanami Rei - Neon Genesis Evangelion</h4>
                                                <span class="new-shirt-item__price-current">280,000đ</span>
                                                <span class="new-shirt-item__price-old">320,000đ</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid__column-5 new-shirt-list">
                                        <div href="" alt="Áo thun dài tay Pikachu" class="new-shirt-item">
                                            <div class="new-shirt-item-img" style="background-image: url('./asset/img/aotaydai2.jpg');">
                                                <span class="new-shirt-search">
                                                    <i class="ti-search js-product-details"></i>
                                                </span>
                                            </div>
                                            <div class="new-shirt-item__price">
                                                <h4 class="new-shirt-item-name hover-primary-color">Áo thun dài tay Pikachu</h4>
                                                <span class="new-shirt-item__price-current">280,000đ</span>
                                                <span class="new-shirt-item__price-old">320,000đ</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid__column-5 new-shirt-list">
                                        <div href="" alt="Áo thun dài tay Hollow Knight" class="new-shirt-item">
                                            <div class="new-shirt-item-img" style="background-image: url('./asset/img/aotaydai3.jpg');">
                                                <span class="new-shirt-search">
                                                    <i class="ti-search js-product-details"></i>
                                                </span>
                                            </div>
                                            <div class="new-shirt-item__price">
                                                <h4 class="new-shirt-item-name hover-primary-color">Áo thun dài tay Hollow Knight</h4>
                                                <span class="new-shirt-item__price-current">280,000đ</span>
                                                <span class="new-shirt-item__price-old">320,000đ</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid__column-5 new-shirt-list">
                                        <div href="" alt="Áo thun dài tay Cyberpunk 2077 - Neon" class="new-shirt-item">
                                            <div class="new-shirt-item-img" style="background-image: url('./asset/img/aotaydai5.jpg');">
                                                <span class="new-shirt-search">
                                                   <i class="ti-search js-product-details"></i>
                                                </span>
                                            </div>
                                            <div class="new-shirt-item__price">
                                                <h4 class="new-shirt-item-name hover-primary-color">Áo thun dài tay Cyberpunk 2077 - Neon</h4>
                                                <span class="new-shirt-item__price-current">280,000đ</span>
                                                <span class="new-shirt-item__price-old">320,000đ</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid__column-5 new-shirt-list">
                                        <div href="" alt="Áo thun dài tay Cyberpunk 2077 - Original" class="new-shirt-item">
                                            <div class="new-shirt-item-img" style="background-image: url('./asset/img/aotaydai4.jpg');">
                                                <span class="new-shirt-search">
                                                   <i class="ti-search js-product-details"></i>
                                                </span>
                                            </div>
                                            <div class="new-shirt-item__price">
                                                <h4 class="new-shirt-item-name hover-primary-color">Áo thun dài tay Cyberpunk 2077 - Original</h4>
                                                <span class="new-shirt-item__price-current">280,000đ</span>
                                                <span class="new-shirt-item__price-old">320,000đ</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid__column-5 new-shirt-list">
                                        <div href="" alt="Áo thun dài tay The Legend of Zelda - Phiên bản chó Shiba" class="new-shirt-item">
                                            <div class="new-shirt-item-img" style="background-image: url('./asset/img/aotaydai6.jpg');">
                                                <span class="new-shirt-search">
                                                   <i class="ti-search js-product-details"></i>
                                                </span>
                                            </div>
                                            <div class="new-shirt-item__price">
                                                <h4 class="new-shirt-item-name hover-primary-color">Áo thun dài tay The Legend of Zelda - Phiên bản chó Shiba</h4>
                                                <span class="new-shirt-item__price-current">280,000đ</span>
                                                <span class="new-shirt-item__price-old">320,000đ</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid__column-5 new-shirt-list">
                                        <div href="" alt="Áo thun dài tay God of War - Phiên bản chó Pug" class="new-shirt-item">
                                            <div class="new-shirt-item-img" style="background-image: url('./asset/img/aotaydai8.jpg');">
                                                <span class="new-shirt-search">
                                                   <i class="ti-search js-product-details"></i>
                                                </span>
                                            </div>
                                            <div class="new-shirt-item__price">
                                                <h4 class="new-shirt-item-name hover-primary-color">Áo thun dài tay God of War - Phiên bản chó Pug</h4>
                                                <span class="new-shirt-item__price-current">280,000đ</span>
                                                <span class="new-shirt-item__price-old">320,000đ</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid__column-5 new-shirt-list">
                                        <div href="" alt="Áo thun dài tay Blinky - Pacman" class="new-shirt-item">
                                            <div class="new-shirt-item-img" style="background-image: url('./asset/img/aotaydai7.jpg');">
                                                <span class="new-shirt-search">
                                                   <i class="ti-search js-product-details"></i>
                                                </span>
                                            </div>
                                            <div class="new-shirt-item__price">
                                                <h4 class="new-shirt-item-name hover-primary-color">Áo thun dài tay Blinky - Pacman</h4>
                                                <span class="new-shirt-item__price-current">280,000đ</span>
                                                <span class="new-shirt-item__price-old">320,000đ</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid__column-5 new-shirt-list">
                                        <dv href="" alt="Áo thun dài tay Disconnect" class="new-shirt-item">
                                            <div class="new-shirt-item-img" style="background-image: url('./asset/img/aotaydai9.jpg');">
                                                <span class="new-shirt-search">
                                                   <i class="ti-search js-product-details"></i>
                                                </span>
                                            </div>
                                            <div class="new-shirt-item__price">
                                                <h4 class="new-shirt-item-name hover-primary-color">Áo thun dài tay Disconnect</h4>
                                                <span class="new-shirt-item__price-current">280,000đ</span>
                                                <span class="new-shirt-item__price-old">32290,000đ</span>
                                            </div>
                                        </dv>
                                    </div>

                                    <div class="grid__column-5 new-shirt-list">
                                        <div href="" alt="Áo thun dài tay Thế Giới Shadow of the Colossus" class="new-shirt-item">
                                            <div class="new-shirt-item-img" style="background-image: url('./asset/img/aotaydai10.jpg');">
                                                <span class="new-shirt-search">
                                                   <i class="ti-search js-product-details"></i>
                                                </span>
                                            </div>
                                            <div class="new-shirt-item__price">
                                                <h4 class="new-shirt-item-name hover-primary-color">Áo thun dài tay Thế Giới Shadow of the Colossus</h4>
                                                <span class="new-shirt-item__price-current">280,000đ</span>
                                                <span class="new-shirt-item__price-old">320,000đ</span>
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

            <?php require_once(__DIR__ . '/layout/footer.php')?>
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