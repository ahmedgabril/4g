<?php

class msg {
public static $message;    
public static function setmsg($msg, $type){?>
   <div class="msg text-center alert alert-<?=$type?> alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                         <?php
                         if($type == "success"){
                            
                             echo  "<i class='material-icons' style='margin-left:10px'>done</i>";
                         }elseif ($type == "danger") {
                              
                             echo  "<i class='material-icons' style='margin-left:10px'>error_outline</i>";         
                         }elseif ($type == "info") {
                           
                             echo  "<i class='material-icons' style='margin-left:10px'>add_alert</i>";          
                        
                         }elseif ($type =="warning") {
                            
                             echo  "<i class='material-icons' style='margin-left:10px'>warning</i>";         
                        }
                       
                        ?><?=$msg?></div>
    
   <?php }
}
