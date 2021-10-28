<?php
    // kết nối
    $servername = "localhost";// địa chỉ 
    $database = "quanlytaikhoan";
    $username = "root";//
    $password = "";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());// hàm die là hàm chương trình 
    }

    // thực hiện try vấn
    //mysqli_query // thực hiện try vấn
    $sql="select * from `taikhoan` ";// lay het
    $query = mysqli_query($conn,$sql);
   // mysqli_fetch_array($query)  mysqli_fetch_assoc()// hamf ddee chuyen dong thanh mang
  
//    while($row=mysqli_fetch_array($query)){ 
//         echo $row['ID']." "; 
//         echo $row['username']." ";
//         echo $row['Password']; 
//         echo "<br>";
    
//     }
    // $table='taikhoan';
    // $username1="thien1";
    // $password1="thien1";
    // $arr=['ID', 'Username','Password',];
    // $formatinto="";
    // foreach($arr as $key=>$val)
    // {
    //     $formatinto.=$val.",";     
    // }
    // echo $formatinto;

    // //thêm
    // $sql="INSERT INTO $table($formatinto) VALUES(null,'$username','$password')";
    // mysqli_query($conn,$sql) or die("truy vaans looix");
    
    // //xóa
    // $sql="delete from taikhoan where ID='1'";
    // mysqli_query($conn,$sql) or die("truy vaans looix");

    //sửa
    // $sql="UPDATE taikhoan SET Username ='1' , Password = '1' WHERE ID='2'";
    // mysqli_query($conn,$sql) or die("truy vaans looix");

    mysqli_close($conn);// đóng kết nối
?>
