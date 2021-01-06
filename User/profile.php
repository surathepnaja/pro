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
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="date.php">ตารางนัดหมาย </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="eat.php">กรอกข้อมูลการกิน</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="bmr.php">คำนวณ BMR,TDee</a>
                        </li>

                    </ul>
                   <ul class="navbar-nav ml-auto">  
                       <?php if (isset($_SESSION['id'])) { ?>
                   
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ยินดีต้อนรับ คุณ <?php echo $_SESSION['name']; ?>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item active" href="profile.php">ข้อมูลส่วนตัว</a>
                                <a class="dropdown-item" href="history.php">ประวัติการเรียน</a>
                            <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php">Logout</a>
                            </div>
                        </li>

                       <?php }else { ?>
                                       
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <?php } ?>
                    
                   </ul>                  
                </div>
             </div>
         </nav>    
      
        <br>   

        <div class="container">
           <div class="jumbotron"> 
                <div class="row my-2">
                    <div class="col-lg-8 order-lg-2">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">ข้อมูลส่วนตัว</a>
                            </li>
                          
                            <li class="nav-item">
                                <a href="" data-target="#edit" data-toggle="tab" class="nav-link">แก้ไขข้อมูล</a>
                            </li>
                        </ul>
                        <div class="tab-content py-4">
                            <div class="tab-pane active" id="profile">
                                
                                <div class="row">
                                    <div class="col-md-6">
                                    <p><b>ชื่อ-นามสกุล :   </b>  นิภาดา งามสุรา </p>
                                    <p><b>เพศ :          </b>  หญิง</p>
                                    <p><b>อายุ :          </b>  35 </p>
                                    <p><b>น้ำหนัก/ส่วนสูง : </b>  75/165 </p>
                                    <p><b>เบอร์ติดต่อ :     </b>  088-4799658 </p>
                                    <p><b>Email :        </b>  nipada2019@gmail.com </p>
                                    <p><b>Password :     </b>  1234 </p>
                                    <p><b>ที่อยู่           </b>  1088/78 ซ.รัตนา เขต วงสว่าง กทม  </p>
                                    <p><b>จังหวัด :       </b>  กทม  </p>
                                   
                                    </div>
                                 
                                   
                                </div>
                                <!--/row-->
                            </div>
                            
                            <div class="tab-pane" id="edit">
                                <form role="form">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">ชื่อจริง :</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">นามสกุล :</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">เพศ :</label>
                                        <div class="col-lg-9">
                                            <select id="user_sex" class="form-control" size="0">
                                                <option value="0">เลือก</option>
                                                <option value="ชาย">ชาย</option>
                                                <option value="หญิง">หญิง</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">อายุ :</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">น้ำหนัก/ส่วนสูง :</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="url" value="kg/cm">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">เบอร์ติดต่อ : </label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="url" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">New Email : </label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="email" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">New Password :</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="password" value="">
                                        </div>
                                    </div>                                  
                                  
                                   
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">ที่อยู่ : </label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" value="" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label"></label>
                                        <div class="col-lg-6">
                                            <input class="form-control" type="text" value="" placeholder="เขต/อำเภอ">
                                        </div>
                                        <div class="col-lg-3">
                                            <input class="form-control" type="text" value="" placeholder="จังหวัด">
                                        </div>
                                    </div>
                                                                      
                                 
                                  
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label"></label>
                                        <div class="col-lg-9">
                                            <input type="reset" class="btn btn-danger" value="ยกเลิก">
                                            <input type="button" class="btn btn-success" value="บันทึกการเปลี่ยนแปลง">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 order-lg-1 text-center">
                        <img src="img/profile/customer.jpg" class="mx-auto img-fluid img-circle d-block" alt="avatar" width="150" height="150">
                        <h6 class="mt-2">Upload photo</h6><br>
                        <label class="custom-file">                            
                            <button type="file" id="file" class="btn btn-info">เลือกไฟล์</button>
                        </label>
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