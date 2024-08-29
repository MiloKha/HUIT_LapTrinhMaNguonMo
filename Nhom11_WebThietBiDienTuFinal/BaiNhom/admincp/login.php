<?php
	session_start();
	include('config/config.php');
	if(isset($_POST['dangnhap'])){
		$taikhoan = $_POST['username'];
		$matkhau = ($_POST['password']);
		$sql = "SELECT * FROM tbl_admin WHERE username='".$taikhoan."' AND password='".$matkhau."' LIMIT 1";
		$row = $conn->query($sql);
		$count = $row->fetchColumn();
		$sql_nhanvien = "SELECT * FROM tbl_nhanvien WHERE taikhoan='".$taikhoan."' AND matkhau='".$matkhau."' LIMIT 1";
		$row1 = $conn->query($sql_nhanvien);
		$count1 = $row1->fetchColumn();
		
		
	} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đăng nhập Admincp</title>
	<style type="text/css">
		body{
			background:#f2f2f2;
		}
		.wrapper-login {
		    width: 20%;
		    margin: 0 auto;
		}
		table.table-login {
		    width: 100%;
		}
		table.table-login tr td {
		    padding: 5px;
		}
	</style>
</head>
<body>
<div class="wrapper-login">
	<form action="" autocomplete="off" method="POST">
		<table border="0" class="table-login" style="text-align: center;border-collapse: collapse;">
			<tr>
				<td colspan="2"><h3>Đăng nhập Admin</h3></td>
			</tr>
			<tr>
				<td>Tài khoản</td>
				<td><input type="text" name="username" style="padding:5px 15px"></td>
			</tr>
			<tr>
				<td>Mật khẩu</td>
				<td><input type="password" name="password" style="padding:5px 15px"	></td>
			</tr>
			<tr>
				
				<td colspan="2"><input type="submit" name="dangnhap" value="Đăng nhập" style="padding:5px 15px"></td>
			</tr>
	</table>
	</form>
	<?php
	if(isset($_POST['dangnhap'])){
	if(isset($count) && $count>0){
		$_SESSION['dangnhap'] = $taikhoan;
		$_SESSION['admin']=1;
		header("Location:index.php");
	}else if(isset($count) && $count1>0)
	{
		$_SESSION['dangnhap'] = $taikhoan;
		header("Location:index.php");
	}
	else{
		echo '<p style="color:red">Mật khẩu hoặc tài khoản sai, vui lòng đăng nhập lại.</p>';
		
	}
}
	?>

</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>
