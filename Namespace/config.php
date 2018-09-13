<?php 

spl_autoload_register(function($nameClass){

	var_dump($nameClass);

	$dirClass = "class"; //Diretorio
	$filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php"; //caminho dos arquivos

	//verificar se o arquivo existe
	if (file_exists($filename)) {

		require_once($filename);
	}

});

 ?>