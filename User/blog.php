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
                            <a class="nav-link" href="">ผลงานนักเรียน</a>
                        </li>


                        <li class="nav-item dropdown active">
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
                            <a class="nav-link" href="">ติดต่อเรา</a>
                        </li>
                        
                        <li class="nav-item">  
                          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                             สมัครเรียน
                          </button>

                          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">สมัครเรียนกันเราทันที</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body"> 
                                        <form>
                                            <div class="form-row">
                                              <div class="col-md-4 mb-3">
                                                <label for="validationServer01">ชื่อจริง</label>
                                                <input type="text" class="form-control is-valid" id="validationServer01" placeholder="กรอกชื่อ">
                                             
                                              </div>
                                              <div class="col-md-4 mb-3">
                                                <label for="validationServer02">นามสกุล</label>
                                                <input type="text" class="form-control is-valid" id="validationServer02" placeholder="กรอกนามสกุล">
                                              
                                              </div>
                                                <div class="col-md-4 mb-3">
                                                <label for="sel1">เพศ</label>
                                                      <select class="form-control" id="sel1">
                                                        <option>เลือก</option>
                                                        <option>ชาย</option>
                                                        <option>หญิง</option>                                                      
                                                      </select>
                                                </div>                                              
                                            </div>


                                            <div class="form-row">                                                                                          
                                              <div class="col-md-3 mb-3">
                                                <label for="validationDefault04">อายุ</label>
                                                <input type="text" class="form-control" id="validationDefault04" placeholder="กรอกอายุ" required>
                                              </div>
                                              <div class="col-md-4 mb-2">
                                                <label for="validationDefault05">น้ำหนัก/ส่วนสูง</label>
                                                <input type="text" class="form-control" id="validationDefault05" placeholder="กรอกข้อมูล" required>
                                              </div>
                                              <div class="col-md-5 mb-3">
                                                <label for="validationDefault03">เบอร์ติดต่อ</label>
                                                <input type="text" class="form-control" id="validationDefault03" placeholder="กรอกหมายเลขโทรศัพท์" required>
                                              </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="inputEmail4">Email</label>
                                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                                </div>
                                             

                                                <div class="col-md-6 mb-3">
                                                    <label for="inputPassword4">Password</label>
                                                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                                </div>
                                            </div>                                        
                                            

                                            <div class="form-row">
                                              <div class="col-md-6 mb-3">    
                                              <label for="exampleFormControlTextarea1">ที่อยู่</label>
                                                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="กรอกที่อยู่ของท่าน"></textarea>                                            
                                              </div>

                                              <div class="col-md-6 mb-3">    
                                              <label for="exampleFormControlTextarea1">จังหวัด</label>
                                                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="กรอกจังหวัด"></textarea>                                            
                                              </div>
                                            </div>                                         
                                          </form>



                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
                                    <button type="button" class="btn btn-success">ส่งข้อมูล</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </li>
                   </ul>                  
                </div>

             </div>
      </nav>  
      
        <br> 
     
        
        <div class="container">
          <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">บทความล่าสุดจาก TRAINER</h2>
          <h3 class="section-subheading text-muted"></h3>
          <br>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a href="nutrition.php">            
            <img class="img-fluid" src="img/index/food1.jpg" alt="">
          </a>
          <div class="text-center"><br>
            <h4>Nutrition Articles</h4>
            <p class="text-muted">บทความโภชนาการ</p>
          </div>
        </div>

        <div class="col-md-4 col-sm-6 portfolio-item">
          <a href="">            
            <img class="img-fluid" src="img/index/cadio.png" alt="">
          </a>
          <div class="text-center"><br>
            <h4>Cardio</h4>
            <p class="text-muted">คาร์ดิโออย่างถูกวิธี</p>
          </div>
        </div>

        <div class="col-md-4 col-sm-6 portfolio-item">
          <a href="trainerregister.php">
             <img class="card-img-top" src="img/index/weight.jpg"  width="700" height="235">
          </a>
          <div class="text-center"><br>
            <h4>Weight training</h4>
            <p class="text-muted">การเพิ่มกล้ามเนื้อ</p>
          </div>
        </div>

        <div class="col-md-4 col-sm-6 portfolio-item">
          <a href="">            
            <img class="img-fluid" src="img/index/new.jpg" alt="">
          </a>
          <div class="text-center"><br>
            <h4>News Update</h4>
            <p class="text-muted">บทความอัพเดทข่าว</p>
          </div>
        </div>

        <div class="col-md-4 col-sm-6 portfolio-item">
          <a href="">            
            <img class="img-fluid" src="img/index/food2.png" alt="">
          </a>
          
          <div class="text-center"><br>
            <h4>Foods</h4>
            <p class="text-muted">บทความอาหาร</p>
          </div>
        </div>

        <div class="col-md-4 col-sm-6 portfolio-item">
          <a href="">            
            <img class="img-fluid" src="img/index/yoga.jpg" alt="">
          </a>
          <div class="text-center"><br>
            <h4>Yoga</h4>
            <p class="text-muted">โยคะ</p>
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