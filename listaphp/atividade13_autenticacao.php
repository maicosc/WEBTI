<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticacao</title>
</head>
<body>
    <?php
    session_start();
    if(!isset($_POST["username"]) || !isset($_POST["senha"])){
        header("Location: atividade13_formulario.php?error=valores_faltando");
            exit();
    }
    $username = $_POST["username"];
    $senha = $_POST["senha"];
    if($username == "admin" && $senha == "123"):
        $_SESSION["username"] = $username;
        $_SESSION["senha"] = $senha;
        ?>
        <h2>Usuário autenticado!</h2>
        <?php else:

        session_abort();
        echo "Usuário ou senha inválidos.";
        endif;

        
    ?>
</body>
</html>