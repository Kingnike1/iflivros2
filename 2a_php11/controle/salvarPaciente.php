<?php
// Se conectar ao banco
// Qual o servidor? Qual usuario? Qual senha? Qual banco?
require_once "./conexao.php";

// $acao = $_GET['acao'];
$id = $_GET['id'];

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];

if ($id == 0) {
    // Criar um comando SQL que grava no banco
    $sql = "INSERT INTO paciente (nome, cpf, telefone) VALUES ('$nome', '$cpf', '$telefone')";
} else {
    $sql = "UPDATE paciente SET nome = '$nome', cpf = '$cpf', telefone = '$telefone' WHERE idpaciente = $id";
}

// Mandar executar o comando
mysqli_query($conexao, $sql);

header("Location: ../public/home.php");
