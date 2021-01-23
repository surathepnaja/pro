
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>FITNESS TRAINER</title>
    <link rel="icon" href="/TrainerProject/User/img/laravel.png">

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
      
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="index.php">
                   <h3>Trainer System</h3>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>หน้าเเรก</a>                          
                        </li>
                        <li>
                            <a href="data.php">
                                <i class="fas fa-chart-bar"></i>สถิติ</a>
                        </li>
                        
                        <li>
                            <a href="job.php">
                                <i class="far fa-check-square"></i>งานที่ต้องทำ <span class="badge badge-danger">new</span></a>   
                                
                        </li>
                        <li>
                            <a href="calendar.php">
                                <i class="fas fa-calendar-alt"></i>ตารางสอน</a>
                        </li>

                        <li class="active">
                            <a href="mycourse.php">
                                <i class="fas fa-desktop"></i>คอร์สของฉัน</a>
                        </li>

                        <li>
                            <a href="map.php">
                                <i class="fas fa-map-marker-alt"></i>ร้านประจำ</a>
                        </li>


                        <li>
                            <a href="blog.php">
                            <i class="fas fa-copy"></i>เขียนบทความ</a>                          
                        </li>



                        <li>
                            <a href="history.php">
                             <i class="fas fa-book"></i>ประวัติการสอน</a>                          
                        </li>


                        
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">john doe</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="row">
                  <div class="col-md-8 offset-md-1 mr-auto ml-auto">
                       <div class="main-content">
                        <div class="section__content section__content--p30">
                            <div class="container-fluid">
                        
                                <div class="col-lg">
                                            <div class="card">
                                                <div class="card-header">                                                
                                                    <strong>ชื่อคอร์ส : InDepth Exercise เจาะลึก 45 ท่าเล่นเวทที่สำคัญ</strong> &nbsp;
                                                </div>
                                                <div class="card-body card-block">
                                                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                                                    
                                                        <div class="row form-group">
                                                            <img src="images/coures/1.jpg" class="float-right"> 
                                                        </div>


                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label for="textarea-input" class=" form-control-label">รายละเอียด : </label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <label for="textarea-input" class=" form-control-label">
                                                                
                                                                เจาะลึกการเคลื่อนไหว มุมการออกแรง การควบคุมน้ำหนักและการใช้กล้ามเนื้อให้ได้มากที่สุด 
                                                                ในแต่ละท่าฝึก รวมไปถึงการวิเคราะห์ข้อผิดพลาดที่พบบ่อย กับมุมที่อันตรายและเสี่ยงกับการบาดเจ็บ
                                                                เพื่อประโยชน์ในการป้องกันการบาดเจ็บจากการฝึกในแต่ละท่าฝึกด้วย ครอบคลุมการฝึกหลักกว่า 45 
                                                                ท่าฝึก ครบทุกส่วนร่างกายครอบคลุมทุกโปรแกรมการฝึก เรียนจริง ทำไปใช้ได้จริง ในรูปแบบ online 
                                                                ดูซ้ำได้ไม่จำกัด ภายในระยะเวลา 30 วัน ไม่ว่าคุณจะอยู่ที่ไหนก็ตาม <br>
                                                                

                                                                คอร์สนี้เหมาะสำหรับ<br>

                                                                    – ผู้ที่ต้องการศึกษาการออกกำลังกายอย่างถูกต้อง<br>

                                                                    – ผู้ฝึกที่ไม่เข้าใจกลไกการฝึกแต่ละท่าอย่างถูกต้อง<br>

                                                                    – ผู้ฝึกที่ต้องการแก้ไขท่าฝึกเพื่อพัฒนาจุดด้อย<br>

                                                                    – ผู้ที่ทำอย่างไรก็ไม่สามารถพัฒนาการฝึกได้อีก<br>

                                                                    – ผู้ที่ประสบปัญหาฝึกหนึ่งใน 45 ท่านี้แล้วไม่โดน<br>

                                                                    – เทรนเนอร์ที่ต้องการเสริมความรู้ตัวเองให้ครบถ้วนยิ่งขึ้น<br>

                                                                    

                                                                    สิ่งที่คุณจะได้รับ<br>

                                                                    1.สามารถดูคอร์ส Indept Exercise online ได้ 30 วัน ไม่จำกัดจำนวนครั้ง<br>

                                                                    2.คู่มือประกอบการเรียน 1 เล่ม ความหนา 200 หน้า  พร้อมจัดส่งฟรี<br>

                                                                    3.โปรแกรมการเล่นเวทแบบ 1 ปี ทั้งหมดนี้มูลค่ากว่า 5,000 บาท
                                                                
                                                                
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label for="select" class=" form-control-label">หมวดหมู่ :</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">

                                                                    <label for="textarea-input" class=" form-control-label"> 
                                                                    คอร์สบอดี้เวท(Body Weight)
                                                                    </label>  
                                                            
                                                            </div>
                                                        </div>
                                                        
                                                                                            
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label class=" form-control-label">รูปแบบการสอน : </label>
                                                            </div>
                                                            <div class="col col-md-9">
                                                                <label for="textarea-input" class=" form-control-label"> 
                                                                    เทรนเดียว
                                                                </label>  
                                                            </div>
                                                        </div>

                                                                                                
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label class=" form-control-label">วันที่เปิดสอน : </label>
                                                            </div>
                                                            <div class="col col-md-9">
                                                                <label for="textarea-input" class=" form-control-label"> 
                                                                    ทุกวัน
                                                                </label>  
                                                            </div>
                                                        </div>

                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label class=" form-control-label">สถานที่สอน : </label>
                                                            </div>
                                                            <div class="col col-md-9">
                                                                <label for="textarea-input" class=" form-control-label"> 
                                                                    <a href="home.php" class="card-link">DD Fitness</a>
                                                                    <a href="home.php" class="card-link">Mentor Gym</a>
                                                                    <a href="home.php" class="card-link">Novel Fitness & Sauna</a>
                                                                </label>  
                                                            </div>
                                                        </div>
                                                    
                                                    
                                                        
                                                    </form>
                                                </div>
                                                
                                                <div class="card-footer">
                                                
                                                                <div class="col-md-4 offset-md-4 mr-auto ml-auto">
                                                                    <button type="submit" class="btn btn-success"><i class="fa fa-share"></i> &nbsp;แชร์</button>
                                                                    <button type="reset" class="btn btn-danger"><i class="fa fa-wrench"></i> &nbsp;แก้ไข</button>
                                                                </div>
                                                
                                                </div>
                                            </div>
                                        
                                        </div>  
                                    </div>
                                </div>

                            </div>
                        </div>

                       </div>
             
                 
                  </div>

           </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</php>
<!-- end document-->
