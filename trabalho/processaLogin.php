<?php
session_start();
require_once("conexaoBanco.php");
if(!isset($_POST["login"]) || !isset($_POST["senha"])){

    header("Location: loginUsuario.php?error=faltando_dados");
    exit();
}
$senha = $_POST["senha"];
$login = $_POST["login"];
if(strlen($senha) < 5 || strlen($senha) > 12){
    header("Location: loginUsuario.php?error=senha_invalida");
    exit();
}                      
$usuarios = get_usuarios();

$existe = false;


foreach($usuarios as $user):
    if(trim($user['login']) == $login && $senha == trim($user['senha']) ){
        $existe = true;
        break;
    }
endforeach;
if($existe){
    header("Location: listaUsuarios.php");
        exit();
}else{
    header("Location: loginUsuario.php?error=usuario_nao_encontrado");
    exit();
}
?>