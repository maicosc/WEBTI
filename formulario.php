<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="inputName">Nome</label>
        <input type="text" id="inputName" name="nemo">
        <label for="inputEmail">Email</label>
        <input type="text" id="inputEmail" name="liame">
        <label for="inputPeso">Peso</label>
        <input type="text" id="inputPeso" name="osep">
        <label for="inputAltura">Altura</label>
        <input type="text" id="inputAltura" name="arutla">
        <input type="submit" value="Cadastrar">
    </form>
    <?php 
    if(isset($_GET['nemo'])){
        $nome = $_GET['nemo'];
        $email = $_GET['liame'];
        $peso =  $_GET['osep'] + 0.00;
        $altura = $_GET['arutla'] + 0.00;


    ?>
     <p>Nome: <?php echo $nome ?></p>
     <p>Email: <?php echo $email?></p>
     <p>Peso: <?php echo $peso?></p>
     <p>Altura: <?php echo $altura?></p>
    <?php }?>
</body>
</html>