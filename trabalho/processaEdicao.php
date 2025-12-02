<?php 

session_start();
require_once("conexaoBanco.php");

$id = $_POST["id"];
$usuario = get_usuario($id);
$nome = $_POST["nome"] ?? $usuario['nome'];
$sorte = $_POST['sorte'] ?? $usuario['sorte'];
$login = $_POST['login'] ?? $usuario['login'];
update_usuario( (int)$id, $nome, $login, $sorte );

$_SESSION['usuarioAtualizado'] = "Usuário '$nome' foi atualizado com sucesso!";
header("Location: listaUsuarios.php");
exit();


?>