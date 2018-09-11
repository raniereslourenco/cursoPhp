<?php 

function soma(float ...$valores):float{


	return array_sum($valores);

}

echo var_dump(soma(2,2))."<br>";
echo soma(25,33)."<br>";
echo soma(1.2,2.1)."<br>";

 ?>