<?php

include_once 'model/ctdh.php';
$action='index';
if(isset($_GET['action'])){
    $action=$_GET['action'];
}
switch($action){
    case 'chitietdonhang':
        $id_donhang=$_GET['id'];
        $ct=getAllctdh($id_donghang);
        include 'view/ctdh/index.php';
    break;
}
?>