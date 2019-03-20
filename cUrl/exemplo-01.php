<?php 

$cep = "60710440";
$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link); //iniciador da webservice

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response,true);

print_r($data);

 ?>