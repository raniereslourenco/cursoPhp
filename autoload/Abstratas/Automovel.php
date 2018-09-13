<?php 

interface Veiculo {

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);

}

abstract class Automovel implements Veiculo { //qualquer automovel implementa a classe veiculo, so que ninguem pode instanciar um automovel

public function acelerar($velocidade){

	echo "O veiculo acelerou até ".$velocidade;
}

public function frenar($velocidade){

	echo "O veiculo frenou até ".$velocidade;
}

public function trocarMarcha($marcha) {

	echo "O veiculo engatou a marcha ".$marcha;
}

}

 ?>