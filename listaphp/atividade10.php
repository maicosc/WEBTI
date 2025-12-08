<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 10</title>
</head>

<body>
    <?php if (isset($_GET["error"])) {
        if ($_GET["error"] == "valores_faltando") {
            echo "Preencha todos os valores!<br>";
        } else if ($_GET["error"] == "minimo_maior_que_o_maximo") {
            echo "O valor mínimo não pode ser maior que o máximo!<br>";
        } else if ($_GET["error"] == "minimo_igual_maximo") {
            echo "Os valores não podem ser iguais!<br>";
        }
    } ?>
    <form action="" method="POST">
        <label for="min">Mínimo</label><input type="number" name="min" id="min"><br><br>
        <label for="max">Máximo</label><input type="number" name="max" id="max">
        <input type="submit" value="Enviar">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (!isset($_POST["min"]) || !isset($_POST["max"])) {
            header("Location: atividade10.php?error=valores_faltando");
            exit();
        }


        $min = (int) $_POST["min"];
        $max = (int) $_POST["max"];
        if ($min > $max) {
            header("Location: atividade10.php?error=minimo_maior_que_o_maximo");
            exit();
        } else if ($min == $max) {
            header("Location: atividade10.php?error=minimo_igual_maximo");
            exit();
        } else {
            for ($i = $min; $i <= $max; $i++) {
                echo "<pre><span id='texto'> $i </span></pre>";
            }
        }
    }
    ?>
</body>

</html>