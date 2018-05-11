<?php 
	require("../config/connect.php");
	$sql = "CREATE TABLE taikhoan (
	tentaikhoan  VARCHAR(255) PRIMARY KEY, 
	matkhau VARCHAR(255) NOT NULL,
	phanquyen INT(1) NOT NULL
	)";
	if ($conn->query($sql) === TRUE) {
		echo "Table 1 taikhoan created successfully<br>";
	} else {
		echo "Error creating table: " . $conn->error;
	}
	$user = "INSERT INTO taikhoan (tentaikhoan, matkhau, phanquyen)
	VALUES ('admin', md5(1), 1)";
	$conn->query($user);
?>
