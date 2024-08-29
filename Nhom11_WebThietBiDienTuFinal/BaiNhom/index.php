<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3cb09227ac.js" crossorigin="anonymous"></script>    
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Đồ Điện Tử</title>
</head>
<body>       
    <div class="wrapper">
        <?php
            session_start();
            ob_start();
            include("admincp/config/config.php");
           
            include("pages/header.php");
            include("pages/menu.php");
            include("pages/main.php");
            include("pages/footer.php");
        ?>
        
        
        
    </div>
</body>
</html>