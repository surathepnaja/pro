<?php session_start();?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FITNESS TRAINER</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" href="../img/laravel.png">
</head>
<body>



  
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">  
              <div class="container">       
                <a class="navbar-brand" href="home.php">Fitness Trainer</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="date.php">ตารางนัดหมาย </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="eat.php">กรอกข้อมูลการกิน</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">คำนวณ BMR</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">คำนวณ TDee</a>
                        </li>

                    </ul>
                   <ul class="navbar-nav ml-auto">  
                       <?php if (isset($_SESSION['id'])) { ?>
                   
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ยินดีต้อนรับ คุณ <?php echo $_SESSION['name']; ?>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">ข้อมูลส่วนตัว</a>
                                <a class="dropdown-item" href="#">ประวัติการเรียน</a>
                            <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php">Logout</a>
                            </div>
                        </li>

                       <?php }else{ ?>
                                       
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">เข้าสู่ระบบ</a>
                        </li>
                        <?php } ?>
                    
                   </ul>                  
                </div>
             </div>
         </nav>    
      
        <br>       
        <div class="container">

            <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                <li data-target="#demo" data-slide-to="3"></li>
            </ul>
            
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/home/pro1.jpg" alt="Los Angeles" width="1100" height="500">
                </div>
                <div class="carousel-item">
                  <img src="img/home/pro2.jpg" alt="Chicago" width="1100" height="500">
                </div>
                <div class="carousel-item">
                  <img src="img/home/pro3.jpg" alt="New York" width="1100" height="500">
                </div>
                <div class="carousel-item">
                  <img src="img/home/pro4.png" alt="New York" width="1100" height="500">
                </div>
            </div>
            
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
            </div>

            <br>
            <br>

            <!-- Page Features -->
            <div class="row text-center">

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                <img class="card-img-top" src="./../img/Card1.png" alt="">
                <div class="card-body">
                    <h4 class="card-title">ขั้นตอนที่ 1</h4>
                    <p class="card-text">สร้างโปรไฟล์สมัครเป็นเทรนเนอร์</p>
                </div>
                <div class="card-footer">
                    <a href="profile" class="btn btn-primary">สมัครสมาชิค</a>
                </div>
                </div>
            </div>
            <br>
            <br><br>


            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                <img class="card-img-top" src="./../img/Card2.png" alt="">
                <div class="card-body">
                    <h4 class="card-title">ขั้นตอนที่ 2</h4>
                    <p class="card-text">ลงประกาศพร้อมหาลูกค้าทันที</p>
                </div>
                <div class="card-footer">
                    <a href="freepost" class="btn btn-primary">ลงประกาศฟรี</a>
                </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                <img class="card-img-top" src="./../img/Card3.png" alt="">
                <div class="card-body">
                    <h4 class="card-title">ขั้นตอนที่ 3</h4>
                    <p class="card-text">สร้างคอร์สออนไลน์ของคุณเอง</p>
                </div>
                <div class="card-footer">
                    <a href="course" class="btn btn-primary">สร้างคอร์สฟรี</a>
                </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                <img class="card-img-top" src="./../img/Card4.png" alt="">
                <div class="card-body">
                    <h4 class="card-title">ขั้นตอนที่ 4</h4>
                    <p class="card-text">ส่งเอกสารผูกบัญชีเริ่มรับรายได้</p>
                </div>
                <div class="card-footer">
                    <a href="money" class="btn btn-primary">ส่งเอกสาร</a>
                </div>
                </div>
            </div>

            </div>
<!-- /.row -->

</div>


          
        
    
    
    
    
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Fitness Trainer 2019</p>
      </div>
      <!-- /.container -->
     </footer>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>   

</body>
</html>