<?php
require_once("conexaoBanco.php");
if(!isset($_POST["nome"]) || !isset($_POST["login"]) || !isset($_POST["senha"]) || !isset($_POST["sorte"])){

    header("Location: cadastroUsuario.php?error=faltando_dados");
    exit();
}
$nome = $_POST["nome"];
$senha = $_POST["senha"]; 
$login = $_POST["login"];
$sorte = $_POST["sorte"]; 
$hash = password_hash($senha, PASSWORD_DEFAULT);
if(strlen($senha) < 5 || strlen($senha) > 12){
    header("Location: cadastroUsuario.php?error=senha_invalida");
    exit();
}
if(strlen($nome) < 3){
    header("Location: cadastroUsuario.php?error=nome_invalido");
    exit();
}                      
cadastraUsuario($nome, $login, $senha,  $sorte);
header("Location: loginUsuario.php");
    exit();
?>