<?php 
	require("../config/connect.php");
	$sql = "CREATE TABLE chitiettour (
	macttour  VARCHAR(255) PRIMARY KEY, 
	madat VARCHAR(255),
	matour VARCHAR(255),
	maloaitour VARCHAR(255),
	makhachhang VARCHAR(255),
	madichvu  VARCHAR(255),
	ngaydi  datetime,
	ngayve  datetime,
	sokhachnguoilon INT(10),
	sokhachtreem INT(10),
	tongthanhtoan INT(10),
	tenhuongdanvien VARCHAR(255),
	diadiemkhoihanh VARCHAR(255),
	noidungtour VARCHAR(255),
	ngaylap TIMESTAMP,
	FOREIGN KEY (madat) REFERENCES dondattour(madat),
	FOREIGN KEY (matour) REFERENCES tourdulich(matour),
	FOREIGN KEY (madichvu) REFERENCES dichvu(madichvu)
	)";
	if ($conn->query($sql) === TRUE) {
		echo "Table 9  khachhang created successfully<br>";
	} else {
		echo "Error creating table: " . $conn->error;
	}
?>
