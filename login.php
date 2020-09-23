<?php require 'ini/confg.php';?>
<?php require __DIR__.'/topheader.php';

?>
   

           

       
        <div class="container">

            <div class="row"style="direction:rtl;">
                <div class="col-10"style="margin-top:30px">
                <div class="session">
                          <?php
                         
                          if(isset( $_SESSION['forgetpass'])){
                              
                           echo msg::setmsg("تم تحديث كلمه المرور بنجاح","success"); 
                              unset( $_SESSION['forgetpass']); 
                          }
                           ?>
                    </div>
                </div>
                <div class="col-md-3"></div>
    
                <div class="col-md-6  bg-dark" style="margin :70px 15px ;height:370px">
                    <div class="p-3" >
                     
                        <h2 class="mt-9 text-center"style="margin-top: 18px;
                                    margin-bottom: 16px;
                                    padding-top: 24px;">تسجيل الدخول</h2>
                        <form class="mt-4"id="login5"  method="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-light" for="uname">البريد الالكترونى</label>
                                        <input class="form-control"dir="auto" name="email"  id="uname" type="email"
                                            placeholder="Enter Email ">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-light" for="pwd">كلمه المرور</label>
                                        <input class="form-control" dir="auto" name="pass" id="pwd" type="password"
                                            placeholder="Enter Password">
                                    </div>
                                </div>
                                
                                <div class="col-lg-12 text-center">
                                    <a href="#" class=""data-toggle="modal" data-target="#pwd-recovery"style="margin-right: -125px;
                                                    color: red;
                                                    margin-bottom: 11px;
                                                    padding: 10px;
                                                    display: inline-block;">نسيت كلمه المرور</a>
                                                         </div>
                              
                                <div id="masge22"class=" col-lg-12 masge11" ></div>
                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="btn btn-block btn-danger">دخول</button>
                                </div>
                            
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>

        </div>



<div class="modal fade" id="sign-in-modal" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">انشاء حساب جديد</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
   <div id="sinmsg"class="masge11"></div>

<div class="modal-body p-b-0">
    <form id="sinup1" method="post">
<div class="row">
<div class="col-sm-12">
<div>
<label class="form-control-label">الاسم </label>
<input type="text" name="username"dir="auto" class="form-control" >
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div>
<label class="form-control-label">البريد الالكترونى</label>
<input type="email" name="email" class="form-control" >
</div>
<div>
<label class="form-control-label">كلمه المرور</label>
<input type="password" dir="auto"name="pass" class="form-control" 
<div>
<label class="form-control-label">تاكيد كلمه المرور</label>
<input type="password"dir="auto" name="rpass" class="form-control">
</div>
</div>
</div>
<div class="form-group row m-t-15">


</div>

</div>
<div class="modal-footer text-right">
    <button type="submit" class="btn btn-primary">تسجيل </button>
    <button type="submit" class="btn btn-danger" data-dismiss="modal">الغاء</button>
</div>
   </form>
</div>
</div>
</div>


    <div class="modal fade" id="pwd-recovery" tabindex="-1" style="direction: rtl">
<div class="modal-dialog" role="document">
<div class="modal-content">

<div class="modal-header">
<h5 class="modal-title pull-right">استعاده كلمه السر </h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
    <div id="msg3"class="masge11"></div>
<div class="modal-body">
    
<div>
    <form id="confrime" method="post" class="sendemail">
<label class="form-control-label">البريد الالكترونى</label>
<input type="email" name="email" class="form-control" placeholder="ادخل بريد الكترونى صحيح">
</div>
</div>
    
<div class="modal-footer">
<button type="submit" class="btn btn-primary">ارسال </button>
</form>
</div>
</div>
</div>
</div>


<?php require 'lassfooter.php';?>




