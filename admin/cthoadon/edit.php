<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once(__DIR__ . '/../layout/header.php'); ?>
    <title>Admin</title>

</head>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // $sql = "SELECT * FROM cthoadon WHERE MaHD=$id ";
    // $cthoadon = $db->fetchOne($sql);
    // $sql2 = "select * from nhanvien";
    // $nhanvien = $db->fetchAll($sql2);
    // $sql1 = "select * from khachhang";
    // $khachhang = $db->fetchAll($sql1);
    $sql2 = "select cthoadon.* ,quanao.Tenhh AS `Tenquanao`
    FROM cthoadon,hoadon,quanao
    WHERE cthoadon.MaHD=hoadon.MaHD AND cthoadon.Mahh=quanao.Mahh AND cthoadon.MaHD=$id";
    $cthoadon = $db->fetchOne($sql2);
    $sql3 = "select * from quanao";
    $quanao = $db->fetchAll($sql3);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $data =
        [
            "MaHD" => $_POST['MaHD'] ? $_POST['MaHD'] : '',
            "Mahh" => $_POST['Mahh'] ? $_POST['Mahh'] : '',
            "SoLuong" => $_POST['SoLuong'] ? $_POST['SoLuong'] : '',
        ];

    $update = $db->update('cthoadon', $data, array('MaHD' => $id));
    if ($update > 0) {
        $_SESSION['error'] = "sửa thành công";
        header('Location: ./index.php');
    } else
        $_SESSION['error'] = "không thành công";
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
                            <h4 class="card-title">Sửa Thông Tin Hóa Đơn</h4>
                            <div class="basic-form">
                                <div class="basic-form">
                                    <form method="POST" action="" enctype="multipart/form-data">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Mã Hóa Đơn</label>
                                                <input type="text" required name="MaHD" value="<?php echo $cthoadon['MaHD'] ?>" class="form-control" placeholder="Nhập Ngày Hóa Đơn">
                                            </div>
                                        </div>
                                        <select id="inputState" name="Mahh" required class="form-control">
                                            <?php foreach ($quanao as $item) : ?>
                                                <?php  ?>
                                                <option selected value="<?php echo $item['Mahh'] ?>"><?php echo $item['Tenhh'] ?></option>
                                            <?php endforeach ?>
                                        </select>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Số Lượng</label>
                                                <input type="number" required name="SoLuong" value="<?php echo $cthoadon['SoLuong'] ?>" class="form-control" placeholder="Nhập Số Điện Thoại">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-dark">Sửa Thông Tin Chi Tiết Hóa Đơn</button>
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

</html>