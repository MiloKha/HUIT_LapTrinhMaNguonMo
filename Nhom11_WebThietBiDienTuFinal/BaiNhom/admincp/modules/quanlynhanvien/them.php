<p>Thêm danh mục sản phẩm</p>
<table border="1" width="50%" style='border-collapse: collapse;'>
 <form action="modules/quanlynhanvien/xuly.php" method="POST"> 
 <tr>
		<td>Họ và tên:</td>
		<td><input type="text" size="50" name="hovaten" placeholder="Họ và tên..." style="padding:5px 15px"></td>
	</tr>
	<tr>
		<td>Năm sinh:</td>
		<td><input type="number" size="50" name="namsinh" placeholder="Nắm sinh..." style="padding:5px 15px" /></td>
	</tr>
	<tr>
		<td>Số điện thoại:</td>
		<td><input type="text" size="50" name="dienthoai" placeholder="Số điện thoại..." style="padding:5px 15px"></td>
	</tr>
	<tr>
		<td>Loại nhân viên:</td>
		<td><input type="text" size="50" name="loainv" placeholder="Loại nhân viên..." style="padding:5px 15px"></td>
	</tr>
	<tr>
		<td>Tên tài khoản:</td>
		<td><input type="text" size="50" name="taikhoan" placeholder="Tài khoản..." style="padding:5px 15px"></td>
	</tr>
	<tr>
		<td>Mật khẩu:</td>
		<td><input type="password" size="50" name="matkhau"placeholder="Mật khẩu..." style="padding:5px 15px"></td>		
	</tr>
	<tr>
		<td>Email:</td>
		<td><input type="text" size="50" name="email" placeholder="Email..." style="padding:5px 15px"></td>
	</tr>
	<tr>
		<td>Ngày vào làm:</td>
		<td><input type="date" size="50" name="ngayvaolam" style="padding:5px 15px"></td>
	</tr>		
        <tr>
           
            <td colspan="2"><input type="submit" name="themnhanvien" value="Thêm nhân viên "></td>
            
        </tr>
 </form> 
</table> 