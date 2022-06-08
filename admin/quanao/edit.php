<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once(__DIR__ . '/../layout/header.php'); ?>
    <title>Admin</title>

</head>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    //$sql = "SELECT * FROM quanao WHERE Mahh=$id ";
    $sql="select quanao.* ,loaisp.TenLoai as `Tenloai` from quanao , loaisp where quanao.id=loaisp.id and quanao.mahh=$id";
    //$sql = "select product.*, category.name as `categoryName` from product, category, brand where product.categoryID = category.ID and product.id = $id";
    //$sql="select quanao.*, Loaisp.TenLoai as `TenLoai` from quanao, category, Loaisp where quanao.TenLoai = Loaisp.ID and quanao.id = $id";
    $quanao = $db->fetchOne($sql);
    $sql1 = "select * from loaisp";
    $loaisp = $db->fetchAll($sql1);
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
        // $expensions = array("jpeg", "jpg", "png");
        // $file_ext = strtolower(end(explode('.', $_FILES['file']['name'])));
        
        // if (in_array($file_ext, $expensions) === false) {
        //     $errors[] = "Không chấp nhận định dạng ảnh có đuôi này, mời bạn chọn JPEG hoặc PNG.";
        // }
        

        if ($file_size >0 ) {
            move_uploaded_file($file_tmp, '../../public/img/quanao/' . $file_name);
            $check = true;
        }
    }

    //


    $data =
        [
            "Tenhh" => $_POST['Tenhh'] ? $_POST['Tenhh'] : '',
            "ID" => $_POST['ID'] ? $_POST['ID'] : '',
            "DongGia" => $_POST['DongGia'] ? $_POST['DongGia'] : '',
            "DongGiaSale" => $_POST['DongGiaSale'] ? $_POST['DongGiaSale'] : '',
            "NSX" => $_POST['NSX'] ? $_POST['NSX'] : '',
            "Producer" => $_POST['Producer'] ? $_POST['Producer'] : '',
            "Mota" => $_POST['Mota'] ? $_POST['Mota'] : '',
        ];
    if ($check) {
        $data["Anh"] = "public/img/quanao/" . $file_name;
    }
    $update = $db->update('quanao', $data, array('Mahh' => $id));
    if ($update > 0) {
        $_SESSION['error'] = "sửa thành công";
        header('Location: ./index.php');
    } else{
        header('Location: ./index.php');
        $_SESSION['error'] = "không thành công";
    }
       
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
                            <h4 class="card-title">Sửa Quần Áo</h4>
                            <div class="basic-form">
                                <div class="basic-form">
                                    <form method="POST" action="" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Tên Quần Áo</label>
                                            <input type="text" name="Tenhh" class="form-control" placeholder="Nhập tên quần áo" value="<?php echo $quanao['Tenhh'] ?>">
                                        </div>
                                        <!-- <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Loại Quần Áo</label>
                                            <input type="text" required name="Loaisp" class="form-control" placeholder="">
                                        </div>
                                    </div> -->
                                        <div class="form-group col-md-6">
                                            <label>Loại Quần Áo</label>
                                            <select id="inputState" name="ID" required class="form-control">
                                                <?php foreach ($loaisp as $item) : ?>
                                                    <?php if ($item['ID'] == $quanao['ID']) : ?>
                                                        <option selected value="<?php echo $item['ID'] ?>"><?php echo $item['TenLoai'] ?></option>
                                                    <?php else : ?>
                                                        <option value="<?php echo $item['ID'] ?>"><?php echo $item['TenLoai'] ?></option>
                                                    <?php endif ?>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Đồng giá</label>
                                                <input type="numeric" required name="DongGia" class="form-control" placeholder="Nhập Đồng Giá" value="<?php echo $quanao['DongGia'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Giá Sale</label>
                                                <input type="numeric" required name="DongGiaSale" class="form-control" placeholder="Nhập Giá Sale" value="<?php echo $quanao['DongGiaSale'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Nhà Sản Xuất</label>
                                                <input type="text" required name="Producer" class="form-control" placeholder="Nhập Nhà Sản Xuất" value="<?php echo $quanao['Producer'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Ngày Sản Xuất</label>
                                                <input type="date" required name="NSX" class="form-control" value="<?php echo $quanao['NSX'] ?>">
                                                
                                                <!-- <input type="date" value="<?php echo $quanao['NSX'] ?>" name="NSX" required class="form-control"> -->
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Mô Tả</label>
                                                <input type="text" required name="Mota" class="form-control" placeholder="Nhập Mô tả" value="<?php echo $quanao['Mota'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <img src="<?php echo $base_url . $quanao['Anh'] ?>" width="100" height="100" alt="">
                                            <input type="file" name="file" class="form-control-file">
                                        </div>
                                        <button type="submit" class="btn btn-dark">Sửa Quần Áo</button>
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