<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once(__DIR__ . '/../layout/header.php'); ?>
    <title>Admin</title>

</head>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM hoadon WHERE MaHD=$id ";
    //$sql = "select quanao.* ,loaisp.TenLoai as `Tenloai` from quanao , loaisp where quanao.id=loaisp.id and quanao.mahh=$id";
    //$sql = "select product.*, category.name as `categoryName` from product, category, brand where product.categoryID = category.ID and product.id = $id";
    //$sql="select quanao.*, Loaisp.TenLoai as `TenLoai` from quanao, category, Loaisp where quanao.TenLoai = Loaisp.ID and quanao.id = $id";
    $hoadon = $db->fetchOne($sql);
    //$sql1 = "select * from loaisp";
    //$loaisp = $db->fetchAll($sql1);
    $sql2 = "select * from nhanvien";
    $nhanvien = $db->fetchAll($sql2);
    $sql1 = "select * from khachhang";
    $khachhang = $db->fetchAll($sql1);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $data =
        [
            "MaHD" => $_POST['MaHD'] ? $_POST['MaHD'] : '',
            "MaNV" => $_POST['MaNV'] ? $_POST['MaNV'] : '',
            "MaKH" => $_POST['MaKH'] ? $_POST['MaKH'] : '',
            "NgayHD" => $_POST['NgayHD'] ? $_POST['NgayHD'] : '',
            "TongTien" => $_POST['TongTien'] ? $_POST['TongTien'] : '',
            "TrangThai" => $_POST['TrangThai'] ? $_POST['TrangThai'] : '',
        ];

    $update = $db->update('hoadon', $data, array('MaHD' => $id));
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
                                                <input type="date" required name="NgayHD" value="<?php echo $hoadon['NgayHD'] ?>" class="form-control" placeholder="Nhập Ngày Hóa Đơn">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Tổng Tiền</label>
                                                <input type="text" required name="TongTien" value="<?php echo $hoadon['TongTien'] ?>" class="form-control" placeholder="Nhập Tổng Tiền">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Trạng Thái</label>
                                                <select id="inputState" name="TrangThai" required class="form-control">
                                                    <option value="<?php echo $hoadon['TrangThai'] ?>"><?php echo $hoadon['TrangThai'] ?> </option>
                                                    <?php if ($hoadon['TrangThai'] == 'Yes') : ?>
                                                        <option value="Yes">No</option>
                                                    <?php else : ?>
                                                        <option value="No">Yes</option>
                                                    <?php endif ?>
                                                </select>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-dark">Sửa Thông Tin Hóa Đơn</button>
                                        <a class="btn btn-info" href="./../cthoadon/index.php?id=<?php echo $hoadon['MaHD']?>">Chi Tiết Hóa ĐƠn</a>
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