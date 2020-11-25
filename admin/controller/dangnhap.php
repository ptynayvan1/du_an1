<?php
    include_once 'model/catalog.php';
    include_once 'model/login.php';
$action='index';
    if(isset($_GET['action'])){
        $action=$_GET['action'];
    }
    switch($action){
        case 'index':
        $catalogs=getAllCatalog();
        include 'view/login/login.php';
        case 'admin':
        if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
            $admin=$_POST['admin'];
            $pass=$_POST['pass'];

        }
        if(isset($_POST['logout'])&&($_POST['logout'])){
            
        }
    }
        ?>