<?php 

class Pessoa { //classe

	public $nome; //atributo

	public function falar() { //metodo

		return "O meu nome é ".$this->nome;
	}
}

$raniere = new Pessoa();

$raniere->nome = "Raniere";

echo $raniere->falar();

 ?>