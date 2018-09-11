<?php 

$a = 10;

function trocaValor(&$b){

	$b += 50;
	return $b;
}

echo $a." Vlr Inicio<br>";
echo trocaValor($a)."<br>";
echo $a." Vlr 1<br>";
echo trocaValor($a)."<br>";
echo $a." Vlr 2<br>";
echo trocaValor($a)."<br>";
echo $a." Vlr 3<br>";
echo trocaValor($a)."<br>";
echo $a." Vlr 4<br>";
echo trocaValor($a)."<br>";
echo $a." Vlr 5<br>";

 ?>