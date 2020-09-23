<?php

$host= 'localhost';
$user= 'user';
$pass= '';
$dbname= '';
try {
    $con = mysqli_connect($host,$user,$pass,$dbname); 
    mysqli_set_charset($con, 'utf8');
} catch (Exception $ex) {
  echo 'filed to connection'. $ex->getMessage();  
}

 
 
