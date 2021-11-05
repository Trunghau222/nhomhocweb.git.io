<?php
    class database
    {
        public $connect;
        public $data=[];
        public function __construct()
        {                   
            $this->connect = mysqli_connect(HOST, USERNAME,PASSWORD,DB_NAME) or die('Không thể kết nối: ' . mysqli_error($this->connect));
            mysqli_set_charset($this->connect,"utf8");
            return $this->connect;          
        }

        public function All($table,$Select=['*'],$orderby=[],$limit=100)
        {
            $colums=implode(',',$Select);
            $stringOrderby=implode(' ',$orderby);
            if($stringOrderby)
            {              
                $sql="SELECT {$colums} from ${table} ORDER BY ${stringOrderby} limit ${limit}";
               
            }else  $sql="SELECT {$colums} from ${table} limit ${limit}";
            $query=$this->_query($sql);       
            while($rows = mysqli_fetch_assoc($query))
            {
                array_push($this->data, $rows);
            }   
                return $this->data;
        }
       // lay du liệu theo điều kiện
       public function check_ALl($table,$data=[])
       {     $dataset=array();             
           foreach ($data as $key => $value) {
               array_push($dataset,"${key}= '".$value."'");
           };
           $dataset=implode(' and ',$dataset);
           $sql="SELECT * from ${table} where ${dataset} ";       
           $query=$this->_query($sql);
           if(mysqli_num_rows($query)>0)
           {
               while($rows = mysqli_fetch_assoc($query))
               {
                   array_push($this->data, $rows);
               }              
               return ($this->data); 
           } return false; 
          
       }
        /**
         * Lấy ra 1 dữ liệu trong bản bảng
         */
        public function check($table,$data=[])
        {     $dataset=array();             
            foreach ($data as $key => $value) {
                array_push($dataset,"${key}= '".$value."'");
            };
            $dataset=implode(' and ',$dataset);
            $sql="SELECT * from ${table} where ${dataset} ";           
            $query=$this->_query($sql);
            if(mysqli_num_rows($query)>0)
            {
                $this->data=mysqli_fetch_assoc($query);             
                return ($this->data); 
            } return false;  
        }
        /**
         * Thêm mới dữ liệu vào bảng
         */
        public function Insert($table,$data=[])
        {
            $colums=implode(",", array_keys($data));
            $newvalue=array_map(function($value)
            {
                return "'".$value."'";
            },array_values($data));
            $value=implode(",",array_values($newvalue));
            $sql="INSERT INTO ${table}(${colums}) value (${value})";
            $this->_query($sql);
            return true;    
        }
        /**
         * update lại dữ liệu vào bảng
         */
        public function update($table,$id,$data=[])
        {
            $dataset=array();
            foreach ($data as $key => $value) {
                array_push($dataset,"${key}= '".$value."'");
            };
            $dataset=implode(',',$dataset);
            $sql="UPDATE ${table} SET ${dataset} WHERE id= '${id}' ";
            $this->_query($sql);
            return true;          
        }   
        private function _query($sql)
        {
            $query= mysqli_query($this->connect,$sql) or die('try vấn bị lỗi');
            return $query;
        }
    }
?>