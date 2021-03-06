<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once(__DIR__ . '/layout/header.php') ?>
</head>

<body>
    
    <?php
    $sql = "select `quanao`.*, `loaisp`.`ID`,`loaisp`.`TenLoai`
    from `quanao` , `loaisp` 
    where `quanao`.`ID`=`loaisp`.`ID` AND `loaisp`.`TenLoai`='moi' LIMIT 5";
    $quanaomoi = $db->fetchAll($sql);

    $sql1 = "select `quanao`.*, `loaisp`.`ID`,`loaisp`.`TenLoai`
    from `quanao` , `loaisp` 
    where `quanao`.`ID`=`loaisp`.`ID` AND `loaisp`.`TenLoai`='random sale' LIMIT 5";
    $quanaosale = $db->fetchAll($sql1);

    $sql2 = "select `quanao`.*, `loaisp`.`ID`,`loaisp`.`TenLoai`
    from `quanao` , `loaisp` 
    where `quanao`.`ID`=`loaisp`.`ID` AND `loaisp`.`TenLoai`='wibu' LIMIT 3";
    $quanaowibu = $db->fetchAll($sql2);

    $sql3 = "select `quanao`.*, `loaisp`.`ID`,`loaisp`.`TenLoai`
    from `quanao` , `loaisp` 
    where `quanao`.`ID`=`loaisp`.`ID` AND `loaisp`.`TenLoai`='game' LIMIT 8";
    $quanaogame = $db->fetchAll($sql3);
    ?>
    <div class="app">
        <?php require_once(__DIR__ . '/layout/header1.php') ?>

        <div class="content">
            <?php require_once(__DIR__ . '/layout/menu.php') ?>


            <div class="grid slide-form">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="./wibu.php" class="slide-link">
                                <img src="./asset/img/slider_3.jpg" class="d-block w-100" alt="Wibu">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="./t_shirt.php" class="slide-link">
                                <img src="./asset/img/slider_nhen.jpg" class="d-block w-100" alt="Nh???n">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="./cyberpunk.php" class="slide-link">
                                <img src="./asset/img/slider_cbpunk.jpg" class="d-block w-100" alt="Cyberpunk">
                            </a>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class=" ti-angle-left slide-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class=" ti-angle-right slide-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

                <!-- Content Type -->
                <div class="content-type">
                    <ul class="content-type-list">
                        <li class="content-type-item">
                            <a href="./wibu.php" class="content-type-item-link">
                                <img src="./asset/img/brand_1.jpg" alt="Wibu" class="content-type-item-img">
                            </a>
                            <p class="content-type-item-text hover-primary-color">Wibu</p>
                        </li>
                        <li class="content-type-item">
                            <a href="./cyberpunk.php" class="content-type-item-link">
                                <img src="./asset/img/brand_2.jpg" alt="Cyberpunk 2077" class="content-type-item-img">
                            </a>
                            <p class="content-type-item-text hover-primary-color">Cyberpunk 2077</p>
                        </li>
                        <li class="content-type-item">
                            <a href="./lol.php" class="content-type-item-link">
                                <img src="./asset/img/brand_3.jpg" alt="LoL" class="content-type-item-img">
                            </a>
                            <p class="content-type-item-text hover-primary-color">LoL</p>
                        </li>
                        <li class="content-type-item">
                            <a href="" class="content-type-item-link">
                                <img src="./asset/img/brand_4.jpg" alt="Dark Souls" class="content-type-item-img">
                            </a>
                            <p class="content-type-item-text hover-primary-color">Dark Souls</p>
                        </li>
                        <li class="content-type-item">
                            <a href="" class="content-type-item-link">
                                <img src="./asset/img/brand_5.jpg" alt="The Witcher" class="content-type-item-img">
                            </a>
                            <p class="content-type-item-text hover-primary-color">The Witcher</p>
                        </li>
                        <li class="content-type-item">
                            <a href="" class="content-type-item-link">
                                <img src="./asset/img/brand_6.jpg" alt="Pok??mon" class="content-type-item-img">
                            </a>
                            <p class="content-type-item-text hover-primary-color">Pok??mon</p>
                        </li>
                        <li class="content-type-item">
                            <a href="" class="content-type-item-link">
                                <img src="./asset/img/brand_7.jpg" alt="Hollow Knight" class="content-type-item-img">
                            </a>
                            <p class="content-type-item-text hover-primary-color">Hollow Knight</p>
                        </li>
                        <li class="content-type-item">
                            <a href="" class="content-type-item-link">
                                <img src="./asset/img/brand_8.jpg" alt="Animal Crossing" class="content-type-item-img">
                            </a>
                            <p class="content-type-item-text hover-primary-color">Animal Crossing</p>
                        </li>
                    </ul>
                </div>
                <!--New Shirt  -->
                <div class="new-shirt">
                    <a class="new-shirt-content hover-primary-color">Nh???ng m???u ??o m???i nh???t</a>
                    <div class="grid-row">
                        <?php foreach ($quanaomoi as $index => $item) : ?>
                            <div class="grid__column-5 new-shirt-list">
                                <a href="./detail.php?id=<?php echo $item['Mahh'] ?>" alt="<?php echo $item['Tenhh'] ?>" class="new-shirt-item">
                                    <div class="new-shirt-item-img" style="background-image: url('<?php echo $base_url . $item['Anh'] ?>');">
                                        <span class="new-shirt-search">
                                            <i class="ti-search js-product-details"></i>
                                        </span>
                                    </div>
                                    <div class="new-shirt-item__price">
                                        <h4 class="new-shirt-item-name hover-primary-color"><?php echo $item['Tenhh'] ?></h4>
                                        <span class="new-shirt-item__price-current"><?php echo $item['DongGia'] ?>??</span>
                                        <span class="new-shirt-item__price-old"><?php echo $item['DongGiaSale'] ?>??</span>
                                    </div>
                                </a>
                            </div>
                            <?php if ($index >= 5) break; ?>
                        <?php endforeach ?>
                    </div>
                    <div class="new-shirt-full">
                        <a href="" class="new-shirt-full-text">Xem t???t c???
                            <i class="ti-angle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- Banner -->
                <div class="content-banner">
                    <a href="<?php echo $base_url ?>sale.php" class="content-banner-link">
                        <!-- <div class="content-banner-img"></div> -->
                        <img src="./asset/img/banner.jpg" style="object-fit:contain;width:100%;">
                    </a>

                </div>

                <div class="random-sale">
                    <div class="random-sale-padding">
                        <div class="random-sale-title">
                            <a href="./sale.php" class="random-sale-big-text hover-primary-color">Random Sale</a>
                            <p class="random-sale-small-text">Ch????ng tr??nh ???? k???t th??c</p>
                        </div>
                        <div class="grid-row ">
                            <?php foreach ($quanaosale as $index => $item) : ?>

                                <div class="grid__column-5 new-shirt-list">
                                    <a href="./detail.php?id=<?php echo $item['Mahh'] ?>" alt="<?php echo $item['Tenhh'] ?>" class="new-shirt-item">
                                        <div class="new-shirt-item-img" style="background-image: url('<?php echo $base_url . $item['Anh'] ?>');">
                                            <span class="new-shirt-search">
                                                <i class="ti-search js-product-details"></i>
                                            </span>
                                            <div class="backgr-sale">
                                                <div class="number-sale"> -24%</div>
                                            </div>
                                        </div>
                                        <div class="new-shirt-item__price">
                                            <h4 class="new-shirt-item-name hover-primary-color"><?php echo $item['Tenhh'] ?></h4>
                                            <span class="new-shirt-item__price-current"><?php echo $item['DongGia'] ?>??</span>
                                            <span class="new-shirt-item__price-old"><?php echo $item['DongGiaSale'] ?>??</span>
                                        </div>
                                    </a>
                                </div>
                                <?php if ($index >= 5) break; ?>
                            <?php endforeach ?>
                        </div>
                        <div class="new-shirt-full">
                            <a href="" class="new-shirt-full-text">Xem t???t c???
                                <i class="ti-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Wibu shirt -->
                <div class="wibu-shirt float-clear">
                    <a href="./wibu.php" class="wibu-shirt-text hover-primary-color">??o Wibu</a>
                    <div class="grid-row wibu-shirt-list   ">
                        <?php foreach ($quanaowibu as $index => $item) : ?>
                            <div class="grid__column-5 new-shirt-list">
                                <a href="./detail.php?id=<?php echo $item['Mahh'] ?>" alt="<?php echo $item['Tenhh'] ?>" class="new-shirt-item">
                                    <div class="new-shirt-item-img" style="background-image: url('<?php echo $base_url . $item['Anh'] ?>');">
                                        <span class="new-shirt-search">
                                            <i class="ti-search js-product-details"></i>
                                        </span>
                                    </div>
                                    <div class="new-shirt-item__price">
                                        <h4 class="new-shirt-item-name hover-primary-color"><?php echo $item['Tenhh'] ?></h4>
                                        <span class="new-shirt-item__price-current"><?php echo $item['DongGia'] ?>??</span>
                                        <span class="new-shirt-item__price-old"><?php echo $item['DongGiaSale'] ?>??</span>
                                    </div>
                                </a>
                            </div>
                            <?php if ($index >= 3) break; ?>
                        <?php endforeach ?>

                        <div class="wibu-banner">
                            <a href="./wibu.php" class="wibu-banner-link">
                                <img src="./asset/img/wibu_banner.jpg" alt="Qu???ng c??o ??o Wibu" class="wibu-banner-img">
                            </a>
                        </div>
                    </div>
                    <div class="new-shirt-full wibu-shirt-all">
                        <a href="" class="new-shirt-full-text">Xem t???t c???
                            <i class="ti-angle-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Game Shirt -->
                <div class="game-shirt">
                    <a href="./cyberpunk.php" class="wibu-shirt-text hover-primary-color">??o Game</a>
                    <div class="grid-row game-shirt-list">
                        <div class="game-banner">
                            <a href="./cyberpunk.php" class="game-banner-link">
                                <img src="./asset/img/game_shirt_banner.jpg" alt="Qu???ng c??o ??o game" class="game-banner-img">
                            </a>
                        </div>

                        <?php foreach ($quanaogame as $index => $item) : ?>
                            <div class="grid__column-5 new-shirt-list">
                                <a href="./detail.php?id=<?php echo $item['Mahh'] ?>" alt="<?php echo $item['Tenhh'] ?>" class="new-shirt-item">
                                    <div class="new-shirt-item-img" style="background-image: url('<?php echo $base_url . $item['Anh'] ?>');">
                                        <span class="new-shirt-search">
                                            <i class="ti-search js-product-details"></i>
                                        </span>
                                    </div>
                                    <div class="new-shirt-item__price">
                                        <h4 class="new-shirt-item-name hover-primary-color"><?php echo $item['Tenhh'] ?></h4>
                                        <span class="new-shirt-item__price-current"><?php echo $item['DongGia'] ?>??</span>
                                        <span class="new-shirt-item__price-old"><?php echo $item['DongGiaSale'] ?>??</span>
                                    </div>
                                </a>
                            </div>
                            <?php if ($index >= 8) break; ?>
                        <?php endforeach ?>

                    </div>

                    <div class="new-shirt-full wibu-shirt-all">
                        <a href="" class="new-shirt-full-text">Xem t???t c???
                            <i class="ti-angle-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Banner Home -->
                <div class="banner-home">
                    <div class="grid-row banner-home-list">
                        <div class="grid__column-3 banner-home-item">
                            <a href="" class="banner-home-link">
                                <img src="./asset/img/banner_coll_1.jpg" alt="" class="banner-home-img">
                            </a>
                        </div>

                        <div class="grid__column-3 banner-home-item">
                            <a href="" class="banner-home-link">
                                <img src="./asset/img/banner_coll_2.jpg" alt="" class="banner-home-img">
                            </a>
                        </div>

                        <div class="grid__column-3 banner-home-item">
                            <a href="" class="banner-home-link">
                                <img src="./asset/img/banner_coll_3.jpg" alt="" class="banner-home-img">
                            </a>
                        </div>
                    </div>
                </div>

                <!-- The HP Shirt -->
                <div class="HP-shirt">
                    <div class="Hp-shirt-title">
                        <a href="" class="wibu-shirt-text hover-primary-color">??o Game</a>
                        <ul class="Hp-shirt-title-list">
                            <li class="Hp-shirt-item Hp-shirt-item-active">
                                <a href="" class="Hp-shirt-item-link Hp-shirt-item-active">??o d??i tay</a>
                            </li>
                            <li class="Hp-shirt-item">
                                <a href="" class="Hp-shirt-item-link">Sweater</a>
                            </li>
                            <li class="Hp-shirt-item">
                                <a href="" class="Hp-shirt-item-link">Hoodie</a>
                            </li>
                        </ul>
                    </div>
                    <div class="grid-row">
                        <?php foreach ($quanaogame as $index => $item) : ?>
                            <div class="grid__column-5 new-shirt-list">
                                <a href="./detail.php?id=<?php echo $item['Mahh'] ?>" alt="<?php echo $item['Tenhh'] ?>" class="new-shirt-item">
                                    <div class="new-shirt-item-img" style="background-image: url('<?php echo $base_url . $item['Anh'] ?>');">
                                        <span class="new-shirt-search">
                                            <i class="ti-search js-product-details"></i>
                                        </span>
                                    </div>
                                    <div class="new-shirt-item__price">
                                        <h4 class="new-shirt-item-name hover-primary-color"><?php echo $item['Tenhh'] ?></h4>
                                        <span class="new-shirt-item__price-current"><?php echo $item['DongGia'] ?>??</span>
                                        <span class="new-shirt-item__price-old"><?php echo $item['DongGiaSale'] ?>??</span>
                                    </div>
                                </a>
                            </div>
                            <?php if ($index >= 8) break; ?>
                        <?php endforeach ?>
                    </div>

                    <div class="new-shirt-full wibu-shirt-all">
                        <a href="" class="new-shirt-full-text">Xem t???t c???
                            <i class="ti-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <?php require_once(__DIR__ . '/layout/footer.php') ?>
    </div>
    <?php require_once(__DIR__ . '/layout/script.php') ?>
</body>

</html>
