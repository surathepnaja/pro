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


   <link href='http://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.4.0/fullcalendar.min.css'  rel='stylesheet' />
   <link href='http://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.4.0/fullcalendar.print.css'  rel='stylesheet' media='print' />
			
            <style>
				#calendar{
					margin-top:10px;
				}
			</style>


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
                        <li class="nav-item active">
                            <a class="nav-link" href="date.php">ตารางนัดหมาย</a>
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
			<div class="row">
				<div class="col-md-12">
                <h4 class="text-center">ตารางนัดหมายออกกำลังกับเทรนเนอร์</h4><br><br><br>   
					<!-- Button trigger modal New data-->
					<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#new_calendar_modal">
					  เพิ่มข้อมูล
					</button>
					
					<div id='calendar'></div>
				</div>
			</div>
		</div>
		
			<!-- Button trigger modal Edit data-->
			<span id="trigger_modal" data-toggle="modal" data-target="#calendar_modal"></span>

				<!-- Modal For edit data-->
				<div class="modal fade" id="calendar_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Fullcalendar Modal With MySQL</h4>
					  </div>
							<div id="get_calendar"></div>
					</div>
				  </div>
				</div>
				
				
				<!-- Modal For new data-->
				<div class="modal fade" id="new_calendar_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">New Fullcalendar Modal With MySQL</h4>
					  </div>
					  <div class="modal-body">
							<form id="new_calendar">
							  <div class="form-group">
								<label >เรื่อง</label>
								<input type="text" class="form-control" name="title" placeholder="">
							  </div>
							  <div class="form-group">
								<label >วันที่เริมต้น</label>
								<input type="text" class="form-control" name="start"  placeholder="">
							  </div>
							  <div class="form-group">
								<label >วันที่สิ้นสุด</label>
								<input type="text" class="form-control" name="end"  placeholder="">
							  </div>
							  <input type="hidden" name="new_calendar_form">
							</form>
					  </div>
					  <div class="modal-footer">
							<button type="button" class="btn btn-primary" onclick="return new_calendar();">บันทึกข้อมูล</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
						
					  </div>
					</div>
				  </div>
				</div>

                
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
    
   
    <script src='http://fullcalendar.io/js/fullcalendar-2.4.0/lib/moment.min.js'></script>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.4.0/fullcalendar.min.js'></script>
		<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <!-- นำเข้า script File -->
  <script src='script.js'></script>	
</body>
</html>