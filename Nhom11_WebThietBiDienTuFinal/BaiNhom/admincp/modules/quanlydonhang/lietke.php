<p>Liệt kê đơn hàng</p>
<?php
    $sql_lietke_donhang="SELECT * FROM tbl_cart,tbl_dangky WHERE tbl_cart.id_dangky=tbl_dangky.id_dangky ORDER BY tbl_cart.id_cart ASC";
    $query_lietke_donhang=$conn->query($sql_lietke_donhang);
?>
<table border="1" width="100%" style='border-collapse: collapse;'>
    <tr>
        <th>STT</th>
        <th>Mã đơn hàng</th>
        <th>Tên khách hàng</th>
        <th>Địa chỉ</th>
        <th>Email</th>
        <th>Số điện thoại</th>
        <th>Tình trạng</th>
        <th>Quản lý</th>
        
    </tr>
    <tr>
        <?php 
        $i = 0;
        foreach($query_lietke_donhang as $row){
            $i++;
        
        ?>
        <td><?php echo $i?></td>
        <td><?php echo $row['code_cart']?></td>
        <td><?php echo $row['tenkhachhang']?></td>
        <td><?php echo $row['diachi']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['dienthoai']?></td>
        <td>
            <?php
                if($row['cart_status']==1){
                    echo '<a href="modules/quanlydonhang/xuly.php?cart_status=0&code='.$row['code_cart'].'"> Đơn hàng mới</a>';
                }
                else{
                    echo 'Đã xử lý';        
                }
            ?>
        </td>
        <td><a href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart']?>">Xem đơn hàng</a></td>
    </tr>
    <?php
        }
        ?>
</table>