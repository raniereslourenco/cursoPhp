<?php 

$data = [
	"nome"=>"Raniere"
];

define('SECRET', pack('a16', 'senha'));

$mcrypt = mcrypt_encrypt(
	MCRYPT_RIJNDAEL_128,
	SECRET, 
	json_encode($data), 
	MCRYPT_MODE_ECB
);

var_dump($mcrypt);

 ?>