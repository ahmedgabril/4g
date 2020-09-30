<?php


class member  extends pdocon{

    private $name,$idnumber,$phone,$id,$date,$dec;
    public function getinputvalue($name,$idnumber,$phone,$date,$dec,$id=null){
        $this->name= filter_var($name,FILTER_SANITIZE_STRING);
        $this->idnumber= filter_var($idnumber,FILTER_SANITIZE_NUMBER_INT);
        $this->phone= filter_var($phone,FILTER_SANITIZE_NUMBER_INT);
        $this->id= filter_var($id,FILTER_SANITIZE_NUMBER_INT);
        $this->date= filter_var($date,FILTER_SANITIZE_STRING);
        $this->dec = filter_var($dec,FILTER_SANITIZE_STRING);
      
    }
    
  public function cheekinput(){
    
         if(empty($this->name)){
             
         echo msg::setmsg("من فضلك ادخل اسم المستخدم","danger");
         
         }elseif($this->cheekname()) {
            
         echo msg::setmsg("اسم العميل مسجل بالفعل من قبل","danger");
           
         }elseif(mb_strlen($this->name) < 4 || mb_strlen($this->name) > 30) {
            
         echo msg::setmsg("اسم المستخدم يجب ان يكون  اكبر من ثلاثه حروف واقل من ثلاتين حرف","danger");
           
         } else {
             $this->addmembger();  
         }
  }
  /*******************************************************/
      private function addmembger(){
          

       $this->mysqlpdo("INSERT INTO customer (name,id_number,phone,date,dis) VALUES(?,?,?,?,?)",[$this->name,$this->idnumber,$this->phone, $this->date,$this->dec]);
        
        if($this->count()> 0){
            $_SESSION['addcustomer'] = TRUE;
                ?>
                 <script>
                  
                   $(".addcustoer").trigger("reset");
                  location="showcustomer.php";
                  </script>
           <?php 

            
        }
     
      }
       /*************************************************/   
        private function cheekname(){
            
            $this->mysqlpdo("SELECT name FROM customer WHERE name = ? ",[$this->name]);  
            
           if($this->count() > 0){
               
               return TRUE ;
               
           } else {
               return FALSE; 
           } 
            
        }     
         /*************************************************************************/  
         public function showcustor(){
             
             if($this->mysqlpdo("SELECT * FROM customer ORDER BY customer_id DESC")){
                 
            $getdata=$this->fetchalldata();  
                
            return    $getdata;
             } else {
                 return NULL;    
             }
             
             
         }
         /*************************************************************/
         public function deletecustor($id){
             
            $this->mysqlpdo("DELETE FROM customer WHERE customer_id=?",[$id]);
             
             if($this->count() > 0){ 
                 $_SESSION['delcustome'] = TRUE;
                 $this->redirct("../showcustomer.php");
        }
         }
      /***************************************************/   
         private function cheekall(){
          
               if($this->cheekname()){
           echo msg::setmsg("اسم العميل مسجل بالفعل من قبل","danger");   
           
          } else {
             $this->updatecustor1(); 
          }  
         }
         /****************************************************************/
         
         
         public function cheeknameexsit(){
        
    $this->mysqlpdo("SELECT * FROM customer WHERE customer_id = ? ",[$this->id]);
          
        $co1 = $this->fetchalldata();
        foreach ($co1 as $co){}
        if($co['name'] == $this->name  ){

            $this->updatecustor();


    } else {
       if($co['name'] !== $this->name ){
           
           $this->cheekall();     
           
       } 
       
    
        
    }
         }

        
             
/***************************************************************************************/
      private function updatecustor(){
            
             if($this->mysqlpdo("UPDATE  customer SET phone = ?,id_number = ?,date= ?,dis = ? WHERE customer_id= ?",[$this->phone, $this->idnumber,$this->date, $this->dec,$this->id ])
                   ){
                 
                echo msg::setmsg("تم تحديث البيانات بنجاح","success");
                
                   
                 
             } 
         }
         /*******************************************************************/
             
/***************************************************************************************/
      private function updatecustor1(){
            
             if($this->mysqlpdo("UPDATE  customer SET name=?,phone = ?,id_number = ?,date =?,dec =? WHERE customer_id=?",[$this->name,$this->phone, $this->idnumber, $this->date, $this->dis, $this->id])
                   ){
                 
                echo msg::setmsg("تم تحديث البيانات بنجاح","success");
                
                   
                 
             } 
         }
         /*******************************************************************/
         public function displycustoronupdate($memid){
             
     if($this->mysqlpdo("SELECT * FROM customer WHERE customer_id = ? ",[$memid])){
       $getval = $this->fetchalldata();
             
       return $getval;     
     } else {
        return NULL; 
     }  
  }
}
