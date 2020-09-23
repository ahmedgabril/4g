<?php

class storby extends pdocon {
   private $prodect,$date,$price,$total,$count,$name,$id,$proft;
    public function getinputvalue($prodect,$date,$count,$price,$total,$name,$id=null){
        $this->prodect= filter_var($prodect,FILTER_SANITIZE_STRING);
        $this->date= filter_var($date,FILTER_SANITIZE_STRING);
        $this->price= filter_var($price,FILTER_SANITIZE_NUMBER_FLOAT);
        $this->count= filter_var($count,FILTER_SANITIZE_NUMBER_INT);
        $this->total= filter_var($total,FILTER_SANITIZE_NUMBER_FLOAT);
        $this->name= filter_var($name,FILTER_SANITIZE_STRING);
        $this->id= filter_var($id,FILTER_SANITIZE_NUMBER_INT);
      
    }
    /****************************************************************/
    public function cheekinput(){
    
         if(empty($this->prodect)){
             
         echo msg::setmsg("من فضلك ادخل اسم المنتج","danger");
        
     
         }elseif(empty($this->date)) {
             
               echo msg::setmsg("من فضلك ادخل التاريخ","danger");
     
         }elseif(empty($this->count)) {
             echo msg::setmsg("من فضلك ادخل العدد","danger");
         }elseif(empty($this->price)) {
             
              echo msg::setmsg("من فضلك ادخل السعر","danger");
         
        
    
         } else {
             $this->mangstorseal();  
         }
  }
  /*******************************************************/ 
    /****************************************************************/
    public function cheekinput2(){
    
         if(empty($this->prodect)){
             
         echo msg::setmsg("من فضلك ادخل اسم المنتج","danger");
        
     
         }elseif(empty($this->date)) {
             
               echo msg::setmsg("من فضلك ادخل التاريخ","danger");
     
         }elseif(empty($this->count)) {
             echo msg::setmsg("من فضلك ادخل العدد","danger");
         }elseif(empty($this->price)) {
             
              echo msg::setmsg("من فضلك ادخل السعر","danger");
         
       
          
    
         } else {
             
                $this->mangstorseal2(); 
         }
  }
  /*******************************************************/ 
  

  private function mangstorseal2(){
      $this->mysqlpdo("SELECT SUM(count) AS sumcount ,stor_id,prodectname, price,total,date FROM storseal WHERE prodectname = ? ",[$this->prodect]); 
      if($this->count()> 0){
          
          $del = $this->fetchalldata();
          foreach ($del as $data){
              
              
          }
         $newtotlcount =    $data['sumcount'] - $this->count;
         $newtotalpric =  $data['price'] * $newtotlcount ; 
          
      }
      if($this->count >=0 and $this->count <= $data['sumcount']){
      $this->mysqlpdo("DELETE FROM  storseal WHERE prodectname = ?",[$data['prodectname']]);  
     $this->mysqlpdo("INSERT INTO storseal (prodectname,price,count,total,date)VALUES(?,?,?,?,?)",[$data['prodectname'],$data['price'],$newtotlcount, $newtotalpric,$data['date']]);
       $this->upstorby(); 
          
      } else {
          
    echo msg::setmsg(" العدد الموجود حاليا غير كافى لاتمام عمليه البيع","info");
    return FALSE;
          
      }
      
 
  }
  /*******************************************************/
  /*******************************************************/ 
  private function mangstorseal(){
      $this->mysqlpdo("SELECT SUM(count) AS sumcount ,stor_id,prodectname, price,total,date FROM storseal WHERE prodectname = ? ",[$this->prodect]); 
      if($this->count()> 0){
          
          $del = $this->fetchalldata();
          foreach ($del as $data){
              
              
          }
         $newtotlcount =    $data['sumcount'] - $this->count;
         $newtotalpric =  $data['price'] * $newtotlcount ; 
         $pric = $this->price * $this->count;
         $this->proft = $pric - $this->count * $data['price'];
      }
      if($this->count >=0 and $this->count <= $data['sumcount']){
      $this->mysqlpdo("DELETE FROM  storseal WHERE prodectname = ?",[$data['prodectname']]);  
     $this->mysqlpdo("INSERT INTO storseal (prodectname,price,count,total,date)VALUES(?,?,?,?,?)",[$data['prodectname'],$data['price'],$newtotlcount, $newtotalpric,$data['date']]);
  $this->addstorseal(); 
          
      } else {
          
    echo msg::setmsg(" العدد الموجود حاليا غير كافى لاتمام عمليه البيع","info");
    return FALSE;
          
      }
      
 
  }
  /*******************************************************/
      private function addstorseal(){
          
         
        
      if($this->mysqlpdo("INSERT INTO storby (prodectname,price,count,total,date,customername,proft)VALUES(?,?,?,?,?,?,?)",[$this->prodect,$this->price,$this->count, $this->total, $this->date,$this->name, $this->proft])){ 
             echo msg::setmsg("تم اضافه البيانات بنجاح","success"); 
    
         

            ?>
            

                  <script>
                  
                   $(".storby").trigger("reset");
             
                  </script>
           <?php 
        } 
    
     }
/*******************************************************************************/ 
  
    /*******************************************************************************/ 
  
  public function showdatastorby(){

      if($this->mysqlpdo("SELECT * FROM storby ")){
         $d = $this->fetchalldata();
         
         return $d;
          
          
      } else {
          return NULL;    
      }
      
  }
 /*****************************************************************************/ 
  /*******************************************************************************/ 
  
  public function editstorby($id){
      $getid= filter_var($id,FILTER_SANITIZE_NUMBER_INT);
      if($this->mysqlpdo("SELECT * FROM storby WHERE stor_by=?",[$getid])){
         $d = $this->fetchalldata();
         
         return $d;
          
          
      } else {
          return NULL;    
      }
      
  }
 /*****************************************************************************/ 
 private  function upstorby(){
     
     $this->mysqlpdo("UPDATE storby SET prodectname=?,price=?,count=?,total=?,date=?,customername=? WHERE stor_by=?",[$this->prodect,$this->price,$this->count, $this->total, $this->date,$this->name, $this->id]); 
     if($this->count > 0){
         $_SESSION['upstorby']= TRUE;
       ?>  
        <script>
        
        location = "showstorby.php";
        
        </script> 
    <?php } else {
           $_SESSION['nochingby']= TRUE;
       ?>  
        <script>
        
        location = "showstorby.php";
        
        </script> 
 
        
  <?php  }
     
 }
 /*****************************************************************/
 /*******************************************************************************/ 
  
  public function delstorby($id){
      $getid= filter_var($id,FILTER_SANITIZE_NUMBER_INT);
      if($this->mysqlpdo("DELETE   FROM storby WHERE stor_by= ?",[$getid])){
       $_SESSION['delstorby'] = TRUE;
  
                  $this->redirct("showstorby.php");
          
      }
      
  }
  /***********************************************************/
  public function replystor($getid){
        $this->mysqlpdo("SELECT count,prodectname FROM storby WHERE stor_by = ? ",[$getid]); 
      if($this->count()> 0){
          
          $del = $this->fetchalldata();
          foreach ($del as $data){
              
              
          }
       $this->mysqlpdo("SELECT price FROM storseal WHERE prodectname = ? ",[$data['prodectname']]); 
     $de = $this->fetchdata();
     $totala = $data['count'] * $de['price'] ;
     
      $this->mysqlpdo("INSERT INTO storseal (prodectname,price,count,total,date)VALUES(?,?,?,?,now())",[$data['prodectname'],$de['price'],$data['count'], $totala]);
  }
}
  /************************************************************/
}
