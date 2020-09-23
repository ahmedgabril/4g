
<?php
require 'ini/confg.php';

if(isset($_SESSION['is_admin']) == 3 or isset($_SESSION['delstor'])){

$data = new storseal();
$data->delstorseal($_GET['getstorid']);


   } else {
        
     header("Location:error404.php");
        exit();
        
        
        
    }
   