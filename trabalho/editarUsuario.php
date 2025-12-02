<?php
session_start();
require_once("conexaoBanco.php");
$id = $_POST["id"] ?? $_SESSION['usuarioId'];
$usuario = get_usuario($id);

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
    <?php if (isset($_GET['error'])): ?>
        <?php if ($_GET['error'] == 'nome_invalido'): ?>
            <script>
                alert("O nome não pode ter menos que 3 digitos!")
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
    <div class="container">
        <h1>Atualização de Usuário</h1>
        <form action="processaEdicao.php" method="POST">
        <input type="hidden" name="id" value="<?= $id?>">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?= $usuario['nome'] ?>"required><br><br>
        <label for="login">Login:</label>
        <input type="text" id="login" name="login" value="<?= $usuario['login'] ?>"required><br><br>
        <label for="sorte">Mantra da Sorte:</label>
        <input type="text" id="sorte" name="sorte" value="<?= $usuario['sorte'] ?>"required><br><br>
        <input type="submit" value="Atualizar">
    </form>
    </div>
</body>
</html>