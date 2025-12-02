<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="cadastro.css?v=1">
</head>

<body>
    <?php if (isset($_GET['error'])): ?>
        <?php if ($_GET['error'] == 'senha_invalida'): ?>
            <script>
                alert("A senha deve conter de 5 a 12 digitos!")
            </script>
        <?php endif; ?>
        <?php if ($_GET['error'] == 'nome_invalido'): ?>
            <script>
                alert("O nome não pode ter menos que 3 digitos!")
            </script>
        <?php endif; ?>
        <?php if ($_GET['error'] == 'faltando_dados'): ?>
            <script>
                alert("Preencha todos os camppos!")
            </script>
        <?php endif; ?>
        <?php if ($_GET['error'] == 'email_invalido'): ?>
            <script>
                alert("O email deve seguir a estrutura 'exemplo@email.com' ou equivalentes!")
            </script>
        <?php endif; ?>
        <?php if ($_GET['error'] == 'email_existente'): ?>
            <script>
                alert("Já existe um usuário com esse email!")
            </script>
        <?php endif; ?>
    <?php endif; ?>
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
            <label for="sorte">Mantra da Sorte:</label>
            <input type="text" id="sorte" name="sorte" required><br><br>
            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>

</html>