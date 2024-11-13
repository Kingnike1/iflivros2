<?php
require_once "conexao.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $livro_id = $_POST['livro_id'];
    $cliente_id = $_POST['cliente_id'];
    $funcionario_id = $_POST['funcionario_id'];
    $data_emprestimo = $_POST['data_emprestimo'];
    $data_devolucao = $_POST['data_devolucao'];

    if ($id == 0) {
        // Cadastro de novo empréstimo
        $sql = "INSERT INTO emprestimo (livro_idlivros, cliente_idcliente, funcionario_idfuncionario, data_de_emprestimo, data_de_devolucao)
                VALUES ('$livro_id', '$cliente_id', '$funcionario_id', '$data_emprestimo', '$data_devolucao')";
    } else {
        // Edição de empréstimo existente
        $sql = "UPDATE emprestimo 
                SET livro_idlivros = '$livro_id', cliente_idcliente = '$cliente_id', funcionario_idfuncionario = '$funcionario_id',
                    data_de_emprestimo = '$data_emprestimo', data_de_devolucao = '$data_devolucao'
                WHERE idemprestimo = '$id'";
    }

    if (mysqli_query($conexao, $sql)) {
        // Sucesso
        header("Location: lista_emprestimos.php");  // Redireciona para a lista de empréstimos
    } else {
        echo "Erro: " . mysqli_error($conexao);
    }
}
?>
