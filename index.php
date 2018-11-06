<?php

require_once("config.php");

//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

//$marcelo = new Usuario();
//$marcelo->loadByid(4);
//echo ($marcelo);

//$lista = Usuario::getList();
//echo json_encode($lista);

//$busca = Usuario::search("Ma");
//echo json_encode($busca);

$usuario = new Usuario();
$usuario->login("user","12345");

echo $usuario;

?>