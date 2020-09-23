<?php
require '../ini/confg.php';


if($_SERVER['REQUEST_METHOD'] == "POST"){
  $val = new storseal();
  $val->getinputvalue($_POST['prodect'], $_POST['date'], $_POST['count'], $_POST['price'], $_POST['total'],$_POST['id']);    
  $val->cheekinput2();  
}
