<?php 

$pessoas = array();

array_push($pessoas, array(
	'nome' => 'Raniere',
	'idade' => 37
));

array_push($pessoas, array(
	'nome' => 'Glaucio',
	'idade' => 25
));

echo json_encode($pessoas);

 ?>