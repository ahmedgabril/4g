<?php

class reportc extends pdocon{
  
    
    public  function showallpro($cname){
        $cid = filter_var($cname,FILTER_SANITIZE_NUMBER_INT);
      if($this->mysqlpdo("SELECT prem.*,name FROM prem JOIN  customer ON c_name=customer_id WHERE c_name = ? ORDER BY prem_id DESC",[$cid])){
          
        $getd = $this->fetchalldata();
        
        return $getd;
          
          
      } else {
          return NULL; 
      } 
        
        
        
    }
    
    
 /*****************************************************************************/   
  
    public  function totalcount($cname){
        $cid = filter_var($cname,FILTER_SANITIZE_NUMBER_INT);
      if($this->mysqlpdo("SELECT COUNT(prem_id)AS count,SUM(prodect_price)AS totalprice,SUM(amount_pay)AS totalamount,SUM(rem_amount) AS totalrem FROM prem WHERE c_name = ?",[$cid])){
          
        $getd = $this->fetchalldata();
        
        return $getd;
          
          
      } else {
          return NULL; 
      } 
        
        
        
    } 
    /**********************************************************************************/
 /*****************************************************************************/   
  
    public  function totalmanthpay($cname){
        $cid = filter_var($cname,FILTER_SANITIZE_NUMBER_INT);
      if($this->mysqlpdo("SELECT COUNT(amount_manth)AS totalcountprem,SUM(amount_manth)AS sumamount FROM premmanth WHERE c_name = ? AND amount_manth !=0",[$cid])){
         
        $getd = $this->fetchalldata();
        
        return $getd;
          
          
      } else {
          return NULL; 
      } 
        
        
        
    } 
    /**********************************************************************************/
    
