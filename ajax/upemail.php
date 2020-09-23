<?php
require __DIR__.'/../ini/confg.php';

if($_SERVER['REQUEST_METHOD']== "POST"){

    
$data = new profile();
$data->updatemail($_POST['email']);     

}