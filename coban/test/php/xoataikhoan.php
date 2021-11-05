<?php 
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
     $ID=$_GET['ID'];
        $sql="delete from taikhoan where ID =$ID";
        $boolean=mysqli_query($conn,$sql)or die("truy vấn lỗi"); 
         if($boolean){
            header("Location: http://localhost/test/php/quanlytk.php"); // chuyển trang
            echo "bạn đã xóa thành công";
         } else echo "bạn xóa rhaats bại";

?>