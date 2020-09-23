<?php require 'ini/confg.php';?>
<?php require 'topheader.php';?>
<?php require 'headernav.php';?>


     <?php

  if($_SESSION['is_admin'] == 3 or $_SESSION['addstor']){ ?>
<!-- Advanced Validation -->

    <div class="contanier-fluid">
            <div class="row clearfix">
                
                <div class="col-md-3"></div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="card " style="direction: rtl ;height:530px;margin-top:90px">
                        <div class="header text-danger">
                            <h2 class="text-center">اضافه  فاتوره بيع</h2>
                         
                        </div>
                        <div class="body" style="height:280px">
                            <form id="form_advanced_validation1" class="storby" method="POST" >
                                
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
                                        <input type="text" class="form-control" name="name" >
                                        <label class="form-label">اسم العميل</label>
                                    </div>
                             
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="prodect" >
                                        <label class="form-label">اسم المنتج</label>
                                    </div>
                             
                                </div>
                        
                           
                           
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control count"  placeholder="العدد" name="count" >
                                        <label class="form-label">العدد</label>
                                    </div>
                                    <div class="help-info">ارقام فقط</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control price" placeholder="السعر"  name="price" >
                                        <label class="form-label">السعر</label>
                                    </div>
                                 
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control total"  name="total" >
                                        <label class="form-label">الاجمالى</label>
                                    </div>
                             
                                </div>
                                <div class="form-group" id="msg9"></div>
                                 <div class="form-group col-md-4" style="float: right">
                                    <button class="btn btn-primary waves-effect"  style="width: 240px;
                                                        margin-right: 70px;
                                                        margin-top: 39px;
                                        margin-top: 39px;"type="submit">اضافه</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
            </div>
 
            <!-- #END# Advanced Validation -->
          
          <?php  } else {
        
     header("Location:error404.php");
        exit();
        
        
        
    }
   
?>

   
<?php require 'lassfooter.php'; ?>
