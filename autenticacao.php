<?php

    if(!isset($_POST['username']) || !isset($_POST['senha'])){
        header('Location: autenticacao_formulario.php?error=faltando_dados');
        exit();
    }
    $senha = $_POST['senha'];
    $username = $_POST['username'];
    if($username == 'admin' && $senha = '@vitoriadeBelpheg0r'){
        $_SESSION['username'] = username;
        echo "<h1> Login bem-sucedido</h1>";
        echo "<p> Bem-vindo, $username! </p>";
    }else{
        $_SESSION['username'] = NULL;
        header('Location: autenticacao_formulario.php?error=fcredenciais_invalidas');
        exit();
    }
   

?>