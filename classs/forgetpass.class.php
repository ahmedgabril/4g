<?php

class forgetpass extends pdocon {

    private $email, $activecode ,$pass, $cpass, $getactive,$getemail,$hash,$id;


    public function getinputvalue($email){
        
      $this->email= filter_var($email,FILTER_SANITIZE_EMAIL);  
            $this->activecode= uniqid();

    }

    public function validate(){
        
     if(empty($this->email)){
           
        echo msg::setmsg("من فضلك ادخل البريد الالكترونى","danger");
  
         }elseif(!filter_var($this->email,FILTER_VALIDATE_EMAIL)){
            
          echo msg::setmsg("من فضلك ادخل بريد الكترونى صحيح","danger");
                
         }elseif($this->cheekemail()== 0){
            
          echo msg::setmsg("البريد الالكترونى الذى ادخلته غير مسجل لدينا ","danger");
                
        
        } else {
          $this->sendurl();
          
       
           $this->mysqlpdo("UPDATE users SET active_code = ? WHERE email = ? ",[$this->activecode,$this->email]);

       
      }
    } 
       private function cheekemail(){
        
         $this->mysqlpdo("SELECT  email FROM users WHERE email=?",[$this->email]);
        
        if($this->count()> 0){
            
            return 1;


            
        } else {
           return 0;  
        } 
        
        
    }
     private function sendurl(){
  
$headers=
        'content-type: text/html; charset=utf-8'."\n\r";
$message=
      '<html>
        <head></head>   
        <body>
            <div syle="width:100%;height:auto">
            <div style="color:red;height:100px;width:100%;font-size:30px;text-aline:center">
               السلام عليكم
              <div>
           <h3 style="text-aline:right color:red;font-size:20px;">لقد تلقينا طلبا لاسترجاع كلمه المرور</h3> 
            <a href="amr3r.com/forgetpassword.php?email='.$this->email.'&code='.$this->activecode.'" style="font-size:17px;text-aline-center">اضغط هنا لتفعيل الحساب </a>
         </div>
</body>
      </html>';   
          
          if(mail($this->email,"استرجاع كلمه المرور",$message,$headers)){
                 echo msg::setmsg("تم ارسال رابط التحقق الى بريدك الالكترونى","info");

              ?>
              
       <script>
    $(".sendemail").trigger("reset");
        </script>
              
          <?php }
          
          
      } 
      public function getinputvalues($pass, $cpass,$id){
        
        $this->pass = $pass;
        $this->cpass =$cpass;
        $this->id =$id;

        $this->hash = password_hash($this->pass,PASSWORD_DEFAULT);
       
        
    }
    
    public function cheekinput(){
        
        
     if(empty($this->pass)){
         
  echo   msg::setmsg("من فضلك ادخل كلمه المرور","danger"); 
         
     }elseif ($this->pass !== $this->cpass) {
           
         
           echo   msg::setmsg("كلمه المرور غير متطابقه","danger"); 
        } else {
            
            $this->updatepass();

            
          } 
        }   
        public function cheekuser($em,$co){
      $this->mysqlpdo("SELECT * FROM users WHERE email=? AND active_code=? ",[$em,$co]);

      if($this->count() > 0){
       $getdat= $this->fetchalldata();
       
            return $getdat;  
     } else {
         return "ahmed";  
     }
        }
        private function updatepass(){
         
       $this->mysqlpdo("UPDATE  users SET password = ?  WHERE user_id = ? ",[$this->hash,$this->id]);  
   
                 if($this->count() > 0){
                
                     $_SESSION['forgetpass'] = TRUE;
                     ?>
       

        <script>

       location= "login.php";
        </script>
        
                <?php } else {
     return FALSE;
 }
               
           } 
        
      
    }