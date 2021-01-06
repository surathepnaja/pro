
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
    <link href="fontawesome-free-5.15.1-web/css/all.css" rel="stylesheet"> 

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
      
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="index.php">
                   <h3>Admin System</h3>
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
                       

                        <li class="active">
                            <a href="new.php">
                               <i class=" far fa-envelope"></i>จัดการข่าวสาร</a>
                        </li>


                        <li>
                            <a href="price.php">
                            <i class="fas fa-funnel-dollar"></i>กำหนดราคา</a>
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
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                        <div class="row">
                                <div class="col-auto mr-auto"></div>
                                     <div class="col-auto"> 
                                         <a href="addnew.php" class="btn btn-success btn-lg " role="button" aria-pressed="true"><i class="fa fa-plus"></i> &nbsp;เพิ่มข่าวสาร</a>
                                     </div>
                                </div>

                        <div class="row m-t-25">                            
                            <div class="col-sm-6 col-lg-6">
                                    <div class="bs-example">
                                        <div class="card" style="max-width: 700px;">
                                            <div class="row no-gutters">
                                                <div class="col-sm-5" style="background: #868e96;">
                                                    <img src="images/job/1.jpg" class="card-img-top h-100" alt="...">
                                                </div>
                                                <div class="col-sm-7">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Fitness  Trainer <br>
                                                                                เปิดรับสมัครเทรนเนอร์ ด่วน !!!!</h5>
                                                        <p class="card-text">ตำแหน่งเทรนเนอร์ พาร์ทไทม์ <br>
                                                                             ชายหรือหญิง 1 ตำแหน่ง การันตีรายได้<br>                                                                             
                                                                             ขอแค่มีใจรักในการออกกำลังกายและมีความรู้
                                                                             เกี่ยวกับการสอนพร้อมทั้งมีมนุษยสัมพันธ์ที่ดี
                                                                             มีความรับผิดชอบต่อหน้าที่และซื่อสัตย์ <br>
                                                                            🕧ทำงาน 6 วัน/อาทิตย์ 
                                                                            ค่าตอบแทน: มีเงินเดือนประจำ +ค่าเทรนต่อครั้ง <br>
                                                        <a href="#" class="btn btn-primary stretched-link"><i class="fa fa-search"></i> &nbsp;ดูเพิ่มเติม</a>
                                                        <a href="#" class="btn btn-success stretched-link"><i class="fa fa-wrench"></i>&nbsp;แก้ไข</a>
                                                        <a href="#" class="btn btn-danger stretched-link"><i class="fa fa-trash"></i>&nbsp;ลบ</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                             </div>

                             <div class="col-sm-6 col-lg-6">
                                    <div class="bs-example">
                                        <div class="card" style="max-width: 700px;">
                                            <div class="row no-gutters">
                                                <div class="col-sm-5" style="background: #868e96;">
                                                    <img src="images/job/2.jpg" class="card-img-top h-100" alt="...">
                                                </div>
                                                <div class="col-sm-7">
                                                    <div class="card-body">
                                                        <h5 class="card-title">โปรโมชั่นดี ๆ กับ เทรนเนอร์ ดิว ที่จะช่วยคุณลูกค้า ให้บรรลุเป้าหมาย </h5>
                                                        <p class="card-text">📢📢  ไม่ว่าจะลดน้ำหนัก สร้างกล้ามเนื้อ ปรึกษาเราได้ ลดราคาพิเศษ ค่าเทรนเนอร์ ส่วนตัว จากปกติ<br>
                                                                                  ✔️10 ครั้ง ปกติ 8,000 บาท เหลือเพียง 6,000 บาท<br>
                                                                                   (แถมผ้านาโน 360°FITNESS GYM สำหรับเช็ดเหงื่อ มูลค่า 199บาท)<br>
                                                                                  </p> <br>
                                                        <a href="#" class="btn btn-primary stretched-link"><i class="fa fa-search"></i> &nbsp;ดูเพิ่มเติม</a>
                                                        <a href="#" class="btn btn-success stretched-link"><i class="fa fa-wrench"></i>&nbsp;แก้ไข</a>
                                                        <a href="#" class="btn btn-danger stretched-link"><i class="fa fa-trash"></i>&nbsp;ลบ</a>
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
