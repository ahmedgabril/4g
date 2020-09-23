
<?php require '../ini/confg.php';?>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    
   $data = new profile();
   $data->getinputval($_FILES['img'], $_POST['username']);
   $data->cheekinput();
    
    
}