
<?php
require '../ini/confg.php';
if($_SERVER['REQUEST_METHOD']== "POST"){
 
    $pre = new reportc();
   $get = $pre->showser($_POST['start'],$_POST['end']);
   $nuber = 1;
    if($get !== NULL){
        
        foreach ($get as $data){ ?>
            <tr>
      <th scope="row"><?=$nuber ++ ;?></th>
      <td style='color:#f43737'><?=$data['name'];?></td>
      <td style='color:#f43737'><?=$data['prodect_name'];?></td>
      <td style='color:#f43737'><?=$data['prem_manth'];?></td>
      <td style='color:green'><?=$data['amount_manth'];?></td>
      <td style='color:#f43737'> <?=$data['phone'];?></td>
      <td style='color:#f43737'><?=$data['date'];?></td>
      <td style='color:#f43737'> <a href="reportcustomer1.php?getpremid=<?=$data['prem_id'];?>" class="btn btn-success getpremids"><i class="material-icons">description</i></a></td>


    </tr>

            
            
        <?php }   
        
    } else { ?>
    <tr>
        <td style='color:#f43737'><?php echo msg::setmsg("لايوجد نتائج لبحثك تاكد من كتابه التاريخ بشكب صحيح","danger");?></td>;  
    </tr>
   <?php  }
}