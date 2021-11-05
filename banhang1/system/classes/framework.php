<?php
class framework
{
    const VIEW_NAME="../application/Views";
    const MODEL_NAME="../application/Model";
    public function loadmodel($Modelname)
    {
        if(file_exists(self::MODEL_NAME."/$Modelname.php")){
          return  require_once self::MODEL_NAME."/$Modelname.php";                 
        }    
        else echo "<div style='margin:0;padding:10px;background:silver;'>Sorry model $Modelname not found</div>";
    }
    public function loadview($viewname,$data=[])
    {       
        if(file_exists(self::VIEW_NAME."/$viewname.php")){
          return  require_once self::VIEW_NAME."/$viewname.php";
        }else echo "<div style='margin:0;padding:10px;background:silver;'>Sorry method $viewname not found</div>";
    }
    public function input($inputname)
    {
        if($_SERVER['REQUEST_METHOD'] ='POST'|| $_SERVER['REQUEST_METHOD'] ='post')
        {
            return $_POST[$inputname];
        }else return trim($_GET[$inputname]);
    }
    public function helpers($helpersname)
    {
        if(file_exists("../system/helpers/".$helpersname.".php"))
        {
            require_once "../system/helpers/".$helpersname.".php";
        }
        else echo "<div style='margin:0;padding:10px;background:silver;'>Sorry helpers $helpersname not found</div>";
    }
    public  function CreateInput($check,$val,$id,$content)
    {
       return "<input type='radio' $check name='radio' id='$id' value='$val'><label for='$id'  id='DA'>$content</label> <br>";
    }
    public  function CreateCauhoi($id,$content)
    {
        return "<label >Câu $id:</label>
                <label id='ndung'>$content</label><br><br>";
    }
    public function Createtrang($id)
    {
        // <a href='http://localhost:8080/Ungdungbanglai/public/thithu/thithu_a1/$id'>Câu $id</a>
        return "
                    <td> <button type='submit' name='cau' value=$id >cau $id</button></td>
               ";
        
    }
    public function createImg($path)
    {
        $url=BASEURL."/public/assets/img/".$path;
        return " <img src='$url' alt='ảnh bị lỗi' id='anh'><br>";
    }
    public function createButton($class)
    {
        return " <button  type='submit' name='btn_nopbai' class='$class'>Nộp Bài</button>";
    }
}