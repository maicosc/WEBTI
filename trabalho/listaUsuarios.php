<?php
session_start();
require_once("conexaoBanco.php");
$usuarios = select_usuarios();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h1>Lista de usuários</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Data Nascimento</th>
        </tr>
        <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?php echo htmlspecialchars($usuario['id']) ?></td>
                <td><?php echo htmlspecialchars($usuario['nome']) ?></td>
                <td><?php echo htmlspecialchars($usuario['login']) ?></td>
                <td><?php echo htmlspecialchars($usuario['sorte']) ?></td>
                <td>
                    <a href="editarUsuario.php">Editar<?php $_SESSION['id'] = $usuario['id']; ?></a>
                </td>
                <td>
                    <a href="ExcluirCadastro.php">Excluir<?php $_SESSION['id'] = $usuario['id']; $_SESSION['nome'] = $usuario['nome']; ?></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>