<?php
require '../ini/confg.php';


if($_SERVER['REQUEST_METHOD'] == "POST"){
  $val = new member();
  $val->getinputvalue($_POST['name'], $_POST['idn'], $_POST['phone'],$_POST['date'],$_POST['member_id']);
  $val->cheeknameexsit();
    
    
}
