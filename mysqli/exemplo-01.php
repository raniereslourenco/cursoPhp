<?php 

$conn = new mysqli("localhost","root","", "dbphp7");

if ($conn->connect_error) {

	echo "error: " . $conn->connect_error;

}

$stmt = $conn->prepare("INSERT INTO TB_USUARIOS (DESLOGIN, DESSENHA) VALUES(?,?)");

$stmt->bind_param("ss", $login, $senha); //tipo de dado a ser inserido no banco

$login = "user";
$senha = "12345";

$stmt->execute();

$login = "root";
$senha = "1!2@3#4$5%";

$stmt->execute();

 ?>