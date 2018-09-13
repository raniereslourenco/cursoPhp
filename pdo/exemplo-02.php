<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login = "lourenco";
$pass = "777888999";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $pass);

$stmt->execute();

echo "Inserido OK!";

 ?>