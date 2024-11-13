<?php

function getEstatisticas() {
    require_once "conexao.php";
 
    // Consultas SQL para contar os registros
    $sql_livros = "SELECT COUNT(*) AS total_livros FROM livro";
    $sql_clientes = "SELECT COUNT(*) AS total_clientes FROM cliente";
    $sql_emprestimos = "SELECT COUNT(*) AS emprestimos_abertos FROM emprestimo";
    $sql_funcionarios = "SELECT COUNT(*) AS total_funcionarios FROM funcionario";

    // Executar as consultas
    $result_livros = mysqli_query($conexao, $sql_livros);
    $result_clientes = mysqli_query($conexao, $sql_clientes);
    $result_emprestimos = mysqli_query($conexao, $sql_emprestimos);
    $result_funcionarios = mysqli_query($conexao, $sql_funcionarios);

    // Obter os resultados
    $total_livros = mysqli_fetch_assoc($result_livros)['total_livros'];
    $total_clientes = mysqli_fetch_assoc($result_clientes)['total_clientes'];
    $emprestimos_abertos = mysqli_fetch_assoc($result_emprestimos)['emprestimos_abertos'];
    $total_funcionarios = mysqli_fetch_assoc($result_funcionarios)['total_funcionarios'];

    // Fechar a conexão
    mysqli_close($conexao);

    // Retornar os resultados
    return [
        'total_livros' => $total_livros,
        'total_clientes' => $total_clientes,
        'emprestimos_abertos' => $emprestimos_abertos,
        'total_funcionarios' => $total_funcionarios
    ];
}

?>
