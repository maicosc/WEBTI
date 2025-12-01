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
echo "<pre>";
print_r($usuarios);
echo "</pre>";
exit();
foreach($usuarios as $user):
    if($user['login'] == $login && $senha == $user['senha'] ){
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