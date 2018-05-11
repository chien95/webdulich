<?php 
	require("../config/connect.php");
	$sql = "CREATE TABLE thanhtoan (
	mathanhtoan  VARCHAR(255) PRIMARY KEY, 
	madat VARCHAR(255),
	makhachhang VARCHAR(255),
	tongthanhtoan int(50),
	dathanhatoan TINYINT(1) NOT NULL,
	conlai int(50),
	FOREIGN KEY (madat) REFERENCES dondattour(madat)
	)";
	if ($conn->query($sql) === TRUE) {
		echo "Table 8 thanhtoan created successfully<br>";
	} else {
		echo "Error creating table: " . $conn->error;
	}
?>
