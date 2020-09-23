
<?php
require 'ini/confg.php';

if($_SESSION['is_admin'] == 3 or $_SESSION['delprim']){

  $val = new users();
$val->deluser($_GET['getuserid']);
    
             } else {
        
     header("Location:error404.php");
        exit();
        
        
        
    }
    

