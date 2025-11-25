<?php

if(!isset($_POST["nome"]) || !isset($_POST["login"]) || !isset($_POST["senha"])){

    header("Location: cadastro_usuario.php?error=faltando_dados");
    exit();
}
$nome = $_POST["nome"];
$senha = $_POST["senha"];
$login = $_POST["login"];
require_once("conexao.php");
cadastraUsuario($nome, $senha, $login);
?>