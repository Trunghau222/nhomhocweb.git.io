<?php 
  include('../database/nguoidung.php');

   // main
 
    if(isset($_POST['dangky']))
    {
        $tentk=$_POST['tentk'];
        $matkhau=$_POST['matkhau'];
        $nguoidung = new nguoidung("viet","123"); // taoj ddooi tuong
        $nguoidung->setmatkhau($matkhau);// bu
        $nguoidung->settentk($tentk);// bu
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <span> tai khoan vua dang ky laf</span>
    <p>ten tai khoan <?php echo $nguoidung->gettaikhoan() ?></p>
    <p>mat khau: <?php echo $nguoidung->getmatkhau() ?></p>
</body>
</html>