<?php
    include_once('model/user.php');
    $action='index';
    if(isset($_GET['action'])){
        $action=$_GET['action'];
    }
    switch($action){
        case 'index':
            $user= getAllUser();
            include 'view/user/index.php';
        break;
        case 'xoa':
            $id=$_GET['id'];
            deleteUser($id);
            echo '<script type="text/javascript">
            window.location="index.php?ctrl=product";
        </script>';
        break;
        case 'info':
            $id = $_GET['id'];
            $u = getUserById($id);
            include 'view/user/info.php';
        break;
        default:
    break;

    }
?>