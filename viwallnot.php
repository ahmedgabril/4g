<?php 

require 'ini/confg.php';
require 'topheader.php';?>
<?php require 'headernav.php';?>


  <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card" style="height:auto;direction: rtl;margin-top: 90px">
                        <div class="header">
                            <h2>
                              عرض جميع اشعارات العملاء المتاخرين عن السداد لمده  شهر فائت 
                            </h2>
                            
                        </div>
                        <div class="body">
                        
                          
                            <div class="table-responsive">
                                <table class="table table-striped  table-hover dataTable js-exportable" style="background-color: #fff;">
                                      <thead style="color:#000">
                                       <tr>
                                        <th style="color:#000">#</th>
                                        <th>اسم العميل</th>
                               
                                        <th>الاشعار</th>
                                        <th>التاريخ</th>
                                    <th>الصفحه الشخصيه</th>
                                        
                                    </tr>
                                </thead>
                                    <tfoot>
                                          <tr>
                                        <th style="color:#000">#</th>
                                        <th>اسم العميل</th>
                                        <th>الاشعار</th>
                                        <th>التاريخ</th>
                                        <th>الصفحه الشخصيه</th>
                                   
                                        
                                    </tr>
                                    </tfoot>
                                    <tbody class="">
                                          
<?php
$min = new notv();
   $data99 = $min->getallnot();
       if($data99 !== null){
         $nuber = 1;  
           foreach ($data99 as $data){ ?>
               
 <tr>

      <th scope="row"><?=$nuber ++ ;?></th>
      <td style='color:#f43737'><?=$data['name'];?></td>
      <td style='color:#f43737'><?=$data['msg'];?></td>
      <td style='color:#f43737'><?php echo $data['date'] ;?></td>
      <td style='color:#f43737'>   <a href="reportcustomer1.php?getpremid=<?php echo $data['prem_id'] ?>">الصفحه  الشخصيه</a></td>
	


   
 
  
    </tr>
           <?php }
       } ?>
     

                        </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            
            <!-- #END# Exportable Table -->
        </div>
<?php require 'lassfooter.php'; ?>