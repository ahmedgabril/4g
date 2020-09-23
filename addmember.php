 
<?php 

require 'ini/confg.php';
require 'topheader.php';?>
<?php require 'headernav.php';?>


<?php

if($_SESSION['is_admin'] == 3){
    

?>
<div class="container-fluid">
    <div class="signup-box" style="max-width: 500px;
                margin: 10px auto;
                height: auto;">
    
         <div class="card" style="direction: rtl ;height:600px" >
            <div class="header bg-blue">
                 <div class="msg">اضافه عضو جديد </div>
               
            </div>
            <div class="body">
                <form id="sign_up" class="addmember" method="POST">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="ادخل اسم المستخدم"  >
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="ادخل البريد الالكترونى" >
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="ادخل كلمه المرور" >
                        </div>
                    </div>
                   
                     <div class="col-md-12">
                    
                                    <select class="form-control show-tick" name="isadmin">
                                        <option  class="selectyed"value="0">اختر الصلاحيه الاساسيه</option>
                                        <option value="1">بدون صلاحيه</option>
                                        <option value="2">تحكم بصلاحيات محدده</option>
                                     <option value="3">تحكم كامل </option>
                                    
                                    </select>
                                </div>
                                      <div class="col-md-12">
                                        <lable>صلاحيات التحكم فى قسم اداره الاقساط والعملاء</lable>
                                      </div>
                                     
                    <input type="checkbox" name="prepremtion[]" id="md_checkbox_37" value="add" class="chk-col-purple"  />
                                <label for="md_checkbox_37">اضافه</label>
                                        <div class="col-xs-3">
                                             <input type="checkbox" name="prepremtion[]"value="edit" id="md_checkbox_38" class="chk-col-green"  />
                                <label for="md_checkbox_38">تعديل</label>  
                                    </div>
                                        <div class="col-xs-3">
                                              <input type="checkbox" name="prepremtion[]"value="del"  id="md_checkbox_39" class="chk-col-red"  />
                                <label for="md_checkbox_39">حذف</label>  
                                    </div>
                                        <div class="col-xs-3">
                                                 <input type="checkbox" name="prepremtion[]" value="viwe"id="md_checkbox_40" class=" chk-col-blue"  />
                                <label for="md_checkbox_40">مشاهده</label>   
                                    </div>
                                
                           
                            
                        
                            
                                    <div class="col-md-12">
                                        <lable>صلاحيات التحكم فى قسم اداره المحل</lable>
                                    </div>
                                <div></div>
                               <input type="checkbox" name="storpre[]" value="add"id="md_checkbox_77" class="chk-col-purple"  />
                                <label for="md_checkbox_77">اضافه</label>
                                        <div class="col-xs-3">
                                             <input type="checkbox" name="storpre[]" value="edit"id="md_checkbox_88" class="chk-col-green"  />
                                <label for="md_checkbox_88">تعديل</label>  
                                    </div>
                                        <div class="col-xs-3">
                                              <input type="checkbox" name="storpre[]" value="del" id="md_checkbox_99" class="chk-col-red"  />
                                <label for="md_checkbox_99">حذف</label>  
                                    </div>
                                        <div class="col-xs-3">
                                                 <input type="checkbox" name="storpre[]" value="viwe"id="md_checkbox_55" class=" chk-col-blue"  />
                                <label for="md_checkbox_55">مشاهده</label>   
                                    </div>
                           
                             
                                       
                                                  
                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">تسجيل</button>

                          <div class="msg110 col-md-12" style="display: block"><div>                     
                </form>
            </div>
        </div>
    </div>
</div>
    </div>
    
    
<?php

    
} else {
    
    header("Location:error404.php");
        exit();
        
    
}

require 'lassfooter.php'; ?>

