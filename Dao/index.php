<?php 

require_once ("config.php");

$root = new Usuario();

$root->loadById(4);

echo $root;

/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM TB_USUARIOS");

echo json_encode($usuarios);
*/
 ?>