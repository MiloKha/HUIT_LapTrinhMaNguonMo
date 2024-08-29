<?php
include('../../config/config.php');
$tenloaisp = $_POST['tendanhmuc'];
$thutu = $_POST['thutu'];
//thêm
if(isset($_POST['themdanhmuc'])){
    $sql_them="INSERT INTO tbl_danhmuc(tendanhmuc,thutu) VALUE('".$tenloaisp."','".$thutu."')";
    $conn->query($sql_them);
    header('Location:../../index.php?action=quanlydanhmucsanpham&query=');
}
//sửa 
elseif(isset($_POST['suadanhmuc'])){
    $sql_update="UPDATE tbl_danhmuc SET tendanhmuc='".$tenloaisp."',thutu='".$thutu."' WHERE id_danhmuc='$_GET[iddanhmuc]'";
    $conn->query($sql_update);
    header('Location:../../index.php?action=quanlydanhmucsanpham&query=');
}
//xóa
else{
    $id=$_GET['iddanhmuc'];
    $sql_xoa ="DELETE FROM tbl_danhmuc WHERE id_danhmuc='".$id."'";
    $conn->query($sql_xoa);
    header('Location:../../index.php?action=quanlydanhmucsanpham&query=');
}
?>