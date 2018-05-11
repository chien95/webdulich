<?php 
function findOne($sql){
	require("connect.php");
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
		while($row = $result->fetch_assoc()) {
			echo json_encode($row);
		}
	} else {
		echo "0 results";
	}
}
function find($sql){
	require("connect.php");
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
		while($row = $result->fetch_assoc()) {
			echo json_encode($row);
		}
	} else {
		echo "0 results";
	}
}
function update($sql){
	require("connect.php");
	if ($conn->query($sql) === TRUE) {
		echo "Record deleted successfully";
	} else {
		echo "Error deleting record: " . $conn->error;
	}
}
function create($sql){
	require("connect.php");
	if ($conn->query($sql) === TRUE) {
		echo "Record deleted successfully";
	} else {
		echo "Error deleting record: " . $conn->error;
	}
}
function delete($sql){
	require("connect.php");
	if ($conn->query($sql) === TRUE) {
		echo "Record deleted successfully";
	} else {
		echo "Error deleting record: " . $conn->error;
	}
}
?>