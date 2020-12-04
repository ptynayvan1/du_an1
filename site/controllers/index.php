<?php
   require_once "./site/models/index.php"; 
   $loaixe=loaixe();
   $hangxe=hangxe();
  $act = "index";//chức năng mặc định
  if(isset($_GET["act"])==true) $act=$_GET["act"];//tiếp nhận chức năng user request
  switch ($act) {
    case "index":
        $showxe=showxe();
        $view="./site/views/home.php";
        require_once "./site/layout.php";
    break;
    case 'timkiem':
      if (isset($_POST['hx'])) {
        $hx=$_POST['hx'];
      } else {
        $hx="";
      }
      if (isset($_POST['lx'])) {
        $lx=$_POST['lx'];
      } else {
        $lx="";
      }
      
      $timkiem=timkiem($hx,$lx);
      $checktk=ctimkiem($hx,$lx);
      $view="./site/views/timkiem.php";
      require_once "./site/layout.php";
     
    break;
    case "ctxe":
      $idxe=$_GET['idxe'];
      $ctxe=ctxe($idxe);
      $bl=getbinhluan($idxe);
      $manganh=anhxe($ctxe['image_list']);
      $view="./site/views/ctxe.php";
      require_once "./site/layout.php";
    break;
    case 'thuexe':
      if ($_POST['ngaydat']!=''&&$_POST['ngaytra']!=''&&$_POST['idxe']!='') {
        $ngaydat=$_POST['ngaydat'];
        $ngaytra=$_POST['ngaytra'];
        $idnd=$_SESSION['id'];
        $idxe=$_POST['idxe'];
        thuexe($idnd,$idxe,$ngaydat,$ngaytra);
        unset($_SESSION['cb_thuexe']);
        header("location:index.php");
      } else {
        $_SESSION['cb_thuexe']="<script>alert('Xin mời nhập đầy đủ dữ liệu')</script>";
        // $view="./site/views/ctxe.php";
        // require_once "./site/layout.php";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
      }
      
    break;
    case "dathue":
      $xedt=dhdaxong($_SESSION['id']);
      $view="./site/views/dathue.php";
      require_once "./site/layout.php";
    break;
    case 'thanhtoan':
      $id=$_GET['id'];
      $gia=$_GET['gia']*100;
      $donhang=ttdh($id);
      // $first_date = strtotime($donhang['ngay_tra']);
      // $second_date = strtotime($donhang['Ngay_thue']);
      // $datediff = abs($first_date - $second_date);
      // $ngay=floor($datediff/(60*60*24));
      // $gia=$donhang['Gia_thue']*$ngay*100;
      $view="./site/thanhtoan/index.php";
      require_once "./site/layout.php";
    
    break;
    case "thembl":
      $id_nguoidung=$_SESSION['id'];
      $id_xe=$_POST['id'];
      $cmt=$_POST['comment'];
      $ngay=date('y/m/d');
      thembl($id_nguoidung,$id_xe,$cmt,$ngay);
      break;
    case "login1":
      require_once "./site/views/login.php";
    
    break;
    case 'dsxe':
      $timkiem=dsxe();
      $view="./site/views/timkiem.php";
      require_once "./site/layout.php";
    break;
    case "login":
      unset($_SESSION['loidn']);
      $user=$_POST['user'];
      $pass=$_POST['pass'];
    $check=checkdn($user,$pass);
    if (is_array($check)) {
      $_SESSION['user']=$user;
      $_SESSION['id']=$check['Id_nguoidung'];
      header("location: index.php");
    }else{
      $_SESSION['loidn']='<script>
      alert("Tài khoản đăng nhập không chính xác");
    </script>';
      header("location: index.php?act=login1");
    }
  break;
  case "logout":
    unset($_SESSION['user']);
    unset($_SESSION['id']);
    unset($_SESSION['loidn']);
    header("location: index.php");
  break;
  case "signup_":
  if($_POST['tendn']!=""&&$_POST['cmnd']!=""&&$_POST['hoten']!=""&&$_POST['email']!=""&&$_POST['sdt']!=""&&$_POST['dc']!=""&&$_POST['tp']!=""&&$_POST['qg']!=""&&$_POST['matkhau']!=""){
    $tendn=$_POST['tendn'];
    $matkhau=$_POST['matkhau'];
    $email=$_POST['email'];
    $sdt=$_POST['sdt'];
    $dc=$_POST['dc'];
    $tp=$_POST['tp'];
    $qg=$_POST['qg'];
    $cmnd=$_POST['cmnd'];
    $hoten=$_POST['hoten'];
    $check=themngd($hoten,$matkhau,$tendn,$sdt,$dc,$tp,$qg,$email,$cmnd);
    $_SESSION['user']=$tendn;
    $_SESSION['id']=$check;
    header("location: index.php");
   
  }
  else{
    $a='<script>
    alert("Vui lòng nhập đủ thông tin")
</script>';
header("location: index.php?act=signup");

  }
  break;
  case "signup" :
    $view="./site/views/signup.php";
    require_once "./site/layout.php";
  break;
  }
?>