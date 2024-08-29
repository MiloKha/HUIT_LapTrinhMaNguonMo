<?php
    if(isset($_POST['tukhoa'])){
         $tukhoa = $_POST['tukhoa'];
    }
    else{
        $tukhoa='';
    }
    $sql_pro ="SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND 
    tbl_sanpham.tensanpham LIKE '%".$tukhoa."%'";
    $query_pro = $conn->query($sql_pro);
        
        
?>
<section class="product-gallery-one"> 
        <div class="container">
            <div class="product-gallery-one-content">
                <div class="product-gallery-one-content-title">
                    <h2>Từ khóa bạn tìm kiếm: <?php echo $tukhoa?></h2>                   
                </div>
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
                        <li style="text-align:center;"><a href="#"><?php echo $row_pro['tendanhmuc']?></a></li>
                    </div>
                    </div>
                    <?php }
                    ?>
            </div>
        </div>
        </div>
    </section>