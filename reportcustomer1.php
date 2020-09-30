<?php require 'ini/confg.php';?>
<?php require 'topheader.php';?>
<?php require 'headernav.php';?>

<?php

if($_SESSION['is_admin'] == 3 or $_SESSION['viweprim']){ 
$get = new reportc();
   $data1 = $get->showreportc($_GET['getpremid']);

   $dataall = $get->showallrepo($_GET['getpremid']);
   $dataal2 = $get->showallrepo2($_GET['getpremid']);
   $getdate = $get->getlassdate($_GET['getpremid']);
   if($dataall !== NULL){
       foreach ($dataall as $getalldata){}
       
   }
   if($data1 !== NULL){
       
   foreach ($data1 as $data2){
       
       
       
   }
   
   }
if(isset($data2['amount_pay']) == ""){ ?>
    

<div class="container-fluid">
    <div style="max-width: 500px;
margin: 162px auto;

text-align: center;
height: auto;">
        <h3 style="font-size: 50px">لايوجد تقارير لهذ المنتج حتى الان  التقارير غير مكتمله</h3>
            
                 
    
    </div>
    
    </div>


 <?php } else {
    

    

   $totarem = $data2['rem_amount']- $getalldata['totalpay'];
   $toal =$data2['prodect_price'] - $data2['amount_pay'];
   $toatalsum = $data2['rem_amount'] - $toal;
   
      
   
   ?>

        <div class="container-fluid"style="direction: rtl;margin-top:90px">
         
            <div class="row clearfix">
      
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">monetization_on</i>
                        </div>
                        <div class="content">
                            <div class="text"style="font-size: 16px">اجمالى المبلغ المطلوب دفعه</div>
                            <div class="number count-to text-right" data-from="0"style="font-size: 15px" data-to="1225" data-speed="1000" data-fresh-interval="20"><?= isset($data2['rem_amount'])? number_format($data2['rem_amount']):"المبلغ المطلوب غير مسجل";?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-red hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">monetization_on</i>
                        </div>
                        <div class="content">
                            <div class="text"style="font-size: 16px">اجمالى عدد الاقساط المدفوعه</div>
                            <div class="number count-to text-right" data-from="0"style="font-size: 15px" data-to="1225" data-speed="1000" data-fresh-interval="20"><?=$dataal2['totalcount']?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-black hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">monetization_on</i>
                        </div>
                        <div class="content">
                            <div class="text"style="font-size: 16px">  مجموع الاقساط المدفوعه</div>
                            <div class="number count-to text-right" data-from="0"style="font-size: 15px" data-to="1225" data-speed="1000" data-fresh-interval="20"><?=number_format($getalldata['totalpay'])?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-teal hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">monetization_on</i>
                        </div>
                        <div class="content">
                            <div class="text"style="font-size: 16px">اجمالى  المبلغ المتبقى</div>
                            <div class="number count-to text-right" data-from="0"style="font-size: 15px" data-to="1225" data-speed="1000" data-fresh-interval="20"><?=number_format($totarem)?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-purple hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">monetization_on</i>
                        </div>
                        <div class="content">
                            <div class="text"style="font-size: 16px">مده القسط</div>
                            <div class="number count-to text-right" data-from="0"style="font-size: 15px" data-to="1225" data-speed="1000" data-fresh-interval="20"><?php if($data2['prem_lemt'] <= 10){ echo $data2['prem_lemt']." "."شهور";}else{echo $data2['prem_lemt']." "."شهر";}?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-deep-purple hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">monetization_on</i>
                        </div>
                        <div class="content">
                            <div class="text"style="font-size: 16px">تاريخ بدايه القسط</div>
                            <div class="number count-to text-right" data-from="0"style="font-size: 15px" data-to="1225" data-speed="1000" data-fresh-interval="20"><?=$data2['premdate']?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-indigo hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">monetization_on</i>
                        </div>
                        <div class="content">
                            <div class="text"style="font-size: 16px">تاريخ  اخر قسط تم دفعه</div>
                            <div class="number count-to text-right" data-from="0"style="font-size: 15px" data-to="1225" data-speed="1000" data-fresh-interval="20"><?=$getdate['date']??"لم يتم دفع اى قسط حتى الان";?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-blue hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">monetization_on</i>
                        </div>
                        <div class="content">
                            <div class="text"style="font-size: 16px">صافى الربح</div>
                            <div class="number count-to text-right" data-from="0"style="font-size: 15px" data-to="1225" data-speed="1000" data-fresh-interval="20"><?=number_format($toatalsum)?></div>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- #END# Widgets -->
           



  <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card" style="height:auto;direction: rtl;margin-top: 59px">
                        <div class="header">
                            <h2>
                              عرض  جميع التقارير
                            </h2>
                            
                        </div>
                        <div class="body">
                                    <div class="session">
                          <?php
                          if(isset( $_SESSION['upprem2'])){
                              
                           echo msg::setmsg("تم تحديث  البيانات بنجاح","success");
                              unset( $_SESSION['upprem2']); 
                          }
                          if(isset( $_SESSION['noching1'])){
                              
                           echo msg::setmsg("لم تقم بأى تغيرات","info");
                           unset( $_SESSION['noching1']); 
                          }
                          if(isset( $_SESSION['delrp'])){
                              
                           echo msg::setmsg("تم حذف  البيانات بنجاح","success");
                           unset( $_SESSION['delrp']); 
                          }

                      
                          ?> 
                            </div>
                          
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
                                        <th>تعديل</th>
<!--                                        <th>حذف</th>-->
                                   
                                        
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
                                        <th>تعديل</th>
<!--                                        <th>حذف</th>-->
                                   
                                        
                                    </tr>
                                    </tfoot>
                                    <tbody class="">
                                          
<?php
 
       if($data1 !== null){
         $nuber = 1;  
           foreach ($data1 as $data){ ?>
               
 <tr>

      <th scope="row"><?=$nuber ++ ;?></th>
      <td style='color:#f43737'><?=$data['name'];?></td>
      <td style='color:#f43737'><?=$data['prodect_name'];?></td>
      <td style='color:#f43737'><?php echo $data['amount_manth'] ?></td>
      <td style='color:#f43737'><?php echo substr($data['discrption'] , 0,200) ;?></td>
      <td style='color:#f43737'><?php echo $data['date'] ;?></td>
     <td style='color:#f43737'> <a href="editmanthpremnew2.php?do=<?=$data['id'];?>&&getsession=<?=$_GET['getpremid'];?>" class="btn btn-success getpremids"><i class="material-icons">create</i></a></td>
<!--      <td style='color:#f43737'> <a href="deletemanthprems.php?do=<?=$data['id'];?>&&getsession=<?=$_GET['getpremid'];?>" class="btn btn-danger getpremids2 del233"><i class="material-icons">delete_forever</i></a></td>-->

	


   
 
  
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


           <?php 
           
}
           } else {
        
     header("Location:error404.php");
        exit();
        
        
        
    }
   
?>




<?php require "lassfooter.php";?>







