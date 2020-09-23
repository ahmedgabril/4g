
<?php

class usercon extends pdocon {
   public function showdata(){
       
       $fr = $this->mysqlpdo("SELECT * FROM users  WHERE othar = 0");
      if($fr){
          
          $data = $this->fetchalldata();
              
          return $data; 
              
          } else {
             return FALSE;   
           }
          
      }
      public function deleteuser($id){
          
          $this->mysqlpdo("DELETE FROM users WHERE id=?",[$id]) ;  
          if($this->count() > 0){
              
          echo msg::setmsg("تم حذف البايانات بنجاح","success");
  
              
          } else {
                                   echo msg::setmsg("حدث خطأ غير متوقع فى النظام","success");
      
          }
          
      }
      public function stopuser($id){
          
       
            $this->mysqlpdo("UPDATE  users SET is_admin = 0 WHERE id=?",[$id]) ;  
          if($this->count() > 0){
              
          echo msg::setmsg("تم ايقاف الحساب بنجاح","success");
  
              
          } else {
                                   echo msg::setmsg("حدث خطأ غير متوقع فى النظام","danger");
      
           }   
          } 
      
       
            public function activeuser($id){
          
       
            $this->mysqlpdo("UPDATE  users SET is_admin = 1 WHERE id=?",[$id]) ;  
          if($this->count() > 0){
              
          echo msg::setmsg("تم تفعيل الحساب بنجاح","success");
  
              
          } else {
           echo msg::setmsg("حدث خطأ غير متوقع فى النظام","danger");
      
           }   
          } 
       
          
          
          
   }

