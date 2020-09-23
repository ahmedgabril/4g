 
<?php require 'ini/confg.php';?>
<?php require 'topheader.php';?>
<?php require 'headernav.php';?>

<?php
 if(isset($_SESSION['is_admin'])== 3 or isset($_SESSION['viwestor'])){
$get = new reportc();
$getproft = $get->showproft();
   $data1 = $get->showstorby();
   if($data1 !== NULL){
       foreach ($data1 as $data){}
       
   }

  $data2 = $get->showstor();
   if($data2 !== NULL){
       foreach ($data2 as $data1){}
       
   }


?>

        <div class="container-fluid"style="direction: rtl;margin-top:90px">
         
            <div class="row clearfix">
       <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">monetization_on</i>
                        </div>
                        <div class="content">
                            <div class="text"style="font-size: 16px">اجمالى  عدد المنتجات االمباعه</div>
                            <div class="number count-to text-right" data-from="0"style="font-size: 15px" data-to="1225" data-speed="1000" data-fresh-interval="20"><?= $data['count']?></div>
                        </div>
                    </div>
                </div>
 
       <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-blue hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">monetization_on</i>
                        </div>
                        <div class="content">
                            <div class="text"style="font-size: 16px">اجمالى  مبالغ المبيعات</div>
                            <div class="number count-to text-right" data-from="0"style="font-size: 15px" data-to="1225" data-speed="1000" data-fresh-interval="20"><?= $data['total']?></div>
                        </div>
                    </div>
                </div>
       <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-red hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">monetization_on</i>
                        </div>
                        <div class="content">
                            <div class="text"style="font-size: 16px">صافى الربح</div>
                            <div class="number count-to text-right" data-from="0"style="font-size: 15px" data-to="1225" data-speed="1000" data-fresh-interval="20"><?php echo $getproft['proft']?></div>
                        </div>
                    </div>
                </div>
                
                </div>
                </div>

 
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card" style="height:auto;direction: rtl;margin-top: 70px">
                        <div class="header">
                            <h2>
                              عرض  بيانات فواتير الخاصه بالمتجر 
                            </h2>
                            
                        </div>
                       
                         <div class="session">
                          <?php
                          if(isset( $_SESSION['delstorby'])){
                              
                           echo msg::setmsg("تم حذف البيانات بنجاح","success");
                              unset( $_SESSION['delstorby']); 
                          }
                          if(isset( $_SESSION['nochingby'])){
                              
                           echo msg::setmsg("لم تقم بأى تغيرات","info");
                           unset( $_SESSION['nochingby']); 
                          }
                          if(isset( $_SESSION['upstorby'])){
                              
                           echo msg::setmsg("تم  تحديث البيانات بنجاح","success");
                           unset( $_SESSION['upstorby']); 
                          }

                      
                          ?> 
                            </div>
                          <div class="body">
                            <div class="table-responsive">
                                <table class="table table-striped  table-hover dataTable js-exportable" style="background-color: #fff;">
                                      <thead style="color:#000">
                                    <tr>
                                        <th style="color:#000">#</th>
                                        <th>اسم العميل</th>
                                        <th>اسم المنتج</th>
                                        <th>السعر</th>
                                        <th>العدد</th>
                                        <th>الاجمالى</th>
                                        <th>التاريخ</th>
                                        <th>صافى الربح</th>
<!--                                        <th>تعديل</th>-->
                                        <th>حذف</th>
                                        
                                    </tr>
                                </thead>
                                    <tfoot>
                                     <tr>
                                        <th style="color:#000">#</th>
                                        <th>اسم العميل</th>
                                        <th>اسم المنتج</th>
                                        <th>السعر</th>
                                        <th>العدد</th>
                                        <th>الاجمالى</th>
                                        <th>التاريخ</th>
                                       <th>صافى الربح</th>

<!--                                        <th>تعديل</th>-->
                                        <th>حذف</th>
                                        
                                    </tr>
                                    </tfoot>
                                    <tbody class="">
                                          
<?php
       $get1 = new storby();
       $getdat=$get1->showdatastorby();
       if($getdat !== null){
         $nuber = 1;  
           foreach ($getdat as $data){ ?>
               
 <tr>

      <th scope="row"><?=$nuber ++ ;?></th>
      <th scope="row"><?= $data['customername'];?></th>
      <td ><?=$data['prodectname'];?></td>
      <td ><?php echo $data['price'] ?></td>
      <td><?php echo $data['count'] ?></td>
      <td ><?php echo $data['total'] ?></td>
      <td><?php echo $data['date'] ?></td>
      <td><?php echo $data['proft'] ?></td>

	

<!--
      <td>
          <?php

//       echo '<a  href="editstorby.php?getstorby='.$data['stor_by'].'" class="btn btn-success "><i class="material-icons">create</i></a>'; 
   
          ?>
    
      </td>-->
      <td>
          <?php
                echo '<a  href="deletestorby.php?getstorby='.$data['stor_by'].'" class="btn btn-danger del33"
          ><i class="material-icons">delete_forever</i></a>' ; 
                
            }

          } ?>
      </td>
  
    </tr>
           
     

                        </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
           
            
            <!-- #END# Exportable Table -->
        </div>
              <?php  } else {
        
     header("Location:error404.php");
        exit();
        
        
        
    }
   
?>
<?php require 'lassfooter.php';?>
