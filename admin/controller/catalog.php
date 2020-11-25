<?php
    include_once 'model/catalog.php';
$action='index';
    if(isset($_GET['action'])){
        $action=$_GET['action'];
    }
    switch($action){
        case 'index':
            $catalogs=getAllCatalog();
            include 'view/catalog/index.php';
        break;

        case 'addnew':
            include 'view/catalog/addnew.php';
        break;

        case 'add':
            $id=$_POST['id'];
            $name=$_POST['nameCata'];
            $logo = $_POST['logo'];
            addnewcatalog($name,$logo);
            echo '<script type="text/javascript">
                window.location="index.php?ctrl=catalog";
            </script>';
        break;

        case 'update':
            $id=$_POST['id'];
            $name=$_POST['nameCata'];
            $logo=$_POST['logo'];
            updatecatalog($id,$name,$logo);
            echo '<script type="text/javascript">
                window.location="index.php?ctrl=catalog";
            </script>';
        break;

        case 'edit':
            $id=$_GET['id'];
            $cat=getcatalogbyid($id);
            include 'view/catalog/edit.php';
        break;

        case 'delte':
            $id=$_GET['id'];
            deletecatalog($id);
            echo '<script type="text/javascript">
                window.location="index.php?ctrl=catalog";
            </script>';
        break;
        default:
        break;
        
    }
?>