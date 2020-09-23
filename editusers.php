   <?php require 'ini/confg.php';?>
<?php require 'topheader.php';?>
<?php require 'headernav.php';?>
<?php 
if(isset($_GET['getuserid'])){
   $id = filter_var($_GET['getuserid'],FILTER_SANITIZE_NUMBER_INT); 
   
   $info = new users();
   $getdata = $info->editusers($id);


   $getstorpremtion = explode(",",$getdata['storpremtion']);
   

   
   $getprimpremtion = explode(",",$getdata['primprmtion']);
  
   ?>



<div class="container-fluid">
    <div class="signup-box" style="max-width: 500px;
                margin: 10px auto;
                height: auto;">
    
         <div class="card" style="direction: rtl ;height:auto" >
            <div class="header">
                 <div class="msg">تحديث صلاحيات الاعضاء</div>
               
            </div>
            <div class="body">
                <form id="sign_up" action="updateusers.php"class="editusers" method="POST">
             
           
            
                     <div class="col-md-12">
                         <input type="hidden" name="user_id" value="<?php echo $getdata['user_id']?>">
                                    <select class="form-control show-tick" name="isadmin">
                                        <option  class="selectyed"value="<?php echo $getdata['is_admin']?>"><?php if($getdata['is_admin'] == 1){echo "بدون صلاحيه";}elseif($getdata['is_admin'] == 2){echo "تحكم بصلاحيات محدده";}elseif($getdata['is_admin'] == 3){echo "تحكم كامل";}?></option>
                                        <option value="1">بدون صلاحيه</option>
                                        <option value="2">تحكم بصلاحيات محدده</option>
                                     <option value="3">تحكم كامل </option>
                                    
                                    </select>
                                </div>
                                      <div class="col-md-12">
                                        <lable>صلاحيات التحكم فى قسم اداره الاقساط والعملاء</lable>
                                      </div>
                                     
                    <input type="checkbox" name="prepremtion[]" id="md_checkbox_37" value="add" <?php if(in_array("add", $getprimpremtion)){echo "checked=''";}?>class="chk-col-purple"  />
                                <label for="md_checkbox_37">اضافه</label>
                                        <div class="col-xs-3">
                                             <input type="checkbox" name="prepremtion[]"value="edit" <?php if(in_array("edit", $getprimpremtion)){echo "checked=''";}?> id="md_checkbox_38" class="chk-col-green"  />
                                <label for="md_checkbox_38">تعديل</label>  
                                    </div>
                                        <div class="col-xs-3">
                                            <input type="checkbox" name="prepremtion[]"value="del" <?php if(in_array("del", $getprimpremtion)){echo "checked=''";}?> id="md_checkbox_39" class="chk-col-red"  />
                                <label for="md_checkbox_39">حذف</label>  
                                    </div>
                                        <div class="col-xs-3">
                                                 <input type="checkbox" name="prepremtion[]" value="viwe" <?php if(in_array("viwe", $getprimpremtion)){echo "checked=''";}?>id="md_checkbox_40" class=" chk-col-blue"  />
                                <label for="md_checkbox_40">مشاهده</label>   
                                    </div>
                                
                           
                            
                        
                            
                                    <div class="col-md-12">
                                        <lable>صلاحيات التحكم فى قسم اداره المحل</lable>
                                    </div>
                                <div></div>
                               <input type="checkbox" name="storpre[]" value="add" <?php if(in_array("add", $getstorpremtion)){echo "checked=''";}?>id="md_checkbox_77" class="chk-col-purple"  />
                                <label for="md_checkbox_77">اضافه</label>
                                        <div class="col-xs-3">
                                             <input type="checkbox" name="storpre[]"<?php if(in_array("edit", $getstorpremtion)){echo "checked=''";}?> value="edit"id="md_checkbox_88" class="chk-col-green"  />
                                <label for="md_checkbox_88">تعديل</label>  
                                    </div>
                                        <div class="col-xs-3">
                                              <input type="checkbox" name="storpre[]"<?php if(in_array("del", $getstorpremtion)){echo "checked=''";}?> value="del" id="md_checkbox_99" class="chk-col-red"  />
                                <label for="md_checkbox_99">حذف</label>  
                                    </div>
                                        <div class="col-xs-3">
                                                 <input type="checkbox" name="storpre[]" <?php if(in_array("viwe", $getstorpremtion)){echo "checked=''";}?>value="viwe"id="md_checkbox_55" class=" chk-col-blue"  />
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
    
<?php }else {
    
$_SESSION['redirctedit'] = TRUE;
    
header("Location:showalluser.php");
exit();
}
?>
<?php require 'lassfooter.php'; ?>

