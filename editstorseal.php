
<?php require 'ini/confg.php';?>
<?php require 'topheader.php';?>
<?php require 'headernav.php';?>

<?php
  if(isset($_SESSION['is_admin']) == 3 or isset($_SESSION['editstor'])){
if(isset($_GET['getstorid'])){
   
$data = new storseal();

$data1=$data->editstorseal($_GET['getstorid']);
if($data1 !== NULL){
    
    foreach ($data1 as $data2){
        
    }  
    
}


?>
<!-- Advanced Validation -->

    <div class="contanier-fluid" dir="rtl">
            <div class="row clearfix">
                
                <div class="col-md-3"></div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="card " style="direction: rtl ;height:465px;margin-top:90px">
                        <div class="header text-danger">
                            <h2 class="text-center">تحديث فاتوره شراء</h2>
                         
                        </div>
                        <div class="body" style="height:280px">
                            <form id="form_advanced_validation1" class="editstorseal" method="POST" >
                                
                            
                                    <div class="input-group date" id="bs_datepicker_component_container">
                                        <div class="form-line">
                                            <input type="text" name="date" value="<?php echo $data2['date']?>" class="form-control" placeholder="ادخل التاريخ" autocomplete="off">
                                        </div>
                                        <span class="input-group-addon">
                                            <i class="material-icons">date_range</i>
                                        </span>
                                    </div>
                  
                                
                                
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control"value="<?php echo $data2['prodectname']?>" name="prodect" >
                                        <label class="form-label">اسم المنتج</label>
                                    </div>
                             
                                </div>
                        
                           
                           
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control count"value="<?php echo $data2['count']?>"  placeholder="العدد" name="count" >
                                        <input type="hidden" class="form-control count"value="<?php echo $data2['stor_id']?>"  placeholder="العدد" name="id" >
                                       
                                        <label class="form-label">العدد</label>
                                    </div>
                                    <div class="help-info">ارقام فقط</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control price" value="<?php echo $data2['price']?>"placeholder="السعر"  name="price" >
                                        <label class="form-label">السعر</label>
                                    </div>
                                 
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control total"value="<?php echo $data2['total']?>"  name="total" >
                                        <label class="form-label">الاجمالى</label>
                                    </div>
                             
                                </div>
                                <div class="form-group" id="msg100"></div>
                                <div class="form-group col-md-4" style="float: right">
                                    <button class="btn btn-primary waves-effect"  style="width: 240px;
                                                        margin-right: 70px;
                                                        margin-top: 39px;
                                        margin-top: 39px;"type="submit">اضافه</button>

                               </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
            </div>
 
            <!-- #END# Advanced Validation -->
       <?php  }else{
          
      header("Location:showstorseal.php");
      exit();
          }

?>
       <?php  } else {
        
     header("Location:error404.php");
        exit();
        
        
        
    }
   
?>
<?php require 'lassfooter.php'; ?>
