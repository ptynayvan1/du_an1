<?php
    include_once 'model/catalog.php';
    include_once 'model/product.php';
$action='index';
    if(isset($_GET['action'])){
        $action=$_GET['action'];
    }
    switch($action){
        case 'index':
            $products=getAllProduct();
            include 'view/product/index.php';
        break;
        case 'addnew':
            $catalogs=getAllCatalog();
            include 'view/product/addproduct.php';
        break;
        case 'insert':
        //lay data tu form
            $cateId=$_POST['catalogId'];
            $name=$_POST['productName'];
            $date=$_POST['date'];
            $price=$_POST['price'];
            $moTa=$_POST['moTa'];
            $img=$_FILES['productImage']['name'];//lay ten hinh
        $path='../site/image/'.$img;
        if(move_uploaded_file($_FILES['productImage']['tmp_name'],$path)){
            addProduct($catalogId,$name,$img,$price,$date,$mota);
        }
        echo '<script type="text/javascript">
        window.location="index.php?ctrl=product";
</script>';
            addProduct($cateId,$name,$img,$price,$date,$moTa);
            break;
            case 'delte':
            $id=$_GET['id'];
            deleteproduct($id);
            echo '<script type="text/javascript">
                window.location="index.php?ctrl=product";
            </script>';
        break;
        case 'edit':
        $id=$_GET['id'];
        $p= getproductbyid($id);
        include 'view/product/edit.php';
        break;
        case 'update':
        $id=$_POST['id'];
        $name=$_POST['nameproduct'];
        $date=$_POST['date'];
        $mota=$_POST['mota'];
        $address = $_POST['address'];
        $img=$_FILES['productImage']['name'];//lay ten hinh
        $path='../site/images/'.$img;
        if(move_uploaded_file($_FILES['productImage']['tmp_name'],$path)){
            addProduct($catalogId,$name,$img,$price,$date,$moTa);
        }
        updateproduct($id,$name,$img,$date,$mota,$address);
        echo '<script type="text/javascript">
        window.location="index.php?ctrl=product";
</script>';
        updateproduct($id,$name,$img,$date,$mota,$address);
        echo '<script type="text/javascript">
                window.location="index.php?ctrl=product";
            </script>';
        break;
        case 'detail':
            $id = $_GET['id'];
            $p = getproductbyid($id);
            include 'view/product/productdetail.php';
        break;
        default:
   
        break;

    }