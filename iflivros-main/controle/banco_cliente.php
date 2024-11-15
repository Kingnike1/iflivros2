<?php

require_once "conexao.php";

$id = isset($_POST['id']) ? $_POST['id'] : 0;  // Verifica se id está definido
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$data_de_nascimento = $_POST['data_nascimento'];

if ($id == 0) {
    $sql = "INSERT INTO cliente (nome, cpf, telefone, email, data_de_nascimento) VALUES ('$nome', '$cpf', '$telefone', '$email', '$data_de_nascimento')";
} else {
    $sql = "UPDATE cliente SET nome = '$nome', cpf = '$cpf', telefone = '$telefone', email = '$email', data_de_nascimento = '$data_de_nascimento' WHERE idcliente = $id";
}

mysqli_query($conexao, $sql);

// Redirecionamento após o insert ou update
header("Location: ../public/lista_cliente.php");
exit;  // Garante que nada mais será executado

?>
