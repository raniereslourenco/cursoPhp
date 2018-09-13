<?php 

class Pessoa{

	public $nome = "Rasmus Lerdorf";
	protected $idade = 48;
	private $senha = "123456";

	public function verDados(){

		echo $this->nome."<br>";
		echo $this->idade."<br>";
		echo $this->senha."<br>";
	} 
}

$objeto = new Pessoa();

//echo $objeto->nome."<br>"; //acessivel pois eh publico
//echo $objeto->idade."<br>"; //nao pode acessar pois eh 
//echo $objeto->senha."<br>"; //somente a classe consegue acessar

$objeto->verDados();

 ?>