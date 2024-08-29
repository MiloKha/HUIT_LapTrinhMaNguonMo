<?php
	
	
	if(isset($_POST['dangnhap'])){
		$email = $_POST ['email'];
		$matkhau = ($_POST['password']);
		$sql3 = "SELECT * FROM tbl_dangky WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1";
        $query3 = $conn->query($sql3);
		$count3 = $query3->fetchColumn();
        $query2 = $conn->query($sql3);
		//dang nhap vao admin
			$sql = "SELECT * FROM tbl_admin WHERE username='".$email."' AND password='".$matkhau."' LIMIT 1";
			$row = $conn->query($sql);
			$count = $row->fetchColumn();
			$sql_nhanvien = "SELECT * FROM tbl_nhanvien WHERE taikhoan='".$email."' AND matkhau='".$matkhau."' LIMIT 1";
			$row1 = $conn->query($sql_nhanvien);
			$count1 = $row1->fetchColumn();
			
		
        if(isset($count) && $count>0){
			$_SESSION['dangnhap'] = $email;
			$_SESSION['admin']=1;
			header("Location:admincp/index.php");
		}else if(isset($count) && $count1>0)
		{
			$_SESSION['dangnhap'] = $email;
			header("Location:admincp/index.php");
		}
		else if($count3>0){
            foreach($query2 as $row){
                echo $row['tenkhachhang'];
			    $_SESSION['dangky'] = $row['tenkhachhang'];
				$_SESSION['id_khachhang']=$row['id_dangky'];
				
            }
            
			header("Location:index.php?quanly=giohang");
		}
		else{
			echo '<p style="color:red">Mật khẩu hoặc tài khoản sai, vui lòng đăng nhập lại.</p>';
			
		}
		
		
	} 
?>
<style type="text/css">
	table.table-login tr td {
	    padding: 5px;
	}
</style>
<form action="" autocomplete="off" method="POST">
		<table border="0" width="50%"  class="table-login" style="text-align: center;border-collapse: collapse;">
			<tr>
				<td colspan="2"><h2>Đăng nhập khách hàng</h2></td>
			</tr>
			<tr>
				<td>Tài khoản:</td>
				<td><input type="text" size="50" name="email" placeholder="Email..." style="padding:5px 15px"></td>
			</tr>
			<tr>
				<td>Mật khẩu:</td>
				<td><input type="password" size="50" name="password" placeholder="Mật khẩu..." style="padding:5px 15px;"></td>
			</tr>
			<tr>
				
				<td colspan="2"><input type="submit" name="dangnhap" value="Đăng nhập" style="padding:5px 15px"></td>
			</tr>
	</table>
	</form>
<a style="text-decoration: none;" href="index.php?quanly=quenmatkhau">Quên mật khẩu</a>