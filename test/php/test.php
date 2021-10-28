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
    }
    $user =new User();
    $user->setTK('123');
    echo $user->getTK();

    while($rows = mysqli_fetch_assoc($query))
            {
                array_push($this->data, $rows);
            } 

?>