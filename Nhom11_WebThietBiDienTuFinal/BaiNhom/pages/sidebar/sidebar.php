
<div class="side-bar">
                <h2><i class="fa-solid fa-bars"></i>Danh mục sản phẩm</h2>
                <ul>
                <?php 
                    $sql_danhmuc="SELECT * FROM tbl_danhmuc ORDER BY thutu ASC";
                    $query_danhmuc = $conn->query($sql_danhmuc);
                    foreach($query_danhmuc as $row_danhmuc){
                ?>
                        <li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc']?>">
                        <?php echo $row_danhmuc['tendanhmuc']?></a></li>
                    <?php
                     }
                     ?>
                </ul>
            </div>