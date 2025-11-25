<?php
function connecta_bd()
{
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $dbname = "webti";
    // criar conexão
    return new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
}
//connecta_bd()
function cadastraUsuario($nome, $login, $senha)
{
    $con = connecta_bd();
    $stmt = $con->prepare("INSERT INTO usuarios (nome,  login, senha)
                                VALUES (:nome, :login, :senha)");
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':login', $login);
    $stmt->bindParam(':senha', $senha);

    return $stmt->execute();
}
//cadastraUsuario("Alianto", "meanddevil", "@Belphg0r");
//cadastraUsuario("Juiste", "oieir", "0928j");
//cadastraUsuario("Alexio", "meandangel", "@Metatron");
//cadastraUsuario("Omega", "sigmaT", "@AlfaaCentaury");



// Deletar Usuario
function delete_usuario($id)
{
    $con = connecta_bd();
    $stmt = $con->prepare("DELETE FROM usuarios WHERE id = :id");
    $stmt->bindParam(':id', $id);
    return $stmt->execute();
}
//delete_usuario(1);

// Atualizar Usuário
function update_usuario($id, $nome, $login, $senha)
{
    $con = connecta_bd();
    $stmt = $con->prepare("UPDATE usuarios SET nome = :nome, login = :login, senha = :senha WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':login', $login);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':senha', $senha);
    return $stmt->execute();
}
//update_usuario(2, "Mengou", "mengao", "Fl@m3ng0")

// Pegar Usuário

function get_usuario($id)
{
    $con = connecta_bd();
    $stmt = $con->prepare("SELECT * FROM usuarios WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
//echo var_dump(get_usuario((2)));
//  Pegar lista de usuarios
function get_usuarios()
{
    $con = connecta_bd();
    $stmt = $con->prepare("SELECT * FROM usuarios");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
//echo "<prev>".
//print_r(var_dump(get_usuarios())).
//"</prev>";

?>