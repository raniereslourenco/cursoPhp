<?php 

namespace Cliente;

class Cadastro extends \Cadastro {

	public function registrarVenda(){

		echo "Fo registrada uma venda para o cliente ".$this->getNome();
	}

}

 ?>