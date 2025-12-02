<?php
session_start();
require_once("conexaoBanco.php");
$usuario = get_usuario($_POST["id"]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <link rel="stylesheet" href="editar.css">
</head>
<body>
    
    <div class="container">
        <h1>Atualização de Usuário</h1>
        <form action="processaEdicao.php" method="POST">
        <input type="hidden" name="id" value="<?= $_POST['id'] ?>">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?= $usuario['nome'] ?>"required><br><br>
        <label for="login">Login:</label>
        <input type="text" id="login" name="login" value="<?= $usuario['login'] ?>"required><br><br>
        <label for="sorte">Mantra da Sorte:</label>
        <input type="text" id="sorte" name="sorte" placeholder="Aqui você pode colocar um número, frase, nome,qualquer coisa que você acha que te dará sorte" value="<?= $usuario['sorte'] ?>"required><br><br>
        <input type="submit" value="Atualizar">
    </form>
    </div>
</body>
</html>