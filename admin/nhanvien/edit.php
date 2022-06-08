<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once(__DIR__ . '/../layout/header.php'); ?>
    <title>Admin</title>

</head>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM nhanvien WHERE MaNV=$id ";
    //$sql = "select quanao.* ,loaisp.TenLoai as `Tenloai` from quanao , loaisp where quanao.id=loaisp.id and quanao.mahh=$id";
    //$sql = "select product.*, category.name as `categoryName` from product, category, brand where product.categoryID = category.ID and product.id = $id";
    //$sql="select quanao.*, Loaisp.TenLoai as `TenLoai` from quanao, category, Loaisp where quanao.TenLoai = Loaisp.ID and quanao.id = $id";
    $nhanvien = $db->fetchOne($sql);
    //$sql1 = "select * from loaisp";
    //$loaisp = $db->fetchAll($sql1);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // upload file
    $check = false;
    if (isset($_FILES['file'])) {
        $errors = array();
        $file_name = $_FILES['file']['name'];
        $file_size = $_FILES['file']['size'];
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_type = $_FILES['file']['type'];
        $expensions = array("jpeg", "jpg", "png");
        $file_ext = strtolower(end(explode('.', $_FILES['file']['name'])));
        
        if (in_array($file_ext, $expensions) === false) {
            $errors[] = "Không chấp nhận định dạng ảnh có đuôi này, mời bạn chọn JPEG hoặc PNG.";
        }


        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, '../../public/img/nhanvien/' . $file_name);
            $check = true;
        }
    }

    //


    $data =
        [
            "TenNV" => $_POST['TenNV'] ? $_POST['TenNV'] : '',
            "GioiTinh" => $_POST['GioiTinh'] ? $_POST['GioiTinh'] : '',
            "QueQuan" => $_POST['QueQuan'] ? $_POST['QueQuan'] : '',
            "SDT" => $_POST['SDT'] ? $_POST['SDT'] : '',
            "ChucVu" => $_POST['ChucVu'] ? $_POST['ChucVu'] : '',
            "HSL" => $_POST['HSL'] ? $_POST['HSL'] : '',
        ];
    if ($check) {
        $data["Anh"] = "public/img/nhanvien/" . $file_name;
    }
    $update = $db->update('nhanvien', $data, array('MaNV' => $id));
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
                                            <label>Tên Nhân Viên</label>
                                            <input type="text" name="TenNV" class="form-control" placeholder="Nhập tên Nhân Viên" value="<?php echo $nhanvien['TenNV'] ?>">
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Giới Tính</label>
                                                <input type="text" required name="GioiTinh" class="form-control" placeholder="Nhập Đồng Giá" value="<?php echo $nhanvien['GioiTinh'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Quê Quán</label>
                                                <input type="text" required name="QueQuan" class="form-control" placeholder="Nhập Quê Quán" value="<?php echo $nhanvien['QueQuan'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Số Điện Thoại</label>
                                                <input type="text" required name="SDT" class="form-control" placeholder="Nhập Số Điện Thoại" value="<?php echo $nhanvien['SDT'] ?>">

                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Chức Vụ</label>
                                                <input type="text" required name="ChucVu" class="form-control" placeholder="Nhập Chức Vụ" value="<?php echo $nhanvien['ChucVu'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Hệ Số Lương</label>
                                                <input type="text" required name="HSL" class="form-control" placeholder="Nhập Hệ Số Lương" value="<?php echo $nhanvien['HSL'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <img src="<?php echo $base_url . $nhanvien['Anh'] ?>" width="100" height="100" alt="">
                                            <input type="file" name="file" class="form-control-file">
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