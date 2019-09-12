<!DOCTYPE html>	
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content='Học trực tuyến cùng với những Giảng viên hàng đầu. Học online 24/7 - Tự tin làm chủ tương lai. Siêu thị bài giảng trực tuyến lớn nhất Việt Nam' name='description'>
	<link rel="shortcut icon" type="image/x-icon" href="../res/imgs/icon.png">
	<title>Đăng Ký Tài Khoản - Edumall</title>
	<link rel="stylesheet" href="../res/bs/css/bootstrap.min.css">
	<link rel="stylesheet" href="../res/awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../res/css/webstyle.css">
	<link rel="stylesheet" href="../res/css/register.css">
</head>
<body>
	<header>
		<?php include "includes/header.php" ?>
	</header>
	<main>
		<div class="container">
			<div class="row">
				<div class="all col-md-offset-3 col-md-6">
					<div class="with-email">
						<form action="register" method="POST" role="form">
							<legend>Bạn chưa có tài khoản?<br>Đăng ký đi còn gì nữa!</legend>
							<div class="form-group" align="center">
								<label for="">Đăng Ký Bằng <b>Email</b></label>
								<ul class="error"><?php echo validation_errors(); ?></ul>
								<input type="text" class="form-control" name="username" id="" placeholder="Họ và tên">
								<input type="text" class="form-control" name="email" id="email" placeholder="Email">
								<input type="password" class="form-control" name="pass" id="pass" placeholder="Mật khẩu">
							</div>
							<div id="btnsubmit">
								<button type="submit" class="btn btn-danger" name="register" value="register">Đăng Ký</button>
							</div>
						</form>
					</div><br>
					<div class="with-social" align="center">
						<label for="">Đăng ký với tài khoản <b>Mạng Xã Hội</b></label><br>
						<a href="https://fb.com" target="_blank"><button type="button" class="btn btn-info"><i class="fa fa-facebook"></i>Facebook</button></a>
						<a href="https://google.com" target="_blank"><button type="button" class="btn btn-warning"><i class="fa fa-google-plus"></i>Google+</button></a>
					</div><br>
					<div class="login" align="center">
						<p>Đã có tài khoản? <a href="login"><b>Đăng Nhập</b></a></p>
					</div>
				</div>
			</div>
		</div>
	</main>
	<footer>
		<?php include "includes/footer.php" ?>
	</footer>
	<!-- Script -->
	<script src="../res/js/test.js"></script>
	<script src="../res/bs/js/jquery.js"></script>
	<script src="../res/bs/js/bootstrap.min.js"></script>
</body>
</html>