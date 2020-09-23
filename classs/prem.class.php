<?php


class prem  extends pdocon{

    private $prodect,$cname,$date,$precent,$manthpay,$pro_price,$manthprem,$preml,$prem,$tphone,$tname,$tid,$dec,$id;
    public function getinputvalue($prodect,$cname,$date,$precent,$manthpay,$pro_price,$manthprem,$preml,$prem,$tphone,$tname,$tid,$dec,$id=null){
        $this->prodect= filter_var($prodect,FILTER_SANITIZE_STRING);
        $this->cname= filter_var($cname,FILTER_SANITIZE_STRING);
        $this->precent= filter_var($precent,FILTER_SANITIZE_NUMBER_FLOAT);
        $this->manthpay= filter_var($manthpay,FILTER_SANITIZE_NUMBER_INT);
        $this->pro_price= filter_var($pro_price,FILTER_SANITIZE_NUMBER_FLOAT);
        $this->manthprem= filter_var($manthprem,FILTER_SANITIZE_NUMBER_FLOAT);
        $this->preml= filter_var($preml,FILTER_SANITIZE_NUMBER_INT);
        $this->prem= filter_var($prem,FILTER_SANITIZE_NUMBER_INT);
        $this->tphone= filter_var($tphone,FILTER_SANITIZE_NUMBER_INT);
        $this->tname= filter_var($tname,FILTER_SANITIZE_STRING);
        $this->dec= filter_var($dec,FILTER_SANITIZE_STRING);
        $this->tid= filter_var($tid,FILTER_SANITIZE_STRING);
        $this->date= filter_var($date,FILTER_SANITIZE_STRING);
        $this->id= filter_var($id,FILTER_SANITIZE_NUMBER_INT);
     
        
      
    }
    
  public function cheekinput(){
    
         if(empty($this->cname)){
             
         echo msg::setmsg("من فضلك ادخل اسم العميل","danger");
        
     
         }elseif(empty($this->date)) {
             
               echo msg::setmsg("من فضلك ادخل التاريخ","danger");
             
             
         }elseif(empty($this->prodect)) {
             
           
              echo msg::setmsg("من فضلك ادخل اسم المنتج","danger");
         
     
         }elseif(empty($this->pro_price)) {
             
           echo msg::setmsg("من فضلك ادخل سعر المنتج","danger");
     
         }elseif(empty($this->manthpay)) {
             
           echo msg::setmsg("من فضلك  ادخل المبلغ المدفوع مقدما","danger");
     
         }elseif(empty($this->precent)) {
             
           echo msg::setmsg("من فضلك ادخل نسبه الخصم","danger");
     
         }elseif(empty($this->preml)) {
             
           echo msg::setmsg("من فضلك ادخل   فتره القسط","danger");
     
     
         }elseif(!filter_var($this->preml,FILTER_SANITIZE_NUMBER_INT)) {
             
           echo msg::setmsg("من فضلك ادخل  رقم صحيح","danger");
     
           
       
     
     
           
         } else {
             $this->addprem();  
         }
  }
  /*******************************************************/
    public function cheekinput2($getid){
    
         if(empty($this->cname)){
             
         echo msg::setmsg("من فضلك ادخل اسم العميل","danger");
        
     
         }elseif(empty($this->date)) {
             
               echo msg::setmsg("من فضلك ادخل التاريخ","danger");
             
             
         }elseif(empty($this->prodect)) {
             
           
              echo msg::setmsg("من فضلك ادخل اسم المنتج","danger");
         
     
         }elseif(empty($this->pro_price)) {
             
           echo msg::setmsg("من فضلك ادخل سعر المنتج","danger");
     
         }elseif(empty($this->manthpay)) {
             
           echo msg::setmsg("من فضلك  ادخل المبلغ المدفوع مقدما","danger");
     
         }elseif(empty($this->precent)) {
             
           echo msg::setmsg("من فضلك ادخل نسبه الخصم","danger");
     
         }elseif(empty($this->preml)) {
             
           echo msg::setmsg("من فضلك ادخل   فتره القسط","danger");
     
           
       
     
     
           
         } else {
          $this->updateprem($getid); 
         }
  }
  /*******************************************************/
      private function addprem(){
          

       $this->mysqlpdo("INSERT INTO prem (c_name,teker_name,teker_id,teker_phone,date,prodect_name,prodect_price,amount_pay,prem_lemt,discrption,rem_amount,prem_manth,precent) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)",[$this->cname,$this->tname,$this->tid, $this->tphone, $this->date, $this->prodect, $this->pro_price,$this->manthpay, $this->preml, $this->dec, $this->prem, $this->manthprem, $this->precent]);
        
        if($this->count()> 0){

                 $_SESSION['addprodectsuccess'] = TRUE;
                 
                 ?>

                  <script>
                  
                   $("#addprem").trigger("reset");
                location="showcustomer.php";
                  </script>
           <?php 

        }
     
      }
/*******************************************************************************/
         public function showcustomeername($idc){
            $cuid= filter_var($idc,FILTER_SANITIZE_NUMBER_INT);
             if($this->mysqlpdo("SELECT * FROM customer WHERE customer_id = ? ",[$cuid])){
                 
            $getdata=$this->fetchalldata();  
                
            return    $getdata;
             } else {
                 return NULL;    
             }
             
             
         }
       /*************************************************/   

