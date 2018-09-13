<?php 

class Pessoa{

	public $nome = "Rasmus Lerdorf"; //todo mundo pode ver
	protected $idade = 48; //na mesma classe e classe extendida
	private $senha = "123456"; //somente na classe

	public function verDados(){

		echo $this->nome."<br>";
		echo $this->idade."<br>";
		echo $this->senha."<br>";
	} 
}

class Programador extends Pessoa {

	public function verDados(){

		echo get_class($this) . "<br>";

		echo $this->nome."<br>";
		echo $this->idade."<br>";
		echo $this->senha."<br>";
	} 
}

$objeto = new Programador();

//echo $objeto->nome."<br>"; //acessivel pois eh publico
//echo $objeto->idade."<br>"; //nao pode acessar pois eh 
//echo $objeto->senha."<br>"; //somente a classe consegue acessar

$objeto->verDados();

 ?>