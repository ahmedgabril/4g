<?php
require '../ini/confg.php';
if($_SERVER['REQUEST_METHOD']== "POST"){
    
    $pre = new storseal();
    $pre->getinputvalue($_POST['prodect'], $_POST['date'], $_POST['count'], $_POST['price'],$_POST['total']);
    $pre->cheekinput();
    
}