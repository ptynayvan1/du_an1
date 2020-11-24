<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
        width: 75%;
        height: 50px;
        border-radius: 20px 20px 20px;
        opacity: 0.5;
    }
    
    .modal-body{
        font-family: Courier;
        font-display: 1s;
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
</script>
    <div class="container">
   
        <div class="container-fliud">
            <div class="wrapper row" >
                <div class="preview col-md-6">
                    <div class="preview-pic tab-content">
                        <?php
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
                    <div class="form-thuexe" style="width:80%; height: 550px; margin-bottom: 20px">
                    <h3 class="product-title" style="color: black; font-weight: bolder;"><?=$ctxe['Ten_xe']?></h3>
                                <div class="rating">
                                    <div class="stars"> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span>
                                    </div> <span class="review-no">Số lượt xem : <?=$ctxe['Soluotxem']?></span>
                                </div>
                                <p class="product-description"></p><?=$ctxe['mota']?></p>
                                  <h4 class="price">Giá Thuê: <span><?=number_format($ctxe['Gia_thue'],0,'.','.')?>VNĐ/ngày</span></h4>
                                </p>
                                <table>
                                <p>ĐẶC ĐIỂM</p>
                                <h6>Số ghế: <?=$ctxe['Loaixe']?></h6>
                                <span>Tinh nang: <?=$ctxe['tinh_nang']?></span>
                               
                                <h5>Nhiên liệu: <?=$ctxe['Nhien_lieu']?></h5>
                                    <!-- Trigger the modal with a button -->
                                    <?php
                                     if (isset($_SESSION['user'])) { 
                                        echo '  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Thuê Xe Ngay</button>';
                                      } else {
                                        echo ' <p style="color:red;font-weight:bold;font-size:25px">BẠN CHƯA ĐĂNG NHẬP</p>';
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
                                            <form action="">
                                                <center>
                                                <h1>Thông Tin Của Bạn</h1>
                                                <h3>Họ Và Tên</h3>
                                                <input type="text" name="hoten">
                                                <h3>Số Điện Thoại</h3>
                                                <input type="text" name="sdr">
                                                <h3>Email</h3>
                                                <input type="text" name="email">
                                                <h3>Địa Chỉ</h3>
                                                <input type="text" name="diachi">
                                                <h3>CMND</h3>
                                                <input type="text" name="CMND">
                                                </center>
                                            </form>
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Hoàn Tất</button>
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
                  <input type="hidden" id="id_xe" name="id_xe" value="<?=$row['id_xe']?>">
                    <?php
                    if (isset($_SESSION['user'])) { 
                      echo '<textarea class="form-control" id="comment" placeholder="Viết bình luận....." rows="3"></textarea>
                      <br>
                      <button type="button" class="btn btn-info pull-right comment">Bình luận</button>
                      <div class="clearfix"></div>';
                    } else {
                      echo 'BẠN CHƯA ĐĂNG NHẬP';
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

});
    </script>