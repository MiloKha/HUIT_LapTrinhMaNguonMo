<?php
include('../../config/config.php');
$tensanpham = $_POST['tensanpham'];
$masp = $_POST['masp'];
$giasp = $_POST['giasp'];
$soluong = $_POST['soluong'];
//xử lý hình ảnh
$hinhanh= $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time().'_'.$hinhanh;
$tomtat = $_POST['tomtat'];
$noidung = $_POST['noidung'];
$tinhtrang = $_POST['tinhtrang'];
$danhmuc = $_POST['danhmuc'];


//thêm
if(isset($_POST['themsanpham'])){
    $sql_them="INSERT INTO tbl_sanpham(tensanpham,masp,giasp,soluong,hinhanh,tomtat,noidung,tinhtrang,id_danhmuc) 
    VALUE('".$tensanpham."','".$masp."','".$giasp."','".$soluong."','".$hinhanh."','".$tomtat."','".$noidung."','".$tinhtrang."','".$danhmuc."')";
    $conn->query($sql_them);
    move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
    header('Location:../../index.php?action=quanlysanpham&query=');
}
//sửa 
elseif(isset($_POST['suasanpham'])){
    if($_FILES['hinhanh']['name'] != '')
    {  //move hình ảnh vừa để sửa chọn đến mục uploads
        move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
        
        $sql_update="UPDATE tbl_sanpham SET tensanpham='".$tensanpham."',masp='".$masp."',giasp='".$giasp."',soluong='".$soluong."'
        ,hinhanh='".$hinhanh."',tomtat='".$tomtat."',noidung='".$noidung."',tinhtrang='".$tinhtrang."',id_danhmuc='".$danhmuc."' WHERE id_sanpham = '$_GET[idsanpham]'";
        //xóa hình ảnh cũ
        $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham ='$_GET[idsanpham]' LiMIT 1";
        $query = $conn->query($sql);
        foreach($query as $row){
            unlink('uploads/'.$row['hinhanh']);
        }
        
    }
    else{
        $sql_update="UPDATE tbl_sanpham SET tensanpham='".$tensanpham."',masp='".$masp."',giasp='".$giasp."',soluong='".$soluong."'
        ,tomtat='".$tomtat."',noidung='".$noidung."',tinhtrang='".$tinhtrang."',id_danhmuc='".$danhmuc."' 
        WHERE id_sanpham='$_GET[idsanpham]'";
    
    }
    $conn->query($sql_update);
        header('Location:../../index.php?action=quanlysanpham&query=');
}
//xóa
else{
    $id=$_GET['idsanpham'];
    $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham ='$id' LiMIT 1";
    $query = $conn->query($sql);
    foreach($query as $row){
        unlink('uploads/'.$row['hinhanh']);
    }
    $sql_xoa ="DELETE FROM tbl_sanpham WHERE id_sanpham ='".$id."'";
    $conn->query($sql_xoa);
    header('Location:../../index.php?action=quanlysanpham&query=');
}
?>