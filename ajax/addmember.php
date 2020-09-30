<?php
require __DIR__.'/../ini/confg.php';
if($_SERVER['REQUEST_METHOD']== "POST"){
    

    
   $sin= new member(); 
   $sin->getinputvalue($_POST['name'], $_POST['idn'],$_POST['phone'],$_POST['date'],$_POST['dec']);
   $sin->cheekinput();
    
}