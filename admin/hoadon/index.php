<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once(__DIR__ . '/../layout/header.php'); ?>
    <title>Admin</title>

</head>

<?php
    // $sql = "select * from hoadon";
    // $hoadon = $db->fetchAll($sql);
    $sql2=" select hoadon.*,nhanvien.tennv as`TenNV`,khachhang.tenkh as `TenKH`
    from hoadon,khachhang,nhanvien
    where hoadon.manv=nhanvien.manv and hoadon.makh=khachhang.makh";
    $hoadon2 = $db->fetchAll($sql2)
?>
<body>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <?php require_once(__DIR__ . '/../layout/nav_header.php') ?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php require_once(__DIR__ . '/../layout/side_bar.php') ?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="row">


                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><a href="./add.php">Th??m H??a ????n</a></h4>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped verticle-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col">M?? H??a ????n</th>
                                                <th scope="col">M?? Nh??n Vi??n</th>
                                                <th scope="col">M?? Kh??ch H??ng</th>
                                                <th scope="col">Ng??y H??a ????n</th>
                                                <th scope="col">T???ng Ti???n</th>
                                                <th scope="col">Tr???ng Th??i</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($hoadon2 as $item) : ?>
                                            <tr>
                                                <td><?php echo $item['MaHD'] ?></td>
                                                <td><?php echo $item['TenNV'] ?></td>
                                                <td><?php echo $item['TenKH'] ?></td>
                                                <td><?php echo $item['NgayHD'] ?></td>
                                                <td><?php echo $item['TongTien'] ?></td>
                                                <td><?php echo $item['TrangThai'] ?></td>
                                                <td>
                                                    <span>
                                                        <a href="./edit.php?id=<?php echo $item['MaHD'] ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                            <i class="fa fa-pencil color-muted m-r-5"></i> 
                                                        </a>
                                                        <a href="./delete.php?id=<?php echo $item['MaHD'] ?>" onclick="if(!confirm('Delete ?')) return false; " data-toggle="tooltip" data-placement="top" title="" data-original-title="Close">
                                                            <i class="fa fa-close color-danger"></i>
                                                        </a>
                                                    </span>
                                                </td>
                                            </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <!-- <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div> -->
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <?php require_once(__DIR__ . '/../layout/script.php') ?>

</body>