<?php 
require '../ini/confg.php';

  if($_SESSION['is_admin'] == 3 or $_SESSION['delprim']){
 $id = filter_var($_GET['getid'],FILTER_SANITIZE_NUMBER_INT);
$data = new member();
$data->deletecustor($id);

} else {
        
     header("Location:../error404.php");
        exit();
        
        
        
    }