<div class="clear"></div>
<div class="main">

                <?php
                    if (isset($_GET['action']) && isset($_GET['query'])){
                        $tam = $_GET['action'];
                        $query=$_GET['query'];
                    }
                    else{
                        $tam='';
                        $query='';
                    }
                    //quản lý danh mục sản phẩm
                    if($tam=='quanlydanhmucsanpham' && $query==''){           
                        include("modules/quanlydanhmucsp/lietke.php");
                    }
                    elseif($tam=='quanlydanhmucsanpham' && $query=='them'){
                      
                        include("modules/quanlydanhmucsp/them.php");                    
                    }
                    elseif($tam=='quanlydanhmucsanpham' && $query=='sua'){
                        include("modules/quanlydanhmucsp/sua.php");
                    }
                    //quản lý sản phẩm
                    elseif($tam=='quanlysanpham' && $query==''){
                        
                        include("modules/quanlysp/lietke.php");
                    }
                    elseif($tam=='quanlysanpham' && $query=='them'){
                        include("modules/quanlysp/them.php");
                        
                    }
                    elseif($tam=='quanlysanpham' && $query=='sua'){
                        include("modules/quanlysp/sua.php");
                    }
                    //quản lý nhân viên
                    elseif($tam=='quanlynhanvien' && $query==''){
                        
                        include("modules/quanlynhanvien/lietke.php");
                    }
                    elseif($tam=='quanlynhanvien' && $query=='them'){
                        
                        include("modules/quanlynhanvien/them.php");
                    }
                    elseif($tam=='quanlynhanvien' && $query=='sua'){
                        include("modules/quanlynhanvien/sua.php");
                    }
                    //quản lý đơn hàng
                    elseif($tam=='quanlydonhang' && $query==''){
                        include("modules/quanlydonhang/lietke.php");
                    }
                    elseif($tam=='donhang' && $query=='xemdonhang'){
                        include("modules/quanlydonhang/chitietdonhang.php");
                    }
                    //đổi mật khẩu
                    elseif($tam=='doimk'&& $query=='') 
                    {
                        include("doimatkhauadmin.php");
                    }
                    elseif($tam=='doimknhanvien'&& $query=='') 
                    {
                        include("doimknhanvien.php");
                    }
                    
                    else{
                        include("modules/dashboard.php");
                    }
                    
                    
                ?>
</div>