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
                        <li class="nav-item active">
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
                                <a class="dropdown-item" href="profile.php">ข้อมูลส่วนตัว</a>
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
                     <h4 class="text-center">กรอกข้อมูลการทานอาหารของคุณในเเต่ล่ะวัน</h4><br> 


                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;เพิ่มข้อมูล
                        </button><br> 

                        <!-- The Modal -->
                        <div class="modal" id="myModal">
                            <div class="modal-dialog">
                            <div class="modal-content">
                            
                                <!-- Modal Header -->
                                <div class="modal-header">
                                <h4 class="modal-title">กรอกข้อมูล</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                
                                <!-- Modal body -->
                                <div class="modal-body">
                                         <form action="/action_page.php">
                                         
                                            <div class="form-group">
                                            <input type="date" name="bday" max="3000-12-31" min="1000-01-01" class="form-control">
                                            </div>                                              
                                            <div class="form-group">                                                
                                                <input type="text" class="form-control" id="eat1" placeholder="มื้อเช้า">
                                            </div>
                                            <div class="form-group">                                                
                                                <input type="text" class="form-control" id="eat2" placeholder="มื้อกลางวัน">
                                            </div>
                                            <div class="form-group">                                                
                                                <input type="text" class="form-control" id="eat3" placeholder="มื้อเย็น">
                                            </div>                                          
                                           
                                        </form>
                                </div>
                                
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success" data-dismiss="modal">คำนวณ</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
                               </div>
                                
                            </div>
                            </div>
                        </div>
                        <br> 


                     <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                            <th class="" scope="col">ลำดับ</th>
                            <th class="" scope="col">วัน/เดือน/ปี/</th>
                            <th class="" scope="col">มื้อเช้า</th>
                            <th class="" scope="col">มื้อกลางวัน</th>
                            <th class="" scope="col">มื้อเย็น</th>
                            <th class="" scope="col">ปริมาณเเคลอรี่ (kcal)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>1/สิงหาคม/2562</td>
                            <td>- แซนวิชหมูหยอง 1 ชิ้น <br> - นมเปรี้ยว 1 กล่อง</td> 
                            <td>- ข้าวผัดหมู 1 จาน <br> - น้ำส้ม 1 แก้ว </td> 
                            <td>- นมจืด 1 กล้อง</td> 
                            <td> 2200</td>


                            </tr>

                            <tr>
                            <th scope="row">2</th>
                            <td>2/สิงหาคม/2562</td>
                            <td>- -ขนมปังใส่นม 2 ชิ้น <br> - นมเปรี้ยว 1 กล่อง</td> 
                            <td>- ข้าวผัดหมูกรอบ 1 จาน <br> - น้ำมะพร้าว 1 แก้ว </td> 
                            <td>- นมถั่วเหลือ 500 ml 1 กล้อง</td> 
                            <td>1900</td>
                            </tr>


                            <tr>
                            <th scope="row">2</th>
                            <td>3/สิงหาคม/2562</td>
                            <td>- แซนวิชหมูหยอง 1 ชิ้น <br> - นมเปรี้ยว 1 กล่อง</td> 
                            <td>- ข้าวผัดหมู 1 จาน <br> - น้ำส้ม 1 แก้ว </td> 
                            <td>- นมจืด 1 กล้อง</td> 
                            <td>2050</td>
                            </tr>

                            
                            <tr>
                            <th scope="row">4</th>
                            <td>4/สิงหาคม/2562</td>
                            <td>- แซนวิชหมูหยอง 1 ชิ้น <br> - นมเปรี้ยว 1 กล่อง</td> 
                            <td>- ข้าวผัดหมู 1 จาน <br> - น้ำส้ม 1 แก้ว </td> 
                            <td>- นมจืด 1 กล้อง</td> 
                            <td>1750</td>
                            </tr>

                        </tbody>
                        </table>                    
                     </div>   
            </div>

            <div class="row">
                <div class="col-md-6 offset-md-5"> 
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">ก่อนหน้า</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">ถัดไป</a></li>
                    </ul>
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