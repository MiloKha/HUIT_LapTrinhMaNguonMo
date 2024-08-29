<div class="container">
  <!-- Responsive Arrow Progress Bar -->
  <div class="arrow-steps clearfix">
    <div class="step done "> <span> <a href="index.php?quanly=giohang" >Giỏ hàng</a></span> </div>
    <div class="step current"> <span><a href="index.php?quanly=vanchuyen" >Vận chuyển</a></span> </div>
    <div class="step"> <span><a href="index.php?quanly=thongtinthanhtoan" >Thanh toán</a><span> </div>
    <div class="step"> <span><a href="index.php?quanly=donhangdadat" >Đơn hàng đã đặt</a><span> </div>
    
  </div>
</div>
<br>
<div>
<form action="" method="POST">
		<p>Tên người nhận:</p> 
		<input type="text" size="50" name="name" placeholder="..." style="padding:5px 15px">
        <br>
		<p>Số điện thoại:</p>
		<td><input type="text" size="50" name="phone" placeholder="..." style="padding:5px 15px">
        <br>
		<p>Địa chỉ:</p>
		<input type="text" size="50" name="address" placeholder="..." style="padding:5px 15px">
        <br>
		<p>Ghi chú:</p>
		<input type="text" size="50" name="note" placeholder="..." style="padding:5px 15px">
        <br>
		<p></p>
		<input type="submit" name="dangky" value="Cập nhật địa chỉ vận chuyển" style="padding:5px 15px">
</form>
</div>
<div>
<table style=" width:100%; text-align:center; border-collapse:collapse;" border="1">
<tr>
    <th>ID</th>
    <th>Mã sản phẩm</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Số lượng</th>
    <th>Giá sản phẩm</th>
    <th>Thành tiền</th>
    
</tr>
<?php
    if(isset($_SESSION['cart']))
    {
       $i = 0;
       $tongtien = 0;
       foreach ($_SESSION['cart'] as $cart_item)
       {
        $thanhtien = $cart_item['soluong'] * $cart_item['giasp'];
        $tongtien +=$thanhtien;
        $i++;  
?>
<tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $cart_item['masp']; ?></td>
    <td><?php echo  $cart_item['tensanpham']; ?></td>
    <td><img src="admincp/modules/quanlysp/uploads/<?php echo  $cart_item['hinhanh']; ?>" width="150px"/></td>
    <td>
        <?php echo  $cart_item['soluong']; ?>
    </td>
    <td><?php echo  number_format($cart_item['giasp'],0,',','.').'<sup>đ</sup>'; ?></td>
    <td><?php echo  number_format($thanhtien,0,',','.'); ?><sup>đ</sup></td>
    
</tr>
<?php
        }
    }
    
?>
</div>
