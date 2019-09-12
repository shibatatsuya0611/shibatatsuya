<!DOCTYPE html>	
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content='Học trực tuyến cùng với những Giảng viên hàng đầu. Học online 24/7 - Tự tin làm chủ tương lai. Siêu thị bài giảng trực tuyến lớn nhất Việt Nam' name='description'>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('res/') ?>imgs/icon.png">
	<title>Trang Quản Lý Khoá Học Của Admin - Edumall</title>
	<link rel="stylesheet" href="<?php echo base_url('res/') ?>bs/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url('res/') ?>awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url('res/') ?>css/webstyle.css">
	<link rel="stylesheet" href="<?php echo base_url('res/') ?>css/admin-qltv.css">
	<script src="//cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
</head>
<body>
	<header>
		<?php include "res/includes/header.php" ?>
	</header>
	<main>
		<div class="container">
			<div class="row">
				<h2>Trang Quản Lý Thành Viên Của Admin</h2><hr>
				<div class="trai col-md-10">
					<form action="" method="POST" role="form">
						<div class="form-group">
							<label for="">Tìm kiếm theo:</label>
							<div class="form-group">
								<div class="col-sm-2">
									<select name="name" class="form-control">
										<option value="">Tên</option>
										<option value="">Giảng viên</option>
										<option value="">Số bài học</option>
									</select>
								</div>
								<div class="col-sm-4">
									<form action="" method="">
										<input type="text" class="form-control search" placeholder="Nhập từ khóa..." name="keyword">
									</form>
								</div>
								<div class="col-md-2">
									<button type="submit" class="btn btn-default" name="search" value="search" title="Vui lòng chỉ chọn một loại lọc">Tìm kiếm<i class="glyphicon glyphicon-search"></i></button>
								</div>
								<div class="col-md-2">
									<a href="<?php echo base_url('admin_panel/cancel_search?page=qltv'); ?>"><button type="button" class="btn btn-default">Huỷ tìm<i class="glyphicon glyphicon-remove-sign"></i></button></a>
								</div>
								<div class="col-md-2">
									<span class="badge pull-right">Có 1231 thành viên</span>
								</div>
							</div>
						</div>
					</form><br><br><br>
					<div class="list">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>#</th>
									<th>Tên</th>
									<th>GV</th>
									<th>Giá</th>
									<th>Loại</th>
									<th>Sốbài</th>
									<th>Ảnh</th>
									<th>Tool</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$i = 0;
									foreach ($result as $key => $value) {
										$i++;
								 ?>
								<tr>
									<td><?php echo $i; ?></td>
									<td><a href="<?php echo base_url('display').'?id='.$value['id_cs']; ?>" target="_blank"><?php echo $value['ten_cs']; ?></a></td>
									<td><?php echo $value['tc_cs']; ?></td>
									<td><?php echo $value['gia_cs']; ?></td>
									<td><?php echo $value['id_cate']; ?></td>
									<td><?php echo $value['sobh_cs']; ?></td>
									<td><img src="<?php echo base_url('res/imgs/').$value['thumb_cs']; ?>" width="70px"></td>
									<td>
										<a href="<?php echo base_url('admin_panel/edit').'?course='.$value['id_cs']; ?>">Sửa</a>
										<label for="">|</label>
										<a href="<?php echo base_url('admin_panel/qlkh').'?delete='.$value['id_cs']; ?>" onclick="return confirm('Bạn thực sự muốn xóa khóa học này?')">Xoá</a>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
					<br>
					<div class="add">
						<form action="" method="POST" role="form">
							<legend>Thêm khóa học</legend>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" name="ten" placeholder="Tên khóa học" required="">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="info" placeholder="Thông tin thêm" required="">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="tc" placeholder="Giáo viên" required="">
								</div>
								<div class="form-group">
									<textarea name="mota" id="mota" class="form-control" rows="3" placeholder="Mô tả khóa học">Mô tả khóa học</textarea>
								</div>
								<button type="submit" name="add_course" value="add" class="btn btn-primary">Thêm</button>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="number" class="form-control" name="price" placeholder="Giá" required="">
								</div>
								<div class="form-group">
									<select name="theloai" class="form-control" required="">
										<option value="cntt">Công nghệ thông tin</option>
										<option value="tk">Thiết kế</option>
										<option value="ndc">Nuôi dạy con</option>
										<option value="ptbt">Phát triển bản thân</option>
										<option value="kdkn">Kinh doanh & Khởi nghiệp</option>
										<option value="nn">Ngoại ngữ</option>
										<option value="mkt">Marketing</option>
										<option value="thvp">Tin học văn phòng</option>
									</select>
								</div>
								<div class="form-group">
									<input type="number" class="form-control" name="sobh" placeholder="Số bài học" required="">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="time" placeholder="Thời lượng bài học" required="">
								</div>
								<div class="form-group">
									<textarea name="giaotrinh" id="giaotrinh" class="form-control" rows="3" placeholder="Giáo trình">Giáo trình</textarea>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="phai col-md-2">
					<?php include "res/includes/more-tool-admin.php" ?>
				</div>
			</div>
		</div>
		
	</main>
	<footer>
		<?php include "res/includes/footer.php" ?>
	</footer>
	<!-- Script -->
	<script>
		CKEDITOR.replace( 'mota' );
		CKEDITOR.replace( 'giaotrinh' );
	</script>
	<script src="<?php echo base_url('res/') ?>js/webjs.js"></script>
	<script src="<?php echo base_url('res/') ?>bs/js/jquery.js"></script>
	<script src="<?php echo base_url('res/') ?>bs/js/bootstrap.min.js"></script>
</body>
</html>