<?php
	
	if(isset($_POST['dangky'])) {
		$tenkhachhang = $_POST['hovaten'];
		$email = $_POST['email'];
		$dienthoai = $_POST['dienthoai'];
		
		$matkhauchuamahoa=$_POST['matkhau'];
		$matkhau = ($matkhauchuamahoa);
		$diachi = $_POST['diachi'];
		
		function isValidPassword($matkhau) {
			if (!preg_match_all('$\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$', $matkhau))
				return FALSE;
			return TRUE;
		}
		if( !isValidPassword($matkhauchuamahoa) )
			{
				$error_logup_0 = "Mật khẩu phải có đủ 8 kí tự và chữ in hoa in thường và kí tự đặc biệt và số";
		}
		if($tenkhachhang=='')
		{
			$error_logup_1= "Tên không được để trống";
		}
		if (!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$error_logup_2= "Email sai định dạng";
		}
		
		
		$sql="INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')";
		if(!isset($error_logup_0)&&!isset($error_logup_1)&&!isset($error_logup_2))
			{$sql_dangky = $conn->query($sql);}
		if(isset($sql_dangky)){
			echo '<p style="color:green">Bạn đã đăng ký thành công</p>';
			$_SESSION['dangky'] = $tenkhachhang;
			// echo $_SESSION['dangky'];
			$_SESSION['email'] = $email;
			$_SESSION['id_khachhang'] = $conn->lastInsertId();
			header('Location:index.php?quanly=giohang');
		}
	}
?>
<h2>Đăng ký thành viên</h2>
<style type="text/css">
	table.dangky tr td {
	    padding: 5px;
	}
</style>
<form action="" method="POST">
<table class="dangky" border="0" width="50%" style="border-collapse: collapse;">
	<tr>
		<td>Họ và tên:</td>
		<td><input type="text" size="50" name="hovaten" placeholder="Họ và tên..." style="padding:5px 15px"></td>
	</tr>
	<tr>
		<td>Email:</td>
		<td><input type="text" size="50" name="email" placeholder="Email..." style="padding:5px 15px"></td>
	</tr>	
	<tr>
		<td>Số điện thoại:</td>
		<td><input type="text" size="50" name="dienthoai" placeholder="Số điện thoại..." style="padding:5px 15px"></td>
	</tr>
	<tr>
		<td>Địa chỉ:</td>
		<td><input type="text" size="50" name="diachi" placeholder="Địa chỉ..." style="padding:5px 15px"></td>
	</tr>
	<tr>
		<td>Mật khẩu:</td>
		<td><input type="text" size="50" name="matkhau"placeholder="Mật khẩu..." style="padding:5px 15px"></td>
	</tr>
	<tr>
		
		<td colspan="2" style="text-align:center;"><input type="submit" name="dangky" value="Đăng ký" style="padding:5px 15px"></td>
		
	</tr>
</table>
<?php
	if(isset($error_logup_0))
	{
		echo '<p style="color:red"> '.$error_logup_0. '</p>';
	}
	if(isset($error_logup_1))
	{
		echo '<p style="color:red"> '.$error_logup_1. '</p>';
	}
	if(isset($error_logup_2))
	{
		echo '<p style="color:red"> '.$error_logup_2. '</p>';
	}
	
?>
</form>
<a href="index.php?quanly=dangnhap" style="text-decoration: none;">Đăng nhập nếu có tài khoản</a>