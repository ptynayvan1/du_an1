<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
      .sada{
        width: 100%;
        min-height: 500px;
        object-fit: cover;
      }
      .tenxe{
          height: 35px;
      }
  </style>
<div class="site-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 text-center order-lg-2">
                        <div class="img-wrap-1 mb-5">
                            <img src="./site/views/images/feature_01.png" alt="Image" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-4 ml-auto order-lg-1">
                        <h3 class="mb-4 section-heading"><strong>Bạn có thể dễ dàng tận dụng quảng cáo của chúng tôi để thuê một chiếc xe hơi.</strong></h3>
                        <p class="mb-5">Đến Với Dịch Vụ thuê Xe Của Chúng Tôi Bạn Cứ Yên Tâm Trên Chiếc xe hộp của mình bạn sẽ cảm thấy thú vị trên mọi cung đường.</p>

                        <p><a href="#" class="btn btn-primary">Gặp họ bây giờ</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-section bg-light">
            <div class="container">
            <div class="row">
                    <div class="col-lg-7">
                        <h2 class="section-heading"><strong>Danh Sách Xe</strong></h2>
                        <p class="mb-5">Dưới đây là các mẫu xe mới nhất hiện tại và được nhiều người xem.</p>
                    </div>
                </div>
                <div class="row" style=" margin-bottom:-120px">         
                <?php
                   foreach ($showxe as $k) {?>
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="listing d-block  align-items-stretch">
                            <div class="listing-img h-100 mr-4">
                            <img src="./site/views/images/<?=$k['hinh_xe']?>" alt="Image" class="img-fluid" onerror="this.src='./site/views/images/hinhloi.jpg'">
                        </div>
                        <div class="listing-contents h-100">
                            <a href="listing.html" >
                                <h3 class="tenxe"><a href="index.php?act=ctxe&idxe=<?=$k['id_xe']?>"><?=$k['Ten_xe']?></a> </h3>
                            </a>
                            <div>
                            <p>Số lượt xem : <?=$k['Soluotxem']?></p>
                                <h6>  <i class="fa fa-map-marker" style="font-size:24px;color:red"> </i><?=$k['diachixe']?></h6>
                                <p><a href="contact.html" class="btn btn-primary btn-sm">Thuê ngay</a></p>
                        </div>
    </div>
</div>
</div>
                       <?php
                   }
                   ?>

                </div>
            </div>
        </div>
       
      <!-- het -->
        <div class="site-section bg-light">
            <div class="container">
                <div class="row" >
                    <div class="col-lg-7">
                        <h2 class="section-heading" ><strong>Feedback Khách Hàng</strong></h2>
                        <p class="mb-5">Họ rất Hài Lòng Về Chất Lượng Của Chúng Tôi.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="testimonial-2">
                            <blockquote class="mb-4">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
                            </blockquote>
                            <div class="d-flex v-card align-items-center">
                                <img src="./site/views/images/person_1.jpg" alt="Image" class="img-fluid mr-3">
                                <div class="author-name">
                                    <span class="d-block">Mike Fisher</span>
                                    <span>Owner, Ford</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="testimonial-2">
                            <blockquote class="mb-4">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
                            </blockquote>
                            <div class="d-flex v-card align-items-center">
                                <img src="./site/views/images/person_2.jpg" alt="Image" class="img-fluid mr-3">
                                <div class="author-name">
                                    <span class="d-block">Jean Stanley</span>
                                    <span>Traveler</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="testimonial-2">
                            <blockquote class="mb-4">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
                            </blockquote>
                            <div class="d-flex v-card align-items-center">
                                <img src="./site/views/images/person_3.jpg" alt="Image" class="img-fluid mr-3">
                                <div class="author-name">
                                    <span class="d-block">Katie Rose</span>
                                    <span>Customer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section bg-primary py-5" style="background-image:url(./site/views/images/1.jpg);  background-attachment: fixed; background-size:cover;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 mb-4 mb-md-0">
                        <h2 class="mb-0 text-white">Bạn còn chờ gì nữa?</h2>
                        <p class="mb-0 opa-7">Thuê Ngay Một Chiếc Xe Bạn Thích Đi Nào.</p>
                    </div>
                    <div class="col-lg-5 text-md-right">


                        <div class="form-control-wrap">
                            <input type="text" id="cf-3" placeholder="Bắt Đầu" class="form-control datepicker px-3">
                            <span class="icon icon-date_range"></span>

                        </div>
                        <div class="form-control-wrap">
                            <input type="text" id="cf-3" placeholder="Kết Thúc" class="form-control datepicker px-3">
                            <span class="icon icon-date_range"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>