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

$usuarios = get_usuarios();

$existeEmail = false;


foreach($usuarios as $user):
    if(trim($user['login']) == $login){
        $existeEmail = true;
        break;
    }
endforeach;
if($existeEmail){
    $_SESSION['usuarioId'] = $id;
    header("Location: cadastroUsuario.php?error=email_existente");
    exit();
}
if(strlen($senha) < 5 || strlen($senha) > 12){
    header("Location: cadastroUsuario.php?error=senha_invalida");
    exit();
}
if(strlen($nome) < 3){
    header("Location: cadastroUsuario.php?error=nome_invalido");
    exit();

}  
if(!strpos($login, "@")){
    header("Location: cadastroUsuario.php?error=email_invalido");
    exit();
}   
cadastraUsuario($nome, $login, $senha,  $sorte);
header("Location: loginUsuario.php");
    exit();
?>