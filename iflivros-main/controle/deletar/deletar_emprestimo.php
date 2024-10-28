<?php
    require_once "conexao.php";

    $id = $_GET['id'];
    
    // Primeiro, excluir os registros de empréstimos relacionados ao funcionário
    $sql_emprestimos = "DELETE FROM emprestimo WHERE livro_idlivros = $id;";
    mysqli_query($conexao, $sql_emprestimos);
    
    // Agora, excluir o funcionário
    $sql_funcionario = "DELETE FROM livro WHERE idlivros = $id;";
    mysqli_query($conexao, $sql_funcionario);
    
    header("Location: ../public/listafuncionario.php");
?>