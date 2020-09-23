<?php

require __DIR__.'/../ini/confg.php';
if($_SERVER['REQUEST_METHOD']== "POST"){
    

    
   $sin= new sinup(); 
   $sin->getinputvalue($_POST['email'], $_POST['username'],$_POST['pass'],$_POST['rpass']);
     $sin->cheekinput();
     
    
}