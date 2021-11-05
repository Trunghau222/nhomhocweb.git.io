<?php
class rout
{
    //Default controller,method, params
    public $Controller = "indexController";
    public $method     =   "index" ;
    public $params     =  [];
    public function __construct()
    {
        $url=$this->url();
        if(!empty($url))
        {               
           if((file_exists("../application/Controller/$url[0]Controller.php")))
           {
                $this->Controller= $url[0].'Controller';
                unset($url[0]);
           } else echo "<div style='margin:0;padding:10px;background:silver;'> controller ". $url[0]." not found</div>";
           
        }
        // include controller
        require_once "../application/Controller/".$this->Controller.".php";
        // tạo mới  controller
        $this->Controller=new $this->Controller();
        if(isset($url[1])&& !empty($url[1]))
        {
            if(method_exists($this->Controller,$url[1]))
            {
                $this->method=$url[1];
                unset($url[1]);
            }
            else echo "method no found";
        }
        if(isset($url))
       {
           $this->params= $url;
       }else $this->params=[];
       //thực hiện ..
        call_user_func_array([$this->Controller,$this->method],$this->params);
    }
    public function url()
    {
        if(isset($_GET['url']))
        {
           $url= ($_GET['url']);
           $url=rtrim($url);
           $url= filter_var($url,FILTER_SANITIZE_URL);
           $url=explode("/",$url);
           return $url;
        }
    }
}
?>