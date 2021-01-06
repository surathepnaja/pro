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

                        <li class="nav-item active">
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

                     <h4 class="text-center"> วิธีคำนวณการเผาผลาญพลังงาน Basal Metabolic Rate (BMR)</h4><br> 
                     <p class="font-weight-bold"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Basal Metabolic Rate (BMR) คือ อัตราการความต้องการเผาผลาญของร่างกายในชีวิตประจำวัน หรือจำนวนแคลอรี่ขั้นต่ำที่ต้องการใช้ในชีวิตแต่ละวัน ดังนั้นการคำนวณ BMR จะช่วยให้คุณคำนวณปริมาณแคลอรี่ที่ใช้ต่อวันเพื่อรักษาน้ำหนักปัจจุบันได้ และเมื่ออายุมากขึ้นเราจะควบคุมน้ำหนักได้ยากขึ้น เพราะ BMR เราลดลง การอดอาหารก็เป็นสาเหตุหนึ่งที่ทำให้ BMR ลดลง วิธีป้องกันคือ "หมั่นออกกำลังกาย" เพื่อเพิ่มประสิทธิภาพของการเผาผลาญ ซึ่งจะทำให้ BMR ไม่ลดลงเร็วเกินไป</p>
                   
                     <p class="font-weight-bold"> สูตรคำนวณอัตราการเผาผลาญของร่างกายในชีวิตประจำวันคือ</p>

                     <p class="font-weight-normal">  * สำหรับผู้ชาย : BMR = 66 + (13.7 x น้ำหนักตัวเป็น กก.) + (5 x ส่วนสูงเป็น ซม.) – (6.8 x อายุ)</p>
                     <p class="font-weight-normal">  * สำหรับผู้หญิง : BMR = 665 + (9.6 x น้ำหนักตัวเป็น กก.) + (1.8 x ส่วนสูงเป็น ซม.) – (4.7 x อายุ)</p>
                     <p class="font-weight-normal">   จะสังเกตได้ว่าน้ำหนัก ส่วนสูงและอายุมีผลต่อการเผาผลาญพลังงาน เมื่อหาค่า BMR (Basal Metabolic Rate)
                                                      มาแล้วเราก็จะสามารถรู้ได้ว่าเรามีการการเผาผลาญพลังงานโดยไม่ทำกิจกรรมอะไรเลยเท่าไร 
                                                      แต่หากเรามีกิจกรรมอย่างออกกำลังกายจะมีการเผาผลาญพลังงานโดยคำนวณได้ดังนี้</p>

                        <div class="row">
                            <div class="col">
                            
                            </div>
                            <div class="col-5">
                            <button type="button" class="btn btn-info center">"การเผาผลาญพลังงานโดยปกติ = BMR x ตัวแปร"</button>
                            </div>
                            <div class="col">
                            
                            </div>
                        </div> 
                        <br>
                    

                     <p class="font-weight-bold">     โดยตัวแปรของเราจะขึ้นอยู่กับการออกกำลังของเราดังนี้</p>

                     <p class="font-weight-normal">   นั่งทำงานอยู่กับที่ และไม่ได้ออกกำลังกายเลย = BMR x 1.2</p>
                     <p class="font-weight-normal">   ออกกำลังกายหรือเล่นกีฬาเล็กน้อย ประมาณอาทิตย์ละ 1-3 วัน = BMR x 1.375</p>
                     <p class="font-weight-normal">   ออกกำลังกายหรือเล่นกีฬาปานกลาง ประมาณอาทิตย์ละ 3-5 วัน = BMR x 1.55</p>
                     <p class="font-weight-normal">   ออกกำลังกายหรือเล่นกีฬาอย่างหนัก ประมาณอาทิตย์ละ 6-7 วัน = BMR x 1.725</p>
                     <p class="font-weight-normal">   ออกกำลังกายหรือเล่นกีฬาอย่างหนักทุกวันเช้าเย็น = BMR x 1.9</p>
                     <br>

                     <h4 class="text-center"> วิธีคำนวณค่าของพลังงานที่ใช้ทั้งหมดในแต่ละวัน TDEE (Total Daily Energy Expenditure)</h4><br> 
                     <p class="font-weight-bold"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; TDEE (Total Daily Energy Expenditure) ปริมาณการใช้พลังงานของแต่ละคนใน 1 วัน
                                                     บางคนเคลื่อนไหวเยอะ ออกกำลังกายหนัก <br> ร่างกายก็ต้องใช้พลังงากมากขึ้น</p>

 

                    

                     <p class="font-weight-normal"> ไม่ออกกำลังกายหรือทำงานนั่งโต๊ะ&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;TDEE = BMR*1.2

                     <p class="font-weight-normal"> ออกกำลังกายเบาๆ (1-2 ครั้งต่อสัปดาห์)&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TDEE = BMR*1.375

                     <p class="font-weight-normal"> ออกกำลังกายปานกลาง (3-5 ครั้งต่อสัปดาห์) &nbsp; &nbsp;   TDEE = BMR*1.55

                     <p class="font-weight-normal"> ออกกำลังกายหนัก (6-7 ครั้งต่อสัปดาห์)&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; TDEE = BMR*1.725

                     <p class="font-weight-normal"> ออกกำลังกายหนักมาก (ทุกวัน วันละ 2 เวลา)&nbsp; &nbsp; &nbsp;TDEE = BMR*1.9



                     <form>
                            <div class="alert alert-info" role="alert">
                                BMR (Basal Metabolic Rate) พลังงานที่จำเป็นพื้นฐานในการมีชีวิต - กิโลแคลอรี่
                            </div>  

                            <div class="alert alert-info" role="alert">
                                TDEE (Total Daily Energy Expenditure) พลังงานที่คุณใช้ในแต่ละวัน - กิโลแคลอรี่
                            </div> 
                            
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">ส่วนสูง :</label>
                                <div class="col-sm-4">
                                <input type="text" class="form-control" id="้high" placeholder="เซ็นติเมตร">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">น้ำหนัก :</label>
                                <div class="col-sm-4">
                                <input type="text" class="form-control" id="้weight" placeholder="กิโลกรัม">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">อายุ :</label>
                                <div class="col-sm-4">
                                <input type="text" class="form-control" id="้weight" placeholder="ปี">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">กิจกรรม :</label>
                                <div class="col-sm-4">
                                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                    <option selected>ไม่ออกกำลังกายหรืออกกำลังกายน้อยมาก</option>
                                    <option value="1">ออกกำลังกายน้อยเล่นกีฬา 1-3 วัน/สัปดาห์</option>
                                    <option value="2">ออกกำลังกายปานกลางเล่นกีฬา 3-5 วัน/สัปดาห์</option>
                                    <option value="3">ออกกำลังกายหนักเล่นกีฬา 6-7 วัน/สัปดาห์</option>
                                    <option value="4">ออกกำลังกายหนักเล่นเป็นนักกีฬา</option>
                                </select>
                                 </div>
                            </div>
                          
                            <fieldset class="form-group">
                                <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">เพศ :</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        ชาย
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                    <label class="form-check-label" for="gridRadios2">
                                        หญิง
                                    </label>
                                    </div>
                                   
                                </div>
                                </div>
                            </fieldset>                           
                            <div class="form-group row">
                                <div class="col-sm-5">
                                
                                </div>
                            </div>

                                <div class="form-group row">
                                    <div class="col"></div>
                                    <div class="col"><button type="submit" class="btn btn-info">คำนวณ</button></div>
                                    <div class="col"></div>
                                    <div class="col"></div>
                                </div>
                          </form>

                          
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