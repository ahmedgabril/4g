<?php

class profile extends pdocon {
    private $username,$image,$imagenamenew;
    public  function getinputval($image,$username){
        $this->username= filter_var($username,FILTER_SANITIZE_STRING);   
        $this->image = $image;
    }

    public function changpass($pass,$cpass){
         $hash = password_hash($pass,PASSWORD_DEFAULT); 
   
       if(empty($pass)){
           
     echo   msg::setmsg("من فضللك ادخل كلمه المرور","danger");  
           
      }elseif ($pass !== $cpass) {
        echo   msg::setmsg(" كلمه المرور غير مطابقه","danger");
       
      } else {
               $this->mysqlpdo("UPDATE users SET password=? WHERE user_id = ?",[$hash,$_SESSION['id']??'']);
 
          if($this->count() > 0){ 
    ?>

            <script>
               location="logout.php";

            </script>
       <?php } 
      
           
    
      }  
   }

   public function cheekinput(){
        

         if(mb_strlen($this->username) < 4 || mb_strlen($this->username) > 20) {
            
         echo msg::setmsg("اسم المستخدم يجب ان يكون  اكبر من ثلاثه حروف واقل من عشرين حرف","danger");
 
        } else {
            $this->cheekimg();  
    
   
        }
        
    }


   public function cheekimg(){
        $fullimage=$this->image;
        $image_name = $fullimage['name'] ;
        $tmp_name  =  $fullimage['tmp_name'];
        $image_size = $fullimage['size']; 
        $nemconv= explode(".", $image_name);
        $funshcon= strtolower(end($nemconv));
        $newname= uniqid("image_profile",false).".".$funshcon;
        $allode=["jpg","tiff","png","gif","jpeg 2000","jpeg","bmp","pbm","jfif"]; 
          if ($image_size > 2000000) {
              
        echo msg::setmsg("حجم الصوره المسوح به هو 2ميجابايت","danger");
        
        
       }elseif (!empty ($tmp_name) && ! in_array($funshcon, $allode)){
            echo msg::setmsg("نوع الصوره المسموح به [jpg,tiff,png,gif,jpeg 2000,jpeg,bmp,pbm,jfif","danger");  
        } else {
            
          $filename="../uploade/";
     if(!file_exists($filename)){
        mkdir($filename,0777,TRUE);
         
     } 
         

      move_uploaded_file($tmp_name,$filename.$newname);
          
        
               $this->imagenamenew = $newname;    
               
               
               $this->upimage($image_name);
    
      
            
  
    
            }
    
        }
/*********************************************************************************************/
private function upimage($imagename){

     if($imagename == ""){
         
       $this->mysqlpdo("UPDATE users SET name= ? WHERE user_id =? ",[$this->username,$_SESSION['id']??'']) ;
    
   if($this->count() > 0){
       
              echo msg::setmsg("تم تحديث البيانات بنجاح","success");?>
            
            
              <script>
               $(".upimg").trigger("reset");

            </script>
       
  <?php } else {
     
     echo msg::setmsg("لم تقم باى تغيرات","info");
      
  } 
       
         
     } else {
         
              
       $this->mysqlpdo("UPDATE users SET name= ? ,image=? WHERE user_id =? ",[$this->username, $this->imagenamenew,$_SESSION['id']??'']) ;
    
   if($this->count() > 0){
       
              echo msg::setmsg("تم تحديث البيانات بنجاح","success");?>
            
            
              <script>
               $(".upimg").trigger("reset");

            </script>
       
  <?php } else {
     
     echo msg::setmsg("لم تقم باى تغيرات","info");
      
  } 
       
         
         
     }  
        
        
   
   
    
}










/***********************************************************************************************/       
public function updatemail($email1){
      $email = filter_var($email1,FILTER_SANITIZE_EMAIL) ;
              if(empty($email)){
            
          echo msg::setmsg("من فضلك ادخل البريد الالكترونى","danger");
         
        }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            
          echo msg::setmsg("من فضلك ادخل بريد الكترونى صحيح","danger");
        }elseif($this->cheekemail($email)){
            
          echo msg::setmsg("البريد الالكترونى مسجل من قبل","danger");
        } else {
       
   $this->mysqlpdo("UPDATE users SET email = ? WHERE user_id= ? ",[$email,$_SESSION['id']??'']);
      if($this->count()> 0){
   
           ?>

            <script>
               location="logout.php";

            </script>
   <?php }
        }  
            
        }
/*********************************************************/
           /*************************************************/   
        private function cheekemail($email){
            
            $this->mysqlpdo("SELECT email FROM users WHERE email = ? ",[$email]);  
            
           if($this->count() > 0){
               
               return TRUE ;
               
           } else {
               return FALSE; 
           } 
            
        }     
         /*************************************************************************/  
         public function showdata(){
             
             if($this->mysqlpdo("SELECT * FROM  users WHERE  user_id = ?",[$_SESSION['id']]??'')){
                 
              $da = $this->fetchalldata();

                    foreach ($da as $data1){

                    }   

              return $data1;

             } else {
             return NULL;    
             }
             
             
         }


         /**************************************************************************/
}