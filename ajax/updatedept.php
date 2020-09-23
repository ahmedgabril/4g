<?php
require __DIR__.'/../ini/confg.php';
if($_SERVER['REQUEST_METHOD']== "POST"){
    

    
   $sin= new dept(); 
   $sin->getinputvalue($_POST['name'], $_POST['prodect'],$_POST['remamount'],$_POST['id']);
   $sin->cheekinput2();
    
}