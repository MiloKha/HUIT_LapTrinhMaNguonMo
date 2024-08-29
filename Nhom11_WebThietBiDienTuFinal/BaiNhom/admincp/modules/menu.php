

<?php

?>

<ul class="list-admincp-menu">
    
    <?php
        
        if( isset($_SESSION['admin']) && $_SESSION['admin']==1)
        {
    ?>
        <li><a href="index.php?action=quanlydanhmucsanpham&query=">Quản lý danh mục sản phẩm</a></li>
        <li><a href="index.php?action=quanlysanpham&query=">Quản lý sản phẩm</a></li>
        <li><a href="index.php?action=quanlynhanvien&query=">Quản lý nhân viên</a></li>
        <li><a href="index.php?action=quanlydonhang&query=">Quản lý đơn hàng</a></li>
        <li><a href="index.php?action=doimk&query=">Đổi mật khẩu</a></li>
    <?php
        }
        else{
        ?>
        <li><a href="index.php?action=quanlydanhmucsanpham&query=">Quản lý danh mục sản phẩm</a></li>
        <li><a href="index.php?action=quanlysanpham&query=">Quản lý sản phẩm</a></li>
        <li><a href="index.php?action=quanlydonhang&query=">Quản lý đơn hàng</a></li>
        <li><a href="index.php?action=doimknhanvien&query=">Đổi mật khẩu</a></li>
    <?php
        }
        
    ?>

</ul>