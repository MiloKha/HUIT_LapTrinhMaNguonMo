<h3>Chi tiết sản phẩm</h3>
<?php
        $sql_chitiet ="SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc 
        AND tbl_sanpham.id_sanpham ='$_GET[id]' LIMIT 1";
        $query_chitiet = $conn->query($sql_chitiet);
        foreach($query_chitiet as $row_chitiet){
?>
<div class="wrapper_chitiet">
<div class="hinhanh_sanpham">
    <img width="300px" src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>" alt=""></a>
</div>
<form action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham']?>" method="POST">
<div class="chitiet_sanpham">
    <h3 style="margin:0">Tên sản phẩm: <?php echo $row_chitiet['tensanpham'] ?></h3>
    <p>Mã sản phẩm: <?php echo $row_chitiet['masp'] ?></p>
    <p>Giá: <?php echo number_format($row_chitiet['giasp'],0,',','.')?><sup>đ</sup></p>
    <p>Số lượng sản phẩm: <?php echo $row_chitiet['soluong'] ?></p>
    <p>Danh mục sản phẩm: <?php echo $row_chitiet['tendanhmuc'] ?></p>
    <p><input class="themgiohang" name="themgiohang" type="submit" value="Thêm giỏ hàng"></p>
</div>
<div class="clear"></div>
</div>
<div class="mota_sanpham">
    <p><strong>Mô tả sản phẩm: <br></strong> <?php echo $row_chitiet['noidung'] ?></p>
</div>
</form>
<?php 
}
        $sql_sp_lienquan ="SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc 
            AND tbl_sanpham.id_danhmuc ='$row_chitiet[id_danhmuc]' AND tbl_sanpham.id_sanpham != '$row_chitiet[id_sanpham]' LIMIT 5";
        $query_sp_lq=$conn->query($sql_sp_lienquan);
        
?>
<h2 style="margin-top:50px">Một số sản phẩm cùng loại</h2>
<div class="product-gallery-one-content-product">
                <?php
                        foreach($query_sp_lq as $row_pro){
                    ?>
                    <div class="product-gallery-one-content-product-item">
                        <div class="product-gallery-one-content-product-item-img">
                            <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham']?>">
                            <img src="admincp/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>" alt=""></a>
                        </div>
                    
                    <div class="product-gallery-one-content-product-item-text">
                        <li><a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham']?>"><?php echo $row_pro['tensanpham']?></a></li>
                        <li><a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham']?>">Giá: <?php echo number_format($row_pro['giasp'],0,',','.')?><sup>đ</sup></a></li>
                        
                    </div>
                    </div>
                    <?php }
                    ?>


