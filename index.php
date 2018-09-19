<?php 

require_once("config.php");


//Carrega um usuario
//  $root = new Usuario();
//  $root->loadById('3');
//  echo $root;

//Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search('r');

//echo json_encode($search);

//Carrega o usuario com login e senha
  //$usuario = new Usuario();
  //$usuario->login("root","456789");
  ///echo $usuario;

//INserir usuarios no banco
//$aluno = new Usuario("aluno 2", "@aluno");
//$aluno->insert();
//echo $aluno;

//Atualizar dados do usuario 
$usuario = new Usuario();

$usuario->loadById(7);
$usuario->update("professor", "@professor");

echo $usuario;
?>