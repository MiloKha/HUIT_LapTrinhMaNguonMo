<?php
    $sql_sua_danhmucsp = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
    $sua_danhmucsp = $conn->query($sql_sua_danhmucsp);
?>
<p>Sửa danh mục sản phẩm</p>
<table border="1" width="50%" style='border-collapse= collapse;'>
 <form action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc']?>" method="POST"> 
    <?php
        foreach($sua_danhmucsp as $dong){
    ?>
        <tr>
            <td>Tên danh mục</td>
            <td><input type="text" value="<?php echo $dong['tendanhmuc']?>" name="tendanhmuc"></td>
        </tr>
        <tr>
            <td>Thứ tự</td>
            <td><input type="text" value="<?php echo $dong['thutu']?>" name="thutu"></td>
            
        </tr>   
        <tr>
           
            <td colspan="2"><input type="submit" name="suadanhmuc" value="Sửa danh mục sản phẩm "></td>
            
        </tr>
        <?php 
        }
        ?>
 </form> 
</table> 