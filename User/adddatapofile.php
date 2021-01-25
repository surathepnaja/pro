<?php
session_start();
//เชื่อมฐานข้อมูล
include('connect.php');
//รับค่า
$textname = $_POST['textname'];
$username = $_POST['username'];
$bday = $_POST['bday'];
$radios = $_POST['radios'];
$texthw = $_POST['texthw'];
$textarea = $_POST['textarea'];
$textfb = $_POST['textfb'];
$textline = $_POST['textline'];
$textphone = $_POST['textphone'];


//อันนี้บันทึก สำหรับ login
$sql = "UPDATE  tr_customer_profile SET 
			customer_name = '$textname' ,
			customer_birthdate = '$bday',
            customer_gender = '$radios',
            weight_height = '$texthw',
            customer_address = '$textarea',
            facebook_name = '$textfb',
            line_id = '$textline',
            phone_number = '$textphone',
            img_profile = '',
			WHERE id_username  = '$username' ";

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
	echo "window.location = 'addprofile.php'; ";
	echo "</script>";
} else {
	echo "<script type='text/javascript'>";
	echo "alert('Error!!');";
	echo "</script>";
}
