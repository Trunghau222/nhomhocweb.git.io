<?php
session_start();

    if(isset($_POST['btn_dangky']))
    {
        $email= $_POST['email'];
        $mknew= $_POST['matkhaunew'];
        $mknew1= $_POST['matkhaunew1'];
        if($mknew!=$mknew1) {
            $_SESSION['msg']= "hai mk không khớp";
            header("Location: http://localhost/test/web1/doimatkhau.php");
        }
        else 
        {
            // ket nói csdl
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

            $data=[];
            // kt email 
            $id=$_SESSION['id'];
            $sqlcheckemail="select * from  users where id='$id' and email ='$email' ";
            $query=mysqli_query($conn,$sqlcheckemail);
            while ($row=mysqli_fetch_array($query))// { dừng khi mảng trả về là  null 
                $data[]=$row; // trả về 1 thằng 
            }
    
            if(count($data)>0)
            {
                $sql="UPDATE users SET matkhau='$mknew' WHERE id= '$id' ";
                mysqli_query($conn,$sql);
            }
            else {
               $_SESSION['msg']= "email không đúng";
               header("Location: http://localhost/test/web1/doimatkhau.php");
            };
        }
    
?>