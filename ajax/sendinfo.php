<?php

require __DIR__.'/../ini/confg.php';
if($_SERVER['REQUEST_METHOD']== "POST"){

$data = new login();
   $data->cheekinput($_POST['email'],$_POST['pass']);

}