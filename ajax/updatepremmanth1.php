<?php
require '../ini/confg.php';


if($_SERVER['REQUEST_METHOD'] == "POST"){
  $val = new prem();
  $val->updatepremmanth2($_POST['date'], $_POST['premmanth'], $_POST['dis'], $_POST['id'],$_POST['se']);
    
    
}
