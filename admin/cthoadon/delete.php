<?php
require_once(__DIR__ . '/../../lib/autoload.php');
if(isset($_GET['id']) && isset($_GET['Mahh']))
{
    $id=$_GET['id'];
    $Mahh=$_GET['Mahh'];
    $sql= "DELETE FROM cthoadon WHERE MaHD = $id and Mahh=$Mahh";
    $delete=$db->delete($sql);
    if($delete>0)
    {
        $_SESSION['error']="xóa thành công";
        header('Location: ./index.php');
    } else
        $_SESSION['error']="không thành công";
}
?>
