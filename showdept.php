 
<?php require 'ini/confg.php';?>
<?php require 'topheader.php';?>
<?php require 'headernav.php';?>

     <?php

  if($_SESSION['is_admin'] == 3 or $_SESSION['viwestor']){ ?>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card" style="height:auto;direction: rtl;margin-top: 70px">
                        <div class="header bg-red">
                            <h2>
                              عرض بيانات العملاءالتى لديهم ديون مؤجله الدفع
                            </h2>
                            
                        </div>
                <div class="session">
                          <?php

                          if(isset( $_SESSION['deldept'])){
                              
                           echo msg::setmsg("تم الحذف بنجاح","success");
                           unset( $_SESSION['deldept']); 
                          }
                          if(isset( $_SESSION['updept'])){
                              
                           echo msg::setmsg("تم  تحديث البيانات بنجاح","success");
                           unset(   $_SESSION['updept']); 
                          }
                          if(isset( $_SESSION['nochingup'])){
                              
                           echo msg::setmsg("لم تقم بأى تغيرات","info");
                           unset( $_SESSION['nochingup']); 
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
                                        <th>اسم المنتج </th>
                                        <th>المبلغ</th>
                                        <th>التاريخ</th>
                                        <th>تعديل</th>
                                        <th>حذف</th>
                                        
                                    </tr>
                                </thead>
                                    <tfoot>
                                            <tr>
                                        <th style="color:#000">#</th>
                                        <th>اسم العميل</th>
                                        <th>اسم المنتج </th>
                                        <th>المبلغ</th>
                                        <th>التاريخ</th>
                                        <th>تعديل</th>
                                        <th>حذف</th>
                                        
                                    </tr>
                                    </tfoot>
                                    <tbody class="">
                                          
<?php
       $get = new dept();
       $getdat=$get->showdept();
       if($getdat !== null){
         $nuber = 1;  
           foreach ($getdat as $data){ ?>
               
 <tr>

      <th scope="row"><?=$nuber ++ ;?></th>
      <td ><?=$data['customername'];?></td>
      <td ><?=$data['prodect'];?></td>
      <td><?php echo $data['amount'] ?></td>
      <td ><?php echo $data['date'] ?></td>
	
            

            
 
   
      <td>
          <?php

       echo '<a <a  href="editdept.php?getid='.$data['id'].'" class="btn btn-success "><i class="material-icons">create</i></a>'; 
   
          ?>
    
      </td>
      <td>
          <?php
           echo '<a  href="deldept.php?getid='.$data['id'].'" class="btn btn-danger del33"
          ><i class="material-icons">delete_forever</i></a>' ; 
                
            }

          } ?>
      </td>
  
    </tr>
           
     

                        </tbody>
                                </table>
                            </div>
                            <a href="adddept.php" class="btn btn-info"><i class="material-icons">add_circle_outline</i> اضافه  عميل جديد</a>
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
