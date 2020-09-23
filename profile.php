 <?php
 require 'ini/confg.php';

require 'topheader.php';?>
<?php require 'headernav.php';






?>



        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-3 load11">
            

                   
                </div>
                <div class="col-xs-12 col-sm-9">
                    <div class="card"style="height: auto">
                        <div class="body">
                            <div>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">تغير الاسم والصوره الشخصيه</a></li>
                                    <li role="presentation"><a href="#profile_settings" aria-controls="settings" role="tab" data-toggle="tab">تغير البريد الالكترونى</a></li>
                                    <li role="presentation"><a href="#change_password_settings" aria-controls="settings" role="tab" data-toggle="tab">تغير كلمه السر</a></li>
                                </ul>

                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="home">
                                        <form class="form-horizontal upimg"  inctype="multipart/form-data">
                                       
                                            <div class="form-group">
                                                <label for="Email" class="col-sm-2 control-label">الاسم</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" dir="rtl" class="form-control"value="<?php echo $_SESSION['name'];?>" id="Email" name="username" placeholder="اسم المستخدم">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="img" class="col-sm-2 control-label">اختر من الصور</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="file" class="form-control"value="" id="img" name="img">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="msg11"></div>
                                          
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button type="submit" class="btn btn-success btn-block" style="margin-top:30px">تحديث البيانات </button>
                                                </div>
                                            </div>
                                        </form>

                                  
                                    </div>
                                    
                                    
                                    
                                    <div role="tabpanel" class="tab-pane fade in" id="profile_settings">
                                        <form class="form-horizontal upemailp" >
                                       
                                            <div class="form-group">
                                                <label for="Email" class="col-sm-2 control-label">البريد الالكترونى</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="email" class="form-control" id="Email" name="email" placeholder="Email" required>
                                                    </div>
                                                </div>
                                            </div>
                          
                                           <div class="msg89"></div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="btn btn-info btn-block" style="margin-top: 30px">تحديث</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    
                                    <div role="tabpanel" class="tab-pane fade in" id="change_password_settings">
                                        <form class="form-horizontal" method="post" id="uppass">
                                      
                                            <div class="form-group">
                                                <label for="NewPassword" class="col-sm-3 control-label">كلمه السر الجديده</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" id="NewPassword" name="pass" placeholder="كلمه السر الجديده" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="NewPasswordConfirm" class="col-sm-3 control-label">تاكيد كلمه السر</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" id="NewPasswordConfirm" name="cpass" placeholder="تاكيد كلمه السر" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="msg88"></div>
                                            <div class="form-group">
                                                <div class=" col-sm-12">
                                                    <button type="submit" class="btn btn-danger btn-block" style="margin-top: 30px">تحديث</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  
<?php require 'lassfooter.php'; 

?>