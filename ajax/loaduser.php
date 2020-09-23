    <?php require '../ini/confg.php';?>
    <?php require '../topheader.php';?>

 <?php
       $get = new usercon();
       $getdata=$get->showdata();
       if($getdata !== null){
         $nuber = 1;  
           foreach ($getdata as $data){ ?>
               
 <tr>

      <th scope="row"><?=$nuber ++ ;?></th>
      <td><?=$data['username'];?></td>
      <td><?=$data['email'];?></td>
      <td><?php if($data['is_admin'] == 1){echo "<span class='text-success'>نشيط</span>";}else{echo "<span class='text-danger'>غير مفعل </span>";} ?></td>
      <td><image style="width:60px;height:50px;border-radius: 50%" src="uploade/<?php if($data['image'] == ""){echo "profile-pic.jpg"; }else{echo $data['image'];}?>"></td>
      
      <td>
          <?php
          if($data['is_admin'] == 1 ){ 
  
        echo '<a rel="'.$data['id'].'" href="javascript:void(0)" class="btn btn-primary del11"style="margin-bottom:5px"
          >ايقاف</a>' ; 
         } else { 
            if($data['is_admin'] == 0){
             echo '<a rel="'.$data['id'].'" href="javascript:void(0)" class="btn btn-success del12"style="margin-bottom:5px">تفعيل</a>'; 
    
            } else {
                
                echo '<a rel="'.$data['id'].'" href="javascript:void(0)" class="btn btn-primary del11"
          >ايقاف</a>' ; 
                
            }

          } ?>
       
   <a rel="<?=$data['id'];?>"href="javascript:void(0)" class="btn btn-danger del1"style="margin-bottom:5px"
    >حذف</i></a>
  
          
      </td>
    </tr>
           
               
          <?php }  
           
       }
       
      
      ?>
  <?php require '../lassfooter.php';?>
    <script>
$(document).ready(function () {
   
  $(".del1").on('click',(function() {
      
   if(confirm("هل انت متأكد")){ 
var id = $(this).attr("rel");

$.post("deleteuser.php",{id:id},function(data){
    
   $("#delmsg").html(data);
     
});
   }
}));
  $(".del11").on('click',(function() {
      
   
var id = $(this).attr("rel");

$.post("stopuser.php",{id:id},function(data){
    
   $("#delmsg").html(data);
 
});

}));
  $(".del12").on('click',(function() {
      
   
var id = $(this).attr("rel");

$.post("activeuser.php",{id:id},function(data){
    
   $("#delmsg").html(data);
     
});

}));
  

});
    </script>