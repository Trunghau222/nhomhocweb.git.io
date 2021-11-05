<?php 
    session_start();
    session_destroy(); 
    header("Location: http://localhost/test/php/dangnhap.php");
?>