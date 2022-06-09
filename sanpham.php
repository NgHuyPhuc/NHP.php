<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once(__DIR__ . '/layout/header.php') ?>
    
</head>

<body>
    <?php
    $sql = "SELECT `quanao`.*, `loaisp`.`ID`,`loaisp`.`TenLoai`
    from `quanao` , `loaisp` 
    where `quanao`.`ID`=`loaisp`.`ID`  LIMIT 15";
    $quanaoall = $db->fetchAll($sql);

    $sqlmini = "SELECT `quanao`.*, `loaisp`.`ID`,`loaisp`.`TenLoai`
    from `quanao` , `loaisp` 
    where `quanao`.`ID`=`loaisp`.`ID`  LIMIT 5";
    $quanaomini = $db->fetchAll($sqlmini);
    ?>
    <div class="app">
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
                        <li class="header-row-item ">
                            <a href="./sanpham.php" class="header-row-link hover-primary-color">
                                / Danh mục
                            </a>
                        </li>
                        <li class="header-row-item">
                            / Tất cả sản phẩm /
                        </li>
                    </ul>
                </div>
            </div>

            <div class="content-product">
                <div class="grid">
                    <div class="grid-row">
                        <div class="grid__column-2">
                            <nav class="category">
                                <h3 class="category-heading">Thương hiệu</h3>
                                <div class="category-list border-bottom">
                                    <input type="checkbox" id="nextlv" class="category-input">
                                    <label for="nextlv"> Next Level</label><br>
                                    <input type="checkbox" id="lvwibu" class="category-input">
                                    <label for="lvwibu"> Next Level Wibu</label><br>
                                    <input type="checkbox" id="goty2020" class="category-input">
                                    <label for="goty2020"> GOTY2020</label><br>
                                    <input type="checkbox" id="HSBT" class="category-input">
                                    <label for="HSBT"> HSBT</label><br>
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
                                    <form class="header-search" action="<?php echo $base_url ?>searchgia.php">
                                        <input type="text" name="DongGia" placeholder="Tìm kiếm giá" class="header-search-input">
                                        <button type="submit" class="header-search-btn ">
                                            <i class="header-search-btn-icon ti-search"></i>
                                        </button>
                                    </form>

                                </div>

                                <h3 class="category-heading">Loại</h3>
                                <div class="category-list">
                                    <input type="checkbox" id="T-Shirt" class="category-input">
                                    <label for="T-Shirt"> Basic T-Shirt</label><br>
                                    <input type="checkbox" id="long-sleeves" class="category-input">
                                    <label for="long-sleeves"> Áo dài tay</label><br>
                                    <input type="checkbox" id="Sweater" class="category-input">
                                    <label for="Sweater"> Sweater</label><br>
                                    <input type="checkbox" id="Hoodie" class="category-input">
                                    <label for="Hoodie"> Hoodie</label><br>
                                    <input type="checkbox" id="end" class="category-input">
                                    <label for="end"> HSBT</label><br>
                                </div>

                                <div class="product-care">
                                    <div class="product-title">
                                        <h3>Có thể bạn quan tâm</h3>
                                    </div>
                                    <?php foreach ($quanaomini as $index => $item) : ?>
                                        <a style="text-decoration: none" href="./detail.php?id=<?php echo $item['Mahh'] ?>" class="product-care-hot">
                                            <img src="<?php echo $base_url . $item['Anh'] ?>" alt="<?php echo $item['Tenhh'] ?>" class="product-care-hot-img">
                                            <div class="product-care-profile">
                                                <p class="product-care-name hover-primary-color"><?php echo $item['Tenhh'] ?>y</p>
                                                <div class="product-care-price">
                                                    <p class="product-care-new-price"><?php echo $item['DongGia'] ?>đ</p>
                                                    <p class="product-care-old-price"><?php echo $item['DongGiaSale'] ?>đ</p>
                                                </div>
                                            </div>
                                        </a>
                                        <?php if ($index >= 5) break; ?>
                                    <?php endforeach ?>
                                </div>
                            </nav>
                        </div>

                        <div class="grid__column-10 product-main">
                            <div class="home-filter border-bottom">
                                <h2 class="home-filter-title">Products</h2>
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
                                    <?php foreach ($quanaoall as $index => $item) : ?>
                                        <div class="grid__column-5 new-shirt-list">
                                            <a href="./detail.php?id=<?php echo $item['Mahh'] ?>" alt="<?php echo $item['Tenhh'] ?>" class="new-shirt-item">
                                                <div class="new-shirt-item-img" style="background-image: url('<?php echo $base_url . $item['Anh'] ?>');">
                                                    <span class="new-shirt-search">
                                                        <i class="ti-search js-product-details"></i>
                                                    </span>
                                                </div>
                                                <div class="new-shirt-item__price">
                                                    <h4 class="new-shirt-item-name hover-primary-color"><?php echo $item['Tenhh'] ?></h4>
                                                    <span class="new-shirt-item__price-current"><?php echo $item['DongGia'] ?>đ</span>
                                                    <span class="new-shirt-item__price-old"><?php echo $item['DongGiaSale'] ?>đ</span>
                                                </div>
                                            </a>
                                        </div>
                                        <?php if ($index >= 8) break; ?>
                                    <?php endforeach ?>
                                </div>

                            </div>

                            <div class="home-number-page">
                                <ul class="number-page-list">
                                    <li class="number-page-item">
                                        <a href="" class="number-page-link">
                                            <i class="ti-angle-left number-page-icon"></i>
                                        </a>
                                    </li>

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
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php require_once(__DIR__ . '/layout/footer.php') ?>
        </div>
    </div>

    <?php require_once(__DIR__ . '/layout/script.php') ?>
</body>

</html>