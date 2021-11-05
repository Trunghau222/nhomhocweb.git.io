<?php
    class UserModel extends database
    {
        const TABLE_NAME="taikhoan";
       public function AllUser($Select = ['*'], $orderby = [], $limit = 15)
       {
            if($this->All(self::TABLE_NAME,$Select,$orderby,$limit))
            {
                return $this->All(self::TABLE_NAME,$Select,$orderby,$limit);                
            }else  return false;
       }
       public  function checkUser($data=[])
       {
            return $this->check(self::TABLE_NAME,$data);
       }
       public function InsertUser($data=[])
       {
           return $this->Insert(self::TABLE_NAME,$data);
       }
       public function EditUser($ID,$data=[])
       {
           return $this->update(self::TABLE_NAME,$ID,$data);
       }
       public function checPass($data=[])
       {
          return  $this->check(self::TABLE_NAME,$data);
       }
    }
?>