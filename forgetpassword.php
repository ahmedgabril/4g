<?php require 'ini/confg.php';?>
<?php require __DIR__.'/topheader.php';
   

   if(isset($_GET['email']) and isset($_GET['code'])){
       
    $email  =  filter_var($_GET['email'],FILTER_SANITIZE_EMAIL) ; 
     $code = filter_var($_GET['code'],FILTER_SANITIZE_STRING);
   
$cofg = new forgetpass();

$fg = $cofg->cheekuser($email,$code);


if($fg !== NULL){
    foreach ($fg as $data){
        

        
      }
    }
  }
    if($data['email'] == $email and $data['active_code'] == $code){ ?>

   
       
        <div class="container">

            <div class="row"style="direction:rtl;">

                <div class="col-md-3"></div>
    
                <div class="col-md-6  bg-dark" style="margin :70px 15px ;height:370px">
                    <div class="p-3" >
                     
                        <h2 class="mt-9 text-center"style="margin-top: 18px;
                                    margin-bottom: 16px;
                                    padding-top: 24px;">تحديث كلمه المرور</h2>
                        <form class="mt-4"id="forgetp"  method="post">
                            <div class="row">
                   
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-light" for="pwd">كلمه المرور</label>
                                        <input class="form-control"  name="pass" id="pwd" type="password"
                                            placeholder="ادخل كلمه المرور">
                                        <input class="form-control"dir="auto" value="<?php echo isset($data['user_id'])? $data['user_id']:"";?>" name="id" type="hidden">
                                    </div>
                                </div>
                                
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-light" for="pwd">تأكيد كلمه المرور</label>
                                        <input class="form-control"  name="cpass" id="pwd" type="password"
                                            placeholder="تأكيد كلمه المرور">
                                    </div>
                                </div>
                                
                  
                              
                                <div id="masgef"class=" col-lg-12 masge11" ></div>
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
  <?php 
    
  
}else {
 
 header("Location:login.php");
 exit();
    }
    ?>
<?php require 'lassfooter.php';?>