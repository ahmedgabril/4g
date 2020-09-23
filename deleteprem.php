<?php 
require 'ini/confg.php';


if($_SESSION['is_admin'] == 3 or $_SESSION['delprim']){
 $id = filter_var($_GET['getpremid'],FILTER_SANITIZE_NUMBER_INT);
$data = new prem();
$data->delprem($id,$_GET['getnew']);

            } else {
        
     header("Location:error404.php");
        exit();
        
    
        
    }
   
