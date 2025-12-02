<?php
function connecta_bd()
{
    $servername = "localhost:3312";
    $username = "root";
    $password = '';
    $dbname = "trabalhowebti";
    return new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
}

function cadastraUsuario($nome, $login, $senha, $sorte)
{
    $con = connecta_bd();
    $stmt = $con->prepare("INSERT INTO usuarios (nome,  login, senha, sorte)
                                VALUES (:nome, :login, :senha, :sorte)");
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':login', $login);
    $stmt->bindParam(':senha', $senha);
    $stmt->bindParam(':sorte', $sorte);

    return $stmt->execute();
}

function delete_usuario($id)
{
    $con = connecta_bd();
    $stmt = $con->prepare("DELETE FROM usuarios WHERE id = :id");
    $stmt->bindParam(':id', $id);
    return $stmt->execute();
}

function update_usuario($id, $nome, $login, $sorte)
{
    $con = connecta_bd();
    $stmt = $con->prepare("UPDATE usuarios SET nome = :nome, login = :login, sorte = :sorte WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':login', $login);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':sorte', $sorte);
    return $stmt->execute();
}


function get_usuario($id)
{
    $con = connecta_bd();
    $stmt = $con->prepare("SELECT * FROM usuarios WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function get_usuarios()
{
    $con = connecta_bd();
    $stmt = $con->prepare("SELECT * FROM usuarios");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>