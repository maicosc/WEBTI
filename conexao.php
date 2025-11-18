<?php
    function connecta_bd(){
        $servername = "localhost:3307";
        $username = "root";
        $password = "";
        $dbname = "webti";
        // criar conexão
        return new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    }
    //connecta_bd()
    function cadastraUsuario($nome, $login, $senha){
        $con = connecta_bd();
        $stmt = $con-> prepare("INSERT INTO usuarios (nome,  login, senha)
                                VALUES (:nome, :login, :senha)");
        $stmt ->binParam(':nome', $nome);
        $stmt ->binParam(':login', $login);
        $stmt ->binParam(':senha', $senha);

        return $stmt->execute();
    }
    cadastraUsuario("Alianto Melrich", "meanddevil@evilmail.dark", "@vitoriadeBelphg0r");
?>