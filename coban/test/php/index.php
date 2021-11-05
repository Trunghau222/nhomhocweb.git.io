<?php 
 
    class User
    {
        private $tentk;
        private $mk;
        public function users($tk,$mk)
        {
            $this->tentk=$tk;
            $this->mk=$mk;
        }
        public function setTK($tk)
        {
            $this->tentk=$tk;
        }
        public function getTK()
        {
            return $this->tentk;
        }
        public function getmk()
        {
            return $this->tentk;
        }
    }
    

   $tk=new User();
        $tk->users("1","2");
   $tk2=new User();
        $tk2->users("3","4"); 
    $arr=["so1"=>1,$tk,$tk2
        ];
    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>";

    //  ["a"=>00 ,"b","c","D",5] = key:a,0,1,2,3 ; foreach
    //["a" ,"b","c","D",5] key 0,1,2,3,4; for 
    // $for=["a" => [

    // ],
    // "b","c","D",5];//count = 5   key:a,0,1,2,3 ;

    // for ($i=0; $i <pre count($for) ; $i++) { // 0 1 2 3 4 
    //     echo $for[$i];
    //     echo "<br>";
    // }
    // foreach($for as $key => $value) //tham soos1 mảng , tham số 2 key tham số 3 là value
    // {
    //     if($key==3) echo $value;
    // }
// echo $for[3];
    // $arr=[
    //    [1,3,3,4],
    //     [5,2,7,8],       
    // ];
    // $a=["a"=>3,"b"=>6];
    // $c=["a","b"];
    // $b = array_values($a);//trả về 1 mảng chứa khóa của mảng kia 
    // print_r($b);
    // for sẽ so sánh giá trị nếu muốn lấy về khóa
    // for ($i=0; $i <count($arr) ; $i++) { 
    //     for ($j=0; $j<count($arr[$i]) ; $j++) { 
    //         if($arr[$i][$j]==2) echo "arr[".$i."][".$j."]"; 
    //     }
    // }
    
    // $arr1=$arr=[
    //    "mang1"=> [1,2,3,4],
    //     "mang2"=>[5,6,7,8],       
    // ];;
  
    // $arr[1][2];

   
      // tách ra để dể nhìn  
    // $arr1=[
    //     "mang1",
    // ];
    // $arr1=
    //     [
    //         1,2,3,4,5,
    //     ];
    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>";
    // echo $arr['mang1'][3];


    // đăng nhập đăng ký = array[]
    $msg="";
    $users=[
        ["tentk"=>'admin',"mk"=>"admin"] ,      
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <title>Document</title>
</head>
<body>
    <!-- <form action="#" method="get">
        <input type="text" name="sothu1" id="sothu1">
        <input type="text" name="sothu2" id="sothu2">
        <input type="submit" value="btn kết quả">
    </form>

    <button id="btnketqua">btn của js</button>
   <h3 id="ketqua"></h3> -->
   <!-- <div class="div" id="div"></div>
   <button class="" onclick="red('a')">red</button>
   <button class="" onclick="blue()">blue</button>
   <button class="" onclick="yellow()">yellow</button> -->
   <form action="" method="post">
       <input type="text" name="" id="" placeholder="tên tài khoản">
       <input type="text" name="" id="" placeholder="Mật khẩu">
       <input type="submit" value="đăng nhâp">
   </form>

   <form action="" method="post">
       <input type="text" name="" id="" placeholder="tên tài khoản">
       <input type="text" name="" id="" placeholder="Mật khẩu">
       <input type="submit" value="đăng ký">
   </form>
   <h1>Thông báo <?php echo $msg="" ?></h1>
</body>
</html>
<script src="../js/index.js"></script>
