<?php
session_start();
include('connect.php');

$ = $_POST[""];
$ = $_POST[""];
$ = $_POST[""];
$ = $_POST[""];
$ = $_POST[""];
$ = $_POST[""];
$ = $_POST[""];
$ = $_POST[""];
$ = $_POST[""];
$ = $_POST[""];
$ = $_POST[""];
$ = $_POST[""];
$ = $_POST[""];
$ = $_POST[""];
$ = $_POST[""];
$ = $_POST[""];
$ = $_POST[""];
$ = $_POST[""];
$ = $_POST[""];
$ = $_POST[""];
$ = $_POST[""];




$sql = "INSERT INTO transitions_study (id_study, study_day1, study_day2, study_day3, study_day4, study_day5, study_day6, study_day7,
        Study_time1, Study_time2, Study_time3, Study_time4, Study_time5, Study_time6, Study_time7, location1, location2, , location3,
        location4, location5, location6, location7, id_username, name_customer,	name_trainer) 
		VALUES ('','$email', '$password', '$radios')";





//เช็คว่าบันทึกข้อมูลไหม
if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}


if ($sql) {
	echo "<script type='text/javascript'>";
	echo "alert('Save Succesfuly');";
	echo "window.location = 'index.php'; ";
	echo "</script>";
} else {
	echo "<script type='text/javascript'>";
	echo "alert('Error!!');";
	echo "</script>";
}


?>


