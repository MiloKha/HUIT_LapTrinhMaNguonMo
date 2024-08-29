<?php
        $sql_pro ="SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc='$_GET[id]' ORDER BY id_sanpham ASC";
        $query_pro = $conn->query($sql_pro);
        //get tên danh mục
        $sql_cate = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc='$_GET[id]' LIMIT 1";
        $query_cate=$conn->query($sql_cate);
        foreach($query_cate as $row_cate){
?>

<section class="product-gallery-one">
        <div class="container">
            <div class="product-gallery-one-content">
                <div class="product-gallery-one-content-title">
                    <h2>Danh mục sản phẩm: <?php echo $row_cate['tendanhmuc']?></h2>                   
                </div>
                <?php }?>
                <div class="product-gallery-one-content-product">
                <?php
                        foreach($query_pro as $row_pro){
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
            </div>
        </div>
        </div>
    </section>
