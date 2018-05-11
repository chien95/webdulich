<?php 
	require("../config/connect.php");
	$sql = "CREATE TABLE dondattour (
	madat  VARCHAR(255) PRIMARY KEY, 
	makhachhang VARCHAR(255),
	tongthanhtoan int(50),
	ngaydattour TIMESTAMP,
	FOREIGN KEY (makhachhang) REFERENCES khachhang(makhachhang)
	)";
	if ($conn->query($sql) === TRUE) {
		echo "Table 5 dondattour created successfully<br>";
	} else {
		echo "Error creating table: " . $conn->error;
	}
?>
