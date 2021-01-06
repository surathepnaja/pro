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
</head>
<body>
   
    <?php
       
       include_once('connect.php');

       if(isset($_POST['submit'])){ 

            $name_user = $_POST['firstname'];
            $email_user = $_POST['email'];
            $password = $_POST['password'];
            $passwordenc = md5($password);
        
           
           $sql = "INSERT INTO `user` (`id`, `name_user`, `email_user`, `password`,`user_level`) 
                    VALUES (NULL, '$name_user', '$email_user', '$passwordenc','customer');";
                 
                $result =  $conn->query($sql);

                if($result){
                    echo '<script> alert("ลงทะเบียนเรียบร้อย")</script>';
                    header('Refresh:0; url=login.php');

                }else{
                    echo 'No';
                }
                    
            

       }
    
    ?>

        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
            <div class="container">
                   <a class="navbar-brand" href="index.php">Fitness Trainer</a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                      </button>

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                      
                    
                    <ul class="navbar-nav ml-auto">                           
                            <li class="nav-item active">
                              <a class="nav-link" href="login.php">เข้าสู่ระบบ<span class="sr-only">(current)</span></a>
                            </li>                          
                    </ul>                  


                  </div>
             </div>        
          </nav>  
          <br>
          <br>
          <br> 

      <div class="container">
         <div class="row">
            <div class="col-md-8 mx-auto mt-5 ">
                <div class="card">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="card-header text-center">
                            ลงทะเบียนเรียนกับเรา
                        </div>
                        <div class="card-body">
                        <div class="form-group row">
                            <label for="firstname" class="col-sm-3 col-form-label">ชื่อ-นามสกุล :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="firstname" name="firstname" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-3 col-form-label">Email :</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>                           
                            <div class="form-group row">
                                <label for="password" class="col-sm-3 col-form-label">Password :</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                            </div>
                            
                        </div>
                     

                        <div class = "card-footer text-center">
                          <input type="submit" name= "submit" class="btn btn-success" value="ลงทะเบียน">
                        </div>

                    </form>
                </div>
            </div>  
         </div> 
      </div>
    <br>
    <br>
    <br>
    <br>
    
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