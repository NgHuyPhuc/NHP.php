<?php 
    session_start();
    echo "trc :<br>";
    var_dump($_SESSION['Cart']);
    var_dump($_SESSION['SoLuong']);

    if(isset($_GET) && isset($_GET['Mahh'])){
        $Mahh = $_GET['Mahh'];
        if(isset($_SESSION['Cart'][$Mahh])){
            unset($_SESSION['Cart'][$Mahh]);
        }

    }
    if(count($_SESSION['Cart'])>0){
        $count = 0;
        foreach ($_SESSION['Cart'] as $key => $value) {
            $count += $value;
        }
        $_SESSION['SoLuong'] = $count;
    }
        echo "<br>sau :\n <br>";
    var_dump($_SESSION['Cart']);
    var_dump($_SESSION['SoLuong']);
    header("location: ./../../cart.php");
?>