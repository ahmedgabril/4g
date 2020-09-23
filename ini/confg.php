<?php
ob_start();
   session_start();
//require 'conset.php';

spl_autoload_register(function($name){
    
 require  __DIR__ .'/../classs/'.$name.'.class.php' ;
    

});


   