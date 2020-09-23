<?php
require __DIR__.'/../ini/confg.php';
if($_SERVER['REQUEST_METHOD']== "POST"){
    

    $sin= new prem();
$sin->getinputvalue($_POST['prodect'], $_POST['cname'], $_POST['date'], $_POST['precent'], $_POST['manthpay'], $_POST['pre_price'], $_POST['manthprem'], $_POST['preml'], $_POST['prem'], $_POST['tphone'], $_POST['tname'], $_POST['tid'], $_POST['dec'],$_POST['premid']);
   $sin->cheekinput2($_POST['getid']); 
}