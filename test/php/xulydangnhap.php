<?php
    session_start();
         // kết nối
    $servername = "localhost";// địa chỉ 
    $database = "test";
    $username = "root";//
    $password = "";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());// hàm die là hàm chương trình 
    }

    $tentk=$_POST['tentk'];
    $mk=$_POST['matkhau'];
    $sql="SELECT * FROM taikhoan where tentk='$tentk' and matkhau='$mk'";
    $query= mysqli_query($conn,$sql);
    $data=[];
    
    while ($row=mysqli_fetch_array($query)) {
      $data[]=$row;
    }
    if(count($data)>0)
    {       
        $_SESSION['id']=$data[0]['ID'];
        header("Location: http://localhost/test/php/trangchu.php");
    }else {
        $_SESSION['err']="Bạn đã sai";
        header("Location: http://localhost/test/php/dangnhap.php");
    }     
?>