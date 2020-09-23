

<?php require 'ini/confg.php';?>
                            
            <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card" style="height:auto;direction: rtl;margin-top: 0px">
                        <div class="header  bg-blue">
                            <h2>
                              عرض نتائج البحث
                            </h2>
                            <i class="material-icons bg-red" id="closers" style="float: left;margin-top: -22px;cursor: pointer">close</i>
                        </div>
                

                            <div class="table-responsive">
                                <table class="table table-striped  table-hover dataTable js-exportable" style="background-color: #fff;">
                                      <thead style="color:#000">
                                    <tr>
                                        <th style="color:#000">#</th>
                                        <th>اسم العميل</th>
                                        <th>رقم التيلفون </th>
                                        <th>بيع منتج</th>
                                         <th>تسجيل قسط</th>
                                        <th>التقارير</th>
                                        
                                    </tr>
                                </thead>
                                    <tfoot>
                                            <tr>
                                        <th style="color:#000">#</th>
                                        <th>اسم العميل</th>
                                        <th>رقم التيلفون </th>
                                        <th>بيع منتج</th>
                                        <th>تسجيل قسط</th>
                                         <th>التقارير</th>
                                   
                                        
                                    </tr>
                                    </tfoot>
                                    <tbody class="">
                                          
<?php


       $get = new minrepo();
       $getdat=$get->showcustor($_POST['inp']);
       if($getdat == null){ ?>
           
            <tr>
                <td ><?php echo msg::setmsg("لايوجد نتائج لبحثك اسم العميل غير مسجل لدينا","danger");?></td>
                <td><a href="addcustomer.php" style="height: 65px;
line-height: 58px;
font-size: 15px;" class="btn btn-info"><i class="material-icons">add_circle_outline</i> اضافه  عميل جديد</a>
                </td>
            
            </tr> 
              

            
        <?php   }else{     
  
       
         $nuber = 1;  
           foreach ($getdat as $data){ 
             
               ?>
    
 <tr>

      <th scope="row"><?=$nuber ++ ;?></th>
      <td ><?=$data['name'];?></td>
      <td ><?=$data['phone'];?></td>
     
	
            
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
    }
    
           }
    ?>

     
    
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
                            
<script>
    $("#closers").on("click",function(){
       
       $(".popup1").fadeOut(400);
       
   });




</script>      