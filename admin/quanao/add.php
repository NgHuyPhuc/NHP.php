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
            move_uploaded_file($file_tmp, '../../public/img/quanao/' . $file_name);
        }
    }

    //


    $data =
        [
            "Tenhh" => $_POST['Tenhh'] ? $_POST['Tenhh'] : '',
            "Anh" => "public/img/quanao/" . $file_name,
            "ID" => $_POST['ID'] ? $_POST['ID'] : '',
            "DongGia" => $_POST['DongGia'] ? $_POST['DongGia'] : '',
            "Producer" => $_POST['Producer'] ? $_POST['Producer'] : '',
            "NSX" => $_POST['NSX'] ? $_POST['NSX'] : '',
            "Mota" => $_POST['Mota'] ? $_POST['Mota'] : '',
        ];

    $insert = $db->insert('quanao', $data);
    if ($insert > 0) {
        $_SESSION['error'] = "Thêm thành công";
        header('Location: ./index.php');
    } else {
        $_SESSION['error'] = "không thành công";
        header('Location: ./add.php');
    }
} else {
    $sql = "select * from loaisp";
    $loaisp = $db->fetchAll($sql);
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
                            <h4 class="card-title">Thêm Quần áo</h4>
                            <div class="basic-form">
                                <form method="POST" action="" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Tên Quần Áo</label>
                                        <input type="text" required name="Tenhh" class="form-control" placeholder="Nhập tên quần áo">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Loại Quần Áo</label>
                                        <select id="inputState" name="ID" required class="form-control">
                                            <?php foreach ($loaisp as $item) : ?>
                                                <option value="<?php echo $item['ID'] ?>"><?php echo $item['TenLoai'] ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Đồng giá</label>
                                            <input type="text" required name="DongGia" class="form-control" placeholder="Nhập Đồng Giá">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Nhà Sản Xuất</label>
                                            <input type="text" required name="Producer" class="form-control" placeholder="Nhập Nhà Sản Xuất">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Ngày Sản Xuất</label>
                                            <input type="date" required name="NSX" class="form-control" placeholder="Nhập Ngày Sản Xuất">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Mô Tả</label>
                                            <input type="text" required name="Mota" class="form-control" placeholder="Nhập Mô tả">
                                        </div>
                                    </div>
                            </div>
                            <div class="form-group">
                                <input type="file" required name="file" class="form-control-file">
                            </div>

                            <button type="submit" class="btn btn-dark">Thêm Quần Áo</button>
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