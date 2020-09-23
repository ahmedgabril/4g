 
<?php require 'ini/confg.php';?>
<?php require 'topheader.php';?>
<?php require 'headernav.php';?>

     <?php

  if($_SESSION['is_admin'] == 3 or $_SESSION['viweprim']){ ?>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card" style="height:auto;direction: rtl;margin-top: 100px">
                        <div class="header">
                            <h2>
                              عرض بيانات العملاء
                            </h2>
                            
                        </div>
                        <div class="session">
                          <?php
                          if(isset( $_SESSION['noprodect'])){
                              
                           echo msg::setmsg("هذا العميل ليس لديه منتج لدفع قسط له","info");
                             unset( $_SESSION['noprodect']);
                          }
                          if(isset( $_SESSION['addcustomer'])){
                              
                           echo msg::setmsg("تم اضافه بيانات العميل بنجاح","success");
                           unset( $_SESSION['addcustomer']); 
                          }
                          if(isset( $_SESSION['delcustome'])){
                              
                           echo msg::setmsg("تم الحذف بنجاح","success");
                           unset( $_SESSION['delcustome']); 
                          }
                          if(isset( $_SESSION['addprodectsuccess'])){
                              
                           echo msg::setmsg("تم اضافه عمليه البيع بنجاح","success");
                           unset(   $_SESSION['addprodectsuccess']); 
                          }
                          if(isset( $_SESSION['addmanthpay'])){
                              
                           echo msg::setmsg("تم تسجيل عمليه دفع القسط بنجاح","success");
                           unset( $_SESSION['addmanthpay']); 
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
                                        <th>رقم التيلفون </th>
                                        <th>رقم البطاقه</th>
                                        <th>التاريخ</th>
                                        <th>بيع منتج</th>
                                         <th>تسجيل قسط</th>
                                        <th>الصفحه الشخصيه</th>
                                        <th>تعديل</th>
                                        <th>حذف</th>
                                        
                                    </tr>
                                </thead>
                                    <tfoot>
                                          <tr>
                                        <th style="color:#000">#</th>
                                        <th>اسم العميل</th>
                                        <th>رقم التيلفون </th>
                                        <th>رقم البطاقه</th>
                                        <th>التاريخ</th>
                                        <th>بيع منتج</th>
                                         <th>تسجيل قسط</th>
                                        <th>الصفحه الشخصيه</th>
                                        <th>تعديل</th>
                                        <th>حذف</th>
                                        
                                    </tr>
                                    </tfoot>
                                    <tbody class="">
                                          
<?php
       $get = new member();
       $getdat=$get->showcustor();
       if($getdat !== null){
         $nuber = 1;  
           foreach ($getdat as $data){ ?>
               
 <tr>

      <th scope="row"><?=$nuber ++ ;?></th>
      <td ><?=$data['name'];?></td>
      <td ><?=$data['phone'];?></td>
      <td><?php echo $data['id_number'] ?></td>
      <td ><?php echo $data['date'] ?></td>

            
      <td>
          <?php

       echo '<a href="addreset.php?getid='.$data['customer_id'].'"class="btn btn-info cpro"><i class="material-icons">shopping_cart</i></a>'; 
   
          ?>
    
      </td>
            
      <td>
          <?php

       echo '<a href="addmanthpay.php?getid='.$data['customer_id'].'"class="btn btn-warning cpro"><i class="material-icons">monetization_on</i></a>'; 
   
          ?>
    
      </td>
      <td>
          <?php

       echo '<a  href="reportcustomer.php?getid='.$data['customer_id'].'" class="btn btn-primary cpro"><i class="material-icons">description</i></a>'; 
   
          ?>
    
      </td>
      <td>
          <?php
           
       echo '<a <a  href="updatecustor.php?getid='.$data['customer_id'].'" class="btn btn-success "><i class="material-icons">create</i></a>'; 

          ?>
    
      </td>
      <td>
          <?php
                echo '<a  href="ajax/deletecustor.php?getid='.$data['customer_id'].'" class="btn btn-danger del33"
          ><i class="material-icons">delete_forever</i></a>' ; 
                
            }

          } 
          

        
          ?>
      </td>
  
    </tr>
           
     

                        </tbody>
                                </table>
                            </div>
                            <a href="addcustomer.php" class="btn btn-info"><i class="material-icons">add_circle_outline</i> اضافه  عميل جديد</a>
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
<?php require 'lassfooter.php';?>
