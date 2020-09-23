
<?php
require __DIR__.'/../ini/confg.php';
if($_SERVER['REQUEST_METHOD']== "POST"){
    

    
   $sin= new forgetpass(); 
   $sin->getinputvalue($_POST['email']);
  $sin->validate();
    
}