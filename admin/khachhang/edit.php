<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once(__DIR__ . '/../layout/header.php'); ?>
    <title>Admin</title>

</head>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM khachhang WHERE MaKH=$id ";
    //$sql = "select quanao.* ,loaisp.TenLoai as `Tenloai` from quanao , loaisp where quanao.id=loaisp.id and quanao.mahh=$id";
    //$sql = "select product.*, category.name as `categoryName` from product, category, brand where product.categoryID = category.ID and product.id = $id";
    //$sql="select quanao.*, Loaisp.TenLoai as `TenLoai` from quanao, category, Loaisp where quanao.TenLoai = Loaisp.ID and quanao.id = $id";
    $khachhang = $db->fetchOne($sql);
    //$sql1 = "select * from loaisp";
    //$loaisp = $db->fetchAll($sql1);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $data =
        [
            "TenKH" => $_POST['TenKH'] ? $_POST['TenKH'] : '',
            "SDT" => $_POST['SDT'] ? $_POST['SDT'] : '',
        ];
    $update = $db->update('khachhang', $data, array('MaKH' => $id));
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
                            <h4 class="card-title">Sửa Thông Tin Nhân Viên</h4>
                            <div class="basic-form">
                                <div class="basic-form">
                                    <form method="POST" action="" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Tên Khách Hàng</label>
                                            <input type="text" name="TenKH" class="form-control" placeholder="Nhập Tên Khách Hàng" value="<?php echo $khachhang['TenKH'] ?>">
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Số Điện Thoại</label>
                                                <input type="text" required name="SDT" class="form-control" placeholder="Nhập Số Điện Thoại" value="<?php echo $khachhang['SDT'] ?>">

                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-dark">Sửa Thông Tin Nhân Viên</button>
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