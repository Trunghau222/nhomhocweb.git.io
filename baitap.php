<?php 
 // implode mảng thành chuổi
    // ví dụ $arr= ['a'=>1,'b'=>2,3,'c'=>4];
   // $arr1= implode('and',$arr);=> 1 and 2 and 3 and 4 ; toàn :1 and 2 3 and 4 and
  
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
    function selectWhere($conn,$table,$where=[])
    {
        $data= [];
        foreach($where as $key => $val)
        {
            array_push($data,$key."= '".$val."'");// $data=["ID= '11'","tentk= '5'"] ;
        }      
        $data=implode(" and ",$data);  //   $data= "id= '11' and tentk= '5'"; 
        $sql="SELECT * FROM $table where $data";
        $arr=[];
        $query=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($query)){ 
            array_push($arr,$row);
        }
        return $arr; 
    }
    // $data= selectALL($conn,'taikhoan1');
    //  $data=selectWhere($conn,'taikhoan',["ID"=>'11',"tentk"=>5]);
    //update
    function update($conn,$table,$where=[],$set=[])
    {
        // xử lý mảng $where
        $updatewhere= [];
        foreach($where as $key => $val)
        {
            array_push($updatewhere,$key."= '".$val."'");// $data=["ID= '11'","tentk= '5'"] ;
        }      
        $updatewhere=implode(" and ",$updatewhere);  //   $data= "id= '11' and tentk= '5'";
        // xử lý mảng $set
        $updateset=[];
        foreach($set as $key => $val)
        {
            array_push($updateset,$key." = '".$val."'");
        }
        $updateset=implode(" , ",$updateset); 
        $sql="UPDATE $table SET $updateset WHERE $updatewhere";
        mysqli_query($conn,$sql);
    }
    $data=update($conn,'taikhoan',["ID"=>'11',"tentk"=>5],['matkhau'=>7]);
     // thêm
    function insert($conn,$table,$into=[],$val=[])
    {
         $sql="INSERT INTO taikhoan (ID,tentk,matkhau) VALUES(null,'nguyenvana','123')";
         mysqli_query($conn,$sql);
    }
    // $data= update($conn,'taikhoan',['ID','tentk','matkhau'],['null','nguyenvana','123']);
    function delete($conn,$table,$where=[])
    {
         $sql="delete from taikhoan where ID= '1' and tentk= '11'";
         mysqli_query($conn,$sql);
    }
    // $data=delete($conn,'taikhoan',['ID'=>'1','tentk'=>'11']);

?>