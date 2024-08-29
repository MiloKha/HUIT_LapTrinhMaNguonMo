<p>Thêm sản phẩm</p>
<table border="1 solod #000" align="center" width="90%" style='border-collapse: collapse;'>
 <form action="modules/quanlysp/xuly.php" method="POST" enctype="multipart/form-data"> 
        <tr>
            <td>Tên sản phẩm</td>
            <td><input style="width:400px" type="text" name="tensanpham"></td>
        </tr>
        <tr>
            <td>Mã sản phẩm</td>
            <td><input style="width:400px" type="text" name="masp"></td>
        </tr>
        <tr>
            <td>Giá sản phẩm</td>
            <td><input style="width:400px" type="text" name="giasp"></td>
        </tr>
        <tr>
            <td>Số lượng</td>
            <td><input type="text" style="width:400px" name="soluong"></td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td><input type="file" style="width:300px; height:30px" name="hinhanh"></td>
        </tr>
        <tr>
            <td>Tóm tắt</td>
            <td><textarea rows="10" style="width:400px"  name="tomtat" style="resize: none"></textarea></td>
        </tr>
        <tr>
            <td>Nội dung</td>
            <td><textarea rows="10" style="width:400px"  name="noidung" style="resize: none"></textarea></td>
        </tr>
        <tr>
            <td>Danh mục sản phẩm</td>
            <td>
                <select name='danhmuc' style="width:200px; height:30px">
                    <?php
                        $sql_danhmuc ="SELECT * FROM tbl_danhmuc ORDER BY thutu ASC";
                        $query_danhmuc = $conn->query($sql_danhmuc);
                        foreach($query_danhmuc as $row_danhmuc){
                            ?>
                            <option value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
                        <?php
                        }?>
                     
                </select>
            </td>
            
        </tr>
        <tr>
            <td>Tình trạng</td>
            <td>
                <select name='tinhtrang' style="width:200px; height:30px">
                    <option value="1">Kích hoạt</option>
                    <option value="0">Ẩn</option>
                </select>
            </td>
            
        </tr>
        <tr>
           
            <td colspan="2" align="center" ><input type="submit" style="width:200px; height:30px" name="themsanpham" value="Thêm sản phẩm "></td>
            
        </tr>
 </form> 
</table> 