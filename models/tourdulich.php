<?php 
	require("../config/connect.php");
	$sql = "CREATE TABLE tourdulich (
	matour  VARCHAR(255) PRIMARY KEY, 
	maloaitour VARCHAR(255),
	tentour VARCHAR(255),
	giatour INT(255),
	songay INT(255),
	noidung VARCHAR(255),
	hinhanh VARCHAR(255),
	diadiem VARCHAR(255),
	ngaytao TIMESTAMP,
	ngaycapnhap TIMESTAMP,
	FOREIGN KEY (maloaitour) REFERENCES loaitour(maloaitour)
	)";
	if ($conn->query($sql) === TRUE) {
		echo "Table 3 tourdulich created successfully<br>";
	} else {
		echo "Error creating table: " . $conn->error;
	}
?>
