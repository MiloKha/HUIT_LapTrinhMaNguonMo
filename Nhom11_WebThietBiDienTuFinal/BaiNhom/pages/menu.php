<?php 

    $sql_danhmuc="SELECT * FROM tbl_danhmuc ORDER BY thutu ASC";
    $query_danhmuc = $conn->query($sql_danhmuc);
?>
<?php
    if(isset($_GET['dangxuat'])&& $_GET['dangxuat']==1){
        unset($_SESSION['dangky']);
    }
?>
<div class="menu">
            <ul class="menu_chung">
                <li><a href="index.php">Trang chủ</a></li>
                
                <li><a href="index.php?quanly=giohang">Giỏ hàng</a></li>
                
                
            </ul>
            <ul class="menu_timkiem">
                <p>
                    <form action="index.php?quanly=timkiem" method="POST">
                        <input style="font-size:14px" type="text" placeholder="Tìm kiếm sản phẩm..." name="tukhoa">
                        <input type="submit" name="timkiem" value="Tìm kiếm">
                    </form>
                </p>
            </ul>
            <ul class="menu_tk">
            <?php
                    if(isset($_SESSION['dangky'])){ 
                ?>
                    <li><?php echo $_SESSION['dangky']?>
                        <div class="submenutaikhoan">
                            <ul>
                                <li><a href="index.php?quanly=xemthongtin">Xem thông tin</a></li>
                                <li><a href="index.php?quanly=thaydoimatkhau">Đổi mật khẩu</a></li>
                                <li><a href="index.php?dangxuat=1">Đăng xuất</a></li>
                                
                            </ul>
                        </div>
                    </li>
                <?php
                    }
                    else{
                ?>
                   
                   <li>Tài khoản
                        <div class="submenutaikhoan">
                            <ul>
                                <li><a href="index.php?quanly=dangky">Đăng ký</a></li>
                                <li><a href="index.php?quanly=dangnhap">Đăng nhập</a></li>
                                
                                
                            </ul>
                        </div>
                    </li>
                   <?php 
                    }
                    ?>
            </ul>
</div>
<div class="clear"></div>