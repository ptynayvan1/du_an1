<!doctype html>
<html lang="en">

<head>
    <title>CarRental Poly &mdash;</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./site/views/fonts/icomoon/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./site/views/css/bootstrap.min.css">
    <link rel="stylesheet" href="./site/views/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="./site/views/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="./site/views/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./site/views/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./site/views/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="./site/views/css/aos.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="./site/views/css/style.css">

</head>
<style>
    .site-logo{
        width: 300px;
        font-size: 13pt;
        }
    .site-logo strong{
        font-size: 20pt;
    }
</style>
<body>
    <div class="site-wrap" id="home-section">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>
        <header class="site-navbar site-navbar-target" role="banner">

            <div class="container">
                <div class="row align-items-center position-relative">

                    <div class="col-3">
                        <div class="site-logo">
                            <a href="index.php"><strong>CarRental Poly</strong></a>
                        </div>
                    </div>

                    <div class="col-9  text-right">

                        <span class="d-inline-block d-lg-none"><a href="#" class=" site-menu-toggle js-menu-toggle py-5 "><span class="icon-menu h3 text-black"></span></a>
                        </span>

                        <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav ml-auto ">
                                <li class="active"><a href="index.php" class="nav-link">Home</a></li>
                                <li><a href="index.php?act=ctxe&idxe" class="nav-link">Danh Sách Xe</a></li>
                                <li><a href="testimonials.html" class="nav-link">Các Đánh Giá</a></li>
                                <li><a href="history_p.html" class="nav-link">Xe Đã Thuê</a></li>
                                <?php
                                if (isset($_SESSION['user'])) {
                                echo '<a href="index.php?act=logout"> <button type="dangnhap">Đăng xuất</button></a>';
                                }else{
                                    echo '<a href="index.php?act=login1"> <input type="submit" value="Đăng Nhập"></a>';
                                }
                                ?>
                        
                                <input type="submit" value="Đăng Ký" style="margin-left: 20px;">
                                
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <div class="hero" style="background-image: url('./site/views/images/hero_1_a.jpg');">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-10">

                        <div class="row mb-5">
                            <div class="col-lg-7 intro">
                            <h1><p style="font-weight:bold; font-size:40pt">Thuê một chiếc xe</p> là trong tầm tay của bạn.</h1>
                            </div>
                        </div>

                        <form class="trip-form" method="post" action="index.php?act=timkiem">

                            <div class="row align-items-center">

                                <div class="mb-3 mb-md-0 col-md-4">
                                    <select name="hx" id="" class="custom-select form-control">
                                    <option value="">Hãng Xe</option>
                                    <?php
                                        foreach ($hangxe as $hx) {
                                    echo ' <option value="'.$hx['Id_hangxe'].'">'.$hx['Tenhang'].'</option>';
                                        }
                                        ?>
                                        <!-- <option value="">Loại Xe</option>
                                        <option value="">Ferrari</option>
                                        <option value="">Toyota</option>
                                        <option value="">Ford</option>
                                        <option value="">Lamborghini</option> -->
                                        
                                    </select>
                                </div>
                                <div class="mb-3 mb-md-0 col-md-4">
                                    <select name="lx" id="" class="custom-select form-control">
                                    <option value="">số chỗ</option> 
                                    <?php
                                        foreach ($loaixe as $k) {
                                    echo ' <option value="'.$k['Id_loaixe'].'">'.$k['Loaixe'].' chỗ</option>';
                                        }
                                        ?>
                                        <!-- <option value="">số chỗ</option>     
                                        <option value="">7 chỗ</option>
                                        <option value="">16 chỗ</option>
                                        <option value="">32 chỗ</option>
                                        <option value="">54 chỗ</option>                                   -->
                                    </select>
                                </div>
                                <!-- <div class="mb-3 mb-md-0 col-md-3">
                                    <select name="" id="" class="custom-select form-control">
                                        <option value="">Xe</option>
                                        <option value="">Ferrari</option>
                                        <option value="">Toyota</option>
                                        <option value="">Ford</option>
                                        <option value="">Lamborghini</option>
                                    </select>
                                </div> -->
                                <div class="mb-3 mb-md-0 ml-3 col-md-3">
                                    <input type="submit" value="Tìm ngay" class="btn btn-primary btn-block py-3">
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
        <?php
         if (isset($view) && file_exists($view)) {
            require_once "$view";
        } else {
            echo "Đang cập nhật";
        }
     ?>

<footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <ul class="list-unstyled social">
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                        </ul>
                        <div class="maps">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15675.210986536726!2d106.6085871697754!3d10.826402200000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1605169971153!5m2!1svi!2s" width="100%" height="320" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-8 ml-auto">
                        <div class="row">
                            <div class="col-lg-3">
                                <h2 class="footer-heading mb-4">Chính sách</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">Chính sách và quy định</a></li>
                                    <li><a href="#">Quy chế hoạt động</a></li>
                                    <li><a href="#">Quy chế hoạt động</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Giải quyết tranh chấp</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <h2 class="footer-heading mb-4">Tìm hiểu thêm</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">Hướng dẫn chung</a></li>
                                    <li><a href="#">Hướng dẫn đặt xe</a></li>
                                    <li><a href="#">Hướng dẫn dành cho chủ xe</a></li>
                                    <li><a href="#">Hướng dẫn thanh toán</a></li>
                                    <li><a href="#">Hỏi và trả lời</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <h2 class="footer-heading mb-4">Đối tác</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">Đăng ký chủ xe</a></li>
                                    <li><a href="#">Đăng ký đại lý Mioto</a></li>
                                    <li><a href="#">Đăng ký thuê xe doanh nghiệp</a></li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
                
        </footer>

    </div>

    <script src="./site/views/js/jquery-3.3.1.min.js"></script>
    <script src="./site/views/js/popper.min.js"></script>
    <script src="./site/views/js/bootstrap.min.js"></script>
    <script src="./site/views/js/owl.carousel.min.js"></script>
    <script src="./site/views/js/jquery.sticky.js"></script>
    <script src="./site/views/js/jquery.waypoints.min.js"></script>
    <script src="./site/views/js/jquery.animateNumber.min.js"></script>
    <script src="./site/views/js/jquery.fancybox.min.js"></script>
    <script src="./site/views/js/jquery.easing.1.3.js"></script>
    <script src="./site/views/js/bootstrap-datepicker.min.js"></script>
    <script src="./site/views/js/aos.js"></script>

    <script src="./site/views/js/main.js"></script>

</body>

</html>
