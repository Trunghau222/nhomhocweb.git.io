<?php 
    class taikhoan
    {
       protected $tentk;
       protected $matkhau;

       public function taikhoan($tentk,$matkhau)
       {
           $this->$tentk=$tentk;
           $this->$matkhau=$matkhau;
       }
       public function setmatkhau($matkhau)
       { 
           $this->matkhau=$matkhau;
        }

       public function getmatkhau() 
       {
           return $this->matkhau;
        }

       public function settentk($tentk)
       { $this->tentk=$tentk;}
       public function gettaikhoan() 
       {
           return $this->tentk;
        }
       public function tostring()
       {
           echo $this->tentk .$this->matkhau;
       }
    } 

?>