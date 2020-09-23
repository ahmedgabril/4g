<?php
require '../ini/confg.php';

if($_SERVER['REQUEST_METHOD']== "POST"){


 $get = new reportc();
 $data3 = $get->showpremmanth($_POST['getval']);

    
       if($data3 !== null){
         $nuber = 1;  
 
              foreach ($data3 as $data7){ 
               

           }

   
       } 
          
  
       
       ?>
 
               
                                          
             
 <?php
 $data1 = $get->showpremmanth2($_POST['getval']);
 
       if($data1 !== null){
         $nuber = 1;  
           foreach ($data1 as $data){ ?>
<tr>
      <th scope="row"><?=$nuber ++ ;?></th>
      <td style='color:#f43737'><?=$data['name'];?></td>
      <td style='color:#f43737'><?=$data['prodect_name'];?></td>
      <td style='color:#f43737'><?=$data['prem_manth'];?></td>
      <td style='color:green'><?=$data['amount_manth'];?></td>
      <td style='color:#f43737'> <?=$data['discrption'];?></td>
      <td style='color:#f43737'><?=$data['date'];?></td>
      <td style='color:#f43737'> <a href="#"rel="<?=$data['id'];?>" class="btn btn-success getpremids"><i class="material-icons">create</i></a></td>
      <td style='color:#f43737'> <a href="#"rel="<?=$data['id'];?>" class="btn btn-danger getpremids2 del233"><i class="material-icons">delete_forever</i></a></td>


    </tr>

                 
   <?php      }

   
   ?>
       
    <td>
              <a href="#" rel="<?php echo $data7['prem_id'];?>"class="btn btn-info insertprem"><i class="material-icons">add</i>اضافه شهر جديد</a>

               
</td>
                   
  

   
 
 <?php } else {
 
 
  $getnewdate= date("Y-m-d",$date1);
         for($i=0;$i<$data7['prem_lemt'];$i++){ 
             $date1 = strtotime("+$i month",strtotime($data7['premdatenew']));
            $getnewdate= date("Y-m-d",$date1); 
      $get->insertdata($data7['customer_id'],$data7['prem_id'],$getnewdate) ;
    $get1 = new prem();
   $get1->getnotv();
        }
               

         ?>

    

       
     <?php } ?>
      

    
 <?php } else {
  header("Location:../showcustomer.php");
  exit();  
}

?>

    <script>

 $(".getpremids").on("click",function(){
 
   var getid = $(this).attr("rel");

 $.post("editpremmanthnew.php",{getid:getid},function(data){
 
 $(".getprem").html(data);   
  
$(".getmanth").fadeOut(500);
 $(".getprem").html(data).show(); 

     
 });
     

     

});
  $(".del233").on("click",function(){
      
      return confirm("هل انت متأكد ");
  });
 $(".getpremids2").on("click",function(){

   var getid1 = $(this).attr("rel");
  
 $.post("deletemanthprem.php",{getid1:getid1});
     

});

 $(".insertprem").on("click",function(){

   var getid2 = $(this).attr("rel");
 $.post("ajax/insertnewprem.php",{getid2:getid2});

     

     

     
  
 });
     






            </script>