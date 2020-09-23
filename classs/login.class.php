<?php

class login extends pdocon {
    private $email, $pass ,$get;
    public function cheekinput($email,$pass){
     
        $this->email = filter_var($email,FILTER_SANITIZE_EMAIL);  
        $this->pass = $pass;  
      
        if(empty($this->email)){
            
          echo msg::setmsg("من فضلك ادخل البريد الالكترونى","danger");
            
            
        }elseif(!filter_var($this->email,FILTER_VALIDATE_EMAIL)){
            
          echo msg::setmsg("من فضلك ادخل بريد الكترونى صحيح","danger");
            
            
            
        }elseif (empty ($this->pass)) {
       echo   msg::setmsg("من فضلك ادخل كلمه المرور","danger");
  
 
        } else {
            $this->handellogin() ; 
        }
        
        
    
    }
    private function cheekuser(){
      $this->mysqlpdo("SELECT * FROM users WHERE email= ? ",[$this->email]);

      if($this->count() > 0){
       $getdat= $this->fetchalldata();
       
            return $getdat;  
     } else {
         return null;  
     }


    }
    private function handellogin(){
 

$getinfo = $this->cheekuser();
if($getinfo !== NULL){
foreach ($getinfo as $this->get){
   
 }
}
   $this->cheekemailandpass();

  
    }
    public function loinsession(){


    $getnew1 =  explode(",",$this->get['primprmtion']);

  if(in_array("add", $getnew1)){
      
   $_SESSION['addprim']= TRUE;
      
  } elseif(in_array("edit", $getnew1)) {
      
    $_SESSION['editprim']=TRUE;
      
  
  }elseif(in_array("del", $getnew1)) {
      
    $_SESSION['delprim']=TRUE;
      
  
  }elseif(in_array("viwe", $getnew1)) {
      
    $_SESSION['viweprim']=TRUE;
      
  }

    $getnew2 =  explode(",",$this->get['storpremtion']);

  if(in_array("add", $getnew2)){
      
   $_SESSION['addstor']= TRUE;
      
  } elseif(in_array("edit", $getnew2)) {
      
    $_SESSION['editstor']=TRUE;
      
  
  }elseif(in_array("del", $getnew2)) {
      
    $_SESSION['delstor']=TRUE;
      
  
  }elseif(in_array("viwe", $getnew2)) {
      
    $_SESSION['viwestor']=TRUE;
      
  }
 
         $_SESSION['name']= $this->get['name'];
         $_SESSION['id']= $this->get['user_id'];
         $_SESSION['image']= $this->get['image'];
         $_SESSION['email']= $this->get['email'];
         $_SESSION['is_admin']= $this->get['is_admin'];
         $_SESSION['other']= $this->get['othar'];
        
   
    }
    private function cheekemailandpass(){
        
        if($this->email == $this->get['email'] ){
             
      if(password_verify($this->pass,$this->get['password'])){
        
              $this-> checkstatus();               
           
                
            } else {

              echo msg::setmsg("كلمه السر او البريد الالكترونى","danger");  
                
           } 
             
 
   
 }else{
     
  echo msg::setmsg("كلمه السر او البريد الالكترونى","danger");
     
  }
    
     }
        
    

private function checkstatus(){
    
    if($this->get['is_admin'] == 1 ) {
                  
           echo msg::setmsg("تم ايقاف حسابك بشكل مؤقت من قبل الاداره","info");    
      
       } else {
           $this->loinsession();

                    ?>

     <script> location = "index.php"; </script>

               <?php   
       }
      }

   

 }
