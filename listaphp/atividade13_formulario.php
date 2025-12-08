<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 13</title>
</head>
<body>
    <form action="atividade13_autenticacao.php" method="POST">
        <label for="username">Nome de usuário: </label><input type="text" name="username" id="username"><br><br>
        <label for="senha">Senha</label><input type="text" name="senha" id="senha"><br><br>
        <input type="submit" value="Entrar">
    </form>
</body>
</html>