<?php require 'ini/confg.php';?>
<?php require 'topheader.php';?>
<?php require 'headernav.php';?>

   <?php

  if(isset($_SESSION['is_admin'])== 3 or isset($_SESSION['addstor'])){ ?>
<!-- Advanced Validation -->

    <div class="contanier-fluid" dir="rtl">
            <div class="row clearfix">
                
                <div class="col-md-3"></div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="card " style="direction: rtl ;height:350px;margin-top:90px">
                        <div class="header text-danger bg-blue">
                            <h2 class="text-center">اضافه مسحقات موجله الدفع</h2>
                         
                        </div>
                        <div class="body" style="height:280px">
                            <form id="form_advanced_validation" class="adddept" method="POST" >
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name" >
                                        <label class="form-label">اسم العميل</label>
                                    </div>
                                    <div class="help-info">حروف وارقام </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="prodect" >
                                        <label class="form-label">اسم المنتج </label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="remamount" >
                                        <label class="form-label">المبلغ </label>
                                    </div>
                                </div>
                           
                           
                          
                                <div class="form-group" id="msg080"></div>
                                <div class="form-group col-md-4" style="float: right">
                                    <button class="btn btn-primary waves-effect"  style="width: 150px;
       
                                                margin-right: 100px;
                                        margin-top: 39px;"type="submit">اضافه</button>

                               </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
            </div>
            </div> 
            <!-- #END# Advanced Validation -->
          

  <?php  } else {
        
     header("Location:error404.php");
        exit();
        
        
        
    }
   
?>
   
<?php require 'lassfooter.php'; ?>
