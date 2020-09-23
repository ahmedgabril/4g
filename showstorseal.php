 
<?php require 'ini/confg.php';?>
<?php require 'topheader.php';?>
<?php require 'headernav.php';?>

     <?php


  if(isset($_SESSION['is_admin']) == 3 or isset($_SESSION['viwestor'])){ ?>

         
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card" style="height:auto;direction: rtl;margin-top: 70px">
                        <div class="header">
                            <h2>
                              عرض  بيانات فواتير الشراء الخاصه بالمتجر
                            </h2>
                            
                        </div>
                       
                         <div class="session">
                          <?php
                          if(isset( $_SESSION['delstorseal'])){
                              
                           echo msg::setmsg("تم حذف البيانات بنجاح","success");
                              unset( $_SESSION['delstorseal']); 
                          }
                          if(isset( $_SESSION['noching'])){
                              
                           echo msg::setmsg("لم تقم بأى تغيرات","info");
                           unset( $_SESSION['noching']); 
                          }
                          if(isset( $_SESSION['upstor'])){
                              
                           echo msg::setmsg("تم  تحديث البيانات بنجاح","success");
                           unset( $_SESSION['upstor']); 
                          }

                      
                          ?> 
                            </div>
                          <div class="body">
                            <div class="table-responsive">
                                <table class="table table-striped  table-hover dataTable js-exportable" style="background-color: #fff;">
                                      <thead style="color:#000">
                                    <tr>
                                        <th style="color:#000">#</th>
                                        <th>اسم المنتج</th>
                                        <th>السعر</th>
                                        <th>العدد</th>
                                        <th>الاجمالى</th>
                                        <th>التاريخ</th>
                                        <th>تعديل</th>
                                        <th>حذف</th>
                                        
                                    </tr>
                                </thead>
                                    <tfoot>
                                     <tr>
                                        <th style="color:#000">#</th>
                                        <th>اسم المنتج</th>
                                        <th>السعر</th>
                                        <th>العدد</th>
                                        <th>الاجمالى</th>
                                        <th>التاريخ</th>
                                        <th>تعديل</th>
                                        <th>حذف</th>
                                        
                                    </tr>
                                    </tfoot>
                                    <tbody class="">
                                          
<?php
       $get = new storseal();
       $getdat=$get->showdatastor();
       if($getdat !== null){
         $nuber = 1;  
           foreach ($getdat as $data){ ?>
               
 <tr>

      <th scope="row"><?=$nuber ++ ;?></th>
      <td ><?=$data['prodectname'];?></td>
      <td ><?php echo $data['price'] ?></td>
      <td><?php echo $data['count'] ?></td>
      <td ><?php echo $data['total'] ?></td>
      <td><?php echo $data['date'] ?></td>

	


      <td>
          <?php

       echo '<a  href="editstorseal.php?getstorid='.$data['stor_id'].'" class="btn btn-success "><i class="material-icons">create</i></a>'; 
   
          ?>
    
      </td>
      <td>
          <?php
                echo '<a  href="deletestorseal.php?getstorid='.$data['stor_id'].'" class="btn btn-danger del33"
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
