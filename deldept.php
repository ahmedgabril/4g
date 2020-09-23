<?php
require 'ini/confg.php';

if(isset($_SESSION['is_admin']) == 3 or isset($_SESSION['delstor'])){

$data = new dept();
$data->deldept($_GET['getid']);

       } else {
        
     header("Location:error404.php");
        exit();
        
        
        
    }
   