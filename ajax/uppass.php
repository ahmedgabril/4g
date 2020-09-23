
<?php
require __DIR__.'/../ini/confg.php';

if($_SERVER['REQUEST_METHOD']== "POST"){


 
    
$data = new profile();
 $data->changpass($_POST['pass'], $_POST['cpass']);
     

}