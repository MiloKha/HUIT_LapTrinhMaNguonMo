<h2 style="color:red">Đơn hàng: <?php echo $_GET['code'] ?></h2>
<?php 
    $code=$_GET['code'];
    $sql_chitiet_donhang= "SELECT * FROM tbl_cart_detail,tbl_sanpham WHERE tbl_sanpham.id_sanpham=tbl_cart_detail.id_sanpham AND 
    tbl_cart_detail.code_cart='".$code."' ORDER BY tbl_cart_detail.id_cart_details ASC";
    $query_chitiet_donhang = $conn->query($sql_chitiet_donhang);
    $tongtien=0;
?>
<table border="1" width="70%" style='border-collapse: collapse;'>
    <tr>
        <th>STT</th>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Đơn giá</th>
        <th>Thành tiền</th>

        
    </tr>
    <tr>
        <?php 
        $i = 0;
        foreach($query_chitiet_donhang as $row){
            $i++;
            $thanhtien=$row['giasp']*$row['soluongmua'];
            $tongtien+=$thanhtien;
        ?>
        <td><?php echo $i?></td>
        <td><?php echo $row['tensanpham']?></td>
        <td><?php echo $row['soluongmua']?></td>
        <td><?php echo number_format($row['giasp'],0,',','.').'vnđ'?></td>
        <td><?php echo number_format($thanhtien,0,',','.').'vnđ'?></td>
        
    </tr>
    <?php
        }
        ?>
    <tr>
        <td colspan="6">
            <p>Tổng tiền: <?php echo number_format($tongtien,0,',','.').'vnđ' ?></p>
        </td>
    </tr>
</table>