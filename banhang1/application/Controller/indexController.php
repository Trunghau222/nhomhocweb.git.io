<?php
 class indexController extends framework
 {

    public function __construct()
    {
       session_start();
    }
     public function index()
     {
         echo "index";
     }
 }
?>