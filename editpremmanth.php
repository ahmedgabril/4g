
<?php require 'ini/confg.php';?>
<?php require 'topheader.php';?>
<?php require 'headernav.php';?>
<?php

  if(isset($_SESSION['is_admin']) == 3 or isset($_SESSION['editprim'])){
if($_GET['getmanthid'] == "" && $_GET['getname'] == ""){
    
    header("Location:showcustomer.php");
    exit();
    
} else {
  

$fs = new prem();
$getinfo = $fs->editmanthprem(filter_var($_GET['getmanthid'],FILTER_SANITIZE_NUMBER_INT));
$data1 = $fs->getmanthpay1(filter_var($_GET['getname'],FILTER_SANITIZE_NUMBER_INT));

if($getinfo !== NULL){
    
    foreach ($getinfo as $getdatainfo){}  
    
}

?>

<div class="container-fluid" style="direction: rtl;">
 <!-- Textarea -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card" style="margin-top:100px;height:500px; direction: rtl" >
                        <div class="header">
                            <h2>تحديث بيانات القسط الشهرى</h2>
                               
                        </div>
                        <div class="body">
                            <h2 class="card-inside-title">Basic Example</h2>
                    
                                
                                <form method="post"  id="editpremanth">
     
                            <div class="col-sm-3">
                                    <div class="input-group date" id="bs_datepicker_component_container">
                                        <div class="form-line">
                                            <input type="text" name="date"value="<?php echo $getdatainfo['date'];?>" class="form-control" placeholder="ادخل التاريخ" autocomplete="off">
                                        </div>
                                        <span class="input-group-addon">
                                            <i class="material-icons">date_range</i>
                                        </span>
                                    </div>
                                </div>
                             
                        <div class="form-group col-sm-4">
                                       
                            <select class="form-control show-tick" name="prodect"data-live-search="true"  required="">
                             <option class="selected" value="<?php echo $getdatainfo['prem_id'];?>"><?php echo $getdatainfo['prodect_name'];?></option>

                        <?php  
                                foreach ($data1 as $getdata3){ ?>
                                    
                                  <option value="<?php echo $getdata3['prem_id'];?>"><?php echo $getdata3['prodect_name'];?></option>
   
                                    
                               <?php }
                                ?>
                                    
                                     
    
                                    </select>
                             
                                </div>
                         <div class="form-group col-sm-4">
                                       
                            <select class="form-control show-tick" name="cname">
                                <option value=""><?php echo $getdatainfo['name'];?></option>
                                    
                                            
                                   
                                      
                                    </select>
                             
                                </div>
                              
                         
                                 <div class="form-group col-sm-12">
                                       
                            <select class="form-control show-tick" name=""data-live-search="true" required="">
                                <option value="0">معلمومات عن المبلغ المسحق الدفع شهريا </option>
                                <?php
                                
                                foreach ($data1 as $getdata8){ ?>
                                    
                                  <option value=""><?php echo $getdata8['prodect_name']." "." القسط الشهرى"." ".$getdata8['prem_manth'];?></option>
   
                                    
                               <?php }
                                ?>
                                    
                                            
                                   
                                      
                                    </select>
                             
                                </div>
                              <div class="col-sm-12">
                                  
                                    <div class="form-group">
                                     
                                        <div class="form-line" >
                                            <input type="text" name="manthprem" value="<?php echo $getdatainfo['amount_manth'];?>" class="form-control"required="" placeholder="القسط الشهرى">
                                            <input type="hidden" name="id" value="<?php echo $getdatainfo['id'];?>" class="form-control"required="" placeholder="القسط الشهرى">
                                        </div>
                                    </div>
                                </div>
                                 
                            </div>
              
         
                               <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize"name="dec" placeholder="ملاحظات"><?php echo $getdatainfo['discrption']?></textarea>
                                        </div>
                                    </div>
                                </div>
               <div class="col-sm-12 form-group" id="msg36" >  </div>
                  <div class="col-sm-12">
                      <div class=" form-group"style="margin-top:10px" >
                                       
                        <button type="submit" class="btn btn-success" style="width:250px"> تحديث البيانات </button>
                                       
                        </div>     
                        </div>
                                
                       </form>    
                                
                                
                                
                            </div>

                            
                        </div>
                    </div>
                </div>
          
            </div>
            <!-- #END# Textarea -->
    


<?php }

           } else {
        
     header("Location:error404.php");
        exit();
        
        
        
    }
   

require 'lassfooter.php';?>



