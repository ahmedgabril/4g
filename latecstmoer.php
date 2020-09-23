<?php require 'ini/confg.php';?>
<?php

require 'topheader.php';?>
<?php require 'headernav.php';?>

<?php

if($_SESSION['is_admin'] == 3  or $_SESSION['viweprim'] ){ 



  
$f = new prem();



?>
<div class="container-fluid " style="direction: rtl;">
 <!-- Textarea -->
            <div class="row clearfix">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                         

                    <div class="card getmanth" style="margin-top:100px;height:550px; direction: rtl" >
                        <div class="header bg-red">
                            <h2>بحث يدوى على المتاخرين عن السداد</h2>
                               
                        </div>
                        <div class="body">
           
                    
                                
     
                        <div class="col-sm-12 ">
                            <form method="post" id="serc">  
                                     <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text"  class=" form-control " name="start"placeholder=" ادخل تاريخ البدايه مثال 5-10-2020">
                                        </div>
                                    </div>
                                </div>
             
                                        
                                          
                                     <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text"  class=" form-control" name="end"placeholder=" ادخل تاريخ النهايه مثال 5-6-2021">
                                        </div>
                                    </div>
                                </div>
             
                                        
                                     <div class="col-sm-4">
                                         <button type="submit" class="btn btn-success">بحث</button>
                                    </div>
                                </form>
                                </div>
             
                         

    
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
                                        <th>رقم الهاتف</th>
                                        <th>التاريخ</th>
                                        <th>الصفحه الشخصيه</th>

                                        
                                    </tr>
                                </thead>
                                    <tfoot>
                                        <tr>
                                        <th style="color:#000">#</th>
                                        <th>اسم العميل</th>
                                        <th>اسم المنتج</th>
                                        <th>المبلغ المطلوب </th>
                                        <th>المبلغ المدفوع</th>
                                        <th>رقم الهاتف</th>
                                        <th>التاريخ</th>
                                        <th>الصفحه الشخصيه</th>

                                        
                                    </tr>
                                    </tfoot>
                                    <tbody class="msgser">
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
