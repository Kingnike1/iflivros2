<?php
$nome = $_GET['nome'];
$cpf = $_GET['cpf'];
$telefone = $_GET['telefone'];

// Se conectar ao banco
// Qual o servidor? Qual usuario? Qual senha? Qual banco?
require_once "conexao.php";

// Criar um comando SQL que grava no banco
$sql = "INSERT INTO paciente (nome, cpf, telefone) VALUES ('$nome', '$cpf', '$telefone')";

// Mandar executar o comando
mysqli_query($conexao, $sql);

header("Location: ../public/home.html");
?>