<?php
session_start();
require_once('conexaoBanco.php');

$idUser = $_POST['id'];
$usuario = get_usuario($idUser);
$nomeUser = $usuario['nome'];
delete_usuario($usuario['id']);

$_SESSION['usuarioDeletado'] = "Usuário '$nomeUser' foi deletado com sucesso!";
header("Location: listaUsuarios.php");
exit();

?>