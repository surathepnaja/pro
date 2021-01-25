<?php
//เชื่อมฐานข้อมูล
include('connect.php');
//รับค่า
$email = $_POST["email"];
$password = $_POST["password"];
$radios = $_POST["radios"];





//อันนี้บันทึก สำหรับ login
$sql = "INSERT INTO tr_user (userid, username, userpassword, userstats) 
		VALUES ('','$email', '$password', '$radios')";
//เช็คเงื่อนไขแยกตาราง
	
		if ($radios == 'Trainer')  {
			echo "trainer";
			$sql2 = "INSERT INTO tr_trainer_profile (id_username) 
			VALUES ('$email')"; 
			echo $email;
 		} elseif  ($radios == 'Customer') {
			echo "Customer";
 			 $sql2 = "INSERT INTO tr_customer_profile (id_username)
			  VALUES ('$email')";
			  echo $email;
 		}




//เช็คว่าบันทึกข้อมูลไหม
if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
if ($conn->query($sql2) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql2 . "<br>" . $conn->error;
}



//เด้งกลับไปหน้าสมัคร js
if ($sql) {
	echo "<script type='text/javascript'>";
	echo "alert('Save Succesfuly');";
	echo "window.location = 'register.php'; ";
	echo "</script>";
} else {
	echo "<script type='text/javascript'>";
	echo "alert('Error!!');";
	echo "</script>";
}
