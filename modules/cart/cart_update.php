<?php 
    session_start();
    echo "trc :<br>";
    var_dump($_SESSION['Cart']);
    var_dump($_SESSION['SoLuong']);

    if(isset($_GET) && isset($_GET['Mahh'])){
        $Mahh = $_GET['Mahh'];
        if(isset( $_GET['SoLuong'])) $SoLuong = $_GET['SoLuong'];
        else $qty = 1;
        
        if(isset($_SESSION['Cart'][$Mahh])){
            $_SESSION['Cart'][$Mahh] = $SoLuong;
        }else{
            $_SESSION['Cart'][$Mahh] = $SoLuong;
        }

    }
    if(count($_SESSION['Cart'])>0){
        $count = 0;
        foreach ($_SESSION['Cart'] as $key => $value) {
            $count += $value;
        }
        $_SESSION['SoLuong'] = $count;
    }
        
        echo "<br>sau :<br>";
    var_dump($_SESSION['Cart']);
    var_dump($_SESSION['SoLuong']);
    header("location: ./../../cart.php");
?>