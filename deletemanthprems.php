<?php

require 'ini/confg.php';

if(isset($_SESSION['is_admin']) == 3 or isset($_SESSION['delprim'])){
$getnew= new prem();

$getnew->delmanthprem3($_GET['do'],$_GET['getsession']);

     header("Location:error404.php");
        exit();
        
    
        
    }
   