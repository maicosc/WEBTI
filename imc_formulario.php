<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            display: flex;
            flex-direction: column;
            width: 30vw;

        }
    </style>
</head>
<body >
    <?php
    session_start();
    if(isset($_SESSION['username'])){
        echo "<p>Usuario logado: ". $_SESSION['username'] . "</p>";
    }else{
        header("Location: autenticacao_formulario.php?error=nao_autenticado");
        exit();
    }
    if(isset($_GET['error'])&& $_GET['error'] == "faltando_dados"){
        echo"<p style= 'color: red;'> Erro: Preencha todos os campos seu cabaço!</p>";
    }
    if(isset($_GET['error'])&& $_GET['error'] == "valores_invalidos"){
        echo"<p style= 'color: red;'> Erro: Você já viu alguém calcular usando altura e peso em palavras, seu cabaço?!</p>";
    }
    ?>
   <form action="imc_resultado.php" method="POST">
        <label for="inputPeso">Peso</label>
        <input type="number" id="inputPeso" name="osep" step=0.01>
        <label for="inputAltura">Altura</label>
        <input type="number" id="inputAltura" name="arutla" step=0.01>
        <input type="submit" value="Calcular" >
    </form> 
</body>
</html>