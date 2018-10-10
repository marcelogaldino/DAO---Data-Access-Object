<?php

require_once("config.php");

//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);

$marcelo = new Usuario();

$marcelo->loadByid(4);

echo ($marcelo);

?>