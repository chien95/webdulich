<?php 
	require("../config/connect.php");
	$sql = "CREATE TABLE khachhang (
	makhachhang  VARCHAR(255) PRIMARY KEY, 
	tenkhachhang VARCHAR(255),
	diachi VARCHAR(255),
	sodienthoai  INT(12),
	socmt INT(15),
	email  VARCHAR(255),
	sotaikhoannganhang  INT(20),
	tennganhang  VARCHAR(255),
	ngaydattour TIMESTAMP
	)";
	if ($conn->query($sql) === TRUE) {
		echo "Table 4  khachhang created successfully<br>";
	} else {
		echo "Error creating table: " . $conn->error;
	}
?>
