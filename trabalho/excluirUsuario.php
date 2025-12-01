<?php
session_start();
require_once('conexaoBanco.php');
$idUser = $_SESSION['id'];
$nomeUser = $_SESSION['nome'];
delete_usuario($id);

$_SESSION['usuarioDeletado'] = "Usuário '$nomeUser' foi deletado com sucesso!";

?>