<?php
 function linkCSS($cssPath)
 {
     $url=BASEURL."/".$cssPath;
     echo "<link rel='stylesheet' href='$url'>";
 }
 function linkJS($jsPath)
 {
     $url=BASEURL."/".$jsPath;
     echo   " <script src='$url'></script>";
 }
 function linkImg($ImgPath)
 {
    $url=BASEURL."/".$ImgPath;
    echo   " <script src='$url'></script>";
 }
 
?>