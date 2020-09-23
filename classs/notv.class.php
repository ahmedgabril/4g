<?php

class notv extends pdocon {
 /**********************************************************************************/
 public function countnotv(){
  $this->mysqlpdo("SELECT COUNT(not_id) as countid FROM notvaction WHERE date= DATE_SUB(CURDATE(),INTERVAL 1 MONTH) AND amount_manth = 0 AND sen= 0 ");
      if($this->count() > 0){
          
        $getd = $this->fetchdata();
        
        return $getd;
          
      } else {
          return NULL;
              
      } 
        
        
        
    }
    
    
 /*****************************************************************************/ 
 /**********************************************************************************/
 public function getnotv(){
  $this->mysqlpdo("SELECT msg,prem_id FROM notvaction WHERE date= DATE_SUB(CURDATE(),INTERVAL 1 MONTH) AND amount_manth = 0 ORDER BY not_id DESC LIMIT 4");
      if($this->count() > 0){
          
        $getd1 = $this->fetchalldata();
        
       
        return $getd1;
          
      } else {
          return NULL;              
      } 
        
        
        
    }
    
    
 /*****************************************************************************/ 
    
 public function upnot(){
     

     return $this->mysqlpdo("UPDATE notvaction SET sen = 1 WHERE date= DATE_SUB(CURDATE(),INTERVAL 1 MONTH) AND amount_manth = 0"); 
     
 }
 /******************************************************************/
 
  /**********************************************************************************/
 public function getallnot(){
  $this->mysqlpdo("SELECT msg,name,prem_id,date FROM notvaction WHERE date = DATE_SUB(CURDATE(),INTERVAL 1 MONTH) AND amount_manth = 0 ORDER BY not_id DESC");
      if($this->count() > 0){
          
        $getd1 = $this->fetchalldata();
        
       
        return $getd1;
          
      } else {
          return NULL;              
      } 
        
        
        
    }
    
    
 /*****************************************************************************/ 
}
