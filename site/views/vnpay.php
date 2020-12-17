<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Tạo mới đơn hàng</title>
        <!-- Bootstrap core CSS -->
        <link href="/vnpay_php/assets/bootstrap.min.css" rel="stylesheet"/>
        <!-- Custom styles for this template -->
        <link href="/vnpay_php/assets/jumbotron-narrow.css" rel="stylesheet">  
        <script src="/vnpay_php/assets/jquery-1.11.3.min.js"></script>
        <!-- gdfg -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">
    </head>
    <style>
    @import url('https://fonts.googleapis.com/css?family=Amatic+SC');  
    .btn {
      border: none;
      display: block;
      text-align: center;
      cursor: pointer;
      text-transform: uppercase;
      outline: none;
      overflow: hidden;
      position: relative;
      color: #fff;
      font-weight: 700;
      font-size: 15px;
      background-color: #222;
      padding: 17px 60px;
      margin: 0 auto;
      box-shadow: 0 5px 15px rgba(0,0,0,0.20);
    }
      
    .btn span {
      position: relative; 
      z-index: 1;
    }
      
    .btn:after {
      content: "";
      position: absolute;
      left: 0;
      top: 0;
      height: 490%;
      width: 140%;
      background: #78c7d2;
      -webkit-transition: all .5s ease-in-out;
      transition: all .5s ease-in-out;
      -webkit-transform: translateX(-98%) translateY(-25%) rotate(45deg);
      transform: translateX(-98%) translateY(-25%) rotate(45deg);
    }
      
    .btn:hover:after {
      -webkit-transform: translateX(-9%) translateY(-25%) rotate(45deg);
      transform: translateX(-9%) translateY(-25%) rotate(45deg);
    }
    .col-lg-4{
      width: 100%;
      background-color: blueviolet;
      min-height: 500px;
    }
    
  </style>
    <body>

        <div class="container">
            <div class="header clearfix">
                <h3 class="text-muted"></h3>
            </div>
            <h3>Tạo mới đơn hàng</h3>
            <div class="table-responsive">
                <form action="site/views/vnpay_create_payment.php" id="create_form" method="post">       

                    <div class="form-group">
                        <input type="hidden"  name="order_type" id="order_type" value="topup">
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="order_id" name="order_id" type="hidden" value="<?php echo date("YmdHis") ?>"/>
                    </div>
                    <div class="mb-3">
  <label for="exampleFormControlInput2" class="form-label">Họ tên</label>
  <input type="text" class="form-control" name="hoten" id="exampleFormControlInput1" placeholder="" value="<?=$ttcn['ho_ten']?>">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput3" class="form-label">Tên xe</label>
  <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="" value="<?=$ttcn['email']?>">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput4" class="form-label">Số điện thoại</label>
  <input type="number" class="form-control" name="sdt" id="exampleFormControlInput1" placeholder="" value="<?=$ttcn['sdt']?>">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput5" class="form-label">Thành phố</label>
  <input type="text" class="form-control" name="tp" id="exampleFormControlInput1" placeholder="" value="<?=$ttcn['thanh_pho']?>">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput5" class="form-label">Địa chỉ</label>
  <input type="text" class="form-control" name="diachi" id="exampleFormControlInput1" placeholder="" value="<?=$ttcn['dia_chi']?>">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput5" class="form-label">Tên xe</label>
  <input type="text" class="form-control" name="diachi" id="exampleFormControlInput1" placeholder="" value="<?=$donhang['Ten_xe']?>" readonly>
</div>
<div class="mb-3">
<input type="hidden" name="gia" value="<?=$gia?>">
<input type="hidden" name="id" value="<?=$id?>">
  <label for="exampleFormControlInput6" class="form-label h-st">Số tiền : <?=number_format($gia,'0','.','.')?>VNĐ</label>
</div>
                    <div class="form-group">
                        <label for="bank_code">Ngân hàng</label>
                        <select name="bank_code" id="bank_code" class="form-control">
                            <option value="">Không chọn</option>
                            <option value="NCB"> Ngan hang NCB</option>
                            <option value="AGRIBANK"> Ngan hang Agribank</option>
                            <option value="SCB"> Ngan hang SCB</option>
                            <option value="SACOMBANK">Ngan hang SacomBank</option>
                            <option value="EXIMBANK"> Ngan hang EximBank</option>
                            <option value="MSBANK"> Ngan hang MSBANK</option>
                            <option value="NAMABANK"> Ngan hang NamABank</option>
                            <option value="VNMART"> Vi dien tu VnMart</option>
                            <option value="VIETINBANK">Ngan hang Vietinbank</option>
                            <option value="VIETCOMBANK"> Ngan hang VCB</option>
                            <option value="HDBANK">Ngan hang HDBank</option>
                            <option value="DONGABANK"> Ngan hang Dong A</option>
                            <option value="TPBANK"> Ngân hàng TPBank</option>
                            <option value="OJB"> Ngân hàng OceanBank</option>
                            <option value="BIDV"> Ngân hàng BIDV</option>
                            <option value="TECHCOMBANK"> Ngân hàng Techcombank</option>
                            <option value="VPBANK"> Ngan hang VPBank</option>
                            <option value="MBBANK"> Ngan hang MBBank</option>
                            <option value="ACB"> Ngan hang ACB</option>
                            <option value="OCB"> Ngan hang OCB</option>
                            <option value="IVB"> Ngan hang IVB</option>
                            <option value="VISA"> Thanh toan qua VISA/MASTER</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="hidden" value ="vn" name="language" id="language">
                    </div>
                    <div class="button_container">
                      <button type="submit" class="btn"><i class="fa fa-money" style="margin-right: 10px ;" aria-hidden="true"></i><span>Thanh toán</span></button>
                    </div>
                </form>
            </div>
            <p>
                &nbsp;
            </p>
            
        </div>  
        <link href="https://sandbox.vnpayment.vn/paymentv2/lib/vnpay/vnpay.css" rel="stylesheet"/>
        <script src="https://sandbox.vnpayment.vn/paymentv2/lib/vnpay/vnpay.js"></script>
        <script type="text/javascript">
            $("#btnPopup").click(function () {
                var postData = $("#create_form").serialize();
                var submitUrl = $("#create_form").attr("action");
                $.ajax({
                    type: "POST",
                    url: submitUrl,
                    data: postData,
                    dataType: 'JSON',
                    success: function (x) {
                        if (x.code === '00') {
                            if (window.vnpay) {
                                vnpay.open({width: 768, height: 600, url: x.data});
                            } else {
                                location.href = x.data;
                            }
                            return false;
                        } else {
                            alert(x.Message);
                        }
                    }
                });
                return false;
            });
        </script>


    </body>
</html>
