<?php
include_once 'model/donhang.php';
$action='index';
if(isset($_GET['action'])){
    $action=$_GET['action'];
}
switch($action){
    case 'index':
        $order=getAllorder();
        include 'view/donhang/index.php';
    break;
    case 'edit':
        $mahd=$_GET['mahd'];
        $order= getOrderedit($mahd);
        include 'view/donhang/edit.php';
    break;
    case 'update':
        $trangthai=$_POST['trangthai'];
        $mahd=$_POST['mahd'];
        getUpdateOrder($name,$trangthai,$mahd);
        echo '<script type="text/javascript">
                    window.location="index.php?ctrl=donhang";
            </script>';
    break;
    case 'delete':
        $mahd=$_GET['mahd'];
        deteleOrder($mahd);
        echo '<script type="text/javascript">
                    window.location="index.php?ctrl=donhang";
            </script>';
    break;
    case 'cancel':
        $id=$_GET['id'];
        updateCancel($id);
        echo '<script type="text/javascript">
                    window.location="index.php?ctrl=donhang";
            </script>';
    break;
    case 'confirm':
        $id=$_GET['id'];
        updateConfirm($id);
        echo '<script type="text/javascript">
                    window.location="index.php?ctrl=donhang";
            </script>';
    break;
    default:
    break;


}

?>