<?php 
session_start(); 
if(!isset($_SESSION['id']))
    {
        header("Location: http://localhost/test/php/dangnhap.php");
    }
?>
<a href="../php/dangxuat.php">đăng xuât</a>