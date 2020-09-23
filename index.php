<?php 

require 'topheader.php';
require 'ini/confg.php';
require 'headernav.php';?>
    <?php

  if($_SESSION['is_admin'] == 3){

$min = new minrepo();
$data5 = $min->countcustomer();
 $data9 = $min->showallproprem();

$data6 = $min->countmem();



$count1 = $min->totalcount();
if($count1 !== NULL){
    foreach ($count1 as $data){} 
    
}
$mant1 = $min->totalmanthpay();
if($count1 !== NULL){
    foreach ($mant1 as $data1){} 
    
}
$getproprice = $min->showallproprem();
if($getproprice !== NULL){
    foreach ($getproprice as $data44){} 
    
}
$totalpre = $data['totalprice'] - $data['totalamount'];
$sumtotal =   $data['totalrem'] - $totalpre;

$totalprem =  $data['totalrem']- $data1['sumamount'];
$profit = $sumtotal + $data['totalamount'] + $data1['sumamount'] ;
?>


 
        <div class="container-fluid" style="direction: rtl;margin-top:90px ">
         
     
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">group</i>
                        </div>
                        <div class="content">
                            <div class="text" style="font-size: 16px">اجمالى عدد العملاء</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"><?=$data5['totalamount']?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">group</i>
                        </div>
                        <div class="content">
                            <div class="text"style="font-size: 16px">اجمالى عدد مستخدمى البرنامج</div>
                            <div class="number count-to " style="font-size: 25px" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"><?=$data6['totalamount']?></div>
                        </div>
                    </div>
                </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect" >
                        <div class="icon">
                            <i class="material-icons">add_shopping_cart</i>
                        </div>
                        <div class="content">
                            <div class="text" style="font-size: 17px">اجمالى عدد  المنتجات</div>
                            <div class="number count-to text-right" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"><?=$data['count']?> </div>
                        </div>
                    </div>
                </div>
                             <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-red hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">monetization_on</i>
                        </div>
                        <div class="content">
                            <div class="text"style="font-size: 16px">اجمالى عدد الاقساط المدفوعه</div>
                            <div class="number count-to text-right" data-from="0"style="font-size: 15px" data-to="1225" data-speed="1000" data-fresh-interval="20"><?=$data1['totalcountprem']?></div>
                        </div>
                    </div>
                </div>
                
                      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">add_shopping_cart</i>
                        </div>
                        <div class="content">
                            <div class="text" style="font-size: 17px">اجمالى سعر المنتجات</div>
                            <div class="number count-to text-right"style="font-size: 15px" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"><?=$data['totalprice']?></div>
                        </div>
                    </div>
                </div>
                
                
                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">monetization_on</i>
                        </div>
                        <div class="content" >
                            <div class="text"style="font-size: 16px">المبالغ المدفوعه مقدما</div>
                            <div class="number count-to text-right" style="font-size: 15px"data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"><?=$data['totalamount']?></div>
                        </div>
                    </div>
                </div>
                
                      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">monetization_on</i>
                        </div>
                        <div class="content">
                            <div class="text"style="font-size: 16px">اجمالى المبالغ  المطلوب دفعها</div>
                            <div class="number count-to text-right" data-from="0"style="font-size: 15px" data-to="1225" data-speed="1000" data-fresh-interval="20"><?=$data['totalrem']?></div>
                        </div>
                    </div>
                </div>
                
          
                
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-black hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">monetization_on</i>
                        </div>
                        <div class="content">
                            <div class="text"style="font-size: 16px">اجمالى  مجموع الاقساط المدفوعه</div>
                            <div class="number count-to text-right" data-from="0"style="font-size: 15px" data-to="1225" data-speed="1000" data-fresh-interval="20"><?=$data1['sumamount']?></div>
                        </div>
                    </div>
                </div> 
                
                
                
                 <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-teal hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">monetization_on</i>
                        </div>
                        <div class="content">
                            <div class="text"style="font-size: 16px">اجمالى  المبالغ المتبقيه</div>
                            <div class="number count-to text-right" data-from="0"style="font-size: 15px" data-to="1225" data-speed="1000" data-fresh-interval="20"><?=$totalprem;?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="info-box bg-blue hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">monetization_on</i>
                        </div>
                        <div class="content">
                            <div class="text"style="font-size: 16px">صافى الربح</div>
                            <div class="number count-to text-right" data-from="0"style="font-size: 15px" data-to="1225" data-speed="1000" data-fresh-interval="20"><?=$sumtotal;?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="info-box bg-purple hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">monetization_on</i>
                        </div>
                        <div class="content">
                            <div class="text"style="font-size: 16px">اجمالى الحساب الحالى  مضاف اليه الارباح</div>
                            <div class="number count-to text-right" data-from="0"style="font-size: 15px" data-to="1225" data-speed="1000" data-fresh-interval="20"><?=$profit;?></div>
                        </div>
                    </div>
                </div>

                
            </div>
            <!-- #END# Widgets -->
           
   


  <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card" style="height:auto;direction: rtl;margin-top: 59px">
                        <div class="header bg-dark">
                            <h2>
                                 عرض تقارير المبيعات فى 24ساعه الماضيه
                            </h2>
                            
                        </div>
                        <div class="body">
                        
                          
                            <div class="table-responsive">
                                <table class="table table-striped  table-hover dataTable js-exportable" style="background-color: #fff;">
                                      <thead style="color:#000">
                                    <tr>
                                        <th style="color:#000">#</th>
                                        <th>اسم العميل</th>
                                        <th>اسم المنتج</th>
                                        <th>سعر المنتج</th>
                                        <th>المبلغ المدفوع</th>
                                        <th>مده القسط</th>
                                        <th>المبلغ المتبقى </th>
                                        <th>القسط الشهرى</th>
                                        <th>التفاصيل</th>
                                        <th>التاريخ</th>
                                  
                                        
                                    </tr>
                                </thead>
                                    <tfoot>
                                        <tr>
                                        <th style="color:#000">#</th>
                                        <th>اسم العميل</th>
                                        <th>اسم المنتج</th>
                                        <th>سعر المنتج</th>
                                        <th>المبلغ المدفوع</th>
                                        <th>مده القسط</th>
                                        <th>المبلغ المتبقى </th>
                                        <th>القسط الشهرى</th>
                                        <th>التفاصيل</th>
                                        <th>التاريخ</th>
                                   
                                        
                                    </tr>
                                    </tfoot>
                                    <tbody class="">
                                          
<?php

       if($data9 !== null){
         $nuber = 1;  
           foreach ($data9 as $data){ ?>
               
 <tr>

      <th scope="row"><?=$nuber ++ ;?></th>
      <td style='color:#f43737'><?=$data['name'];?></td>
      <td style='color:#f43737'><?=$data['prodect_name'];?></td>
      <td style='color:#f43737'><?php echo $data['prodect_price'] ?></td>
      <td style='color:#f43737'><?php echo $data['amount_pay'] ?></td>
      <td style='color:#f43737'><?php echo $data['prem_lemt'] ?></td>
      <td style='color:#f43737'><?php echo $data['rem_amount'] ?></td>
      <td style='color:#f43737'><?php echo $data['prem_manth'] ?></td>
      <td style='color:#f43737'><?php echo substr($data['discrption'] , 0,35) ;?></td>
      <td style='color:#f43737'><?php echo $data['date'] ;?></td>
	


   
 
  
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



  <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card" style="height:auto;direction: rtl;margin-top: 59px">
                        <div class="header bg-dark">
                            <h2>
                              عرض  تقارير الاقساط المدفوعه فى 24 ساعه الماضيه
                            </h2>
                            
                        </div>
                        <div class="body">
                        
                          
                            <div class="table-responsive">
                                <table class="table table-striped  table-hover dataTable js-exportable" style="background-color: #fff;">
                                      <thead style="color:#000">
                                       <tr>
                                        <th style="color:#000">#</th>
                                        <th>اسم العميل</th>
                                        <th>اسم المنتج</th>
                                        <th>المبلغ المدفوع</th>
                                        <th>الملاحظات</th>
                                        <th>التاريخ</th>
                                   
                                        
                                    </tr>
                                </thead>
                                    <tfoot>
                                        <tr>
                                        <th style="color:#000">#</th>
                                        <th>اسم العميل</th>
                                        <th>اسم المنتج</th>
                                        <th>المبلغ المدفوع</th>
                                        <th>الملاحظات</th>
                                        <th>التاريخ</th>
                                   
                                        
                                    </tr>
                                    </tfoot>
                                    <tbody class="">
                                          
<?php

   $data99 = $min->showreportc();
       if($data99 !== null){
         $nuber = 1;  
           foreach ($data99 as $data44){ ?>
               
 <tr>

      <th scope="row"><?=$nuber ++ ;?></th>
      <td style='color:#f43737'><?=$data44['name'];?></td>
      <td style='color:#f43737'><?=$data44['prodect_name'];?></td>
      <td style='color:#f43737'><?php echo $data44['amount_manth'] ?></td>
      <td style='color:#f43737'><?php echo substr($data44['discrption'] , 0,35) ;?></td>
      <td style='color:#f43737'><?php echo $data44['date'] ;?></td>
	


   
 
  
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

  <?php  }elseif ($_SESSION['is_admin'] == 2) {
  
  
    header("Location:profile.php");
        exit();
  
  
  }else {
        
     header("Location:login.php");
        exit();
    
    }
   
?>


<?php require 'lassfooter.php'; 

?>
