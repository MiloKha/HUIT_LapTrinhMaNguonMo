<?php 
    if(isset($_POST['xacthuc'])){
        $error=array();
        if($_POST['maxacthuc']!= $_SESSION['code']){
            $error['fail']='Mã xác thực không hợp lệ';
        }
        else{
            header("Location:index.php?quanly=datlaimatkhau");
        }
    }
?>




<form action="" method="post" >
    <table border = "0" width="50%" style="border-collapse: collapse; text-align: center">
            <tr>
				<td colspan="2"><h3 style="color:red">Hãy nhập mã xác thực chúng tôi vừa gửi cho bạn</h3></td>
			</tr>
			
			<tr>
                <td>Mã xác thực:</td>
                <td><input type="text" size="50" name="maxacthuc" placeholder="Mã..." style="padding:5px 15px; margin:5px"></td>
            </tr>	
				
				<td colspan="2"><input type="submit" name="xacthuc" value="Xác thực" style="padding:5px 15px"></td>
			</tr>
    </table>
    <?php
        if(isset($error['fail'])){
            echo "<span style='color:red'>".$error['fail']."</span>";
        }
    ?>
</form>