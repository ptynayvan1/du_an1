<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
                <a class="navbar-brand brand-logo" href="index.php">
                    <img src="assets/images/logo.svg" alt="logo" /> </a>
                <a class="navbar-brand brand-logo-mini" href="index.php">
                    <img src="assets/images/logo-mini.svg" alt="logo" /> </a>
            </div>

        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">

                    <li class="nav-item nav-category">Main Menu</li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?ctrl=catalog">
                            <i class="menu-icon typcn typcn-document-text"></i>
                            <span class="menu-title">Danh Mục</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?ctrl=product">
                            <i class="menu-icon typcn typcn-shopping-bag"></i>
                            <span class="menu-title">Sản Phẩm</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?ctrl=thongke">
                            <i class="menu-icon typcn typcn-th-large-outline"></i>
                            <span class="menu-title">Thống Kê</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?ctrl=donhang">
                            <i class="menu-icon typcn typcn-bell"></i>
                            <span class="menu-title">Đơn Hàng</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?ctrl=binhluan">
                            <i class="menu-icon typcn typcn-bell"></i>
                            <span class="menu-title">Bình Luận</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?ctrl=product&action=addnew">
                            <i class="menu-icon typcn typcn-user-outline"></i>
                            <span class="menu-title">AddProduct</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="index.php?ctrl=user">
                            <i class="menu-icon typcn typcn-document-add"></i>
                            <span class="menu-title">User Pages</span>
                        </a>

                    </li>
                </ul>
            </nav>
            <!-- partial -->
    <div class="container">
            <?php
                $ctrl='home';
                if(isset($_GET['ctrl'])){
                $ctrl=$_GET['ctrl'];
                }
                include 'controller/'.$ctrl.'.php';
            
            ?>
            </div>
        </div>
            
    </div>
   
            <script src="assets/vendors/js/vendor.bundle.base.js"></script>
            <script src="assets/vendors/js/vendor.bundle.addons.js"></script>
            <!-- endinject -->
            <!-- Plugin js for this page-->
            <!-- End plugin js for this page-->
            <!-- inject:js -->
            <script src="assets/js/shared/off-canvas.js"></script>
            <!-- <script src="assets/js/shared/misc.js"></script> -->
            <!-- endinject -->
            <!-- Custom js for this page-->
            <script src="assets/js/demo_1/dashboard.js"></script>
            <!-- End custom js for this page-->
</body>

</html>