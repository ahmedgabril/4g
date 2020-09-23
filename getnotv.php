<?php require 'ini/confg.php';?>

        <?php 
           $p = new notv();
         $date = $p->countnotv();
              
         echo $date['countid'];