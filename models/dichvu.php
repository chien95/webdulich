<?php 
	require("../config/connect.php");
	$sql = "CREATE TABLE dichvu (
	madichvu  VARCHAR(255) PRIMARY KEY, 
	madoitac VARCHAR(255),
	tendichvu VARCHAR(255),
	giadichcu int(50),
	noidungdichvu VARCHAR(255),
	FOREIGN KEY (madoitac) REFERENCES doitac(madoitac)
	)";
	if ($conn->query($sql) === TRUE) {
		echo "Table 7 dichvu created successfully<br>";
	} else {
		echo "Error creating table: " . $conn->error;
	}
?>
