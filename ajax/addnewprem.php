<?php
require '../ini/confg.php';
require '../topheader.php';
?>
<?php

  $info1 = new reportc();
  $getinfo = $info1->getidofpremmanth($_POST['getid']);
  if($getinfo !== NULL){
      
      foreach ($getinfo as $getdata) {} 
      
  }
  


?>
 <div class="modal fade" id="sign-in-modal11" tabindex="-1" dir="rtl">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">تسجيل القسط الشهرى</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
   <div id="sinmsg"class="masge11"></div>

<div class="modal-body p-b-0">
    <form id="updatenewprem" method="post">
<div class="row">
<div class="col-sm-12">
<div>
<label class="form-control-label" >القسط الشهرى </label>
<input type="number" value="<?=$getdata['amount_manth']?>" name="premmanth"dir="auto" class="form-control" >
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div>
<label class="form-control-label">التاريخ</label>
 <input type="text" name="date"value="<?=$getdata['date']?>" id="bs_datepicker_component_container"class="form-control" placeholder="ادخل التاريخ" autocomplete="off">

</div>
<div>
<label class="form-control-label">الملاحظات</label>
<textarea type="text" dir="auto"name="dis" class="form-control"> value="<?=$getdata['discrption']?>"</textarea>


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


<?php require '../lassfooter.php';?>