<?php 

session_start();
require_once("conexaoBanco.php");

$id = $_POST["id"];
$usuario = get_usuario($id);
$nome = $_POST["nome"] ?? $usuario['nome'];
$sorte = $_POST['sorte'] ?? $usuario['sorte'];
$login = $_POST['login'] ?? $usuario['login'];
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
    header("Location: editarUsuario.php?error=email_existente");
    exit();
}
if(!strpos($login, "@"))                 {
    $_SESSION['usuarioId'] = $id;
    header("Location: editarUsuario.php?error=email_invalido");
    exit();
} 
if(strlen($nome) < 3){
    $_SESSION['usuarioId'] = $id;
    header("Location: editarUsuario.php?error=nome_invalido");
    exit();

}   
update_usuario( (int)$id, $nome, $login, $sorte );

$_SESSION['usuarioAtualizado'] = "Usuário '$nome' foi atualizado com sucesso!";
header("Location: listaUsuarios.php");
exit();


?>