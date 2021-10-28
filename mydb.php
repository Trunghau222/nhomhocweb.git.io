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
 
    // select ALL
    function selectALL($conn,$table,$select=['*'])
    {
        $arr=[];
        $select=implode(",",$select);
        $sql="select $select from $table ";
        $query=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($query)){ 
            array_push($arr,$row);
        }
        return $arr;       
    }
    $data= selectALL($conn,'taikhoan1');
    
?>