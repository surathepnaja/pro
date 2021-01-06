<?php
//เชื่อมฐานข้อมูล
include('connect.php');   
//รับค่า
	$email = $_POST["email"];
	$password = $_POST["password"];
	$radios = $_POST["radios"];




	
//อันนี้บันทึก
$sql = "INSERT INTO tr_user (userid, username, userpassword, userstats)
VALUES ('','$email', '$password', '$radios')";

//เช็คว่าบันทึกข้อมูลไหม
if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
  } else {
	echo "Error: " . $sql . "<br>" . $conn->error;
  }
	


//เด้งกลับไปหน้าสมัคร js
	if($sql){
	echo "<script type='text/javascript'>";
	echo "alert('Save Succesfuly');";
	echo "window.location = 'register.php'; ";
	echo "</script>";
    }
    
    else{
        echo "<script type='text/javascript'>";
        echo "alert('Error!!');";
        echo "</script>";
	}
	
    ?>