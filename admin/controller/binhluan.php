<?php
    
      include_once 'model/binhluan.php';
     $action='index';
      if(isset($_GET['action'])){
            $action=$_GET['action'];
        }
     switch($action){
         case 'index':
            $cmt=getAllComment();
            include 'view/binhluan/index.php';
         break;
        case 'delete':
            $id=$_GET['id'];
            detelecomment($id);
            echo '<script type="text/javascript">
                window.location="index.php?ctrl=binhluan";
            </script>';
        break;
        default:
        break;
     }

?>