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
                         

                    <div class="card getmanth" style="margin-top:100px;height:250px; direction: rtl" >
                        <div class="header bg-red">
                            <h2>بحث يدوى على المتاخرين عن السداد</h2>
                               
                        </div>
                        <div class="body">
           
                    
                                
     
                        <div class="col-sm-12 ">
                            <form method="post" action="showlate.php" id="serc">  
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