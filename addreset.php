<?php 
   require 'ini/confg.php';


require 'topheader.php';?>
<?php require 'headernav.php';?>
     <?php
  if($_SESSION['is_admin'] == 3 or $_SESSION['addprim']){ ?>
<div class="container-fluid"style="direction: rtl">
 <!-- Textarea -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-orange">
                            <h2>اضافه فاتوره قسط</h2>
                        
                        </div>
                        <div class="body">
                            <h2 class="card-inside-title">Basic Example</h2>
                            <div class="row clearfix">
                                
                                <form method="post"  id="addprem">
     
  
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="prodect" class=" form-control"  placeholder="اسم المنتج">
                                        </div>
                                    </div>
                                </div>
                        <div class="form-group col-sm-4">
                                       
                            <select class="form-control show-tick" name="cname" required="">
                                          <?php
                                     
                                        $pre = new prem();
                                        $dataprm = $pre->showcustomeername($_GET['getid']);
                                        if($dataprm !== NULL){
                                            foreach ($dataprm as $data){ ?>
                                  <option value="<?php echo $data['customer_id'];?>"><?php echo $data['name'];?></option>
                                          <?php  }  
                                             
                                        }
                                        ?>
                                            
                                            
                                   
                                      
                                    </select>
                                   </div>
                                   
                                    
                                    <div class="col-sm-4">
                                    <div class="input-group date" id="bs_datepicker_component_container">
                                        <div class="form-line">
                                            <input type="text" name="date" class="form-control" placeholder="ادخل التاريخ" autocomplete="off">
                                        </div>
                                        <span class="input-group-addon">
                                            <i class="material-icons">date_range</i>
                                        </span>
                                    </div>
                                </div>
                                     <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text"  class=" form-control proprice" name="pre_price"placeholder="سعر المنتج">
                                        </div>
                                    </div>
                                </div>
             
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text"  class=" form-control pay" name="manthpay"placeholder="الملبغ المدفوع مقدما">
                                        </div>
                                    </div>
                                </div>
                              <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text"  class="form-control precent" name="precent"placeholder="نسبه الخصم%">
                                        </div>
                                    </div>
                                </div>
                       
                   
                    
              
            <!--#END# DateTime Picker -->
                                
                                       <!-- Basic Example | Horizontal Layout -->
   
                                   <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="prem"  class=" form-control prem" placeholder="المتبقى">
                                        </div>
                                    </div>
                                </div>
                                       
                                     <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="preml" class=" form-control limat"  placeholder="مده القسط">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" name="manthprem" class="manthpay form-control" placeholder="القسط الشهرى">
                                        </div>
                                    </div>
                                </div>
                          
                              
                            
                           
                            </div>
              
         
            <!--#END# DateTime Picker -->
                            
        
                                      <div class="col-sm-4">
                                    <div class="form-group">
                                      <div class="form-line">
                                            <input type="text" name="tname"  class="form-control" placeholder="اسم الضامن">
                                      </div>
                                    </div>
                                </div>
                                  
                                     <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="tphone"  class="form-control" placeholder="رقم الموبايل">
                                        </div>
                                    </div>
                                </div>
                                     <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line"style="">
                                            <input type="text" name="tid"  class="form-control" placeholder="رقم البطاقه">
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
                                            <textarea rows="4" class="form-control no-resize"name="dec" placeholder="ملاحظات"></textarea>
                                        </div>
                                    </div>
                                </div>
               <div class="col-sm-12 form-group" id="msg3" >  </div>
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
    
           <?php  } else {
        
     header("Location:error404.php");
        exit();
        
        
        
    }
   
?>

<?php require 'lassfooter.php'; ?>
