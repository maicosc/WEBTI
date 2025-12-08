<?php

    if(!isset($_POST['peso']) || !isset($_POST['altura']) || !isset($_POST['nome']) || !isset($_POST['email'])){
        header('Location: atividade9_pagina2.php?error=faltando_dados');
        exit();
    }
    if(!is_numeric($_POST['peso']) || !is_numeric($_POST['altura'])){
        header('Location: atividade9_pagina2.php?error=valores_invalidos');
        exit();
    }
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $imc = $peso / ($altura*$altura);
    $imc = number_format($imc, 2);;
    if($imc < 18.5){
        $classificacao = "Abaixo do peso";
    } elseif ($imc >= 18.5 && $imc < 24.9){
        $classificacao = "Peso normal";
    } elseif ($imc >= 25 && $imc < 29.9){
        $classificacao = "Sobrepeso";
    } elseif ($imc >= 30 && $imc < 34.9){
        $classificacao = "Obesidade grau I";
    } elseif ($imc >= 35 && $imc < 39.9){
        $classificacao = "Obesidade grau II";
    } else {
        $classificacao = "Obesidade grau III";
    }

    echo "<h1>Resultado do Cálculo de IMC</h1>";
    echo "<pre>";
    echo "Nome: " . htmlspecialchars($nome) . "\n";    
    echo "Email: " . htmlspecialchars($email) . "\n"; 
    echo "Peso: ". number_format($peso,2) ."kg\n";
    echo "Altura: ". number_format($altura,2) ."cm\n";
    echo "IMC: " . number_format($imc, 2) . "\n";
    echo "Classificação: " . $classificacao . ""; 
    echo "</pre>";

?>
