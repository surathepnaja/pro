<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitnesstrainer";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("ล้มเหลว: " . $conn->connect_error);
}
echo "เชื่อมต่อสำเร็จ";
?>
