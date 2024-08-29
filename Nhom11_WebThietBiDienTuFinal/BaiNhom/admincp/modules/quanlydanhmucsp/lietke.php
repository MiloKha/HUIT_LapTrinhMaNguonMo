<?php
    $sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu ASC";
    $lietke_danhmucsp = $conn->query($sql_lietke_danhmucsp);
?>
<?php
    if($tam=='quanlydanhmucsanpham' && $query==''){
?>

<a href="index.php?action=quanlydanhmucsanpham&query=them" ><button style="padding:5px">Thêm danh mục sản phẩm</button></a>
<?php
    }
    ?>
<p>Liệt kê danh mục sản phẩm</p>
<table border="1" width="50%" style='border-collapse: collapse;'>
    <tr>
        <th>Id</th>
        <th>Tên danh mục</th>
        <th>Quản lý</th>
    </tr>
    <tr>
        <?php 
        $i = 0;
        foreach($lietke_danhmucsp as $row){
            $i++;
        
        ?>
        <td><?php echo $i?></td>
        <td><?php echo $row['tendanhmuc']?></td>
        <td><a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc']?>">Xóa</a> | 
        <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc']?>">Sửa</a>
        </td>
    </tr>
    <?php
        }
        ?>
</table>
