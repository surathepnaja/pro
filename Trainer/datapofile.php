<?php
session_start();
//เชื่อมฐานข้อมูล
include('connect.php');
//รับค่า


//อันนี้บันทึก สำหรับ login
$sql = "UPDATE tr_trainer_profile SET 
			trainer_name = '".$_POST['textname']."' ,
			trainer_birthdate = '".$_POST['bday']."',
            trainer_gender = '".$_POST['radios']."',
            trainer_address = '".$_POST['textareainput']."',
            train_program = '".$_POST['checkbox1']."',
            train_program2 = '".$_POST['checkbox2']."',
            aptitude = '".$_POST['checkboxx1']."',
            aptitude2  = '".$_POST['checkboxx2']."',
            aptitude3  = '".$_POST['checkboxx3']."',
            aptitude4  = '".$_POST['checkboxx4']."',
            aptitude5  = '".$_POST['checkboxx5']."',
            teacher = '".$_POST['checkboxt1']."',
            teacher2 = '".$_POST['checkboxt2']."',
            teacher3 = '".$_POST['checkboxt3']."',
            facebook_name = '".$_POST['textfb']."',
			line_id = '".$_POST['textli']."', 
            phone_number = '".$_POST['textphone']."'
			WHERE id_username  = '".$_SESSION['username']."' ";

//เช็คเงื่อนไขแยกตาราง



	



//เช็คว่าบันทึกข้อมูลไหม
if ($conn->query($sql) === TRUE) {
	echo "บันทึกข้อมูล";
} else {
	echo "ข้อมูลผิดพลาด: " . $sql . "<br>" . $conn->error;
}




//เด้งกลับไปหน้าสมัคร js
if ($sql) {
	echo "<script type='text/javascript'>";
	echo "alert('Save Succesfuly');";
	echo "window.location = 'profile.php'; ";
	echo "</script>";
} else {
	echo "<script type='text/javascript'>";
	echo "alert('Error!!');";
	echo "</script>";
}
