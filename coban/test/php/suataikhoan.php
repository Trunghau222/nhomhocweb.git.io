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
     $sql="select * from taikhoan where ID=$ID";
    $query=mysqli_query($conn,$sql);
        $arr=[];
        while($row=mysqli_fetch_array($query)){ 
            $arr[]=$row; 
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
     <!-- vì mảng chỉ có 1 thàng nên mảng sẽ có key là 0 -->
     <form action="../php/xulysuataikhoan.php" method="post">
        <input type="hidden" name="ID" value="<?php echo $arr[0]['ID'] ?>">
        <input type="text" name="tentk" value="<?php echo $arr[0]['tentk'] ?>" >
        <input type="text" name="matkhau" value="<?php echo $arr[0]['matkhau'] ?>">
        <input type="submit" value="sửa" >
     </form>
 </body>
 </html>