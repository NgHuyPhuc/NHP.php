<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once(__DIR__ . '/../layout/header.php'); ?>
    <title>Admin</title>

</head>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM Loaisp WHERE ID=$id ";
    $user = $db->fetchOne($sql);
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
            move_uploaded_file($file_tmp, '../../public/img/loaisp/' . $file_name);
            $check = true;
        }
    }

    //


    $data =
        [
            "TenLoai" => $_POST['TenLoai'] ? $_POST['TenLoai'] : '',
            "Anh" => "public/img/loaisp/" . $file_name,
            "TrangThai" => $_POST['TrangThai'] ? $_POST['TrangThai'] : '',
        ];
    if($check){
        $data["Anh"] = "public/img/loaisp/" . $file_name;
    }
    $update = $db->update('loaisp', $data, array('ID' => $id));
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
                            <h4 class="card-title">Sửa Loại Sản Phẩm</h4>
                            <div class="basic-form">
                                <form method="POST" action="" enctype="multipart/form-data">
                                   
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Tên Loại Quần Áo</label>
                                            <input type="text" name="TenLoai" required class="form-control" placeholder="" value="<?php echo $user['TenLoai'] ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Trạng Thái</label>
                                            <input type="text" name="TrangThai" required class="form-control" value="<?php echo $user['TrangThai'] ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <img src="<?php echo $base_url . $user['Anh'] ?>" width="100" height="100" alt="">
                                        <input type="file" name="file" class="form-control-file">
                                    </div>

                                    <button type="submit" class="btn btn-dark">Sửa Loại Sản Phẩm</button>
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