<?php
require 'ini/confg.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    
      $str = implode(",",$_POST['storpre']);
  $spre = implode(",",$_POST['prepremtion']);
  $val = new users();
$val->updateusers($str,$spre,$_POST['isadmin'],$_POST['user_id']);
    
    
}