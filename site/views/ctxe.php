<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<style>
    .container-fliud{
        margin-top: 80px;
    }
    .tab-pane img{
        width: 1000px;
    }
    .button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;  
    
    }
    .btn-default{
        width: 100px;
        height: 50px;
        background-color: aquamarine;
        font-size: 12pt;
    }
    .modal-body input{
        width: 40%;
        height: 35px;
        border-radius: 10px 10px 10px;
        opacity: 0.5;
    }
    
    .modal-body{
        font-family:serif;
    }
    .modal-body h1{
        color:orangered;
        font-weight: bold;
    }
    .modal-content{
        width: 600px;
    }
    .rowbannerchinh {
        float: left;
        width: 100%;
        height: 600px;
        margin-bottom: 150px;
        position: relative;
    }
    
    .rowbannerchinh>img {
        width: 100%;
        height: 600px;
        object-fit: cover;
    }
    
    .btn1 {
        position: absolute;
        width: 100px;
        left: 20px;
        top: 47%;
    }
    
    .btn2 {
        position: absolute;
        width: 100px;
        right: 20px;
        top: 47%;
    }
    
    .btn1 img,
    .btn2 img {
        width: 100%;
    }
    .tc{
        margin-left: 10px;
        height: 45px;
        background-color:red;
    }
    .btn {
        margin-top: 15px;
    }
    .price {
        margin-top: 15px;
    }
    .fa{
        margin-bottom: 10px;
    }
    .product-description p{
        background-color: slateblue;
    }
    .btn-info{
        font-weight: bold;    
           
    }
</style>
</style>
<script>
    var num = 0;

    function next() {
        var slider = document.getElementById('slider');
        num++;
        if (num>=images.length) {
            num = 0;
        }
        slider.src = images[num];
    }
    function prev() {
        var slider = document.getElementById('slider');
        num--;
        if (num<0) {
            num = images.length -1;
        }
        slider.src = images[num];
    }
  
              $(document).ready(function() {
    let id = $("#id_xe").val();
    console.log(id);
    $(".comment").click(function() {

        let comment = $("#comment").val();
        if (comment != "" && id > 0) {
            $.ajax({
                type: "POST",
                url: "index.php?act=thembl",
                data: { id: id, comment: comment },
                success: function(data) {
                    location.reload();
                }
            });
        }
    });
})