       /*************************************************/   
       public function getpremname($getid){
   
           if($this->mysqlpdo("SELECT name,prem_id,customer_id,prodect_name,prem_manth FROM prem AS p INNER JOIN  customer  ON customer_id = c_name  WHERE  customer_id = ? ORDER BY prem_id DESC",[$getid])){  

               $get = $this->fetchalldata();
        
              return $get;
           
           } else {
               return NULL;
           } 
            
        }     
         /*************************************************************************/  
   
       /*************************************************/   
 
       public function getmanthpay($getid){
   
           if($this->mysqlpdo("SELECT prem_id,prodect_name,prem_manth FROM prem INNER JOIN  customer  ON customer_id = c_name  WHERE customer_id = ?",[$getid])){  

               $get1 = $this->fetchalldata();
        
              return $get1;
           
           } else {
               return NULL;
           } 
            
        }     
         /*************************************************************************/  
        
        
         /*******************************************************/
         public function addmanthpay($cname1,$premsid1,$amountmanth1,$dis1,$date1){
      $cname= filter_var($cname1,FILTER_SANITIZE_STRING);
      $premsid= filter_var($premsid1,FILTER_SANITIZE_NUMBER_INT);
      $amountmanth= filter_var($amountmanth1,FILTER_SANITIZE_NUMBER_FLOAT);
      $dis= filter_var($dis1,FILTER_SANITIZE_STRING);
      $date= filter_var($date1,FILTER_SANITIZE_STRING);
        if(empty($date)){
            
       echo msg::setmsg("من فضلك ادخل التاريخ","danger");  
            
        }elseif(empty ($premsid)){
            
            echo msg::setmsg("من فضلك ادخل  اسم المنتج","danger");    
        }elseif(empty ($amountmanth)){
            
            echo msg::setmsg("من فضلك ادخل  القسط الشهرى","danger");    
        } else {
            
         $this->mysqlpdo("INSERT INTO premmanth (c_name,prems_id,amount_manth,discrption,date) VALUES(?,?,?,?,?)",[$cname,$premsid,$amountmanth,$dis,$date]);
        
        if($this->count()> 0){
            $_SESSION['addmanthpay'] = TRUE;
//            $this->getnotv();
                ?>

                  <script>
                  
                location = "showcustomer.php";
                  
                  </script>
           <?php 
        }
     
      }
         }  
      /*******************************************************************************/  
      
             /*************************************************/   
       public function showresets(){
   
           if($this->mysqlpdo("SELECT *,name FROM prem INNER JOIN customer ON customer_id = c_name")){  



               $get1 = $this->fetchalldata();
        
              return $get1;
           
           } else {
               return NULL;
           } 
            
        }     
         /*************************************************************************/  
      
