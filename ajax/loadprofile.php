



        <div class="card profile-card clo" style="height: auto">
                        <div class="profile-header">&nbsp;</div>
                        <div class="profile-body">
                            <div class="image-area">
                                <?php
                                require '../ini/confg.php';
                                $n = new profile();
                               $data=$n->showdata();
                          
                                if($data['image'] == ""){ 
                                    
                            echo'<img src="uploade/user-lg.jpg" />';
  
                                } else { ?>
                                    
                             <img src="uploade/<?php echo $data['image'];?>"style="width:160px;height:160px" alt="Profile Image" /> 
                                   
                           <?php    } ?>
                                
                                
                            </div>
                            <div class="content-area">
                                <h3><?=$data['name'];?></h3>
                        
                                <p><?php if($data['is_admin'] == 3){echo "المديرالتنفيذى";}elseif($data['is_admin'] == 2){echo "المديرالعام";} ?></p>
    

                            </div>
                        </div>
                        <div class="profile-footer">
                            <ul>
                                <li>
                                         <span style="font-size:10px;color:#9d1451;float: right">البريد الالكترونى</span>
                                    <span style="float: left;margin-top: -5px"><?php echo $data['email']?></span>
                                 
                                </li>
                                <li>
                                    <span style="color:#9d1451;font-size:10px;float: right">تاريخ انشاء الحساب</span>
                                    <span style="float: left"><?php echo $data['date']?></span>
                                   
                              
                                </li>
                              
                            </ul>
                        </div>
                    </div>



