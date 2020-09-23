<?php
require '../ini/confg.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    
 
$data = new forgetpass();


$data->getinputvalues($_POST['pass'],$_POST['cpass'],$_POST['id']);
$data->cheekinput();
}