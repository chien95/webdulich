<?php 
	require("../config/connect.php");
	$sql = "CREATE TABLE doitac (
	madoitac  VARCHAR(255) PRIMARY KEY, 
	tendoitac VARCHAR(255),
	sodienthoai int(15),
	diachi VARCHAR(255),
	email VARCHAR(255)
	)";
	if ($conn->query($sql) === TRUE) {
		echo "Table 6 doitac created successfully<br>";
	} else {
		echo "Error creating table: " . $conn->error;
	}
?>
