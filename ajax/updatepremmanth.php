<?php
require '../ini/confg.php';


if($_SERVER['REQUEST_METHOD'] == "POST"){
  $val = new prem();
  $val->updatepremmanth($_POST['date'], $_POST['premmanth'], $_POST['dis'], $_POST['id']);
    
    
}
