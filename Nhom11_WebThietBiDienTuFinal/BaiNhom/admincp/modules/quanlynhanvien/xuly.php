<?php
include('../../config/config.php');
$tennhanvien= $_POST['hovaten'];
$namsinh= $_POST['namsinh'];
$sdt=$_POST['dienthoai'];
$loainv=$_POST['loainv'];
$taikhoan=$_POST['taikhoan'];
$matkhau=md5($_POST['matkhau']);
$matkhausua=($_POST['matkhausua']);
$matkhausuamahoa=md5($_POST['matkhausua']);
$email=$_POST['email'];
$nvl=$_POST['ngayvaolam'];

//thêm
if(isset($_POST['themnhanvien'])){
    $sql_them="INSERT INTO tbl_nhanvien(tennhanvien,namsinh,sdt,loainhanvien,taikhoan,matkhau,email,ngayvaolam) VALUE('".$tennhanvien."','".$namsinh."','".$sdt."','".$loainv."','".$taikhoan."','".$matkhau."','".$email."','".$nvl."')";
    $conn->query($sql_them);
    header('Location:../../index.php?action=quanlynhanvien&query=');
}
//sửa 
elseif(isset($_POST['suanhanvien'])){
    $id=$_GET['idnhanvien'];
    $sql="SELECT * FROM tbl_nhanvien WHERE id_nhanvien = '".$id."'";
    $query=$conn->query($sql);
    foreach($query as $row)
    {
        
            if($row['matkhau'] == $matkhausua){
        $sql_update="UPDATE tbl_nhanvien SET tennhanvien='".$tennhanvien."',namsinh='".$namsinh."',sdt='".$sdt."',loainhanvien='".$loainv."',taikhoan='".$taikhoan."',email='".$email."',ngayvaolam='".$nvl."' WHERE id_nhanvien = '".$id."'";
        }
    else{
        $sql_update="UPDATE tbl_nhanvien SET tennhanvien='".$tennhanvien."',namsinh='".$namsinh."',sdt='".$sdt."',loainhanvien='".$loainv."',taikhoan='".$taikhoan."',matkhau='".$matkhausuamahoa."',email='".$email."',ngayvaolam='".$nvl."' WHERE id_nhanvien = '".$id."'";
    }
    $conn->query($sql_update);
}
    
    
    header('Location:../../index.php?action=quanlynhanvien&query=');
}
//xóa
else{
    $id=$_GET['idnhanvien'];
    $sql_xoa ="DELETE FROM tbl_nhanvien WHERE id_nhanvien='".$id."'";
    $conn->query($sql_xoa);
    header('Location:../../index.php?action=quanlynhanvien&query=');
}
?>