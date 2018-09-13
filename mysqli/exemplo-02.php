<?php 

$conn = new mysqli("localhost","root","", "dbphp7");

if ($conn->connect_error) {

	echo "error: " . $conn->connect_error;

}

$result = $conn->query("SELECT * FROM TB_USUARIOS ORDER BY DESLOGIN");

$data = array();

while ($row = $result->fetch_assoc()) {

	array_push($data,$row);

}

echo json_encode($data);

 ?>