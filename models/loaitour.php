<?php 
	require("../config/connect.php");
	$sql = "CREATE TABLE loaitour (
	maloaitour  VARCHAR(255)  PRIMARY KEY, 
	tenloaitour VARCHAR(255) NOT NULL
	)";
	if ($conn->query($sql) === TRUE) {
		echo "Table 2 loaitour created successfully<br>";
	} else {
		echo "Error creating table: " . $conn->error;
	}
	$loaitour = "INSERT INTO loaitour (maloaitour, tenloaitour)
	VALUES (1, 'du lịch trong nước'),('2', 'du lịch nước ngoài')";
	$conn->query($loaitour);
?>
