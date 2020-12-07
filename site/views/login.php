<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./site/views/util.css">
	<link rel="stylesheet" type="text/css" href="./site/views/main.css">
<!--===============================================================================================-->
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
<style>
.btn-face {
    color: #3b5998;
}
.btn-face i {
    font-size: 20px;
    margin-right: 10px;
    padding-bottom: 1px;
}
.btn-face, .btn-google {
    font-family: Raleway-Bold;
    font-size: 16px;
    line-height: 1.2;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;

    justify-content: center;
    align-items: center;
    /* width: calc((100% - 10px)/2); */
    height: 40px;
    border-radius: 3px;
    border: 1px solid #e6e6e6;
    background-color: #fff;
    -webkit-transition: all .4s;
    -o-transition: all .4s;
    -moz-transition: all .4s;
    transition: all .4s;
}
</style>
</head>
<body>
	<?php
	if (isset($_SESSION['loidn'])) {
		echo $_SESSION['loidn'];
	}
	?>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="./site/views/images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="post" action="index.php?act=login">
					<span class="login100-form-title">
						Member Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="user" placeholder="Tên tài khoản" pattern="[a-z]{1,20}" title="nhập các kí tự 'a-z' và 0-9">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password"pattern="[a-z]{1,20}" title="nhập các kí tự 'a-z' và 0-9">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
						Đăng Nhập
						</button>
					</div>
					<div class="text-center p-t-12">
						<span class="txt1">
							lấy Lại
						</span>
						<a class="txt2" href="#">
							tài khoản / Mật khẩu?
						</a>
					</div>

					<div class="text-center p-t-30">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
					<div class="text-center w-full p-t-20 p-b-22">
					<span class="txt1">
					Đăng nhập bằng
					</span>
					</div>
					<a href="https://www.facebook.com/dialog/oauth?client_id=854383925392425&redirect_uri=http://localhost/GitHub/du_an1/callback.php&scope=public_profile" class="btn-face m-b-10">
<i class="fa fa-facebook-official"></i>
Facebook
</a>
<!-- <a href="#" class="btn-google m-b-10">
<i class="fab fa-google"></i>
Google
</a> -->
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>