</script>
    <div class="container">
   
        <div class="container-fliud">
            <div class="wrapper row" >
                <div class="preview col-md-6">
                    <div class="preview-pic tab-content">
                        <?php
                        if(isset($_SESSION['cb_thuexe'])){
                            echo $_SESSION['cb_thuexe'];
                        }
                        $i=1;
                        foreach ($manganh as $k) {
                            if ($i!=1) {
                                echo '  <div class="tab-pane " id="pic-'.$i.'"><img src="./site/views/images/product/images_list/'.$k.'" alt="">
                        </div>';
                            } else {
                                echo '  <div class="tab-pane active" id="pic-'.$i.'"><img src="./site/views/images/product/images_list/'.$k.'" alt="">
                                </div>';
                            }
                            
                       
                        $i++;
                        }
                        ?>
                      
                        <!-- <div class="tab-pane" id="pic-2"><img src="images/product/details/1.jpg">
                        </div>
                        <div class="tab-pane" id="pic-3"><img src="images/product/details/2.jpg">
                        </div>
                        <div class="tab-pane" id="pic-4"><img src="images/product/details/3.jpg">
                        </div>
                        <div class="tab-pane" id="pic-5"><img src="images/product/details/4.jpg">
                        </div> -->
                        <ul class="preview-thumbnail nav nav-tabs">
                        <?php
                        $v=1;
                        foreach ($manganh as $d) {
                            if ($v!=1) {
                                echo '  <li>
                        <a data-target="#pic-'.$v.'" data-toggle="tab"><img src="./site/views/images/product/images_list/'.$d.'"></a>
                    </li>';
                            }else{
                                echo '  <li class="active">
                                <a data-target="#pic-'.$v.'" data-toggle="tab"><img src="./site/views/images/product/images_list/'.$d.'"></a>
                            </li>';
                            }
                       
                        $v++;
                        }
                        ?>
                          
                            <!-- <li>
                                <a data-target="#pic-2" data-toggle="tab"><img src="images/product/details/1.jpg"></a>
                            </li>
                            <li>
                                <a data-target="#pic-3" data-toggle="tab"><img src="images/product/details/2.jpg"></a>
                            </li>
                            <li>
                                <a data-target="#pic-4" data-toggle="tab"><img src="images/product/details/3.jpg"></a>
                            </li>
                            <li>
                                <a data-target="#pic-5" data-toggle="tab"><img src="images/product/details/4.jpg"></a>
                            </li> -->
                        </ul>
                    </div>
                    
                </div>
                <div class="details col-md-6">
                    <div class="form-thuexe" style="width:80%; height: 550px; margin-bottom: 200px">
                    <h3 class="product-title" style="color: black; font-weight: bolder;"><?=$ctxe['Ten_xe']?></h3>
                                <div class="rating">
                                    <div class="stars"> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span>
                                    </div> <span class="review-no" style="color: brown; font-size: 15pt;font-weight: bold;  ">Số lượt xem : <?=$ctxe['Soluotxem']?></span>
                                </div>
    
                                <table>
                                <h4><i class="fa fa-car"style="margin-right: 10px;"></i> <span style="font-weight: bold; opacity:0.8;" >Số ghế: </span> <?=$ctxe['Loaixe']?></h4>
                                <h4><i class="fab fa-bluetooth-b" style="margin-right: 10px;"></i><span style="font-weight: bold; opacity:0.8;" >Tính năng: </span> <?=$ctxe['tinh_nang']?></h4>
                                <h4><i class="fas fa-band-aid fa-fw" style="margin-right: 10px;"></i><span style="font-weight: bold; opacity:0.8;" >Nhiên liệu: </span> <?=$ctxe['Nhien_lieu']?></h4>
                                <h4><i class='fas fa-address-card' style=' margin-right: 10px;'></i> <span style="font-weight: bold; opacity:0.8;" >GIẤY TỜ THUÊ XE (BẢN GỐC): </span> CMND và GPLX (đối chiếu)</h4>
                                <h4> <i class='fas fa-tags' style='margin-right: 10px;'></i><span style="font-weight: bold; opacity:0.8;" >TÀI SẢN THẾ CHẤP: </span> 15 triệu (tiền mặt/chuyển khoản cho chủ xe khi nhận xe)hoặc Xe máy (kèm cà vẹt gốc) giá trị 15 triệu</h4>
                                <h4><i class='fas fa-hands-helping'style='margin-right: 10px;'></i> <span style="font-weight: bold; opacity:0.8;" >ĐIỀU KHOẢN: </span><p> 1. Chấp nhận Hộ khẩu Thành phố/KT3 Thành phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)</p>2. Tài sản đặt cọc (1 trong 2 hình thức)- Xe máy (giá trị >15t) + Cà vẹt (bản gốc)- Hoặc cọc tiền mặt 15 triệu.</h4>

                                    <!-- Trigger the modal with a button -->
                                <p class="product-description"><span style="font-weight: bold; opacity:0.8;" >MÔ TẢ: </span><?=$ctxe['mota']?></p>
                                <h4 class="price"> <i class='fas fa-hand-holding-usd' style='color:red; margin-right: 10px;'></i>Giá Thuê: <span><?=number_format($ctxe['Gia_thue'],0,'.','.')?>VNĐ/ngày</span></h4>
                                </p>    
                                
                                    <?php
                                     if (isset($_SESSION['user'])) { 
                                        echo '  <button type="button" class="btn btn-info btn-lg " data-toggle="modal" data-target="#myModal"><i class="fas fa-american-sign-language-interpreting" style="font-size:25px; margin-right: 10px;"></i>Thuê Xe Ngay</button>
                                                <button type="button" class="btn btn-info btn-tg tc" data-toggle="modal" data-target="#myModal"><i class="fas fa-tools" style="font-size:24px; margin-right: 10px;"></i>Add To Cart</button>';
                                      } else {
                                        echo ' <p ><a href="index.php?act=login1" style="color:red;font-weight:bold;font-size:25px">BẠN CHƯA ĐĂNG NHẬP</a></p>';
                                      }
                                    ?>

                                    <!-- Modal -->
                                    <div class="modal fade" id="myModal" role="dialog">
                                    <input type="hidden" id="id_xe" name="id_xe" value="<?=$ctxe['id_xe']?>">
                                        <div class="modal-dialog">
                                        
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                            <form method="post" action="index.php?act=thuexe" >
                                              <center> <h1>ĐƠN HÀNG</h1></center>
                                                <h3>Ngày Đặt</h3>
                                                <input type="text" name="ngaydat" id="datepicker" placeholder="Ngày giao" class="from" readonly>
                                                <h3>Ngày Trả</h3>
                                                <input type="text" placeholder="Ngày trả" name="ngaytra"  class="to" readonly>
                                                <input type="hidden" value="<?=$ctxe['id_xe']?>" name="idxe">
                                                <div class="modal-footer" style="margin-top: 15px;">
                                            <button  class="btn btn-default" >Hoàn Tất</button>
                                            </div>
                                                </form>
                                            </div>                                     
                                        </div>
                                        </div>
                                    </div>
                            </table>
                    </div>
                </div>
                <div class=" col-10">
        <div class="comment-wrapper">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Bình luận
                </div>
                <div class="panel-body mt-3">
                  <input type="hidden" id="id_xe" name="id_xe" value="<?=$ctxe['id_xe']?>">
                    <?php
                    if (isset($_SESSION['user'])) { 
                      echo '<textarea class="form-control" id="comment" placeholder="Viết bình luận....." rows="3"></textarea>
                      <br>
                      <button type="button" class="btn btn-info pull-right comment">Bình luận</button>
                      <div class="clearfix"></div>';
                    } else {
                      echo '<a href="index.php?ctrl=login">BẠN CHƯA ĐĂNG NHẬP</a>';
                    }
                    
                    ?>
                    <hr>
                    <ul class="media-list">
                     <?php
                     foreach ($bl as $b) {
                       if ($b['Thoigian_binhluan']=="0000-00-00 00:00:00") {
                         $ngay="không xác định";
                       } else {
                        $first_date = strtotime($b['Thoigian_binhluan']);
                        $hientai=date("y-m-d");
                        $second_date = strtotime($hientai);
                        $datediff = abs($first_date - $second_date);
                        $ngay = floor($datediff/60/60/24)." ngày trước";
                       }
                       

                     ?>
                          <li class="media mb-4">
                            <a href="#" class="pull-left">
                                <img src="https://bootdey.com/img/Content/user_1.jpg" alt="" class="img-circle">
                            </a>
                            <div class="media-body">
                                <span class="text-muted pull-right">
                                    <small class="text-muted"><?=$ngay ?></small>
                                </span>
                                <strong class="text-success"><?=$b['ho_ten']?></strong>
                                <p>
                                   <?=$b['Binh_luan']?>
                                </p>
                            </div>
                        </li>
                     <?php }
                     ?>
                    </ul>
                </div>
            </div>
        </div>

    </div>
            </div>
        </div>
       
    </div>
   <script>
//         $( function() {
//     $( "#datepicker" ).datepicker({ minDate: -1, maxDate: "+1M +10D" });
//   } );
      $(document).ready(function() {
   $(".from").datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 1,
        minDate: 0,
        dateFormat: 'yy-mm-dd',
        onClose: function(selectedDate) {
            $(".to").datepicker("option", "minDate", selectedDate);
        }
    });
    $(".to").datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 1,
        minDate: 0,
        dateFormat: 'yy-mm-dd',
        onClose: function(selectedDate) {
            $(".from").datepicker("option", "maxDate", selectedDate);
        }
    });
})
  </script>