
<?php
require 'ini/confg.php';

if(isset($_SESSION['is_admin']) == 3 or isset($_SESSION['delstor'])){

$data = new storby();
$data->replystor($_GET['getstorby']);
$data->delstorby($_GET['getstorby']);

       } else {
        
     header("Location:error404.php");
        exit();
        
        
        
    }
   