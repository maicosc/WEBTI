<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Minha página WEB
    <?php
    echo "<br>Corre mulherada!!!";
    $emon = "Uma crocante e duas balançando";
    echo "<BR>" . $emon;
    ?>
    <h2>Exemplo tipo de dados PHP</h2>
    <?php
    $a = 90;
    $b = 54688;
    echo $a + $b;
    ?>
    <p>Ai emi brasilian <?php echo $a * $b ?></p>
    <h2>Operador ternario</h2>
    <?php
    $nota = -8000;
    $situacao = $nota >= 6 ? 'aprovado' : 'reprovado';
    echo $situacao;
    ?>
    <h2>While</h2>
    <?php
    $i = 0;
    while ($i < 10) {
        $i++;
        echo 'i=' . $i . '-';
    }
    ?>
</body>

</html>