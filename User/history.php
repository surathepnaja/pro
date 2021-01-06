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
                                <a class="dropdown-item" href="profile.php">ข้อมูลส่วนตัว</a>
                                <a class="dropdown-item active" href="history.php">ประวัติการเรียน</a>
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
                 <table class="table table-hover ">
                    <thead >
                    <tr>   
                        <th>ชื่อคอร์ส</th>
                        <th>ผู้สอน</th>
                        <th>วัน/เดือน/ปี เริ่มเรียน-จบคอร์ส</th>
                       
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>คาดิโอเพื่อสุขภาพ</td>
                        <td><a href="" class="card-link">Ploys Healthdiary</a></td>
                        <td>20/05/2562 - 20/06/2562</td>
                    </tr>
                    <tr>
                        <td>สลายไขมัน ฟิตกล้ม</td>
                        <td><a href="" class="card-link">Ploys Healthdiary</a></td>
                        <td>25/06/2562 - 06/07/2556</td>
                    </tr>
                    <tr>
                        <td>วิ่งลดไขมัน</td>
                        <td><a href="" class="card-link">Ploys Healthdiary</a></td>
                        <td>20/08/2562 - 30/08/2562</td>
                    </tr>
                   
                    </tbody>
                </table>
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