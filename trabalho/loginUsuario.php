<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <?php if (isset($_GET['error'])): ?>
        <?php if ($_GET['error'] == 'senha_invalida'): ?>
            <script>
                alert("A senha deve conter de 5 a 12 digitos!")
            </script>
        <?php endif; ?>
        <?php if ($_GET['error'] == 'faltando_dados'): ?>
            <script>
                alert("Preencha todos os dados!")
            </script>
        <?php endif; ?>
        <?php if ($_GET['error'] == 'usuario_nao_encontrado'): ?>
            <script>
                alert("Usuário não encontrado!")
            </script>
        <?php endif; ?>
        <?php if ($_GET['error'] == 'email_invalido'): ?>
            <script>
                alert("O email deve seguir a estrutura 'exemplo@email.com' ou equivalentes!")
            </script>
        <?php endif; ?>
    <?php endif; ?>

    <h2>Realize o seu login!</h2>
    <div class="container">
        <form action="processaLogin.php" method="POST">
            <label for="login">Login:</label>
            <input type="text" id="login" name="login" required><br><br>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required><br><br>
            <input type="submit" value="Entrar">
        </form>
    </div>
</body>

</html>