<?php require 'ini/confg.php';?>
<?php

require 'topheader.php';?>
<?php require 'headernav.php';?>

<?php

if(isset($_SESSION['is_admin']) == 3 or isset($_SESSION['addprim'])){ 



  
$f = new prem();
$data = $f->getpremname(filter_var($_GET['getid'],FILTER_SANITIZE_NUMBER_INT));
if($data == NULL){
    $_SESSION['noprodect'] = TRUE;
header("Location:showcustomer.php");
exit();
}


?>
<div class="container-fluid " style="direction: rtl;">
 <!-- Textarea -->
            <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 getprem"></div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                         

                    <div class="card getmanth" style="margin-top:100px;height:550px; direction: rtl" >
                        <div class="header bg-red">
                            <h2>تسجيل القسط الشهرى</h2>
                               
                        </div>
                        <div class="body">
           
                    
                                
     
                        <div class="form-group col-sm-12 ">
                                       
                            <select class="form-control show-tick selectpremmanth" name="prodect"data-live-search="true"  required="">
                 <option value="0">من فضلك اختر  اسم المنتج</option>

       <?php
                                
                                foreach ($data as $getdata1){ ?>
                                    
                                  <option value="<?php echo $getdata1['prem_id'];?>"><?php echo $getdata1['prodect_name'];?></option>
   
                                    
                               <?php }
                                ?>
                                    
                                            
                                   
                                      
                                    </select>
                             
                                </div>
    
    
                           <div class=" col-sm-12 "> 
                           <div class="table-responsive">
                                <table class="table table-striped  table-hover " style="background-color: #fff;">
                                      <thead style="color:#000">
                                       <tr>
                                        <th style="color:#000">#</th>
                                        <th>اسم العميل</th>
                                        <th>اسم المنتج</th>
                                      <th>المبلغ المطلوب </th>
                                        <th>المبلغ المدفوع</th>
                                        <th>الملاحظات</th>
                                        <th>التاريخ</th>
                                        <th>تحديث</th>
                                        <th>حذف</th>

                                        
                                    </tr>
                                </thead>
                                    <tfoot>
                                        <tr>
                                        <th style="color:#000">#</th>
                                        <th>اسم العميل</th>
                                        <th>اسم المنتج</th>
                                        <th>المبلغ المطلوب </th>
                                        <th>المبلغ المدفوع</th>
                                        <th>الملاحظات</th>
                                        <th>التاريخ</th>
                                        <th>تحديث</th>
                                         <th>حذف</th>

                                        
                                    </tr>
                                    </tfoot>
                                    <tbody class="getpremmanth">
                                  </tbody>
                                </table>
                            </div>

                            </div>
                            </div>
              

                    
                                
                                
                                
                            </div>

                            
                        </div>

                    </div>
                </div>
          
           


   
    
           <?php  } else {
        
     header("Location:error404.php");
        exit();
        
        
        
    }
   
?>

<?php require 'lassfooter.php';

 ob_end_flush();
?>
            <script>

         
         $(".selectpremmanth").on("change",function(){
                  setInterval(function(){
   var getval = $(".selectpremmanth option:selected").val();
  $.post("ajax/addprodect.php",{getval:getval},function(data){

  $(".getpremmanth").html(data);
      
  });  
    
      },500);  

});
    
         
 
     
 
    
         
            </script>