<?php
    $sql_lietke_nhanvien="SELECT * FROM tbl_nhanvien ORDER BY id_nhanvien ASC ";
    $query_lietke_nhanvien=$conn->query($sql_lietke_nhanvien);
?>

<?php
    if($tam=='quanlynhanvien' && $query==''){
?>

<a href="index.php?action=quanlynhanvien&query=them" ><button style="padding:5px">Thêm nhân viên</button></a>
<?php
    }
    ?>
<p>Liệt kê nhân viên</p>
<div class="table_lietke"  style=" height: auto; width:100%;">
<table  width="100%"   >
    <tr>
        <th>Id</th>
        <th>Tên nhân viên</th>
        <th>Năm sinh</th>
        <th>Số điện thoại</th>
        <th>Loại nhân viên</th>
        <th>Tài khoản</th>
        <th>Mật khẩu</th>
        <th>Email</th>
        <th>Ngày vào làm</th>
        <th>Quản lý</th>
    </tr>
    <tr>
        <?php 
        $i = 0;
        foreach($query_lietke_nhanvien as $row){
            $i++;
        
        ?>
        <td><?php echo $i?></td>
        <td><?php echo $row['tennhanvien']?></td>
        <td><?php echo $row['namsinh']?></td>
        <td><?php echo $row['sdt']?></td>
        <td><?php echo $row['loainhanvien']?></td>
        <td><?php echo $row['taikhoan']?></td>
        <td><?php echo $row['matkhau']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['ngayvaolam']?></td>
        <td>
        <a href="modules/quanlynhanvien/xuly.php?idnhanvien=<?php echo $row['id_nhanvien']?>">Xóa</a> | 
        <a href="?action=quanlynhanvien&query=sua&idnhanvien=<?php echo $row['id_nhanvien']?>">Sửa</a>
        </td>
    </tr>
    <?php
        }
        ?>
</table>

    
</div>