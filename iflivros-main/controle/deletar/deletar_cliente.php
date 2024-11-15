<?php
    require_once "../conexao.php";

    $id = $_GET['id'];
    
    $sql_emprestimos = "DELETE FROM emprestimo WHERE cliente_idcliente = $id;";
    mysqli_query($conexao, $sql_emprestimos);
    
    $sql_funcionario = "DELETE FROM cliente WHERE idcliente = $id;";
    mysqli_query($conexao, $sql_funcionario);
    
    header("Location: ../../public/lista_cliente.php");
?>