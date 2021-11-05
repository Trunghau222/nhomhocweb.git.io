<?php
    spl_autoload_register(function($classname)
    {
        include "../system/classes/$classname.php";
    });    
    $rout =new rout;
?>