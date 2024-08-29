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
            $begin=($page*10)-10;
        }
        
        $sql_pro ="SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc 
        ORDER BY tbl_sanpham.id_sanpham ASC LIMIT $begin,10";
        $query_pro = $conn->query($sql_pro);
        
        
?>
<section class="product-gallery-one">
        <div class="container">
            <div class="product-gallery-one-content">
                <div class="product-gallery-one-content-title">
                    <h2>Gợi ý cho bạn</h2>                   
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
           
            <?php
                $sql_trang = "SELECT * FROM tbl_sanpham tbl_sanpham";
                $record= $conn->query($sql_trang);
                $row_count = $record->rowCount();
                // echo $row_count;
                $trang = ceil($row_count/10);

            ?>
            <div class="list_trang" >
                <?php
                    for($i = 1; $i<=$trang;$i++){
                ?>
                <li <?php if($i==$page){echo ' style="background: #FED32C;"';}else echo''; ?>><a href="index.php?trang=<?php echo $i?>"><?php echo $i?></a></li>
                <?php
                }
                ?>
            </div>
        </div>
    </section>