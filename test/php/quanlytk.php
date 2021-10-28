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
    $sql="select * from taikhoan";
    $query=mysqli_query($conn,$sql); // trả về dòng 
    // từ dòng đưa về mảng dùng 
   // mysqli_fetch_array mysqli_fetch_assoc()
        $arr=[];
        while($row=mysqli_fetch_array($query)){ 
            $arr[]=$row; 
    }
    // $arr đã chuyển từ dòng tài khoản sang  mảng tài khoản
    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quan lý tk</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <form action="" method="post">
        <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên tài khoản</th>
                <th scope="col">mật khẩu</th>
                <th scope="col">Thao tác</th>
              </tr>
            </thead>
            <tbody>
                <!-- cách 1 -->
                <?php foreach($arr as $key =>$val){ ?>
              <tr>
                <td scope="row"><?php echo $arr[$key]['ID'] ?></td>
                <td><?php echo $arr[$key]['tentk'] ?></td>
                <td><?php echo $arr[$key]['matkhau'] ?></td>
                <td><a href="http://localhost/test/php/xoataikhoan.php?ID=<?php echo $arr[$key]['ID'] ?>" >Xóa</a>
                    <a href="http://localhost/test/php/suataikhoan.php?ID=<?php echo $arr[$key]['ID'] ?>">sửa</a></td>
              </tr>
              <?php } ?>           
            
            </tbody>
          </table>
    </form>
</body>
</html>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>