<?php

require_once("config.php");

//carrega um registro
/*$root = new Usuario();
$root->loadById(8);
echo $root;*/

//carrega uma lista
/*$lista = Usuario::getlist();
echo json_encode($lista);*/

//carrega uma lista buscando pelo login
/*$search = Usuario::search("i");
echo json_encode($search);*/

//carrega um usuário usando o login e senha
/*$usuario = new Usuario();
$usuario->login("Cris", "32152");

echo $usuario;*/

//cria usuario novo

/*$aluno = new Usuario();
$aluno->setDeslogin("Phill");
$aluno->setDessenha("142536++");
$aluno->insert();
echo $aluno;*/

//altera usuário existente - update

/*$usuario = new Usuario();
$usuario->loadById(11);
$usuario->update("des", "23185");

echo $usuario;*/

//Deletar usuario

$usuario = new Usuario();
$usuario->loadById(5);
$usuario->delete();
echo $usuario;


?>