    public function showreportc($id){
             $getid = filter_var($id,FILTER_SANITIZE_NUMBER_INT);
        $this->mysqlpdo("SELECT prodect_name,prem_id,p.id,prem_lemt,prodect_price,amount_pay,pr.date as premdate,rem_amount,name,p.date,p.amount_manth,p.discrption FROM premmanth as p  INNER JOIN prem as pr ON p.prems_id=prem_id 

INNER JOIN customer ON p.c_name = customer_id 


WHERE prems_id=? ",[$getid]);
          if($this->count() > 0){  
            $gt = $this->fetchalldata();
            return $gt;
            
        } else {
            
            return NULL;
            
        }
        
    }
    /*********************************************************************/
 
    public function showallrepo($id){
        
              $getid1 = filter_var($id,FILTER_SANITIZE_NUMBER_INT); 
        if($this->mysqlpdo("SELECT SUM(amount_manth)AS totalpay,date FROM premmanth WHERE prems_id= ?  ORDER BY id ASC",[$getid1])){
            
           $alldata = $this->fetchalldata(); 
            
           return $alldata; 
        } else {
            return NULL;    
        }        
    }
   /******************************************************************************************/
    /*********************************************************************/
 
    public function showallrepo2($id){
        
              $getid1 = filter_var($id,FILTER_SANITIZE_NUMBER_INT); 
        if($this->mysqlpdo("SELECT COUNT(amount_manth)AS totalcount FROM premmanth WHERE prems_id= ?  AND  amount_manth !=0  ORDER BY id ASC",[$getid1])){
            
           $alldata = $this->fetchdata(); 
            
           return $alldata; 
        } else {
            return NULL;    
        }        
    }
   /******************************************************************************************/
    
   public  function showallrepopreodect(){
       
        if($this->mysqlpdo("SELECT COUNT(prem_id)AS totalcount,SUM(prodect_price)AS totalprice,SUM(amount_pay)AS totalpay,SUM(rem_amount)AS totalrem   FROM prem ")){
            
           $alldata = $this->fetchalldata(); 
            
           return $alldata; 
        } else {
            return NULL;    
        }    
       
       
   }
   /********************************************************************************/
   /******************************************************************************************/
    
   public  function sumcountmanthprem(){
       
        if($this->mysqlpdo("SELECT SUM(amount_manth)AS totalamount FROM premmanth ")){
            
           $alldata = $this->fetchdata(); 
            
           return $alldata; 
        } else {
            return NULL;    
        }    
       
       
   }
   /********************************************************************************/
   /******************************************************************************************/
    
   public  function showstor(){
       
        if($this->mysqlpdo("SELECT SUM(total)AS total,SUM(count)AS count FROM storseal ")){
            
           $alldata = $this->fetchalldata(); 
            
           return $alldata; 
        } else {
            return NULL;    
        }    
       
       
   }
   /********************************************************************************/
   /******************************************************************************************/
    
   public  function showstorby(){
       
        if($this->mysqlpdo("SELECT SUM(total)AS total,SUM(count)AS count FROM storby ")){
            
           $alldata = $this->fetchalldata(); 
            
           return $alldata; 
        } else {
            return NULL;    
        }    
       
       
   }
   /********************************************************************************/
   public  function showproft(){
       
        if($this->mysqlpdo("SELECT SUM(proft)AS proft FROM storby ")){
            
           $alldata = $this->fetchdata(); 
            
           return $alldata; 
        } else {
            return NULL;    
        }    
       
       
   }
   /********************************************************************************/
   public function getlassdate($id){
       $getid = filter_var($id,FILTER_SANITIZE_NUMBER_INT);
       $this->mysqlpdo("SELECT date FROM premmanth  WHERE prems_id = ? AND amount_manth != 0  ORDER BY id DESC ",[$getid]);
       if($this->count() >0){
          $get = $this->fetchdata(); 
          return $get; 
       } else {
           return NULL;    
       }
       
   }
   /********************************************************************************/
      
    public function showpremmanth($id){
             $getid = filter_var($id,FILTER_SANITIZE_NUMBER_INT);
        $this->mysqlpdo("SELECT customer_id, prem_id,prodect_name,prem_lemt,DATE_ADD(pr.date,INTERVAL 1 MONTH)AS premdatenew,name FROM prem as pr 

INNER JOIN customer ON c_name = customer_id 


WHERE prem_id=? ",[$getid]);
          if($this->count() > 0){  
            $gt = $this->fetchalldata();
            return $gt;
            
        } else {
            
            return NULL;
            
        }
        
    }
/****************************************************************************/
       /**********************************************************************************/
    
    public function showpremmanth2($id){
             $getid = filter_var($id,FILTER_SANITIZE_NUMBER_INT);
        $this->mysqlpdo("SELECT p.id,prodect_name,prem_manth,p.discrption,prem_lemt,amount_pay,rem_amount,name,p.date,p.amount_manth,p.discrption FROM premmanth as p  INNER JOIN prem as pr ON p.prems_id=prem_id 

INNER JOIN customer ON p.c_name = customer_id 


WHERE prems_id=? ",[$getid]);
          if($this->count() > 0){  
            $gt = $this->fetchalldata();
            return $gt;
            
        } else {
            
            return NULL;
            
        }
        
    }
    /*********************************************************************/
    
public function insertdata($name,$prems_id,$getdate){
 $cname = filter_var($name,FILTER_SANITIZE_NUMBER_INT);
 $premsid = filter_var($prems_id,FILTER_SANITIZE_NUMBER_INT);
$date =filter_var($getdate,FILTER_SANITIZE_STRING);

    $this->mysqlpdo("INSERT INTO premmanth (c_name,prems_id,date)VALUES(?,?,?)",[$cname,$premsid,$date]);
    
    
}
/****************************************************************************/
public function getidofpremmanth($id){
    
     $getpremid = filter_var($id,FILTER_SANITIZE_NUMBER_INT);

    $this->mysqlpdo("SELECT * FROM premmanth WHERE id = ? ",[$getpremid]);
    if($this->count() > 0){
      $get = $this->fetchalldata();
      return $get;
        
    } else {
        return NULL; 
    }
    
}
/***********************************************************************/
 public function showser($date1,$date2){
   $start = filter_var($date1,FILTER_SANITIZE_STRING);
   $end = filter_var($date2,FILTER_SANITIZE_STRING);
       
  $this->mysqlpdo("SELECT prem_id,pr.date,phone,amount_manth,id,name,prem_manth,phone,prodect_name FROM premmanth AS pr INNER JOIN  prem as p ON  prems_id = prem_id INNER JOIN  customer  ON  customer_id = pr.c_name WHERE pr.date BETWEEN ? AND ?   AND amount_manth=0",[$start,$end]);
      if($this->count() > 0){
          
        $getd = $this->fetchalldata();
        return $getd ;
      } else {
          return NULL;    
      }
      /****************************************************************************************/
}
}
