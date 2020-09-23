<?php

class storseal extends pdocon {
   private $prodect,$date,$price,$total,$count,$id;
    public function getinputvalue($prodect,$date,$count,$price,$total,$id=null){
        $this->prodect= filter_var($prodect,FILTER_SANITIZE_STRING);
        $this->date= filter_var($date,FILTER_SANITIZE_STRING);
        $this->price= filter_var($price,FILTER_SANITIZE_NUMBER_FLOAT);
        $this->count= filter_var($count,FILTER_SANITIZE_NUMBER_INT);
        $this->total= filter_var($total,FILTER_SANITIZE_NUMBER_FLOAT);
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
             $this->addstorseal();  
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
             $this->updatestor();  
         }
  }
  /*******************************************************/ 
  
  /*******************************************************/
      private function addstorseal(){
          

       $this->mysqlpdo("INSERT INTO storseal (prodectname,price,count,total,date)VALUES(?,?,?,?,?)",[$this->prodect,$this->price,$this->count, $this->total, $this->date]);
        
      if($this->count()> 0){ 
            
              echo msg::setmsg("تم اضافه  البيانات بنجاح","success");
            
            ?>
            

                  <script>
                  
                   $(".storseal").trigger("reset");
             
                  </script>
           <?php 
        }
    
     }
/*******************************************************************************/ 
  
  public function editstorseal($id){
      $getid= filter_var($id,FILTER_SANITIZE_NUMBER_INT);
      if($this->mysqlpdo("SELECT * FROM storseal WHERE stor_id=?",[$getid])){
         $d = $this->fetchalldata();
         
         return $d;
          
          
      } else {
          return NULL;    
      }
      
  }
 /*****************************************************************************/ 
  /*******************************************************************************/ 
  
  public function showdatastor(){

      if($this->mysqlpdo("SELECT * FROM storseal ")){
         $d = $this->fetchalldata();
         
         return $d;
          
          
      } else {
          return NULL;    
      }
      
  }
 /*****************************************************************************/ 
/*******************************************************************************/ 
  
  public function delstorseal($id){
      $getid= filter_var($id,FILTER_SANITIZE_NUMBER_INT);
      if($this->mysqlpdo("DELETE   FROM storseal WHERE stor_id = ?",[$getid])){
       $_SESSION['delstorseal'] = TRUE;
                  $this->redirct("showstorseal.php");
          
      }
      
  }
 /*****************************************************************************/ 
     /*************************************************/   
                private function updatestor(){
   
           $this->mysqlpdo("UPDATE  storseal SET  prodectname = ?,price=?,count=?,total=?,date=? WHERE stor_id = ?",[$this->prodect,$this->price, $this->count, $this->total, $this->date, $this->id]); 

            if($this->count() > 0){

          $_SESSION['upstor'] = TRUE;?>
                  
                <script>
                
                location = "showstorseal.php";
                
                
                </script>  
           
           <?php } else {
                 $_SESSION['noching'] = TRUE;?>
                  
                <script>
                
                location = "showstorseal.php";
                
                
                </script>  
     
        <?php   } 
            
        }     
         /*************************************************************************/ 
 /***********************************************************************************/
}
