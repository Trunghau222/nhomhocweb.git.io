<?php 
    $ID=$_POST['ID'];
    $tentk=$_POST['tentk'];
    $mk=$_POST['matkhau'];
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
     $sql="UPDATE taikhoan SET tentk ='$tentk' , matkhau = '$mk' WHERE ID=$ID";
    
     $query= mysqli_query($conn,$sql) or die("truy vaans looix");
     if($query)
     {
        header("Location: http://localhost/test/php/quanlytk.php");
        echo "sửa thành công";
     } 
     else echo " không thành công";
?>