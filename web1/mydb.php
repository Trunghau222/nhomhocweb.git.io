<?php 
      $servername = "localhost";
      $database = "test";
      $username = "root";
      $password = "";
      $conn = mysqli_connect($servername, $username, $password, $database);

      if (!$conn)
      {
          die ("ket noi that bai".mysqli_connect_errno());
      }
    
    //   $sql="INSERT INTO users (id,tentk,matkhau,email) VALUES('null','sondmm','123','son@gmail.com')";
    //   mysqli_query($conn,$sql)or die("truy vấn bị lỗi");
    //   $sql="INSERT INTO taikhoan (id,tentk,matkhau) VALUES('null','sondmm','123')";
    //   mysqli_query($conn,$sql)or die("truy vấn bị lỗi");

      function them($conn,$table,$inser,$val)
      {
          // format insert
            $arr=$inser;
        $stringarr=implode(",",$arr);
        // format val
        $arr1=$val;
        foreach ($arr1 as $key => $value) {// null => 'null' : "'" . null . "'";
           $arr1[$key]= "'" . $value . "'";
        }     
        $stringarr1=implode(",",$arr1);
        $sql="INSERT INTO $table ($stringarr) VALUES($stringarr1)";
        mysqli_query($conn,$sql)or die("truy vấn bị lỗi");
      }
      them($conn,'taikhoan',["id","tentk","matkhau"],["null","so3ndmm","1234"]);
     // chuyển mảng thành chuổi; 
    //  $arr=["id","tentk","matkhau","email"];
    //  echo "<pre>";
    //  print_r($arr);
    //  echo "</pre>";
    //  $stringarr=implode(",",$arr);
    //  echo $stringarr;


    //  $arr1=["null","so1ndmm","123","son1@gmail.com"];
    // // $stringarr=implode(",",$arr);
    // //  echo $stringarr;
    // foreach ($arr1 as $key => $value) {// null => 'null' : "'" . null . "'";
    //    $arr1[$key]= "'" . $value . "'";
    // }
    //  echo "<pre>";
    //  print_r($arr1);
    //  echo "</pre>";
    // $stringarr=implode(",",$arr1);
    //  echo $stringarr;
?>