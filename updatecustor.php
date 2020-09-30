
<?php require 'topheader.php';?>
<?php require 'ini/confg.php';?>
<?php require 'headernav.php';?>
<?php 
 if($_SESSION['is_admin'] == 3 or $_SESSION['editprim']){
 $id = filter_var($_GET['getid'],FILTER_SANITIZE_NUMBER_INT);
$data = new member();
$get = $data->displycustoronupdate($id);

if($get !==NULL){
    
  foreach($get as $value){
      
      
  }  
    
}


?>

<div class="container-fluid" >
    <div class="row clearfix" style="margin-top:15px">
      
        <div class="col-md-3"></div>
        <div class="col-md-6"style="margin:auto">
         
            <div class="card card-user" style="height:auto; direction: rtl">
                <div class="card-header bg-dark">
             

                    <h5 class="header">تعديل بيانات العميل</h5>
      
                </div>
                <div class="body">
                    <form class="" method="post" id="editmem">
                        <div class="form-group ">
                                 <div class="form-line">
                            <label class="label">اسم العميل</label>
                            
                            <input class="form-control"name="name" value="<?php echo $value['name'];?>" type="text" required="">
                            <input class="form-control"name="member_id" value="<?php echo $value['customer_id'];?>" type="hidden">
                                 </div>
                        </div> 
                        
                                           <div class="input-group date" id="bs_datepicker_component_container">
                                        <div class="form-line">
                                            <input type="text" name="date"value="<?php echo $value['date'];?>"  class="form-control" placeholder="ادخل التاريخ" autocomplete="off">
                                        </div>
                                        <span class="input-group-addon">
                                            <i class="material-icons">date_range</i>
                                        </span>
                                    </div>
                   
                        <div class="form-group ">
                                 <div class="form-line">
                            <label class="label">رقم الهاتف</label>
                            <input class="form-control"name="phone"value="<?php echo $value['phone'];?>"  type="number">
                            
                        </div> 
                        </div> 
                        <div class="form-group">
                                 <div class="form-line">
                            <label class="label">رقم البطاقه</label>
                            <input class="form-control"name="idn"value="<?php echo $value['id_number'];?>" type="number">
                            
                        </div> 
                        </div> 
                        
                             
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize"name="dec"placeholder="ملاحظات"><?php echo $value['dis'];?></textarea>
                                        </div>
                                    </div>
                
                        
                               <div id="msgcon"></div>
                        <div class="form-group" style="margin-right:18px">
                            <button type="submit" class="btn btn-success"> تحديث البيانات <i class='fa fa-plus'></i> </button>
                           </button>
                        </div>
                        
                    </form> 
                </div>
            </div>  
        </div> 
          <div class="col-md-3"></div>
    </div>   
    
</div>
           <?php  } else {
        
     header("Location:error404.php");
        exit();
        
        
        
    }
   
?>
<?php require 'lassfooter.php';?>