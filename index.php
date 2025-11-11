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
        echo 'i=' . $i . ' - ';
    }
    ?>
    <h2>Vetor</h2>
    <?php
    $vetor = array(1,2,3,4,5,6,7,8,9,0);
    for($i = 0; $i < count($vetor); $i++){
        echo $vetor[$i]."<br>";

    };
    echo "Foreach<BR>";
    foreach($vetor as $elemento){
        echo "Elemento: ".$elemento."<br>";
    }
    ?>
    <h2>Vetor com índice alfabético</h2>
    <?php
    $pessoa = array("nome" => "Egô",
    "sobrenome" => "Ílio Tarso",
    "CPF" => "111.555.222-98");
    echo "Nome: ".$pessoa['nome']."<br>";
    echo "Sobrenome: ". $pessoa['sobrenome']."<br>";
    echo "CPF: ".$pessoa['CPF']."<BR>";   
    ?>
    <h2>Variaveis de ambiente em PHP</h2>
    <?php
    echo "Nome: ". $_GET['nome']."<BR>";

    ?>
</body>

</html>