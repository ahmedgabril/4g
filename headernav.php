 <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>من فضلك انتظر ثوانى جارى  تحميل الصفحه</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text"id="searshcustomer" placeholder="ادخل كلمه البحث">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar" style="background-color: #191c24">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
          <!--<a href="javascript:void(0);" class="bars"></a>-->
           <a class="getbars1 "href="javascript:void(0);" class=""><i class="material-icons getbars">format_line_spacing</i></a>
                <a class="" href="index.php"><img class="imglog"src="images/mobile-phone-application-logo-template-vector-14734409-removebg-preview (2).png" style="width: 153px;height:55px"></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <li class="dropdown" >
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons getnot">notifications</i>
                            <span class="label-count not"></span>
                        </a>
                        <ul class="dropdown-menu"style="background-color: #fff;font-family: 'Amiri', serif !important;left: 0px;
                           width: 310px;">
                            <li class="header">الاشعارات</li>
                            <li class="body">
                                <ul class="menu loadnot" style="height: 330px;
                                        overflow-y: scroll;">
                         
                          
      
                               
                        
                                </ul>
       
                            </li>
                            <li class="footer">
                                <a href="viwallnot.php" style="font-family: 'Amiri', serif !important;">شاهد جميع الاشعارات</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                
                    <li class="pull-right"><a href="index.php" class="js-right-sidebar" data-close="true"><i class="material-icons">home</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <?php
                    if($_SESSION['image']== ""){
                        
                      echo '<img src="images/user.png" width="58" height="58" alt="User" />';  
                        
                    } else {
                        
                          echo '<img src="uploade/'.$_SESSION['image'].'" width="48" height="48" alt="User" />';  

                        
                    }
                    
                    
                    ?>
                
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo isset($_SESSION['email'])? $_SESSION['name']:"ahmed";?></div>
                    <div class="email"><?php echo isset($_SESSION['email'])?$_SESSION['email']:"ahmedgabril@gmail.com";?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="profile.php"><i class="material-icons">person</i>الصفحه الشخصيه</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="login.php"><i class="material-icons">lock</i>تسجيل الدخول</a></li>
                         
                            <li role="separator" class="divider"></li>
                            <li><a href="logout.php"><i class="material-icons">input</i>تسجيل الخروج</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu" style="margin-bottom: 10px">
                <ul class="list">
                    <li class="header text-right">اداره صفحات البرنامج</li>
                    <li>
                        <a href="index.php">
                            <i class="material-icons">home</i>
                            <span>الصفحه الرئيسه</span>
                        </a>
                    </li>
                 
<!--                 <li>
                        <a href="../../pages/helper-classes.html">
                            <i class="material-icons">layers</i>
                            <span>Helper Classes</span>
                        </a>
                    </li>-->
                  
                      
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                   
                                        <div class="icon">
                                    <i class="material-icons"> group_add</i>
                                    </div>
                                    <span>قسم الاعضاء</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="addmember.php"> اضافه عضو جديد اللى البرنامج</a>
                                    </li>
                                    <li>
                                        <a href="showalluser.php">عرض بيانات الاعضاء</a>
                                    </li>
                                  
                                </ul>
                            </li>
           
                   
                       
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                  
                                        <div class="icon">
                                    <i class="material-icons">group</i>
                                    </div>
                                    <span>قسم اداره الاقساط والعملاء</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="addcustomer.php">اضافه عميل جديد</a>
                                    </li>
                                    <li>
                                        <a href="showcustomer.php">عرض بيانات العملاء</a>
                                        
                                    </li>
                            
                                </ul>
                            </li>
                       
        
                   
                    
                
                        
                    
                  
                   
                     
                            <li>
                       <li>
                           <a href="latecstmoer.php">
                            <i class="material-icons">search</i>
                            <span>بحث  يدوى عن المتأخرين عن السداد</span>
                        </a>
                    </li>
<!--                       
                                <a href="javascript:void(0);" class="menu-toggle">
                                   
                                    <div class="icon">
                                    <i class="material-icons">store</i>
                                    </div>
                                    <span>قسم اداره المحل</span>
                              
                                </a>
                          
                                <ul class="ml-menu">
                                    <li>
                                        <a href="storseal.php">تسجيل فاتوره شراء</a>
                                    </li>
                                    <li>
                                        <a href="storby.php">تسجيل فاتوره بيع</a>
                                    </li>
                                    <li>
                                        <a href="showstorseal.php">عرض تقاير فواتير الشرء</a>
                                    </li>
                                    <li>
                                        <a href="showstorby.php"> عرض تقاير فواتير البيع</a>
                                    </li>
                             
                           
                            </li>
                       
                        </ul>
                    </li>-->
<!--                         <a href="javascript:void(0);" class="menu-toggle">
                                   
                                    <div class="icon">
                                    <i class="material-icons">store</i>
                                    </div>
                                    <span>قسم اداره الشكك</span>
                              
                                </a>-->
<!--                <ul class="ml-menu">
                                           
                                    <li>
                                        <a href="adddept.php">تسجيل فاتوره بيع  مؤجله الدفع</a>
                                    </li>
                                            
                           
                            </li>
                       
                        </ul>                    
                                    <li>
                                        <a href="showdept.php">عرض فواتير العملاء  مستحقه الدفع</a>
                                    </li>
                                  
                                 
                           
                            </li>
                       
                        </ul>-->
                </ul>
            </div>
    <!-- Footer -->
    <div class="legal"dir="rtl">
                <div class="copyright">
                    &copy; <?php echo date("Y")?> <a href="javascript:void(0);">Easy Control</a>.
                </div>
                <div class="version">
                    <b> الاصدار</b> 1:1.5
                </div>
                <div class="version">
                    <b> مبرمج</b> احمد جبريل
                </div>
                <div class="version">
                    <b>موبايل</b> 01092586526---01000038025
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
       
    </section>

 <div class="popup1">
            <div class="inner">
                <div class="content text-danger" >
                    <div class="row">
                        <div class="col" id="serresalet">
            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                        </div> 
                    </div> 
                 
                    
                </div>
                
                
            </div>
            
        </div>