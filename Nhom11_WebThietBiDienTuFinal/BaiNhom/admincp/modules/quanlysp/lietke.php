<?php
    if(isset($_GET['trang'])){
        $page=$_GET['trang'];
    }
    else{
        $page=1;
    }
    if($page==''|| $page == 1){
        $begin=0;
    }
    else{
        $begin=($page*5)-5;
    }
    $sql_lietke_sp = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY id_sanpham ASC LIMIT $begin,5";
    $query_lietke_sp = $conn->query($sql_lietke_sp);
?>
<?php
    if($tam=='quanlysanpham' && $query==''){
?>

<a href="index.php?action=quanlysanpham&query=them" ><button style="padding:5px">Thêm sản phẩm</button></a>
<?php
    }
    ?>
<p>Liệt kê sản phẩm</p>
<div class="table_lietke"  style=" height: auto; width:100%;">
<table  width="100%"   >
    <tr>
        <th>Id</th>
        <th>Danh mục</th>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh</th>
        <th>Giá sản phẩm</th>
        <th>Số lượng</th>
        <th>Mã sản phẩm</th>
        <th>Tóm tắt</th>
        <th>Trạng thái</th>
        <th>Quản lý</th>
    </tr>
    <tr>
        <?php 
        $i = 0;
        foreach($query_lietke_sp as $row){
            $i++;
        
        ?>
        <td><?php echo $i?></td>
        <td><?php echo $row['tendanhmuc']?></td>
        <td><?php echo $row['tensanpham']?></td>
        <td> <img src="modules/quanlysp/uploads/<?php echo $row['hinhanh']?>"width="150px"></td>
        <td><?php echo $row['giasp']?></td>
        <td><?php echo $row['soluong']?></td>
        <td><?php echo $row['masp']?></td>
        <td><?php echo $row['tomtat']?></td>
        <td><?php if( $row['tinhtrang']==1){
                echo 'Kích hoạt';}
            else{
                echo 'Ẩn';}
                ?>
        </td>
        <td>
        <a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham']?>">Xóa</a> | 
        <a href="?action=quanlysanpham&query=sua&idsanpham=<?php echo $row['id_sanpham']?>">Sửa</a>
        </td>
    </tr>
    <?php
        }
        ?>
</table>

    <?php
                $sql_trang = "SELECT * FROM tbl_sanpham tbl_sanpham";
                $record= $conn->query($sql_trang);
                $row_count = $record->rowCount();
                // echo $row_count;
                $trang = ceil($row_count/5);

            ?>
            <div class="list_trang" >
                <?php
                    for($i = 1; $i<=$trang;$i++){
                ?>
                <li <?php if($i==$page){echo ' style="background: #FED32C;"';}else echo''; ?>><a href="index.php?action=quanlysanpham&query=&trang=<?php echo $i?>"><?php echo $i?></a></li>
                <?php
                }
                ?>
            </div>
            <br>
</div>