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
    <link rel="icon" href="img/laravel.png">
</head>
<body>



  
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">  
              <div class="container">       
                <a class="navbar-brand" href="index.php">Fitness Trainer</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">                   
                   <ul class="navbar-nav ml-auto">                      
                                       
                        <li class="nav-item">
                            <a class="nav-link" href="">บริการ</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="course.php">คอร์สเรียน</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="review.php">ผลงานนักเรียน</a>
                        </li>

                        <li class="nav-item dropdown active">
                              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="blog.php" role="button" aria-haspopup="true" aria-expanded="false">บทความ</a>
                              <div class="dropdown-menu text-center">
                                <a class="dropdown-item  active" href="nutrition.php">Nutrition Articles</a>
                                <a class="dropdown-item" href="#">Cardio</a>
                                <a class="dropdown-item" href="#">Weight training</a>
                                <a class="dropdown-item" href="#">News Update</a>
                                <a class="dropdown-item" href="#">Foods</a>
                                <a class="dropdown-item" href="#">Yoga</a>
                               
                       </li>

                        <li class="nav-item">
                            <a class="nav-link" href="login.php">เข้าสู่ระบบ</a>
                        </li>
                        
                        
                        <li class="nav-item">  
                              <a href="register.php" class="btn btn-success  " role="button" aria-pressed="true">สมัครเรียน</a>
                        </li>
                        
                   </ul>                  
                </div>

             </div>
      </nav>    
      
        <br>       

          
      
        <div class="container">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="blog.php">บทความ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Nutrition Articles</li>
              </ol>
            </nav>

<!-- Page Features -->
            <div class="row text-center">

              <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                  <img class="card-img-top" src="img/blog/Elderly.jpg" alt="">
                  <div class="card-body">
                    <h4 class="card-title">หลักโภชนาการที่ดีของผู้สูงอายุ</h4>
                    <p class="card-text">ไม่ว่าจะพูดถึงบทความเกี่ยวกับผู้สูงอายุใดก็ตาม เรามักเห็นว่าโภชนาการที่ดี เป็นสิ่งสำคัญ 
                                          และเป็นหลักในการดูแลสุขภาพของผู้สูงอายุ....</p>
                  </div>
                  <div class="card-footer">
                    <a href="#" class="btn btn-primary">อ่านเพิ่มเติม</a>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                  <img class="card-img-top" src="img/blog/healthy.jpg" alt="">
                  <div class="card-body">
                    <h4 class="card-title">หวานจับใจ</h4>
                    <p class="card-text">ความหมายของคำงว่า “หวานจับใจ”  
                                        ในที่นี้จะหมายถึงว่าความชอบในรสชาติหวาน
                                        ได้เข้ามาจับและติดอยู่ในใจของผู้ที่ชื่นชอบ
                                        ความหวาน จนอาจเรียกได้ว่าติดความหวาน</p>
                  </div>
                  <div class="card-footer">
                    <a href="#" class="btn btn-primary">อ่านเพิ่มเติม</a>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                  <img class="card-img-top" src="img/blog/resize.jpg" alt="">
                  <div class="card-body">
                    <h5 class="card-title">5 เมนูควบคุมน้ำหนัก อิ่มท้อง ย่อยง่าย คุณค่าทางโภชนาการครบ!</h5>
                    <p class="card-text"> ต้มเลือดหมูใบตำลึง มีพลังงานอาหารอยู่ที่ 120 Kcal เบาๆ 
                                         แต่มีคุณค่าทางอาหารครบทุกด้านเช่นกันค่ะ  </p>
                  </div>
                  <div class="card-footer">
                    <a href="#" class="btn btn-primary">อ่านเพิ่มเติม</a>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                  <img class="card-img-top" src="img/blog/muscle.jpg" alt="">
                  <div class="card-body">
                    <h4 class="card-title">5 อาหารเสริมสร้างกล้ามเนื้อ</h4>
                    <p class="card-text"> การสร้างกล้ามเนื้อที่แข็งแรงจะทำเพียงแค่ออกกำลังกายอย่างเดียวไม่ได้
                                          จำเป็นจะต้องควบคุมและเลือกกินอาหารดีๆ มีประโยชน์ </p>
                  </div>
                  <div class="card-footer">
                    <a href="#" class="btn btn-primary">อ่านเพิ่มเติม</a>
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