

<?php require 'ini/confg.php';?>

<?php require 'topheader.php';?>
<?php require 'headernav.php';?>
<?php
  if(isset($_SESSION['is_admin']) == 3 or isset($_SESSION['editprim'])){
if(filter_var($_GET['getpremid'],FILTER_SANITIZE_NUMBER_INT)){ 
    $id = filter_var($_GET['getpremid'],FILTER_SANITIZE_NUMBER_INT);
       $pre = new prem();

$data4 = $pre->editprem($id);
if($data4!== NULL){
    foreach ($data4 as $getdata){} 
    
}
?>
    <div class="container-fluid"style="direction: rtl">
 <!-- Textarea -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>تحديث بيانات فواتير القسط</h2>
                        
                        </div>
                        <div class="body">
                            <h2 class="card-inside-title">Basic Example</h2>
                            <div class="row clearfix">
                                
                                <form method="post"  id="editprem">
     
  
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="prodect" class=" form-control"value="<?= $getdata['prodect_name'];?>"  placeholder="اسم المنتج">
                                            <input type="hidden" name="getid" class=" form-control"value="<?= $_GET['getnew'];?>"  placeholder="اسم المنتج">
                                        </div>
                                    </div>
                                </div>
                        <div class="form-group col-sm-4">
                                       
                            <select class="form-control show-tick" name="cname" required="">
                                <option  class="selected" value="<?php echo $getdata['prem_id'];?>"><?php echo $getdata['name'];?></option>
  
                                            
                                   
                                      
                                    </select>
                             
                                </div>
                                    
                           
<!--                                <div class="col-sm-4">
                                    <div class="input-group date" id="bs_datepicker_component_container">
                                        <div class="form-line">-->
                                            <input type="hidden" name="date"  value="<?= $getdata['date'];?>"class="form-control" placeholder="ادخل التاريخ" autocomplete="off">
<!--                                        </div>
                                        <span class="input-group-addon">
                                            <i class="material-icons">date_range</i>
                                        </span>
                                    </div>
                                </div>-->
                             
                                     <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="hidden" name="premid" value="<?= $getdata['prem_id'];?>">
                                            <input type="text"  class=" form-control proprice"value="<?= $getdata['prodect_price'];?>" name="pre_price"placeholder="سعر المنتج">
                                        </div>
                                    </div>
                                </div>
             
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text"  class=" form-control pay"value="<?= $getdata['amount_pay'];?>" name="manthpay"placeholder="الملبغ المدفوع مقدما">
                                        </div>
                                    </div>
                                </div>
                              <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text"  class="form-control precent"value="<?= $getdata['precent'];?>" name="precent"placeholder="نسبه الخصم%">
                                        </div>
                                    </div>
                                </div>
                       
                   
                    
              
            <!--#END# DateTime Picker -->
                                
                                       <!-- Basic Example | Horizontal Layout -->
   
                                   <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="prem" value="<?= $getdata['rem_amount'];?>" class=" form-control prem" placeholder="المتبقى">
                                        </div>
                                    </div>
                                </div>
                                       
                                     <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="preml" value="<?=$getdata['prem_lemt'];?>"class=" form-control limat"  placeholder="مده القسط">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="manthprem"value="<?=$getdata['prem_manth'];?>" class="manthpay form-control" placeholder="القسط الشهرى">
                                        </div>
                                    </div>
                                </div>
                          
                              
                            
                           
                            </div>
              
         
            <!--#END# DateTime Picker -->
                            
                         <div class="col-sm-4">
                                    <div class="form-group">
                                      <div class="form-line">
                                          <input type="text" name="tname" value="<?=$getdata['teker_name'];?>" class="form-control" placeholder="اسم الضامن" autocomplete="off">
                                      </div>
                                    </div>
                                </div>
                          
                                  
                                     <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="tphone" value="<?=$getdata['teker_phone'];?>" class="form-control" placeholder="رقم الموبايل">
                                        </div>
                                    </div>
                                </div>
                                     <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line"style="">
                                            <input type="text" name="tid" value="<?=$getdata['teker_id'];?>" class="form-control" placeholder="رقم البطاقه">
                                        </div>
                                    </div>
                                </div>
                    
                                    
                               <div class="col-sm-4">
                                    <div class="form-group">
                                        
                                    </div>
                                </div>
                               <div class="col-sm-4">
                                    <div class="form-group">
                                       
                                    </div>
                                </div>
                           
                                 
              
                               <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize"name="dec"placeholder="ملاحظات"><?=$getdata['discrption'];?></textarea>
                                        </div>
                                    </div>
                                </div>
               <div class="col-sm-12 form-group" id="msg30" >  </div>
                  <div class="col-sm-12">
                     <div class=" form-group" >
                                       
                        <button type="submit" class="btn btn-success" style="width:250px"> اضافه البيانات</button>
                                       
                        <div>     
                        </div>
                                
                       <form>    
                                
                                
                                
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!-- #END# Textarea -->
    


    
    
 <?php } else {
    
$_SESSION['noprodect'] =TRUE;
header("Location:showresets.php");
exit();
    
}



?>
  <?php  } else {
        
     header("Location:error404.php");
        exit();
        
        
        
    }
   
?>
<?php require 'lassfooter.php'; ?>
