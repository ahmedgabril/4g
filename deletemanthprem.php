<?php 
require 'ini/confg.php';

if(isset($_SESSION['is_admin']) == 3 or isset($_SESSION['delprim'])){
  echo  $id = filter_var($_POST['getid1'],FILTER_SANITIZE_NUMBER_INT);
    $data = new prem();

   $data->delmanthprem($id);

          } else {
        
     header("Location:error404.php");
        exit();
        
        
        
    }
   