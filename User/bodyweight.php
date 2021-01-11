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
                             <br>
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
                              <a href="register.php" class="btn btn-success  " role="button" aria-pressed="true" target="_blank" >สมัครเรียน</a>
                        </li>

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

  <div class="col-lg-3">

    <h1 class="my-4">จองคอร์สเรียน</h1>
    <div class="list-group text-center">
      <a href="#" class="list-group-item active">Body Weight</a>
      <a href="#" class="list-group-item">Cardio</a>
      <a href="#" class="list-group-item">Pilates</a>
      <a href="#" class="list-group-item">Trampoline</a>
      <a href="#" class="list-group-item">Hot Yoga</a>
      <a href="#" class="list-group-item">Hot Yoga</a>    
    </div>

  </div>
  <!-- /.col-lg-3 -->
  
  <div class="col-lg-9">

  <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">คอร์สเรียน</a></li>
    <li class="breadcrumb-item active" aria-current="page">Body Weight</li>
  </ol>
</nav>

    

    <div class="row">

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">  
        
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><img src="img/index/view1.jpg" class="rounded-circle" alt="Cinque Terre" width="50" height="50" >&nbsp; &nbsp; <a href="" class="card-link">Ploys Healthdiary</a></li>          
       </ul>        
          <a href="#"><img class="card-img-top" src="img/weight/bodyweight1.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">สลายไขมัน ฟิตกล้ม </a>
            </h4>
            <h5>ราคาเริ่มต้น 500 บาท</h5>
            <p class="card-text">เเบ่งเรียนวันล่ะ 2 ชม. ใน 1 เดือนเจอกัน 4 ครั้ง ...  อ่านเพิ่มเติม</p>
          </div>
          <div class="card-footer">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                             สมัครเรียน
            </button>
          &nbsp;
          <button type="button" class="btn btn-danger">จองวันเรียน</button>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">  
        
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><img src="img/profile/pro1.jpg" class="rounded-circle" alt="Cinque Terre" width="50" height="50">&nbsp; &nbsp; <a href="home.php" class="card-link"> SaenSuk Running</a> </li>          
       </ul>        
          <a href="#"><img class="card-img-top" src="img/weight/bodyweight2.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">สลายไขมัน ฟิตกล้ม </a>
            </h4>
            <h5>ราคาเริ่มต้น 500 บาท</h5>
            <p class="card-text">เเบ่งเรียนวันล่ะ 2 ชม. ใน 1 เดือนเจอกัน 4 ครั้ง ...  อ่านเพิ่มเติม</p>
          </div>
          <div class="card-footer">
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                             สมัครเรียน
          </button>
          &nbsp;
          <button type="button" class="btn btn-danger">จองวันเรียน</button>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">  
        
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><img src="img/profile/pro2.jpg" class="rounded-circle" alt="Cinque Terre" width="50" height="50">&nbsp; &nbsp; &nbsp; &nbsp; <a href="home.php" class="card-link">Ploys Healthdiary</a></li>          
       </ul>        
          <a href="#"><img class="card-img-top" src="img/weight/bodyweight3.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">สลายไขมัน ฟิตกล้ม </a>
            </h4>
            <h5>ราคาเริ่มต้น 500 บาท</h5>
            <p class="card-text">เเบ่งเรียนวันล่ะ 2 ชม. ใน 1 เดือนเจอกัน 4 ครั้ง ...  อ่านเพิ่มเติม</p>
          </div>
          <div class="card-footer">
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                             สมัครเรียน
          </button>
          &nbsp;
          <button type="button" class="btn btn-danger">จองวันเรียน</button>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">  
        
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><img src="img/profile/pro3.jpg" class="rounded-circle" alt="Cinque Terre" width="50" height="50">&nbsp; &nbsp;&nbsp; &nbsp; <a href="home.php" class="card-link">Ploys Healthdiary</a></li>          
       </ul>        
          <a href="#"><img class="card-img-top" src="img/weight/bodyweight4.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">สลายไขมัน ฟิตกล้ม </a>
            </h4>
            <h5>ราคาเริ่มต้น 500 บาท</h5>
            <p class="card-text">เเบ่งเรียนวันล่ะ 2 ชม. ใน 1 เดือนเจอกัน 4 ครั้ง ...  อ่านเพิ่มเติม</p>
          </div>
          <div class="card-footer">
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                             สมัครเรียน
          </button>
          &nbsp;
          <button type="button" class="btn btn-danger">จองวันเรียน</button>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">  
        
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><img src="img/index/view1.jpg" class="rounded-circle" alt="Cinque Terre" width="50" height="50">&nbsp; &nbsp; &nbsp; &nbsp; <a href="home.php" class="card-link">Ploys Healthdiary</a></li>          
       </ul>        
          <a href="#"><img class="card-img-top" src="img/weight/bodyweight5.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">สลายไขมัน ฟิตกล้ม </a>
            </h4>
            <h5>ราคาเริ่มต้น 500 บาท</h5>
            <p class="card-text">เเบ่งเรียนวันล่ะ 2 ชม. ใน 1 เดือนเจอกัน 4 ครั้ง ...  อ่านเพิ่มเติม</p>
          </div>
          <div class="card-footer">
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                             สมัครเรียน
          </button>
          &nbsp;
          <button type="button" class="btn btn-danger">จองวันเรียน</button>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">  
        
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><img src="img/index/view1.jpg" class="rounded-circle" alt="Cinque Terre" width="50" height="50">&nbsp; &nbsp; &nbsp; &nbsp; <a href="home.php" class="card-link">Ploys Healthdiary</a></li>          
       </ul>        
          <a href="#"><img class="card-img-top" src="img/weight/bodyweight6.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">สลายไขมัน ฟิตกล้ม </a>
            </h4>
            <h5>ราคาเริ่มต้น 500 บาท</h5>
            <p class="card-text">เเบ่งเรียนวันล่ะ 2 ชม. ใน 1 เดือนเจอกัน 4 ครั้ง ...  อ่านเพิ่มเติม</p>
          </div>
          <div class="card-footer">
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                             สมัครเรียน
          </button>
          &nbsp;
          <button type="button" class="btn btn-danger">จองวันเรียน</button>
          </div>
        </div>
      </div>   


    </div>
    <!-- /.row -->

  </div>
  <!-- /.col-lg-9 -->

</div>
<!-- /.row -->

</div>


      
        
                    <div class="container">
                    
                          <div class="row">
                            <div class="col">
                             
                            </div>
                            <div class="col">
                          
                            <nav aria-label="...">
                                <ul class="pagination">
                                  <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                  </li>
                                  <li class="page-item active">
                                    <a class="page-link" href="#">1</a></li>

                                  <li class="page-item ">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                  </li>

                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                  <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                  </li>
                                </ul>
                              </nav>
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