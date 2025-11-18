<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
        form{
            display: flex;
            flex-direction: column;
            width: 30vw;

        }
    </style>
</head>
<body>
    <form action="autenticacao.php" method="get">
        <label for="inputUsername">Nome</label>
        <input type="text" id="inputUsername" name="username">
        <label for="inputSenha">Email</label>
        <input type="text" id="inputSenha" name="senha">
        <input type="submit" value="Login">
    </form>
</body>
</html>