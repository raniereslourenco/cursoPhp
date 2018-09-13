<?php 

class Endereco{

	private $logradouro;
	private $numer;
	private $cidade;

	public function __construct($a,$b,$c){

		$this->logradouro = $a;
		$this->numer = $b;
		$this->cidade = $c;
	}

	public function __destruct(){

		//var_dump("Destruir");
	}

	public function __toString(){

		return $this->logradouro.", ".$this->numer.", ".$this->cidade;
	}
}



$meuEndereco = new Endereco("Rua peru", "852", "Fortal");

//var_dump($meuEndereco);

//unset($meuEndereco);

echo "<br>".$meuEndereco;

 ?>