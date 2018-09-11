<?php 

$nome = "Raniere";

function teste(){

	global $nome;
	echo $nome;

}

function teste2(){

$nome = "Lourenço";
echo $nome." agora no teste 2";

}

teste();

teste2();

 ?>