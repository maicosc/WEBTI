<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h1>Seja bem-vindo ao Apocalapso <br> <span>Onde sua dor é a nossa felicidade</span> </h1>
    <h2>Realize o seu cadastro!</h2>
    <div class="container">
        <form action="processaCadastro.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        <label for="login">Login:</label>
        <input type="text" id="login" name="login" required><br><br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>
        <label for="sorte">Negócio da Sorte:</label>
        <input type="text" id="sorte" name="sorte" placeholder="Aqui você pode colocar um número, frase, nome,qualquer coisa que você acha que te dará sorte"required><br><br>
        <input type="submit" value="Cadastrar">
    </form>
    </div>
</body>
</html>