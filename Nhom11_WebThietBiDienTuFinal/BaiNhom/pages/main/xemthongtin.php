<?php 
if (isset($_SESSION['id_khachhang'])){
    $id_khach=$_SESSION['id_khachhang'];
}
    $sql_xemthongtin="SELECT * FROM tbl_dangky where tbl_dangky.id_dangky= '".$id_khach."' ";
    $xemthongtin = $conn->query($sql_xemthongtin);

?>
<?php
    
    if(isset($_POST['suathongtin'])){
        $tenkhach=$_POST['hovaten'];
        $email = $_POST['email'];
	    $dienthoai = $_POST['dienthoai'];
	    $diachi = $_POST['diachi'];
        $sql_updatett="UPDATE tbl_dangky SET tenkhachhang='".$tenkhach."',email='".$email."',dienthoai='".$dienthoai."',diachi='".$diachi."' 
        WHERE tbl_dangky.id_dangky='$_GET[idkhachhang]'";
        $conn->query($sql_updatett);
        echo "Chỉnh sửa thành công";
        header('Location:index.php?quanly=xemthongtin');
    }
?>
<h2>Thông tin cá nhân</h2>
<table class="dangky" border="0" width="50%" style="border-collapse: collapse;">
<?php
        foreach($xemthongtin as $dong){
    ?>
<form action="index.php?quanly=xemthongtin&idkhachhang=<?php echo $dong['id_dangky']?>" method="POST">

	<tr>
		<td>Họ và tên:</td>
		<td><input type="text" size="50" name="hovaten" value="<?php echo $dong['tenkhachhang']?>" placeholder="Họ và tên..." style="padding:5px 15px"></td>
	</tr>
	<tr>
		<td>Email:</td>
		<td><input type="text" size="50" name="email" value="<?php echo $dong['email']?>" placeholder="Email..." style="padding:5px 15px"></td>
	</tr>	
	<tr>
		<td>Số điện thoại:</td>
		<td><input type="text" size="50" name="dienthoai" value="<?php echo $dong['dienthoai']?>" placeholder="Số điện thoại..." style="padding:5px 15px"></td>
	</tr>
	<tr>
		<td>Địa chỉ:</td>
		<td><input type="text" size="50" name="diachi" value="<?php echo $dong['diachi']?>" placeholder="Địa chỉ..." style="padding:5px 15px"></td>
	</tr>
	<tr>
		
		<td colspan="2" style="text-align:center;"><input type="submit" name="suathongtin" value="Sửa thông tin" style="padding:5px 15px"></td>
		
	</tr>
    <?php 
        }
        ?>
</form>
</table>