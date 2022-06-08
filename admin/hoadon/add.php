<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once(__DIR__ . '/../layout/header.php'); ?>
    <title>Admin</title>

</head>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $data =
        [
            "MaNV" => $_POST['MaNV'] ? $_POST['MaNV'] : '',
            "MaKH" => $_POST['MaKH'] ? $_POST['MaKH'] : '',
            "NgayHD" => $_POST['NgayHD'] ? $_POST['NgayHD'] : '',
            "TongTien" => $_POST['TongTien'] ? $_POST['TongTien'] : '',
            "TrangThai" => $_POST['TrangThai'] ? $_POST['TrangThai'] : '',
        ];

    $insert = $db->insert('hoadon', $data);
    if ($insert > 0) {
        $_SESSION['error'] = "Thêm thành công";
        header('Location: ./index.php');
    } else
        $_SESSION['error'] = "không thành công";
} else {
    $sql = "select * from nhanvien";
    $nhanvien = $db->fetchAll($sql);
    $sql1 = "select * from khachhang";
    $khachhang = $db->fetchAll($sql1);
}

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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Thêm Mới Hóa Đơn</h4>
                            <div class="basic-form">
                                <form method="POST" action="" enctype="multipart/form-data">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Tên Nhân Viên</label>
                                            <select id="inputState" name="MaNV" required class="form-control">
                                                <?php foreach ($nhanvien as $item) : ?>
                                                    <option value="<?php echo $item['MaNV'] ?>"><?php echo $item['TenNV'] ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Tên Khách Hàng</label>
                                            <select id="inputState" name="MaKH" required class="form-control">
                                                <?php foreach ($khachhang as $item) : ?>
                                                    <option value="<?php echo $item['MaKH'] ?>"><?php echo $item['TenKH'] ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Ngày Hóa Đơn</label>
                                            <input type="date" required name="NgayHD" class="form-control" placeholder="Nhập Ngày Hóa Đơn">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Tổng Tiền</label>
                                            <input type="text" required name="SDT" class="form-control" placeholder="Nhập Tổng Tiền">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Trạng Thái</label>
                                            <input type="text" required name="SDT" class="form-control" placeholder="Nhập Số Điện Thoại">
                                        </div>
                                    </div>

                            </div>

                            <button type="submit" class="btn btn-dark">Thêm Mới Hóa Đơn</button>
                            </form>
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

</html>