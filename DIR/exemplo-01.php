<?php 

$name = "images";

if (!is_dir($name)) {
	
	mkdir($name);

	echo "Diretorio $name criado com sucesso!";
} else {

	rmdir($name);

	echo "Diretorio ja existe: $name foi removido";
}

 ?>