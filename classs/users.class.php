
<?php
class users extends pdocon {
 private $email, $pass, $username,$hashpass,$storpremtion,$primpremtion,$is_admin;
 
 public function getinputvalue($email,$username,$pass,$storpremtion,$primpremtion,$is_admin){
         $this->email = filter_var($email,FILTER_SANITIZE_EMAIL);  
        $this->storpremtion = filter_var($storpremtion,FILTER_SANITIZE_STRING);  
        $this->username = filter_var($username,FILTER_SANITIZE_STRING);  
        $this->primpremtion = filter_var($primpremtion,FILTER_SANITIZE_STRING);  
        $this->is_admin = filter_var($is_admin,FILTER_SANITIZE_NUMBER_INT);  
         $this->pass = $pass;
  
         $this->hashpass = password_hash($this->pass,PASSWORD_DEFAULT);
        
 }
    public function cheekinput(){
        
      
      
         if(empty($this->username)){
             
         echo msg::setmsg("من فضلك ادخل اسم المستخدم","danger");
         
         }elseif(mb_strlen($this->username) < 4 || mb_strlen($this->username) > 40) {
            
         echo msg::setmsg("اسم المستخدم يجب ان يكون  اكبر من ثلاثه حروف واقل من عشرين حرف","danger");
           
         }elseif(empty($this->email)){
            
          echo msg::setmsg("من فضلك ادخل البريد الالكترونى","danger");
            
         }elseif($this->cheekemail()> 0){
            
          echo msg::setmsg("البريد الالكترونى مسجل لدينا بالفعل ","danger");
            
            
        }elseif(!filter_var($this->email,FILTER_VALIDATE_EMAIL)){
            
          echo msg::setmsg("من فضلك ادخل بريد الكترونى صحيح","danger");
         
        }elseif (empty ($this->pass)) {
       echo   msg::setmsg("من فضلك ادخل كلمه المرور","danger");
  
    
        } else {
              $this->adddata();
    
             
            
   
        }
        
    }
    
    private function cheekemail(){
        
      $this->mysqlpdo("SELECT  email FROM users WHERE email=?",[$this->email,]);
        
        if($this->count()> 0){
            
            return 1;


            
        } else {
           return 0;  
        } 
        
        
    }

    private function adddata(){

       $this->mysqlpdo("INSERT INTO users (name,email,password,storpremtion,primprmtion,is_admin,date) VALUES(?,?,?,?,?,?,now())",[$this->username,$this->email,$this->hashpass,$this->storpremtion,$this->primpremtion, $this->is_admin]);
        
        if($this->count()> 0){
            
   echo msg::setmsg("تم اضافه البيانات بنجاح","success");?>

            <script>
            
            $(".addmember").trigger("reset");
            
            </script>
       <?php }
      }

//      
//      public function activeemail($code,$email){
//        
//          $this->getcode = filter_var($code,FILTER_SANITIZE_STRING);  
//          $this->gitemail = filter_var($email,FILTER_SANITIZE_EMAIL); 
//        
//          $this->mysqlpdo("SELECT active_code ,email FROM users WHERE active_code = ? AND email = ? ",[$this->getcode, $this->gitemail]);
//           if($this->count() > 0){
//            
//           $df= $this->mysqlpdo("UPDATE users SET status = 1 WHERE active_code = ? AND email= ? ",[$this->getcode, $this->gitemail]);
//   
//           if($df){
//             $_SESSION['sendsemail']= TRUE;
//               $this->redirct("../dashbord/login.php"); 
//
//            
//        }
//
//            
//        } 
//        
//      
//          
//      }
// 
      
      
    public function showalluser(){
        
        if($this->mysqlpdo("SELECT * FROM users WHERE othar = 0  ORDER BY user_id DESC")){
        
           $getall= $this->fetchalldata();
           return $getall;
            
        } else {
        return NULL;    
        }
      }
      /*****************************************************************/
      public  function deluser($id){
          $getuserid=filter_var($id,FILTER_SANITIZE_NUMBER_INT);
         if($this->mysqlpdo("DELETE FROM users WHERE user_id = ?",[$getuserid])){
             
              $_SESSION['deluser'] = TRUE;
              
              $this->redirct("showalluser.php");
             
         } 
          
          
      }
         
     /*************************************************************************************/ 
      /*****************************************************************/
      public  function editusers($id){
          $getuserid=filter_var($id,FILTER_SANITIZE_NUMBER_INT);
         if($this->mysqlpdo("SELECT * FROM users WHERE user_id = ?",[$getuserid])){
              $info = $this->fetchalldata();
              foreach ($info as $getdata){
                  
                     return $getdata; 
                  
              }
          
         } else {
             
             return NULL;
             
         } 
         
          
          
      }
         
     /*************************************************************************************/ 
      
       public function updateusers($storpremtion,$primpremtion,$is_admin,$id){
   
        $primpre = filter_var($primpremtion,FILTER_SANITIZE_STRING);  
        $storprem = filter_var($storpremtion,FILTER_SANITIZE_STRING);  
        $isadmin= filter_var($is_admin,FILTER_SANITIZE_NUMBER_INT);
        $getuserid= filter_var($id,FILTER_SANITIZE_NUMBER_INT);
      
      $this->mysqlpdo("UPDATE users SET is_admin = ? ,storpremtion = ?, primprmtion = ? WHERE user_id = ?",[ $isadmin,$storprem,$primpre,$getuserid]);
          if($this->count() > 0){
          $_SESSION['upusers'] = TRUE;
       $this->redirct("showalluser.php");
          
      
          } else {
              
                 $_SESSION['noch'] = TRUE;
       $this->redirct("showalluser.php");
              
          }
       }
      /***************************************************************************************/
    }/*****end of classs**/
    

