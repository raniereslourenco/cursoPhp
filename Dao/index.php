<?php 

require_once ("config.php");

$lista = Usuario::getList();

echo json_encode($lista);


/* deletando usuario
$usuario = new Usuario();

$usuario->loadById(4);

$usuario->delete();

echo $usuario;
*/
/* alterar usuario
$usuario = new Usuario();

$usuario->loadById(4);

$usuario->update("professor","159753");

echo $usuario;
*/
/*
//criando um novo usuario
$aluno = new Usuario("root","789456");

$aluno->insert();

echo $aluno;
*/
/*
//carrega um usuario usando o login e a senha
$usuario = new Usuario();
$usuario->login("lourenco","77788999");

echo $usuario;
*/

//carrega lista de usuario pelo login
/*
$search = Usuario::search("n");

echo json_encode($search);
*/
/*
$lista = Usuario::getList();

echo json_encode($lista);
*/

/*
$root = new Usuario();

$root->loadById(4);

echo $root;
*/
/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM TB_USUARIOS");

echo json_encode($usuarios);
*/
 ?>