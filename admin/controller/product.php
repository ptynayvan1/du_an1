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
            $catalogId=$_POST['catalogId'];
            $name=$_POST['productName'];
            $date=$_POST['date'];
            $price=$_POST['price'];
            $moTa=$_POST['moTa'];
            $img=$_FILES['productImage']['name'];//lay ten hinh
            $path='../site/views/images/'.$img;
            if(move_uploaded_file($_FILES['productImage']['tmp_name'],$path)){
                addProduct($catalogId,$name,$img,$price,$date,$moTa);
                echo '<script type="text/javascript">
                window.location="index.php?ctrl=product";
            </script>';
            }else {
                echo '<script type="text/javascript">
                window.location="index.php?ctrl=product&action=addnew";
        </script>';
            }
            
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
            $image=img($id)['hinh_xe'];
            $img=$_FILES['productImage']['name'];//lay ten hinh
            $path='../site/views/images/'.$img;
            if(move_uploaded_file($_FILES['productImage']['tmp_name'],$path)){
                updateproduct($id,$name,$img,$date,$mota,$address);
            }else{
                updateproduct($id,$name,$image,$date,$mota,$address);
            }
               
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