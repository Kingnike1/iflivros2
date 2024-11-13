<?php
$id = isset($_POST['id']) ? $_POST['id'] : 0;  // Verifica se id está definido

$livro_id = $_POST["livro_id"];
$cliente_id = $_POST["cliente_id"];
$funcionario_id = $_POST["funcionario_id"];
$data_emprestimo = $_POST["data_de_emprestimo"];
$data_devolucao = $_POST["data_de_devolucao"];

require_once "conexao.php";

// Lógica de inserção ou atualização
if ($id == 0) {
    // Inserção de novo empréstimo
    $sql = "INSERT INTO emprestimo (data_de_devolucao, data_de_emprestimo, funcionario_idfuncionario, livro_idlivros, cliente_idcliente)
            VALUES ('$data_devolucao', '$data_emprestimo', '$funcionario_id', '$livro_id', '$cliente_id')";
} else {
    // Atualização de empréstimo existente
    $sql = "UPDATE emprestimo 
            SET livro_idlivros = '$livro_id', cliente_idcliente = '$cliente_id', funcionario_idfuncionario = '$funcionario_id', 
                data_de_emprestimo = '$data_emprestimo', data_de_devolucao = '$data_devolucao' 
            WHERE emprestimo = $id";  // A chave primária da tabela é 'emprestimo', não 'idfuncionario'
}
mysqli_query($conexao, $sql);

header("location: ../public/listaemprestimo.php");
