<?php require 'ini/confg.php';?>
<?php



  $info1 = new reportc();
  $getinfo = $info1->getidofpremmanth($_POST['getid']);
  if($getinfo !== NULL){
      
      foreach ($getinfo as $getdata) {} 
      
  }
  
  
  
  ?>
  <div class="contanier-fluid hideup" dir="rtl">
            <div class="row clearfix">
                
                <div class="col-md-3"></div>
                <div class="col-md-6 col-sm-12 col-xs-12 ">
                    <div class="card " style="direction: rtl ;height:450px">
                        <div class="header text-danger bg-deep-purple">
                            <h2 class="text-center">تسجيل القسط الشهرى </h2>
                         
                        </div>
                        <div class="body" style="height:280px">
                            <form id="form_advanced_validation" class="updatepremmanthnew" method="POST">
                                
                                <div class="form-group form-float">
                                 <div class="form-line">
                                     <input type="number" value="<?=$getdata['amount_manth']?>" name="premmanth"dir="auto" class="form-control" >
                                    <input type="hidden" value="<?=$getdata['id']?>" name="id"dir="auto" class="form-control" >
                                                                <label class="form-label">القسط الشهرى</label>
                                    </div>
                                </div>
                         
                                    <div class="input-group date" id="bs_datepicker_component_container">
                                        <div class="form-line">
                                            <input type="text" name="date"value=" <?=$getdata['date']?>"class="form-control" placeholder="ادخل التاريخ" autocomplete="off">
                                        </div>
                                                  <div class="help-info">مثال 6-10-2020</div>
                                        <span class="input-group-addon">
                                            <i class="material-icons">date_range</i>
                                        </span>
                                    </div>
                   
                                <div class="form-group form-float">
                                    <div class="form-line">
                                       <label class="form-control-label">الملاحظات</label>
                                   <textarea type="text" dir="auto"name="dis" class="form-control"> <?=$getdata['discrption']?></textarea>

                                    </div>
                                </div>
                           
                           
                    
                                <div class="form-group" id="msg333"></div>
                                <div class="form-group col-sm-6" style="display: flex">
                                    <button class="btn btn-primary waves-effect"  style="width: 150px;
       
                                                margin-right: 20px;
                                        margin-top: 39px;"type="submit">تحديث البيانات</button>
                                    <button class="btn btn-danger back waves-effect"  style="width: 200px;
       
                                                margin-right: 50px;
                                                margin-top: 39px;"type="button">رجوع</button>

                               </div>
         
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
            </div>
       
            <!-- #END# Advanced Validation -->

            <script>
              ////////////////////////////////////////////////////////////////////////////  
   $(".updatepremmanthnew").on("submit",function(event){
    
  event.preventDefault();
  $.ajax({
      
      url:"ajax/updatepremmanth.php",
       type:"post",
       data: new FormData(this),
       contentType:false,
       cache:false,
       processData:false,
       success:function(feedback){

$("#msg333").html(feedback); 



       }
      
  });
 
});

  $(".back").on("click",function(){
         $(".getprem").fadeOut(500);   

        $(".getmanth").fadeIn(500);
      
  });

 //////////////////////////////////////////////////////////////
            
            
            </script>

