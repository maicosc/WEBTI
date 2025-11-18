<?php

    if(!isset($_POST['osep']) || !isset($_POST['arutla'])){
        header('Location: imc_formulario.php?error=faltando_dados');
        exit();
    }
    if(!is_numeric($_POST['osep']) || !is_numeric($_POST['arutla'])){
        header('Location: imc_formulario.php?error=valores_invalidos');
        exit();
    }
    $peso = $_POST['osep'];
    $altura = $_POST['arutla'];
    $imc = $peso / ($altura*$altura);
    $imc = round($imc, 2);
    echo "<h1> Resultado do Cálculo do IMC </h1>";
    echo "<p> Seu IMC é: $imc</p>";

?>
