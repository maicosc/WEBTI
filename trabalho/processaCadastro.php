<?php
require_once("conexaoBanco.php");
if(!isset($_POST["nome"]) || !isset($_POST["login"]) || !isset($_POST["senha"]) || !isset($_POST["sorte"])){

    header("Location: cadastro_usuario.php?error=faltando_dados");
    exit();
}
$nome = $_POST["nome"];
$senha = $_POST["senha"];
$login = $_POST["login"];
$sorte = $_POST["sorte"];                       
cadastraUsuario($nome, $senha, $login, $sorte);
?>