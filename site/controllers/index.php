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
        $ngay_dat= date("Y-m-d");
        thuexe($idnd,$idxe,$ngaydat,$ngaytra,$ngay_dat);
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
    // case 'thanhtoan':
    //   $id=$_POST['id'];
    //   $_SESSION['iddh']=$id;
    //   $donhang=ttdh($id);
    //   // $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
    //    $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
    //   $vnp_Returnurl = "https://duan1.huy/index.php?act=trave";
    //   $vnp_TmnCode = "IUNUDIA5"; 
    //   $vnp_HashSecret = "HRZMLPMNZYCOUWVXVOALQSRGDLYFZWDA";
      
    //   $vnp_TxnRef = date('YmdHis');
    //   $vnp_OrderInfo = "Thanh toán thuê xe".$id;
    //   $vnp_OrderType = "Thuê xe";
    //   $vnp_Amount = $_POST['gia'] * 100;
    //   $vnp_Locale = "vn";
    //   $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
    //   $vnp_BankCode = $_POST['bank_code'];
    //   $inputData = array(
    //       "vnp_Version" => "2.0.0",
    //       "vnp_TmnCode" => $vnp_TmnCode,
    //       "vnp_Amount" => $vnp_Amount,
    //       "vnp_Command" => "pay",
    //       "vnp_CreateDate" => date('YmdHis'),
    //       "vnp_CurrCode" => "VND",
    //       "vnp_IpAddr" => $vnp_IpAddr,
    //       "vnp_Locale" => $vnp_Locale,   
    //       "vnp_OrderInfo" => $vnp_OrderInfo,
    //       "vnp_OrderType" => $vnp_OrderType,
    //       "vnp_ReturnUrl" => $vnp_Returnurl,
    //       "vnp_TxnRef" => $vnp_TxnRef,    
    //   );
    //   if (isset($vnp_BankCode) && $vnp_BankCode != "") {
    //     $inputData['vnp_BankCode'] = $vnp_BankCode;
    //  }
    //   ksort($inputData);
    //   $query = "";
    //   $i = 0;
    //   $hashdata = "";
    //   foreach ($inputData as $key => $value) {
    //       if ($i == 1) {
    //           $hashdata .= '&' . $key . "=" . $value;
    //       } else {
    //           $hashdata .= $key . "=" . $value;
    //           $i = 1;
    //       }
    //       $query .= urlencode($key) . "=" . urlencode($value) . '&';
    //   }
      
    //   $vnp_Url = $vnp_Url . "?" . $query;
    //   if (isset($vnp_HashSecret)) {
    //       $vnpSecureHash = hash('sha256',$vnp_HashSecret . $hashdata);
    //       $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
    //   }
    //   $returnData = array(
    //     'code' => '00', 'message' => 'success', 'data' => $vnp_Url
    //  );
    //  header('Location: ' . $returnData['data']);
  
    // break;
    case 'savethanhtoan':
      $vnp_TmnCode = "IUNUDIA5"; //Mã website tại VNPAY  thay doi cai nay chua roi
      $vnp_HashSecret = "HRZMLPMNZYCOUWVXVOALQSRGDLYFZWDA"; //Chuỗi bí mật
      $vnp_SecureHash = $_GET['vnp_SecureHash'];
      $inputData = array();
      foreach ($_GET as $key => $value) {
          if (substr($key, 0, 4) == "vnp_") {
              $inputData[$key] = $value;
          }
      }
      unset($inputData['vnp_SecureHashType']);
      unset($inputData['vnp_SecureHash']);
      ksort($inputData);
      $i = 0;
      $hashData = "";
      foreach ($inputData as $key => $value) {
          if ($i == 1) {
              $hashData = $hashData . '&' . $key . "=" . $value;
          } else {
              $hashData = $hashData . $key . "=" . $value;
              $i = 1;
          }
      }

      //$secureHash = md5($vnp_HashSecret . $hashData);
  $secureHash = hash('sha256',$vnp_HashSecret . $hashData);
      if ($secureHash == $vnp_SecureHash) {
          if ($_GET['vnp_ResponseCode'] == '00') {
            capnhatdh($_SESSION['iddh']);
            unset($_SESSION['iddh']);
              echo "GD Thanh cong";
              header('Location: index.php?act=dathue');
          } else {
              echo "GD Khong thanh cong";
          }
      } else {
          echo "Chu ky khong hop le";
      }
            // header('Location: index.php?act=dathue');
            break;
    case 'thanhtoan1':
      $id=$_GET['id'];
      $gia=$_GET['gia'];
      $donhang=ttdh($id);
      $ttcn=ttcn($_SESSION['id']);
      $view="./site/views/vnpay.php";
      require_once "./site/layout.php";
    break;
    case 'ttcn':
    $id=$_SESSION['id'];
    $ttcn=ttcn($id);
    $view="./site/views/ttcn.php";
    require_once "./site/layout.php";
    break;
    case 'capnhat':
    $id=$_SESSION['id'];   
   $tendn=$_POST['tendn'];
   $hoten=$_POST['hoten'];
   $email=$_POST['email'];
   $sdt=$_POST['sdt'];
   $diachi=$_POST['diachi'];
   $tp=$_POST['tp'];
   $cmnd=$_POST['cmnd'];
   capnhat($id,$tendn,$hoten,$email,$sdt,$diachi,$tp,$cmnd);
   header("location: index.php");
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
      $checktk=ctimkiem1();
      $timkiem=dsxe();
      $view="./site/views/timkiem.php";
      require_once "./site/layout.php";
    break;
    case 'trave':
      $view="./site/views/trave.php";
      require_once "./site/layout.php";
    break;
    case "login":
      $url=$_POST['url'];
      unset($_SESSION['loidn']);
      $user=$_POST['user'];
      $pass=$_POST['pass'];
    $check=checkdn($user,$pass);
    if (is_array($check)) {
      $_SESSION['user']=$user;
      $_SESSION['id']=$check['Id_nguoidung'];
    header("location: $url");
    echo $url;
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
  case "user" :
    $id = $_SESSION['id'];
    $user = getUser($id);
    include './site/views/user.php';
  break;
  }
?><!-- Ngân hàng	NCB
Số thẻ	9704198526191432198
Tên chủ thẻ	NGUYEN VAN A
Ngày phát hành	07/15
Mật khẩu OTP	123456 -->