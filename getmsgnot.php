<?php

require 'ini/confg.php';


$get = new notv();

$getdatan = $get->getnotv();
if($getdatan !== NULL){
    foreach ($getdatan as $info) { ?>
        
<li style="padding:25px"class="getnot">
            <a href="javascript:void(0);">
              
                <div class="menu-info"style="margin-right:20px">
                    <a href="reportcustomer1.php?getpremid=<?php echo $info['prem_id'] ?>"><?php echo nl2br($info['msg']); ?></a>
                   
                </div>
            </a>
        </li>

        
        
    
 
<?php }
    

 }else{ ?>
        
        <li  class="text-center"style="color:red"><?php echo 'لاتوجد اشعارات فى الوقت الحالى';?></li>      
<?php  } 
