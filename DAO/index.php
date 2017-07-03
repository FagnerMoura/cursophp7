<?php

require_once("config.php");

//carrega um registro
/*$root = new Usuario();
$root->loadById(1);
echo $root;*/

//carrega uma lista
/*$lista = Usuario::getlist();
echo json_encode($lista);*/

//carrega uma lista buscando pelo login
/*$search = Usuario::search("i");
echo json_encode($search);*/

//carrega um usuário usando o login e senha
$usuario = new Usuario();
$usuario->login("Cris", "32152");

echo $usuario;

?>