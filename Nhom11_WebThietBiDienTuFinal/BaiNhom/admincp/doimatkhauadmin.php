<?php
if(isset($_POST['doimatkhau'])){
		$matkhau_cu = ($_POST['password-cu']);
        $matkhau_moi = ($_POST['password-moi']);
        $nhaplai_matkhau_moi = ($_POST['password-moi2']);
		$sql = "SELECT * FROM tbl_admin WHERE username='".$_SESSION['dangnhap']."' AND password='".$matkhau_cu."' LIMIT 1";
		$row = $conn->query($sql);
		$count = $row->fetchColumn();
		if($count>0){
            if($matkhau_moi == $nhaplai_matkhau_moi){
			$sql_update="UPDATE tbl_admin SET password ='".$matkhau_moi."' WHERE taikhoan='".$_SESSION['dangnhap']."'";
            $conn->query($sql_update);
            echo '<p style="color:green">Mật khẩu mới đã được cập nhật.</p>'; 
            }
            else{
                echo '<p style="color:red">Mật khẩu mới không trùng khớp.</p>';
            }
			
		}else{
			echo '<p style="color:red">Mật khẩu cũ sai vui lòng nhập lại.</p>';
			
		}
	}?>
     <form action="" autocomplete="off" method="POST">
		<table border="0" class="table-login" style="border-collapse: collapse;">
			<tr>
				<td colspan="2" style="text-align: center"><h3>Đổi mật khẩu</h3></td>
			</tr>
			
			<tr>
				<td>Mật khẩu cũ:</td>
				<td><input type="password" name="password-cu" style="padding:5px 15px; margin:5px" ></td>
			</tr>
            <tr>
				<td>Mật khẩu mới:</td>
				<td><input type="password" name="password-moi" style="padding:5px 15px; margin:5px"></td>
			</tr>
            <tr>
				<td>Nhập lại mật khẩu mới:</td>
				<td><input type="password" name="password-moi2" style="padding:5px 15px; margin:5px"></td>
			</tr>
			<tr>
				
				<td colspan="2" style="text-align: center"><input type="submit" name="doimatkhau" value="Đổi mật khẩu" style="padding:5px 15px; margin:5px"></td>
			</tr>
	</table>
	</form>
