

<?php
require '../ini/confg.php';
if($_SERVER['REQUEST_METHOD']== "POST"){
error_reporting(0);
  $str =implode(",",$_POST['storpre']??'');
  $spre = implode(",",$_POST['prepremtion']??'');
 
    $sin= new users();
    $sin->getinputvalue($_POST['email'], $_POST['username'], $_POST['password'], $str,$spre, $_POST['isadmin']);
    $sin->cheekinput();
    
}