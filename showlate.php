<?php require 'ini/confg.php';?>
<?php

require 'topheader.php';?>
<?php require 'headernav.php';?>
<?php

if($_SESSION['is_admin'] == 3  or $_SESSION['viweprim'] ){ 



  
$f = new prem();

if($_SERVER['REQUEST_METHOD']== "POST"){
 
    $pre = new reportc();
   $get = $pre->showser($_POST['start'],$_POST['end']);
  
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
           
                    
                                
     
                   
             
                         

    
                        </div>
                           <div class=" col-sm-12 "> 
                          <div class="table-responsive">
                                <table class="table table-striped  table-hover dataTable js-exportable" style="background-color: #fff">
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


                                      <?php
    if($get !== NULL){
         $nuber = 1;
        foreach ($get as $data){ ?>
            <tr>
      <th scope="row"><?=$nuber ++ ;?></th>
      <td style='color:#f43737'><?=$data['name'];?></td>
      <td style='color:#f43737'><?=$data['prodect_name'];?></td>
      <td style='color:#f43737'><?=$data['prem_manth'];?></td>
      <td style='color:green'><?=$data['amount_manth'];?></td>
      <td style='color:#f43737'> <?=$data['phone'];?></td>
      <td style='color:#f43737'><?=$data['date'];?></td>
      <td style='color:#f43737'> <a href="reportcustomer1.php?getpremid=<?=$data['prem_id'];?>" class="btn btn-success getpremids"><i class="material-icons">description</i></a></td>


    </tr>

            
            
        <?php }   
        
    } else { ?>
    <tr>
        <td style='color:#f43737'><?php echo msg::setmsg("لايوجد نتائج لبحثك تاكد من كتابه التاريخ بشكب صحيح","danger");?></td>  
    </tr>
   <?php  }

}?>



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
