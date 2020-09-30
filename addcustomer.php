<?php require 'ini/confg.php';?>
<?php require 'topheader.php';?>
<?php require 'headernav.php';?>

   <?php

  if($_SESSION['is_admin'] == 3 or $_SESSION['addprim']){ ?>
<!-- Advanced Validation -->

    <div class="contanier-fluid" dir="rtl">
            <div class="row clearfix">
                
                <div class="col-md-3"></div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="card " style="direction: rtl ;height:550px">
                        <div class="header text-danger bg-deep-purple">
                            <h2 class="text-center">اضافه عميل </h2>
                         
                        </div>
                        <div class="body" style="height:280px">
                            <form id="form_advanced_validation" class="addcustoer" method="POST" >
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name" >
                                        <label class="form-label">اسم العميل</label>
                                    </div>
                                    <div class="help-info">حروف وارقام </div>
                                </div>
                         
                                    <div class="input-group date" id="bs_datepicker_component_container">
                                        <div class="form-line">
                                            <input type="text" name="date" class="form-control" placeholder="ادخل التاريخ" autocomplete="off">
                                        </div>
                                        <span class="input-group-addon">
                                            <i class="material-icons">date_range</i>
                                        </span>
                                    </div>
                   
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="phone" >
                                        <label class="form-label">رقم الموبايل</label>
                                    </div>
                                    <div class="help-info">ارقام فقط</div>
                                </div>
                           
                           
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" maxlength="15" minlength="1" name="idn" >
                                        <label class="form-label">رقم البطاقه</label>
                                    </div>
                                    <div class="help-info">ارقام فقط</div>
                                </div>
                                
                            
                           
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize" name="dec"placeholder="ملاحظات"></textarea>
                                        </div>
                                    </div>
                       
                                
                                <div class="form-group" id="msg3"></div>
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
