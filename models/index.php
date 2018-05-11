<?php 
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 

// Create database
$delete = 'DROP DATABASE dulich';
if ($conn->query($delete) === TRUE) {
	echo "Database delete successfully<br>";
} else {
	echo "Error creating database: " . $conn->error;
}

$sql = "CREATE DATABASE dulich  CHARACTER SET utf8 COLLATE utf8_general_ci";
if ($conn->query($sql) === TRUE) {
	require("taikhoan.php");
	require("loaitour.php");
	require("tourdulich.php");
	require("khachhang.php");
	require("dondattour.php");
	require("doitac.php");
	require("dichvu.php");
	require("thanhtoan.php");
	require("chitiettour.php");
} else {
	echo "Error creating database: " . $conn->error;
}

$conn->close();
?>