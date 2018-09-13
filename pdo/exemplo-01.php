<?php 

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY idusuario");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) { //pegar as linhas
	foreach($row as $key => $value) { //pegar os valores na linha
		echo "<strong>" . $key . ":</strong>" . $value . "<br/>";
	}

	echo "======================================================<br>";
}



 ?>