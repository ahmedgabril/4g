<?php

class minrepo extends pdocon {

    
    
/******************************************************************************************/
    
   public  function countcustomer(){
       
        if($this->mysqlpdo("SELECT COUNT(customer_id)AS totalamount FROM customer ")){
            
           $alldata = $this->fetchdata(); 
            
           return $alldata; 
        } else {
            return NULL;    
        }    
       
       
   }
   /********************************************************************************/
/******************************************************************************************/
    
   public  function countmem(){
       
        if($this->mysqlpdo("SELECT COUNT(user_id)AS totalamount FROM users ")){
            
           $alldata = $this->fetchdata(); 
            
           return $alldata; 
        } else {
            return NULL;    
        }    
       
       
   }
   /********************************************************************************/
    /*****************************************************************************/   
  
    public  function totalmanthpay(){
    
      if($this->mysqlpdo("SELECT COUNT(id)AS totalcountprem,SUM(amount_manth)AS sumamount FROM premmanth WHERE amount_manth != 0 ")){
         
        $getd = $this->fetchalldata();
        
        return $getd;
          
          
      } else {
          return NULL; 
      } 
        
        
        
    } 
    /**********************************************************************************/
     /*****************************************************************************/   
  
    public  function totalcount(){

      if($this->mysqlpdo("SELECT COUNT(prem_id)AS count,SUM(prodect_price)AS totalprice,SUM(amount_pay)AS totalamount,SUM(rem_amount) AS totalrem FROM prem ")){
          
        $getd = $this->fetchalldata();
        
        return $getd;
          
          
      } else {
          return NULL; 
      } 
        
        
        
    } 
    /**********************************************************************************/
        public  function showallproprem(){
  
      if($this->mysqlpdo("SELECT *,name FROM prem AS P  JOIN  customer ON c_name=customer_id WHERE P.date BETWEEN DATE_SUB(CURDATE(),INTERVAL 1 DAY)AND CURDATE()ORDER BY prem_id DESC")){
          
        $getd = $this->fetchalldata();
        
        return $getd;
          
          
      } else {
          return NULL; 
      } 
        
        
        
    }
    
    
 /*****************************************************************************/ 
        /**********************************************************************************/
    
    public function showreportc(){
          
        if($this->mysqlpdo("SELECT prodect_name,prem_lemt,prodect_price,amount_pay,pr.date as premdate,rem_amount,name,p.date,p.amount_manth,p.discrption FROM premmanth as p  INNER JOIN prem as pr ON p.prems_id =prem_id 

INNER JOIN customer ON p.c_name = customer_id 


WHERE  p.date BETWEEN DATE_SUB(CURDATE(),INTERVAL 1 DAY)AND CURDATE()ORDER BY id DESC")){
            
            $gt = $this->fetchalldata();
            return $gt;
            
        } else {
            
            return NULL;
            
        }
        
    }
    /*********************************************************************/
    
          /*************************************************************************/  
         public function showcustor($getname){
             $name = filter_var($getname,FILTER_SANITIZE_STRING);
             if($this->mysqlpdo("SELECT * FROM customer WHERE convert(name using utf8) LIKE '%$name%' OR convert(phone  using utf8) LIKE '%$name%'")){
//              if($this->count() > 0){   
            $getdata= $this->fetchalldata();  
                
            return    $getdata;
             } else {
                 return NULL;    
             }
             
//          
         }
         /*************************************************************/

}