                /*************************************************/   
       public function editprem($getid){
   
           if($this->mysqlpdo("SELECT * FROM prem INNER JOIN customer ON customer_id = c_name WHERE prem_id = ?",[$getid])){  



               $get1 = $this->fetchalldata();
        
              return $get1;
           
           } else {
               return NULL;
           } 
            
        }     
         /*************************************************************************/  
                /*************************************************/   
                private function updateprem($getid){
   
           $this->mysqlpdo("UPDATE  prem SET teker_name = ?,teker_id = ?,teker_phone=?,prodect_name = ?,prodect_price = ?,amount_pay = ?,prem_lemt=?,discrption =?,rem_amount = ?,prem_manth = ?,precent = ? WHERE prem_id = ?",[$this->tname,$this->tid, $this->tphone, $this->prodect, $this->pro_price,$this->manthpay, $this->preml, $this->dec, $this->prem, $this->manthprem, $this->precent, $this->id]); 

            if($this->count() > 0){

          $_SESSION['upprem'] = TRUE;?>
                  
                <script>
                
                location = "reportcustomer.php?getid=<?php echo $getid;?>";
                
                
                </script>  
           
           <?php } else {
                 $_SESSION['noching'] = TRUE;?>
                  
                <script>
                
             location = "reportcustomer.php?getid=<?php echo $getid;?>";
                
                
                </script>  
     
        <?php   } 
            
        }     
         /*************************************************************************/ 
         public  function delprem($delid,$getid){
             
                if($this->mysqlpdo("DELETE FROM prem WHERE prem_id = ?",[$delid])){
                       $this->mysqlpdo("DELETE FROM notvaction WHERE prem_id = ?",[$delid]);
                  $_SESSION['delprem'] = TRUE;
                  
                  $this->redirct("reportcustomer.php?getid=".$getid."");
            
            
        }
        
             
             
         }
     
        
         /*************************************************************************/  
         public  function showmanthprem(){
             
             if($this->mysqlpdo("SELECT name,p.c_name,prodect_name,p.date,amount_manth,p.discrption,p.id FROM premmanth as p INNER JOIN customer 
                ON p.c_name = customer_id 
                INNER JOIN prem 

                ON p.prems_id = prem_id ORDER BY id DESC")){  
             
             $get = $this->fetchalldata();
             
             return $get;
             
             
                } else {
                    
                    return NULL;
                    
                }   
         }

    /******************************************************************/  
         /*************************************************************************/  
         public  function editmanthprem($getid){
             
             if($this->mysqlpdo("SELECT prem_id,name,prodect_name,p.date,prem_manth,amount_manth,p.discrption,p.id FROM premmanth as p INNER JOIN customer 
                ON p.c_name = customer_id 
                INNER JOIN prem 

                ON p.prems_id = prem_id WHERE id = ?",[$getid])){  
             
             $get = $this->fetchalldata();
             
             return $get;
             
             
                } else {
                    
                    return NULL;
                    
                }   
         }

    /******************************************************************/  
              /*************************************************************************/ 
         public  function delmanthprem($delid){

             
                if($this->mysqlpdo("DELETE FROM premmanth WHERE id = ?",[$delid])){
            
   
            
        }
        
             
             
         }
     
        
         /*************************************************************************/  
                       /*************************************************/   
                       public function updatepremmanth($getdata,$getamount,$getdes,$getid){
                    
                   $date= filter_var($getdata,FILTER_SANITIZE_STRING);
                   $amountmanth= filter_var($getamount,FILTER_SANITIZE_NUMBER_FLOAT);
                  $descrption= filter_var($getdes,FILTER_SANITIZE_STRING);
                  $id= filter_var($getid,FILTER_SANITIZE_NUMBER_INT);
        

          
           $this->mysqlpdo("UPDATE  premmanth SET date = ?,amount_manth = ?,discrption = ?  WHERE id = ?",[$date,$amountmanth,$descrption,$id]); 

            if($this->count() > 0){
          $this->mysqlpdo("UPDATE  notvaction SET date = ? ,amount_manth= ?  WHERE preid = ?",[$date,$amountmanth,$id]); 

       ?>
                  
              <script>
 
        $(".getprem").fadeOut(500);   

        $(".getmanth").fadeIn(500);
            
                </script> 
           
           <?php } else {
            
                  echo msg::setmsg('لم تقم بأى تغيرات حتى الان','info');
 
                  } 
        } 
            
        
               
         /*************************************************************************/ 
                       /*************************************************/   
                       public function updatepremmanth2($getdata,$getamount,$getdes,$getid,$getsession){
                    
                   $date= filter_var($getdata,FILTER_SANITIZE_STRING);
                   $amountmanth= filter_var($getamount,FILTER_SANITIZE_NUMBER_FLOAT);
                  $descrption= filter_var($getdes,FILTER_SANITIZE_STRING);
                  $id= filter_var($getid,FILTER_SANITIZE_NUMBER_INT);
        
     
          
           $this->mysqlpdo("UPDATE  premmanth SET date = ?,amount_manth = ?,discrption = ?  WHERE id = ?",[$date,$amountmanth,$descrption,$id]); 

            if($this->count() > 0){
            
        $this->mysqlpdo("UPDATE  notvaction SET date = ?,amount_manth =? ,sen = 0 WHERE preid = ?",[$date,$getamount,$id]); 
        $_SESSION['upprem2'] = TRUE;

       ?>
                  
              <script>

            location="reportcustomer1.php?getpremid=<?php echo $getsession;?>";
                </script> 
           
           <?php } else { 
                       $_SESSION['noching1'] = TRUE; ?>
                
 <script>

            location="reportcustomer1.php?getpremid=<?php echo $getsession;?>";
                </script> 
         <?php  } 
            
        
                  } 
        
            
        
               
         /*************************************************************************/ 
                  /*************************************************/   
 
       public function getmanthpay1($getid){
   
           if($this->mysqlpdo("SELECT prem_id,prodect_name,prem_manth FROM prem 

                 WHERE c_name =  ?",[$getid])){  

               $get1 = $this->fetchalldata();
        
              return $get1;
           
           } else {
               return NULL;
           } 
            
        }     
   /**********************************************************************************/
   public function getnotv(){
   
       
  $this->mysqlpdo("SELECT prem_id,pr.date,amount_manth,id,name,prem_manth,phone,prodect_name FROM premmanth AS pr INNER JOIN  prem as p ON  prems_id = prem_id INNER JOIN  customer  ON  customer_id = pr.c_name");
      if($this->count() > 0){
          
        $getd = $this->fetchalldata();
        
        foreach ($getd as $getdata){ }

       $msg = "حان وقت تذكير العميل ".$getdata['name']."   بدفع مبلغ".$getdata['prem_manth']." <br>اسم المنتج ".$getdata['prodect_name']."<br> رقم موبايل العميل ".$getdata['phone']."<br>التاريخ ".$getdata['getdate']."";

    $this->mysqlpdo(" INSERT INTO  notvaction (msg,name,prem_manth,prodectname,phone,date,preid,prem_id,amount_manth)VALUES(?,?,?,?,?,?,?,?,?)",[$msg,$getdata['name'],$getdata['prem_manth'],$getdata['prodect_name'],$getdata['phone'],$getdata['date'],$getdata['id'],$getdata['prem_id'],$getdata['amount_manth']]); 
  
      } else {
//        echo msg::setmsg("حدث خطأ غير متوقع فى النظام","danger");
//            return null;     
      } 
        
        
        
    }
    
    
 /*****************************************************************************/ 
               /*************************************************************************/ 
         public  function addnew($premid){
             
             $getid = filter_var($premid,FILTER_SANITIZE_NUMBER_INT);
   
             $this->mysqlpdo("SELECT customer_id,prem_id,DATE_ADD(p.date,INTERVAL 1 MONTH)AS getdate FROM premmanth AS p INNER JOIN  prem  AS pr ON prems_id = prem_id INNER JOIN customer ON  customer_id =p.c_name   WHERE prems_id = ? ",[$getid]);
             if($this->count()> 0){
               $get= $this->fetchalldata(); 
       
                   foreach ($get as $getdata){
                       
          
                   
               }
                 
             }
             
   $this->mysqlpdo("INSERT INTO  premmanth (prems_id,c_name,date)VALUES(?,?,?)",[$getdata['prem_id'],$getdata['customer_id'],$getdata['getdate']]);
            
   
            
         
        
             
              
         }
     
        
         /*************************************************************************/  
                      /*************************************************************************/ 
         public  function delmanthprem3($delids,$getsession){
       $delid = filter_var($delids,FILTER_SANITIZE_NUMBER_INT);
             
                if($this->mysqlpdo("DELETE FROM premmanth WHERE id = ?",[$delid])){
              $_SESSION['delrp']=TRUE;
              $this->redirct("reportcustomer1.php?getpremid=".$getsession."");
                  
            
        }
        
             
             
         }
     
        
         /*************************************************************************/
         
         public function getstutsprem($id){
             
                $getid = filter_var($id,FILTER_SANITIZE_NUMBER_INT);
             
             $this->mysqlpdo("SELECT SUM(amount_manth)as totalamount FROM premmanth WHERE prems_id = ? ",[$getid]);
             if($this->count() > 0){
              $get=$this->fetchdata();
                 
              return $get; 
             } else {
                 return NULL;    
             }
         }






         /******************************************************************************/
}