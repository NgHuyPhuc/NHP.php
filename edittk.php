<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once(__DIR__ . '/layout/header.php'); ?>
</head>
<?php
if (isset($_SESSION['khach'])) {
    $MaKH=$_SESSION['MaKH'];
    $id = $_GET['id'];
    $sql = "SELECT * FROM acckhach WHERE ID=$id ";
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
        $file_ext = strtolower(end(explode('.', $_FILES['file']['name'])));
        $expensions = array("jpeg", "jpg", "png");

        if (in_array($file_ext, $expensions) === false) {
            $errors[] = "Không chấp nhận định dạng ảnh có đuôi này, mời bạn chọn JPEG hoặc PNG.";
        }

        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, '../../public/img/user/' . $file_name);
            $check = true;
            
        }
    }
    //
    $data =
    [
        "TaiKhoan" => $_POST['TaiKhoan'] ? $_POST['TaiKhoan'] : '',
        "MatKhau" => $_POST['MatKhau'] ? $_POST['MatKhau'] : '',
    ];
    if($check){
        $data["Anh"] = "public/img/user/" . $file_name;
    }
    $update = $db->update('acckhach', $data, array("$MaKH" => $id));
    if ($update > 0) {
        $_SESSION['error'] = "sửa thành công";
        header('Location: ./index.php');
    } else
        $_SESSION['error'] = "không thành công";
}
?>

<body>
    <div class="app">
        <?php require_once(__DIR__ . '/layout/header1.php') ?>

        <div class="content-contact">
            <?php require_once(__DIR__ . '/layout/menu.php') ?>
            <div class="header-row">
                <?php if (isset($_SESSION['khach'])) : ?>
                    <div class="grid">
                        <ul class="header-row-list">
                            <li class="header-row-item ">
                                <a href="./index.php" class="header-row-link hover-primary-color">
                                    Trang chủ
                                </a>
                            </li>
                            <li class="header-row-item ">
                                <a href="./Login.php" class="header-row-link hover-primary-color">
                                    / Tài khoản
                                </a>
                            </li>
                        </ul>
                    </div>
                <?php endif ?>
            </div>
            <?php if (isset($_SESSION['khach'])) : ?>
                <div class="contact-backgr">
                    <div class="grid">
                        <div class="content-contact-form">
                            <div class="card">
                                <div class="card-body">
                                    <h4 style="font-size: 20px;" class="card-title">Thông tin khách hàng</h4>
                                    <div class="basic-form">
                                        <form method="POST" action="" enctype="multipart/form-data">

                                            <div style="font-size: 20px;" class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label style="font-size: 20px;">Tên hiển thị</label>
                                                    <input style="font-size: 20px;" type="text" name="TaiKhoan" required class="form-control" placeholder="TaiKhoan" value="<?php echo $user['TaiKhoan'] ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label style="font-size: 20px;">Mật Khẩu</label>
                                                    <input style="font-size: 20px;" type="text" name="MatKhau" required class="form-control" value="<?php echo $user['MatKhau'] ?>">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <img src="<?php echo $base_url . $user['Anh'] ?>" width="100" height="100" alt="">
                                                <input type="file" name="file" class="form-control-file">
                                            </div>

                                            <button style="font-size: 20px;" type="submit" class="btn btn-dark">Sửa Tài Khoản</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif ?>
        </div>
    </div>

    <?php require_once(__DIR__ . '/layout/footer.php') ?>
    </div>

    <!--Back top  -->
    <div id="backtop">
        <i class="ti-angle-up backtop-icon"></i>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop()) {
                    $('#backtop').fadeIn();
                } else {
                    $('#backtop').fadeOut();
                }
            });
            $('#backtop').click(function() {
                $('html, body').animate({
                    scrollTop: 0
                }, 500);
            });
        });
    </script>
</body>

</html>