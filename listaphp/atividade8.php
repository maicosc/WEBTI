<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 8</title>
</head>
<body>
    <form action="" method="POST">
        <label for="texto">Digite uma palavra:</label>
        <input type="text" name="texto" id="texto">
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!isset($_POST["texto"])) {
            header("Location: atividade8.php?error=valor_nulo");
            exit();
        }
        $t = str_split($_POST["texto"]);
        $letras = [];
        $vogais=["a","e", "i","o","u", "A","E","I","O","U"];
        $contV = 0;
        $contC=0;
        $contI=0;
        foreach ($t as $letra) {
            array_push($letras, $letra);
        }
        for ($i = 0, $a= count($letras) - 1; $i < count($letras) && $a>=0; $i++, $a--) {
            if(in_array($letras[$i], $vogais)){
                $contV++;
            }else{
                $contC++;
            }
            if($letras[$i] == $letras[$a]){
                $contI++;
            }
        }
        echo "<pre>";
        echo "Tamanho da String: ".count($letras)."\n";
        
        if($contI == count($letras)){
            echo"É um palíndromo\n";
        }else{
            echo "Não é um palíndromo\n";
        }
        echo "Quantidade de vogais: ".$contV."\n";
        echo "Quantidade de consoantes: ".$contC."\n";
        echo "</pre>";

        
    }

    ?>
</body>
</html>