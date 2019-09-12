<h1>Quản lý thành viên</h1>
<hr>
<table id="example" class="table table-hover table-bordered" style="width:100%">
	<thead>
		<tr>
			<th>ID</th>
			<th>Tên khóa học</th>
			<th>Người bình luận</th>
			<th>Email liên hệ</th>
			<th>Nội dung</th>
			<th>Thời gian</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
	<?php 
		foreach ($result as $key => $value) {
	?>
		<tr>
			<td><?php echo $value['id_cmt']; ?></td>
			<td><a href="<?php echo base_url('display?id=').$value['id_cs']; ?>"><?php echo $value['ten_cs']; ?></a></td>
			<td><?php echo $value['ten_cmt']; ?></td>
			<td><?php echo $value['email_cmt']; ?></td>
			<td><?php echo $value['nd_cmt']; ?></td>
			<td><?php echo $value['ngay_cmt']; ?></td>
			<td>
				<a class="btn btn-primary" href=""><i class="fa fa-edit"></i></a>
				<a class="btn btn-danger" href="delete_cmt/<?php echo $value['id_cmt']; ?>" onclick="return confirm('Bạn thực sự muốn xóa bình luận này?')"><i class="fa fa-times"></i></a>
			</td>
		</tr>
	<?php } ?>
	</tbody>
	<tfoot>
		<tr>
			<th>ID</th>
			<th>Tên khóa học</th>
			<th>Người bình luận</th>
			<th>Email liên hệ</th>
			<th>Nội dung</th>
			<th>Thời gian</th>
			<th></th>
		</tr>
	</tfoot>
</table>
