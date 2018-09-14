<?php 

	require_once 'config.php';

	$sql = new Sql();

	$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

	$headers = array();

	foreach ($usuarios[0] as $key => $value) { //listar os titulos da linha
		array_push($headers, ucfirst($key));
	}

	$file =fopen("usuarios.csv", "w+"); //cria o arquivo usuairos.csv

	fwrite($file, implode(",",$headers) . "\r\n"); //escreve no arquivo os dados da lina

	foreach ($usuarios as $row) { //inicia a listagem dos dados

		$data = array();

		foreach ($row as $key => $value) { //pega os dados
			
			array_push($data, $value);
		}//end foreach de coluna

		fwrite($file, implode(",",$data) . "\r\n"); //escreve nas linhas os dados 
		
	} //end foreach de linha

	fclose($file); //fecha o arquivo

 ?>