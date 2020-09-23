<?php

   class pdocon {

//    private $dbname,$password,$user,$con,$option; 
protected $dbh;
protected $con;
private $dbname = "mysql:host=localhost;dbname=4g"; 
private $user = "root"; 
private $password = ""; 
private $option = array(
    
PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES  utf8"
    
); 

  

    public function __construct() {
      try {
      $this->dbh= new PDO($this->dbname, $this->user, $this->password,$this->option);
    $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
 
      
    } catch (Exception $ex) {
     echo "fild to connection".$ex->getMessage();  
    }

    

}





public function mysqlpdo($query,$value=null){
    
    
  
    if(is_null($value)){
       $this->con= $this->dbh->prepare($query);  
     return $this->con->execute();    
        
    } else {
        $this->con= $this->dbh->prepare($query);  
     return $this->con->execute($value);   
    }
      
 }


 public function count(){
     
     return $this->con->rowCount();
     
 }
 
 public function fetchalldata($type=null){
     
     return $this->con->fetchAll($type); 
     
 }
 protected function fetchdata(){
     
     return $this->con->fetch(); 
     
 }

public function redirct($url){
    
    header("Location:{$url}");  
    
    exit();
}

}