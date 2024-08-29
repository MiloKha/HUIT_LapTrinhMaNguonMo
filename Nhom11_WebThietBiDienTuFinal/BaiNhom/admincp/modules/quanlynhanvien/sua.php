<?php
    $sql_suatt_nv="SELECT * FROM tbl_nhanvien where id_nhanvien='$_GET[idnhanvien]' LIMIT 1";
    $suatt_nhanvien = $conn->query($sql_suatt_nv);
?>



<p>Sửa thông tin nhân viên</p>
<table border="1" width="50%" style='border-collapse: collapse;'>
<?php
        foreach($suatt_nhanvien as $row)
    ?>
 <form action="modules/quanlynhanvien/xuly.php?idnhanvien=<?php echo $row['id_nhanvien']?>"method="POST"> 
    
 <tr>
		<td>Họ và tên:</td>
		<td><input type="text" size="50" value="<?php echo $row['tennhanvien']?>" name="hovaten" placeholder="Họ và tên..." style="padding:5px 15px"></td>
	</tr>
	<tr>
		<td>Năm sinh:</td>
		<td><input type="number" size="50" value="<?php echo $row['namsinh']?>"  name="namsinh" placeholder="Nắm sinh..." style="padding:5px 15px" /></td>
	</tr>
	<tr>
		<td>Số điện thoại:</td>
		<td><input type="text" size="50" value="<?php echo $row['sdt']?>"  name="dienthoai" placeholder="Số điện thoại..." style="padding:5px 15px"></td>
	</tr>
	<tr>
		<td>Loại nhân viên:</td>
		<td><input type="text" size="50" value="<?php echo $row['loainhanvien']?>"  name="loainv" placeholder="Loại nhân viên..." style="padding:5px 15px"></td>
	</tr>
	<tr>
		<td>Tên tài khoản:</td>
		<td><input type="text" size="50" value="<?php echo $row['taikhoan']?>"  name="taikhoan" placeholder="Tài khoản..." style="padding:5px 15px"></td>
	</tr>
	<tr>
		<td>Mật khẩu:</td>
		<td><input type="password" size="50" value="<?php echo $row['matkhau']?>"  name="matkhausua" placeholder="Mật khẩu..." style="padding:5px 15px"></td>		
	</tr>
	<tr>
		<td>Email:</td>
		<td><input type="text" size="50" value="<?php echo $row['email']?>"  name="email" placeholder="Email..." style="padding:5px 15px"></td>
	</tr>
	<tr>
		<td>Ngày vào làm:</td>
		<td><input type="date" value="<?php echo $row['ngayvaolam']?>"  size="50" name="ngayvaolam" style="padding:5px 15px"></td>
	</tr>		
        <tr>
           
            <td colspan="2"><input type="submit" name="suanhanvien" value="Sửa thông tin nhân viên "></td>
            
        </tr>
 </form> 
</table> 