
<?php require 'ini/confg.php';?>
<?php require 'topheader.php';?>
<?php require 'headernav.php';?>
    <?php

  if($_SESSION['is_admin'] == 3){  ?>
        <div class="container-fluid">
        
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card" style="height:auto; direction: rtl">
                        <div class="header">
                            <h2>
                          عرض بيانات الاعضاء 
                            </h2>
                       
                        </div>
                        <div class="body">
                                <div class="session">
                          <?php
                         
                          if(isset( $_SESSION['deluser'])){
                              
                           echo msg::setmsg("تم الحذف بنجاح","success");
                           unset( $_SESSION['deluser']); 
                          }
                          if(isset($_SESSION['upusers'])){
                              
                           echo msg::setmsg("تم تحديث الصلاحيات بنجاح","success");
                           unset($_SESSION['upusers']); 
                          }
                          if(isset( $_SESSION['noch'])){
                              
                           echo msg::setmsg("لم تقم بأى تغيرات","info");
                           unset( $_SESSION['noch']); 
                          }
                          
                          ?> 
                            
                        </div>
                    <div class="table-responsive" style="margin-top: 25px;">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable" style="background-color: #fff ;color:#000">
                                   <thead>
                                      <tr>
                                            <th>#</th>
                                            <th>الاسم</th>
                                            <th>البريد الالكترونى</th>
                                            <th>حاله الحساب </th>
                                            <th>الصوره الشيخصيه</th>
                                    
                                            <th>تعديل</th>
                                            <th>حذف</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>الاسم</th>
                                            <th>البريد الالكترونى</th>
                                            <th>حاله الحساب </th>
                                            <th>الصوره الشخصيه</th>
                                       
                                            <th>تعديل</th>
                                            <th>حذف</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php 
                                        $f = new users();
                                        $getdata = $f->showalluser();
                                        $number = 1;
                                        if($getdata !== NULL){
                                            foreach ($getdata as $data){ ?>
                                                
                                        <tr>
                                            <td><?=$number++;?></td>
                                            <td><?=$data['name'];?></td>
                                            <td><?=$data['email'];?></td>
                                            <td><?php if($data['is_admin'] == 0){ echo "<span style='color:red;'>موقوف </span>";}else{echo "<span style='color:green;'>نشيط</span>";}?></td>
                                           <td><?php if($data['image'] == ""){echo "<img src='uploade/user-lg.jpg'style='width:80px;height:65px;border-radius:50%;'>";}else{echo "<img style='width:80px;height:65px;border-radius:50%;' src='uploade/".$data["image"]."'>"; } ?></td>

                                            <td><a href="editusers.php?getuserid=<?=$data['user_id'];?>" class="btn btn-success"><i class="material-icons">create</i></a></td>
                                            <td><a href="deleteusers.php?getuserid=<?=$data['user_id'];?>" class="btn btn-danger deluser"><i class="material-icons">delete</i></a></td>
                                   
                                        </tr>
                                                
                                        <?php    }  
                                            
                                        }
                                        
                                        ?>
                                 
                                       
                                    </tbody>
                                </table>
                            </div>
                            <a href="addmember.php" class="btn btn-info"><i class="material-icons">add_circle_outline</i> اضافه عضو جديد</a>
 
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
            <!-- #END# Basic Examples -->
            <?php require 'lassfooter.php';?>