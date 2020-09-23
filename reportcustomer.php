<?php require 'ini/confg.php';?>
<?php require 'topheader.php';?>
<?php require 'headernav.php';?>

<?php

  if(isset($_SESSION['is_admin']) == 3 or isset($_SESSION['viweprim'])){ 

$get = new reportc();

    

    

//$data1 = $get->showallpro($_GET['getid']);
$count1 = $get->totalcount($_GET['getid']);
   $data1 = $get->showreportc($_GET['getpremid']);

if($count1 !== NULL){
    foreach ($count1 as $data){} 
    
}
$mant1 = $get->totalmanthpay($_GET['getid']);
if($count1 !== NULL){
    foreach ($mant1 as $data1){} 
    
}
$totalpre = $data['totalprice'] - $data['totalamount'];
$sumtotal =   $data['totalrem'] - $totalpre;

$totalprem =  $data['totalrem']- $data1['sumamount'];
?>
        <div class="container-fluid"style="direction: rtl;margin-top:90px">
         
            <div class="row clearfix">
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
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-teal hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">monetization_on</i>
                        </div>
                        <div class="content">
                            <div class="text"style="font-size: 16px">اجمالى  المبلغ المتبقى</div>
                            <div class="number count-to text-right" data-from="0"style="font-size: 15px" data-to="1225" data-speed="1000" data-fresh-interval="20"><?=$totalprem;?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
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
                
            </div>
            <!-- #END# Widgets -->
           
  


  <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card" style="height:auto;direction: rtl;margin-top: 59px">
                        <div class="header">
                            <h2>
                              عرض  جميع تقاير منتجات العميل
                            </h2>
                            
                        </div>
                        <div class="body">
                               <div class="session">
                          <?php
                          if(isset( $_SESSION['upprem'])){
                              
                           echo msg::setmsg("تم تحديث بيانات المنتج بنجاح","success");
                              unset( $_SESSION['upprem']); 
                          }
                          if(isset( $_SESSION['noching'])){
                              
                           echo msg::setmsg("لم تقم بأى تغيرات","info");
                           unset( $_SESSION['noching']); 
                          }
                          if(isset( $_SESSION['delprem'])){
                              
                           echo msg::setmsg("تم حذف بيانات المنتج بنجاح","success");
                           unset( $_SESSION['delprem']); 
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
                                        <th>سعر المنتج</th>
                                        <th>المبلغ المدفوع</th>
                                        <th>مده القسط</th>
                                        <th>المبلغ المتبقى </th>
                                        <th>القسط الشهرى</th>
                                        <th>التفاصيل</th>
                                        <th>التاريخ</th>
                                         <th>الحاله</th>
                                          <th>تقارير</th>
                                        <th>تعديل</th>
                                        <th>حذف</th>
                                       
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
                                         <th>الحاله</th>
                                          <th>تقارير</th>
                                        <th>تعديل</th>
                                        <th>حذف</th>
                                       
                                    </tr>
                                    </tfoot>
                                    <tbody class="">
                                          
<?php
    $data1 = $get->showallpro($_GET['getid']);

       if($data1 !== null){
         $nuber = 1;
         
           foreach ($data1 as $data){ 
      $getinfo = new prem();
    $fetch = $getinfo->getstutsprem($data['prem_id']); 
       ?>
              
         <tr <?php if ($data['rem_amount']  == $fetch['totalamount']){ echo "style='border: 1px solid green; '"; }?>>

      <th scope="row"><?=$nuber ++ ;?></th>
      <td <?php if ($data['rem_amount']  == $fetch['totalamount']){ echo "style='color:green'"; }?>><?=$data['name'];?></td>
      <td <?php if ($data['rem_amount']  == $fetch['totalamount']){ echo "style='color:green'"; }?>><?=$data['prodect_name'];?></td>
      <td <?php if ($data['rem_amount']  == $fetch['totalamount']){ echo "style='color:green'"; }?>><?php echo $data['prodect_price'] ?></td>
      <td <?php if ($data['rem_amount']  == $fetch['totalamount']){ echo "style='color:green'"; }?>><?php echo $data['amount_pay'] ?></td>
      <td <?php if ($data['rem_amount']  == $fetch['totalamount']){ echo "style='color:green'"; }?>><?php echo $data['prem_lemt'] ?></td>
      <td <?php if ($data['rem_amount']  == $fetch['totalamount']){ echo "style='color:green'"; }?>><?php echo $data['rem_amount'] ?></td>
      <td <?php if ($data['rem_amount']  == $fetch['totalamount']){ echo "style='color:green'"; }?>><?php echo $data['prem_manth'] ?></td>
      <td <?php if ($data['rem_amount']  == $fetch['totalamount']){ echo "style='color:green'"; }?>><?php echo substr($data['discrption'] , 0,200) ;?></td>
      <td <?php if ($data['rem_amount']  == $fetch['totalamount']){ echo "style='color:green'"; }?>><?php echo $data['date'] ;?></td>
      <td <?php if ($data['rem_amount']  == $fetch['totalamount']){ echo "style='color:green'"; }?>><?php if ($data['rem_amount']  == $fetch['totalamount']){ echo "مكتمله"; }else{echo "جارى التنفيذ";}?></td>
	


      <td>
          <?php
           
       echo '<a  href="reportcustomer1.php?getpremid='.$data['prem_id'].'" class="btn btn-info "><i class="material-icons">description</i></a>'; 
         
          ?>
    
      </td>
      <td>
          <?php
           
    echo '<a  href="editprem.php?getpremid='.$data['prem_id'].'&getnew='.$_GET['getid'].'" class="btn btn-success "><i class="material-icons">create</i></a>'; 
         
          ?>
    
      </td>
      <td>
          <?php
           
       echo '<a href="deleteprem.php?getpremid='.$data['prem_id'].'&getnew='.$_GET['getid'].'"  class="btn btn-danger del33 "><i class="material-icons">delete_forever</i></a>'; 
         
          ?>
    
      </td>
 
  
    </tr>
           <?php }
       }
    
       
       ?>
     

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


           } else {
        
     header("Location:error404.php");
        exit();
        
        
        
    }
   
?>




<?php require "lassfooter.php";?>







