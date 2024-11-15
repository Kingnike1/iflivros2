<?php
require_once "../conexao.php";

$id = $_GET['id'];

// Agora, excluir o funcionário
$sql_funcionario = "DELETE FROM emprestimo WHERE emprestimo = $id;";
mysqli_query($conexao, $sql_funcionario);

header("Location: ../../public/lista_emprestimo.php");
