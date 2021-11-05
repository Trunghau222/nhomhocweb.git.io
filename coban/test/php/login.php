<?php 

//Bài tập
// Cho 1 mảng User.Ở form đăng nhập nếu ta đăng nhập tk && mk đúng như ở trong mảng
// Thì thông báo đăng nhập thành công ngược lại không thành công.
// Ở form đăng ký. sẽ đăng ký và thêm tài khoản đó vào mảng user và thông báo đăng ký thành công.
// Lưu ý: đăng ký rồi chuyển qua đăng nhập vẫn được.

    // biến thông báo
     $msg="";
    // ta có 1 mảng tài khoản  
    $users=[
        ["tentk"=>'admin',"mk"=>"admin"] ,
           
    ];
   $user= ["tentk"=>'1',"mk"=>"1"] ;
   $c=[[1,"hoa",'45'],[2,"hoa",'46'],[3,"hoa",'47'],];// giỏ hàng
   $d=[4,"hoa",'48'];
   $c[]=$d;
//    $a=[
//        [1,2]
//     ];
//     $b=[5,4];
//     $a[]=$b;
    echo "<pre>";
    print_r($c);
    echo "</pre>";
    // xu ly form đăng nhập
    if(isset($_POST['btn_dangnhap']))
    {
       $tk= $_POST['tk'];
       $mk= $_POST['mk'];
        foreach ($users as $val ) {
         if($val['tentk']==$tk && $val['mk']==$mk)
         {
             $msg="đăng nhập thành công";
         }else {
            $msg="đăng nhập thất bại";
         }
        }
    }
    // xu ly form đăng ký
    if(isset($_POST['btn_dangky']))
    {
       $tk= $_POST['tk'];
       $mk= $_POST['mk'];
       echo "trang đăng ký: tài khoản: ". $tk." mật khẩu: ".$mk;
       
       echo "<pre>";
       print_r($users);
       echo "</pre>";
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
        <!-- form đăng nhập -->
        <form action="" method="post">
            <input type="text" name="tk" id="" placeholder="tên tài khoản">
            <input type="text" name="mk" id="" placeholder="Mật khẩu">
            <input type="submit" name="btn_dangnhap" value="đăng nhâp">
        </form>
        <!-- from đăng ký -->
        <form action="" method="post">
            <input type="text" name="tk" id="" placeholder="tên tài khoản">
            <input type="text" name="mk" id="" placeholder="Mật khẩu">
            <input type="submit" name="btn_dangky" value="đăng ký">
        </form>
        <!-- Nơi thông báo -->
        <h1>Thông báo <?php echo $msg ?></h1>
</body>
</html>