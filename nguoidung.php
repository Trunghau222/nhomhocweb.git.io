<?php 
    include("../database/taikhoan.php");
    
    class nguoidung extends taikhoan 
    {
        public function nguoidung($tentk,$matkhau)
        {
            parent::taikhoan($tentk,$matkhau);         
        }    

    }


?>
