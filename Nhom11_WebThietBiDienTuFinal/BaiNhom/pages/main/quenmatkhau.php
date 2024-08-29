<?php
     require("mail/sendmail.php");
    $mail=new Mailer;
    if(isset($_POST['quenmatkhau'])){
        $email = ($_POST['email']);
        $error=array();
        $sql_check="SELECT * FROM tbl_dangky";
        $query_check=$conn->query($sql_check);
        foreach($query_check as $row_check){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error['email']='Email sai định dạng hoặc trống';
        }
        else if($email!=$row_check['email'])
        {
            $error['email']='Email chưa được đăng kí';
        }
        else
        {
            $sql="SELECT * FROM tbl_dangky where tbl_dangky.email='".$email."' LIMIT 1 ";
            $query=$conn->query($sql);
            foreach($query as $row)
            {
                $mailgui=$row['email'];
            }
            $code = substr(rand(0,999999),0,6);
            $tieude="Quên mật khẩu";
            $noidung="Mã xác nhận của bạn là: <span style='color:green'>".$code."</span>";
            $mail->sendMail($mailgui,$tieude,$noidung);
            $_SESSION['mail']=$mailgui;
            $_SESSION['code']=$code;
            header("location:index.php?quanly=xacthuc");
        }

        
    }
}
?>
<form action="" autocomplete="off" method="POST">
		<table border="0" class="table-login" style="text-align: center;border-collapse: collapse;">
			<tr>
				<td colspan="2"><h3>Quên mật khẩu</h3></td>
			</tr>
			
			<tr>
                <td>Email:</td>
                <td><input type="text" size="50" name="email" placeholder="Email..." style="padding:5px 15px; margin:5px"></td>
            </tr>	
				
				<td colspan="2"><input type="submit" name="quenmatkhau" value="Gửi mã" style="padding:5px 15px"></td>
			</tr>
	</table>
    <?php
    if(isset($error['email'])){
        echo "<span style='color:red'>".$error['email']."</span>";
    }
    ?>
	</form>