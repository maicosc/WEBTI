<?php
session_start();
require_once("conexaoBanco.php");
$usuarios = get_usuarios();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link rel="stylesheet" href="lista.css?v=2">
</head>
<body>
    <div class="container">
    <h1>Lista de usuários</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Mantra da sorte</th>
            
        </tr>
        <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?php echo htmlspecialchars($usuario['id']) ?></td>
                <td><?php echo htmlspecialchars($usuario['nome']) ?></td>
                <td><?php echo htmlspecialchars($usuario['login']) ?></td>
                <td><?php echo htmlspecialchars($usuario['sorte']) ?></td>
                <td>
                    
                        <form action="editarUsuario.php" method="POST" style="display:inline;">
                            <input type="hidden" name="id" value="<?= $usuario['id'] ?>">
                            <input type="submit" value="Editar">
                        </form>

                        
                        <form action="excluirUsuario.php" method="POST" style="display:inline;">
                            <input type="hidden" name="id" value="<?= $usuario['id'] ?>">
                            <input type="submit" value="Excluir">
                        </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

  
  <?php
  if (isset($_SESSION['usuarioDeletado'])): ?>
    <script>
    alert("<?php echo $_SESSION['usuarioDeletado'];?>");
    </script>
    <?php unset($_SESSION['usuarioDeletado']); ?>
  <?php
  endif;?>
  
  <?php
  if (isset($_SESSION['usuarioAtualizado'])): ?>
    <script>
    alert("<?php echo $_SESSION['usuarioAtualizado'];?>");
    </script>
    <?php unset($_SESSION['usuarioAtualizado']); ?>
  <?php
  endif;?>
    

</body>
</html>