<div id="main">
            <?php include("sidebar/sidebar.php");?>
            <div class="main-content">
                <?php
                    if (isset($_GET['quanly'])){
                        $tam = $_GET['quanly'];
                    }
                    else{
                        $tam='';
                    }
                    //gio hang
                    if($tam=='giohang'){
                        include("main/giohang.php");
                    }
                    elseif($tam=='vanchuyen'){
                        include("main/vanchuyen.php");
                    }
                    elseif($tam=='thongtinthanhtoan'){
                        include("main/thongtinthanhtoan.php");
                    }
                    elseif($tam=='donhangdadat'){
                        include("main/thongtindonhang.php");
                    }
                   
                    elseif($tam=='danhmucsanpham'){
                        include("main/danhmuc.php");
                    }
                    elseif($tam=='sanpham'){
                        include("main/sanpham.php");
                    }
                    elseif($tam=='dangky'){
                        include("main/dangky.php");
                    }
                    elseif($tam=='dangnhap'){
                        include("main/dangnhap.php");
                    }
                    elseif($tam=='timkiem'){
                        include("main/timkiem.php");
                    }
                    elseif($tam=='camon'){
                        include("main/camon.php");
                    }
                    elseif($tam=='thaydoimatkhau'){
                        include("main/thaydoimatkhau.php");
                    }
                    elseif($tam=='quenmatkhau'){
                        include("main/quenmatkhau.php");
                    }
                    elseif($tam=='datlaimatkhau'){
                        include("main/datlaimatkhau.php");
                    }
                    elseif($tam=='xemthongtin'){
                        include("main/xemthongtin.php");
                    }
                    elseif($tam=='xacthuc'){
                        include("main/xacthuc.php");
                    }

                    else{
                        include("main/index.php");
                    }
                ?>
            </div>
        </div>