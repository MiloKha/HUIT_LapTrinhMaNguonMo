<?php
    if(isset($_POST['datlaimatkhau'])){
    $matkhau_moi=($_POST['password-moi']);
    $nhaplai_matkhau_moi=($_POST['password-moi2']);
    $email=$_SESSION['mail'];
    $sql = "SELECT * FROM tbl_dangky WHERE email='".$email."' LIMIT 1";
		$row = $conn->query($sql);
		$count = $row->fetchColumn();
		if($count>0){
            if($matkhau_moi == $nhaplai_matkhau_moi){
			$sql_update="UPDATE tbl_dangky SET matkhau='".$matkhau_moi."'";
            $conn->query($sql_update);
            unset($_SESSION['mail']);
            unset($_SESSION['code']);
            echo '<p style="color:green">Mật khẩu mới đã được cập nhật. <br>
            Bấm vào đây để đăng nhập <a href="index.php?quanly=dangnhap" style="text-decoration: none;">Đăng nhập</a></p>'; 
            }
            else{
                echo '<p style="color:red">Mật khẩu mới không trùng khớp.</p>';
            }
    }
    
}

?>


<?php 
    if (isset($_SESSION['code']) && isset($_SESSION['mail'])){
        ?>
        <form action="" autocomplete="off" method="POST">
		<table border="0" class="table-login" style="border-collapse: collapse;">
			<tr>
				<td colspan="2" style="text-align:center"><h3 style="color:red">Đặt lại mật khẩu</h3></td>
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
				
				<td colspan="2" style="text-align:center"><input type="submit" name="datlaimatkhau" value="Đặt lại mật khẩu" style="padding:5px 15px;"></td>
			</tr>
	</table>
	</form>
        




        <?php
    }
?>