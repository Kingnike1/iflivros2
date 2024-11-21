<?php
$id = isset($_POST['id']) ? $_POST['id'] : 0;

$livro_id = $_POST["livro_id"];
$cliente_id = $_POST["cliente_id"];
$funcionario_id = $_POST["funcionario_id"];
$data_emprestimo = $_POST["data_de_emprestimo"];
$data_devolucao = $_POST["data_de_devolucao"];

require_once "conexao.php";

if ($id == 0) {
    $sql = "INSERT INTO emprestimo (data_de_devolucao, 
                data_de_emprestimo, 
                funcionario_idfuncionario, 
                livro_idlivros, 
                cliente_idcliente)
            VALUES ('$data_devolucao', 
                    '$data_emprestimo', 
                    '$funcionario_id', 
                    '$livro_id', 
                    '$cliente_id')";
} else {
    $sql = "UPDATE emprestimo 
            SET livro_idlivros = '$livro_id', 
            cliente_idcliente = '$cliente_id', 
            funcionario_idfuncionario = '$funcionario_id', 
            data_de_emprestimo = '$data_emprestimo',
            data_de_devolucao = '$data_devolucao' 
            WHERE emprestimo = $id";
}
mysqli_query($conexao, $sql);

header("location: ../public/lista_emprestimo.php");
