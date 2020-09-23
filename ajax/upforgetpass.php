<?php
require __DIR__.'/../ini/confg.php';
if($_SERVER['REQUEST_METHOD']== "POST"){
    

    
   $sin= new forgetpass(); 
   $sin->getinputvalues($_POST['pass'], $_POST['cpass'], $_POST['id']);
  $sin->cheekinput();
    
}