<?php
session_start();
//เชื่อมฐานข้อมูล
include('connect.php');
//รับค่า


//อันนี้บันทึก สำหรับ login
$sql = "UPDATE tr_customer_profile SET 
			customer_name = '".$_POST['textname']."' ,
			customer_birthdate = '".$_POST['bday']."',
            customer_gender = '".$_POST['radios']."',
            weight_height = '".$_POST['texthw']."',
            customer_address = '".$_POST['textarea']."',
            facebook_name = '".$_POST['textfb']."',
            line_id = '".$_POST['textline']."',
            phone_number = '".$_POST['textphone']."',
            img_profile = ''
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
	//echo "window.location = 'addprofile.php'; ";
	echo "</script>";
} else {
	echo "<script type='text/javascript'>";
	echo "alert('Error!!');";
	echo "</script>";
}
