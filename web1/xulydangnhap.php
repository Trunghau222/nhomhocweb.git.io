<?php 
session_start();// tạo kết nối 
// lấy dữ liệu từ form
    if(isset($_POST['btn_dangnhap']))
    {
       $tentk= $_POST['tentk'];
       
        $matkhau=$_POST['matkhau'];
    // kết nối csdl
        $servername = "localhost";
        $database = "test";
        $username = "root";
        $password = "";
        $conn = mysqli_connect($servername, $username, $password, $database);

        if (!$conn)
        {
            die ("ket noi that bai".mysqli_connect_errno());
        }

     // kiểm tra nó có trong cơ sở dữ liệu hay ko 
        $sql="select * from  users where tentk='$tentk' and matkhau ='$matkhau'";
        $query= mysqli_query($conn,$sql);// $query lúc này là nó đang là kiểu dữ liệu dòng
     //   mysqli_fetch_array  đưa về mảng
        $data=[];
        while ($row=mysqli_fetch_array($query))// { dừng khi mảng trả về là  null 
            $data[]=$row; // trả về 1 thằng 
        }

        if(count($data)>0)
        {
          // tồn tại thì size()=1; suy ra mảng bắt đầu  từ 0
          $_SESSION['id']=$data[0]['id'];// gán dữ liệu cho session;
          // chuyeentr sang trang chủ
          header("Location: http://localhost/test/web1/trangchu.php");
        }
        else {
            $_SESSION['msg']="Bạn đã đăng nhập sai";
            // quay về trang đăng nhập
            header("Location: http://localhost/test/web1/dangnhap.php");
        };
 
   

?>