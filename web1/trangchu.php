<?php 
session_start();
    if(!isset($_SESSION['id'])){
        header("Location: http://localhost/test/web1/dangnhap.php");
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
    <a href="./doimatkhau.php">đổi mật khẩu</a>
</body>
</html>