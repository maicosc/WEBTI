<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 6</title>
</head>

<body>
    <form action="" method="POST">
        <label for="num">Digite um número:</label>
        <input type="number" name="num" id="num">
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!isset($_POST["num"])) {
            header("Location: atividade6.php?error=valor_nulo");
            exit();
        }
        $num = (int) $_POST["num"];
        $resto = $num % 2;
        if ($resto == 0) {
            echo "É par";
        } else {
            echo "É ímpar";
        }
    }

    ?>
</body>

</html>