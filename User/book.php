
<?php
session_start();
include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <link rel="icon" href="/pro/User/img/laravel.png">
    <!-- Title Page-->
    <title>FITNESS TRAINER</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
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
   
        <!-- HEADER DESKTOP-->            
            <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">  
              <div class="container">       
                <a class="navbar-brand" href="/pro/User/index.php">Fitness Trainer</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">                   
                   <ul class="navbar-nav ml-auto">                      
                                       
                        <li class="nav-item">
                            <a class="nav-link" href="">บริการ</a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link" href="/pro/User/course.php">คอร์สเรียน</a>
                        </li>
                             <br>
                        <li class="nav-item">
                            <a class="nav-link" href="/pro/User/review.php">ผลงานนักเรียน</a>
                        </li>

                        <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="blog.php" role="button" aria-haspopup="true" aria-expanded="false">บทความ</a>
                              <div class="dropdown-menu text-center">
                                <a class="dropdown-item" href="/pro/User/nutrition.php">Nutrition Articles</a>
                                <a class="dropdown-item" href="#">Cardio</a>
                                <a class="dropdown-item" href="#">Weight training</a>
                                <a class="dropdown-item" href="#">News Update</a>
                                <a class="dropdown-item" href="#">Foods</a>
                                <a class="dropdown-item" href="#">Yoga</a>
                               
                       </li>

                        <li class="nav-item">
                        <a href="/pro/User/register.php" class="btn" aria-pressed="true" target="_blank" ><?=$_SESSION['username']; ?></a>
                        </li>
                        
                        <li class="nav-item">  
                              <a href="/pro/User/register.php" class="btn btn-success  " role="button" aria-pressed="true" target="_blank" >สมัครเรียน</a>
                              
                        </li>
                      
                              
                    
                   </ul>                  
                </div>
             </div>
            </nav>    
      
    
        
        <!-- END HEADER DESKTOP -->

        <!-- WELCOME-->
        
        <!-- END WELCOME-->

        <!-- PAGE CONTENT-->
        <div class="page-container3">
            <section class="alert-wrap p-t-10 p-b-10">
              
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3">
                            <!-- MENU SIDEBAR-->
                            <aside class="menu-sidebar3 js-spe-sidebar">
                                <nav class="navbar-sidebar2 navbar-sidebar3">
                                  <h1 class="my-3">&nbsp;&nbsp;&nbsp;จองคอร์สเรียน</h1>
                                    <div class="list-group text-center">
                                        <a href="bodyweight1.php" class="list-group-item active">Body Weight</a>
                                        <a href="#" class="list-group-item">Cardio</a>
                                        <a href="#" class="list-group-item">Pilates</a>
                                        <a href="#" class="list-group-item">Trampoline</a>
                                        <a href="#" class="list-group-item">Hot Yoga</a>
                                        <a href="#" class="list-group-item">Hot Yoga</a>    
                                    </div>
                                </nav>
                            </aside>
                            <!-- END MENU SIDEBAR-->
                        </div>

                        <div class="col-xl-9">
                            <!-- PAGE CONTENT-->
                            <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">คอร์สเรียน</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Body Weight</li>
                                    </ol>
                            </nav>

                            <div class="page-content">
                                <div class="row">
                                    <div class="col-md-12 offset-md-1 mr-auto ml-auto">
                                        <div class="card">

                                                        <div class="card-header">
                                                            
                                                               
                                                                <h4 class="text-center title-2"> จองวันเรียน </h4>
                                                        </div>
                                                        
                                                                                
                                                        <div class="card-body">

                                                                <form action="" method="post" novalidate="novalidate">   
                                                                   
                                                                              <div class="row">

                                                                                    <div class="col-md-2 mb-1">
                                                                                            <label for="validationDefault01">&nbsp;&nbsp;&nbsp;</label>
                                                                                            <input type="text" id="disabled-input" name="disabled-input" placeholder="วันที่ 1" disabled="" class="form-control">
                                                                                    </div>

                                                                                    <div class="col-md-3 mb-3">
                                                                                            <label for="validationDefault02">เลือกวันเรียน</label>
                                                                                            <input type="date" name="bday" max="3000-12-31" min="1000-01-01" class="form-control">
                                                                                    </div>

                                                                                    <div class="col-md-3 mb-1">
                                                                                                <label for="validationDefaultUsername">เลือกคาบเรียน</label>
                                                                                        <div class="input-group">
                                                                                                <select name="select" id="select" class="form-control">
                                                                                                    
                                                                                                    <option value="0">รอบเข้า 9.00-11.00 น.</option>
                                                                                                    <option value="1">รอบบ่าย 13.00-15.00 น.</option>
                                                                                                    <option value="2">รอบเย็น 16.00-18.00 น.</option>
                                                                                                    <option value="3">รอบดึก 19.00-21.00 น.</option>
                                                                                                </select>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-md-4 mb-3">
                                                                                                <label for="validationDefaultUsername">เลือกสถานที่เรียน</label>
                                                                                        <div class="input-group">
                                                                                                <select name="select" id="select" class="form-control">
                                                                                                    
                                                                                                    <option value="0">เลื่อกฟิตเนสออกกำลังกาย</option>
                                                                                                    <option value="1">DD Fitness </option>
                                                                                                    <option value="2">Mentor Gym </option>
                                                                                                    <option value="3">Novel Fitness & Sauna</option>
                                                                                                </select>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-md-2 mb-1">
                                                                                          
                                                                                            <input type="text" id="disabled-input" name="disabled-input" placeholder="วันที่ 2" disabled="" class="form-control">
                                                                                    </div>

                                                                                    <div class="col-md-3 mb-3">
                                                                                            
                                                                                            <input type="date" name="bday" max="3000-12-31" min="1000-01-01" class="form-control">
                                                                                    </div>

                                                                                    <div class="col-md-3 mb-1">
                                                                                                
                                                                                        <div class="input-group">
                                                                                                <select name="select" id="select" class="form-control">
                                                                                                    
                                                                                                    <option value="0">รอบเข้า 9.00-11.00 น.</option>
                                                                                                    <option value="1">รอบบ่าย 13.00-15.00 น.</option>
                                                                                                    <option value="2">รอบเย็น 16.00-18.00 น.</option>
                                                                                                    <option value="3">รอบดึก 19.00-21.00 น.</option>
                                                                                                </select>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-md-4 mb-3">
                                                                                              
                                                                                        <div class="input-group">
                                                                                                <select name="select" id="select" class="form-control">
                                                                                                    
                                                                                                    <option value="0">เลื่อกฟิตเนสออกกำลังกาย</option>
                                                                                                    <option value="1">DD Fitness </option>
                                                                                                    <option value="2">Mentor Gym </option>
                                                                                                    <option value="3">Novel Fitness & Sauna</option>
                                                                                                </select>
                                                                                        </div>
                                                                                    </div>


                                                                                    <div class="col-md-2 mb-1">
                                                                                          
                                                                                          <input type="text" id="disabled-input" name="disabled-input" placeholder="วันที่ 3" disabled="" class="form-control">
                                                                                  </div>

                                                                                  <div class="col-md-3 mb-3">
                                                                                          
                                                                                          <input type="date" name="bday" max="3000-12-31" min="1000-01-01" class="form-control">
                                                                                  </div>

                                                                                  <div class="col-md-3 mb-1">
                                                                                              
                                                                                      <div class="input-group">
                                                                                              <select name="select" id="select" class="form-control">
                                                                                                  
                                                                                                  <option value="0">รอบเข้า 9.00-11.00 น.</option>
                                                                                                  <option value="1">รอบบ่าย 13.00-15.00 น.</option>
                                                                                                  <option value="2">รอบเย็น 16.00-18.00 น.</option>
                                                                                                  <option value="3">รอบดึก 19.00-21.00 น.</option>
                                                                                              </select>
                                                                                      </div>
                                                                                  </div>

                                                                                  <div class="col-md-4 mb-3">
                                                                                            
                                                                                      <div class="input-group">
                                                                                              <select name="select" id="select" class="form-control">
                                                                                                  
                                                                                                  <option value="0">เลื่อกฟิตเนสออกกำลังกาย</option>
                                                                                                  <option value="1">DD Fitness </option>
                                                                                                  <option value="2">Mentor Gym </option>
                                                                                                  <option value="3">Novel Fitness & Sauna</option>
                                                                                              </select>
                                                                                      </div>
                                                                                  </div>

                                                                                  <div class="col-md-2 mb-1">
                                                                                          
                                                                                          <input type="text" id="disabled-input" name="disabled-input" placeholder="วันที่ 4" disabled="" class="form-control">
                                                                                  </div>

                                                                                  <div class="col-md-3 mb-3">
                                                                                          
                                                                                          <input type="date" name="bday" max="3000-12-31" min="1000-01-01" class="form-control">
                                                                                  </div>

                                                                                  <div class="col-md-3 mb-1">
                                                                                              
                                                                                      <div class="input-group">
                                                                                              <select name="select" id="select" class="form-control">
                                                                                                  
                                                                                                  <option value="0">รอบเข้า 9.00-11.00 น.</option>
                                                                                                  <option value="1">รอบบ่าย 13.00-15.00 น.</option>
                                                                                                  <option value="2">รอบเย็น 16.00-18.00 น.</option>
                                                                                                  <option value="3">รอบดึก 19.00-21.00 น.</option>
                                                                                              </select>
                                                                                      </div>
                                                                                  </div>

                                                                                  <div class="col-md-4 mb-3">
                                                                                            
                                                                                      <div class="input-group">
                                                                                              <select name="select" id="select" class="form-control">
                                                                                                  
                                                                                                  <option value="0">เลื่อกฟิตเนสออกกำลังกาย</option>
                                                                                                  <option value="1">DD Fitness </option>
                                                                                                  <option value="2">Mentor Gym </option>
                                                                                                  <option value="3">Novel Fitness & Sauna</option>
                                                                                              </select>
                                                                                      </div>
                                                                                  </div>

                                                                                  <div class="col-md-2 mb-1">
                                                                                          
                                                                                          <input type="text" id="disabled-input" name="disabled-input" placeholder="วันที่ 5" disabled="" class="form-control">
                                                                                  </div>

                                                                                  <div class="col-md-3 mb-3">
                                                                                          
                                                                                          <input type="date" name="bday" max="3000-12-31" min="1000-01-01" class="form-control">
                                                                                  </div>

                                                                                  <div class="col-md-3 mb-1">
                                                                                              
                                                                                      <div class="input-group">
                                                                                              <select name="select" id="select" class="form-control">
                                                                                                  
                                                                                                  <option value="0">รอบเข้า 9.00-11.00 น.</option>
                                                                                                  <option value="1">รอบบ่าย 13.00-15.00 น.</option>
                                                                                                  <option value="2">รอบเย็น 16.00-18.00 น.</option>
                                                                                                  <option value="3">รอบดึก 19.00-21.00 น.</option>
                                                                                              </select>
                                                                                      </div>
                                                                                  </div>

                                                                                  <div class="col-md-4 mb-3">
                                                                                            
                                                                                      <div class="input-group">
                                                                                              <select name="select" id="select" class="form-control">
                                                                                                  
                                                                                                  <option value="0">เลื่อกฟิตเนสออกกำลังกาย</option>
                                                                                                  <option value="1">DD Fitness </option>
                                                                                                  <option value="2">Mentor Gym </option>
                                                                                                  <option value="3">Novel Fitness & Sauna</option>
                                                                                              </select>
                                                                                      </div>
                                                                                  </div>

                                                                                  <div class="col-md-2 mb-1">
                                                                                          
                                                                                          <input type="text" id="disabled-input" name="disabled-input" placeholder="วันที่ 6" disabled="" class="form-control">
                                                                                  </div>

                                                                                  <div class="col-md-3 mb-3">
                                                                                          
                                                                                          <input type="date" name="bday" max="3000-12-31" min="1000-01-01" class="form-control">
                                                                                  </div>

                                                                                  <div class="col-md-3 mb-1">
                                                                                              
                                                                                      <div class="input-group">
                                                                                              <select name="select" id="select" class="form-control">
                                                                                                  
                                                                                                  <option value="0">รอบเข้า 9.00-11.00 น.</option>
                                                                                                  <option value="1">รอบบ่าย 13.00-15.00 น.</option>
                                                                                                  <option value="2">รอบเย็น 16.00-18.00 น.</option>
                                                                                                  <option value="3">รอบดึก 19.00-21.00 น.</option>
                                                                                              </select>
                                                                                      </div>
                                                                                  </div>

                                                                                  <div class="col-md-4 mb-3">
                                                                                            
                                                                                      <div class="input-group">
                                                                                              <select name="select" id="select" class="form-control">
                                                                                                  
                                                                                                  <option value="0">เลื่อกฟิตเนสออกกำลังกาย</option>
                                                                                                  <option value="1">DD Fitness </option>
                                                                                                  <option value="2">Mentor Gym </option>
                                                                                                  <option value="3">Novel Fitness & Sauna</option>
                                                                                              </select>
                                                                                      </div>
                                                                                  </div>


                                                                                  <div class="col-md-2 mb-1">
                                                                                          
                                                                                          <input type="text" id="disabled-input" name="disabled-input" placeholder="วันที่ 7" disabled="" class="form-control">
                                                                                  </div>

                                                                                  <div class="col-md-3 mb-3">
                                                                                          
                                                                                          <input type="date" name="bday" max="3000-12-31" min="1000-01-01" class="form-control">
                                                                                  </div>

                                                                                  <div class="col-md-3 mb-1">
                                                                                              
                                                                                      <div class="input-group">
                                                                                              <select name="select" id="select" class="form-control">
                                                                                                  
                                                                                                  <option value="0">รอบเข้า 9.00-11.00 น.</option>
                                                                                                  <option value="1">รอบบ่าย 13.00-15.00 น.</option>
                                                                                                  <option value="2">รอบเย็น 16.00-18.00 น.</option>
                                                                                                  <option value="3">รอบดึก 19.00-21.00 น.</option>
                                                                                              </select>
                                                                                      </div>
                                                                                  </div>

                                                                                  <div class="col-md-4 mb-3">
                                                                                            
                                                                                      <div class="input-group">
                                                                                              <select name="select" id="select" class="form-control">
                                                                                                  
                                                                                                  <option value="0">เลื่อกฟิตเนสออกกำลังกาย</option>
                                                                                                  <option value="1">DD Fitness </option>
                                                                                                  <option value="2">Mentor Gym </option>
                                                                                                  <option value="3">Novel Fitness & Sauna</option>
                                                                                              </select>
                                                                                      </div>
                                                                                  </div>
                                                                        



                                                                                  

                                                                                  

                                                                                   

                                                                                
                                                                        <div class="col-md-4 offset-md-4 mr-auto ml-auto">
                                                                                 <button type="button" class="btn btn-success"><i class="fas fa-download"></i>&nbsp;บันทึก</button>
                                                                                 <a href="book.php" class="btn btn-danger" role="button" aria-pressed="true" ><i class="fas fa-times"></i>&nbsp; ยกเลิก</a>
                                                                                
                                                                        </div>
                                                                    </form>

                                                     
                                                        
                                                      


                                                      
                                                        </div>                                                        
                                        </div>
                                    </div>

                                                                 
                            
                                </div>
                               
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="copyright">
                                            <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PAGE CONTENT-->
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- END PAGE CONTENT  -->

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