<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once(__DIR__ . '/../layout/header.php'); ?>
    <title>Admin</title>

</head>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // upload file
    if (isset($_FILES['file'])) {
        $errors = array();
        $file_name = $_FILES['file']['name'];
        $file_size = $_FILES['file']['size'];
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_type = $_FILES['file']['type'];
        $expensions = array("jpeg", "jpg", "png");
        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, '../../public/img/nhanvien/' . $file_name);
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

    $insert = $db->insert('nhanvien', $data);
    if ($insert > 0) {
        $_SESSION['error'] = "Thêm thành công";
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
                            <h4 class="card-title">Thêm Nhân Viên Mới</h4>
                            <div class="basic-form">
                                <form method="POST" action="" enctype="multipart/form-data">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Tên Nhân Viên</label>
                                            <input type="text" required name="TenNV" class="form-control" placeholder="Nhập Tên Nhân Viên">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Giới Tính</label>
                                            <select id="inputState" name="GioiTinh" required class="form-control">
                                                <option value="Nam">Nam</option>
                                                <option value="Nữ">Nữ</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Quê Quán</label>
                                            <input type="text" required name="QueQuan" class="form-control" placeholder="Nhập Quê Quán">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Số Điện Thoại</label>
                                            <input type="text" required name="SDT" class="form-control" placeholder="Nhập Số Điện Thoại">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Chức Vụ</label>
                                            <input type="text" required name="ChucVu" class="form-control" placeholder="Nhập Chức Vụ">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Hệ Số Lương</label>
                                            <input type="text" required name="HSL" class="form-control" placeholder="Nhập Hệ Số Lương">
                                        </div>
                                    </div>
                            </div>
                            <div class="form-group">
                                <input type="file" required name="file" class="form-control-file">
                            </div>

                            <button type="submit" class="btn btn-dark">Thêm Mới Nhân Viên</button>
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