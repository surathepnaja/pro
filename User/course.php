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

                        <li class="nav-item active">
                            <a class="nav-link" href="course.php">คอร์สเรียน</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="review.php">ผลงานนักเรียน</a>
                        </li>

                        <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="blog.php" role="button" aria-haspopup="true" aria-expanded="false">บทความ</a>
                              <div class="dropdown-menu text-center">
                                <a class="dropdown-item" href="nutrition.php">Nutrition Articles</a>
                                <a class="dropdown-item" href="#">Cardio</a>
                                <a class="dropdown-item" href="#">Weight training</a>
                                <a class="dropdown-item" href="#">News Update</a>
                                <a class="dropdown-item" href="#">Foods</a>
                                <a class="dropdown-item" href="#">Yoga</a>
                               
                       </li>

                        <li class="nav-item">
                              <a class="nav-link" href="login.php" target="_blank">เข้าสู่ระบบ</a>
                             
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
        <div class="row">      
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 portfolio-item">
            <a href="bodyweight1.php">           
                <img class="img-fluid" src="img/index/bodyweight.jpg">
            </a>
            <div class="text-center"><br>
                <h4>Body Weight</h4>
                <p class="card-img-top">คอร์สบอดี้เวท</p>
            </div>
            </div>


            <div class="col-md-4 col-sm-6 portfolio-item">
            <a href="">
                <img class="card-img-top" src="img/index/cardio.jpg"  width="700" height="260">
            </a>
            <div class="text-center"><br>
                <h4>Cardio</h4>
                <p class="text-muted">คอร์สคาร์ดิโอ</p>
            </div>
            </div>

            <div class="col-md-4 col-sm-6 portfolio-item">
            <a href="">
                <img class="card-img-top" src="img/index/pilates.jpg"  width="700" height="260">
            </a>
            <div class="text-center"><br>
                <h4>Pilates</h4>
                <p class="text-muted">คอร์สพิลาทิส</p>
            </div>
            </div>

        
            <div class="col-md-4 col-sm-6 portfolio-item">
            <a href="">
                <img class="card-img-top" src="img/index/Trampoline.jpg"  width="700" height="260">
            </a>
            <div class="text-center"><br>
                <h4>Trampoline</h4>
                <p class="text-muted">คอร์สแทรมโพลีน</p>
            </div>
            </div>
            
            <div class="col-md-4 col-sm-6 portfolio-item">
            <a href="">
                <img class="card-img-top" src="img/index/hotyoga.jpg"  width="700" height="260">
            </a>
            <div class="text-center"><br>
                <h4>Hot Yoga</h4>
                <p class="text-muted">คอร์สโยคะร้อน</p>
            </div>
            </div>

            <div class="col-md-4 col-sm-6 portfolio-item">
            <a href="">
                <img class="card-img-top" src="img/index/coolyoga.jpg"  width="700" height="260">
            </a>
            <div class="text-center"><br>
                <h4>Cool Yoga</h4>
                <p class="text-muted">คอร์สโยคะเย็น</p>
            </div>
            </div>

        </div>
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