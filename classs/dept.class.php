<?php


class dept extends pdocon {
    
    
     private $name,$prodect,$remamount,$id;
    public function getinputvalue($name,$prodect,$remamount,$id=null){
        $this->name= filter_var($name,FILTER_SANITIZE_STRING);
        $this->prodect= filter_var($prodect,FILTER_SANITIZE_STRING);
        $this->remamount= filter_var($remamount,FILTER_SANITIZE_NUMBER_FLOAT);
        $this->id= filter_var($id,FILTER_SANITIZE_NUMBER_INT);
      
    }
    /*****************************************************************/
      public function cheekinput(){
    
         if(empty($this->name)){
             
         echo msg::setmsg("من فضلك ادخل اسم العميل","danger");
         
       
         }elseif(mb_strlen($this->name) < 4 || mb_strlen($this->name) > 30) {
            
         echo msg::setmsg("اسم المستخدم يجب ان يكون  اكبر من ثلاثه حروف واقل من ثلاتين حرف","danger");
       
         }elseif(empty($this->remamount)) {
            
         echo msg::setmsg("ادخل المبلغ المستحق الدفع","danger");
           
         } else {
             $this->adddept();
         }
  }
  /*******************************************************/
    /*****************************************************************/
      public function cheekinput2(){
    
         if(empty($this->name)){
             
         echo msg::setmsg("من فضلك ادخل اسم العميل","danger");
         
       
         }elseif(mb_strlen($this->name) < 4 || mb_strlen($this->name) > 30) {
            
         echo msg::setmsg("اسم المستخدم يجب ان يكون  اكبر من ثلاثه حروف واقل من ثلاتين حرف","danger");
       
         }elseif(empty($this->remamount)) {
            
         echo msg::setmsg("ادخل المبلغ المستحق الدفع","danger");
           
         } else {
             $this->updatedept();
         }
  }
  /*******************************************************/
    /*******************************************************/
      private function adddept(){
          

       $this->mysqlpdo("INSERT INTO dept (customername,prodect,amount,date) VALUES(?,?,?,now())",[$this->name,$this->prodect,$this->remamount]);
        
        if($this->count()> 0){
            echo msg::setmsg("تم اضافه البيانات بنجاح","success");
                ?>
                 <script>
                  
                   $(".adddept").trigger("reset");
              
                  </script>
           <?php 

            
        }
     
      }
       /*************************************************/   
      
      public function showdept(){
          
          $this->mysqlpdo("SELECT * FROM dept ORDER BY id DESC") ;
          if($this->count()> 0){
              $get =$this->fetchalldata();
              return $get;
          } else {
              
              return NULL;
              
          }
          
          
      }
   /****************************************************************/
      public function deldept($id){
          $getid = filter_var($id,FILTER_SANITIZE_NUMBER_INT);
         if($this->mysqlpdo("DELETE FROM dept WHERE id=?",[$getid])){
             $_SESSION['deldept'] = TRUE;
             $this->redirct("showdept.php");
             
         } 
          
          
      }
      /**************************************************************************/
      public function editdept($id){
        $getid = filter_var($id,FILTER_SANITIZE_NUMBER_INT);

          $this->mysqlpdo("SELECT * FROM dept WHERE id = ?",[$getid]) ;
          if($this->count()> 0){
              $get =$this->fetchalldata();
              return $get;
          } else {
              
              return NULL;
              
          }   
          
          
      }
      /**********************************************************************/
      /**************************************************************************/
      public function updatedept(){

          $this->mysqlpdo("UPDATE dept SET customername = ? ,prodect = ?,amount = ?,date=now() WHERE id = ?",[$this->name, $this->prodect, $this->remamount,$this->id]) ;
          if($this->count()> 0){
         
             $_SESSION['updept'] = TRUE; ?>
                  
                  <script>
                  
                  location="showdept.php";
                  
                  </script>
              
         <?php } else {

                
             $_SESSION['nochingup'] = TRUE; ?>
                  
                  <script>
                  
                  location="showdept.php";
                  
                  </script>
                
         <?php }   
          
          
      }
      /**********************************************************************/
}
