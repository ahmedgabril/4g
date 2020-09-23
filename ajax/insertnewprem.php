<?php

require '../ini/confg.php';
if($_SERVER['REQUEST_METHOD']== "POST"){

    $sin = new prem();
    $sin->addnew($_POST['getid2']);
    
    
    
}