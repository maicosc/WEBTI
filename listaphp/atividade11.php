<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 11</title>
</head>

<body>
    <?php if (isset($_GET["error"])) {
        if ($_GET["error"] == "valores_faltando") {
            echo "Preencha todos os valores!<br>";
        }
    } ?>
    <form action="" method="POST">
        <label for="a">A:</label><input type="number" name="a" id="a"><br><br>
        <label for="b">B:</label><input type="number" name="b" id="b"><br><br>
        <label for="c">C:</label><input type="number" name="c" id="c"><br><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (!isset($_POST["a"]) || !isset($_POST["b"]) || !isset($_POST["c"])) {
            header("Location: atividade11.php?error=valores_faltando");
            exit();
        }


        $a = (int) $_POST["a"];
        $b = (int) $_POST["b"];
        $c = (int) $_POST["c"];
        $valores = [$a, $b, $c];
        $contLI = 0;
        foreach ($valores as $val) {
            if ($val == $a) {
                $contLI++;
            }
        }
        if ($contLI == 1) {
            echo "Escaleno";
        }else if($contLI == 2) {
            echo "Isóceles";
        }else{
           echo "Equilátero"; 
        }


    }

    ?>
</body>

</html>