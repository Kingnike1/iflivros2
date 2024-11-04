<?php
        $livro_id = $_GET["livro_id"];
        $cliente_id = $_GET["cliente_id"];
        $funcionario_id = $_GET["funcionario_id"];
        $data_emprestimo_id = $_GET["data_emprestimo"];
        $data_devolucao_id = $_GET["data_devolucao"] ;

        require_once "conexao.php";

        $sql = "INSERT INTO emprestimo (data_de_devolucao, data_de_emprestimo, funcionario_idfuncionario, livro_idlivros, cliente_idcliente) VALUES ('$data_devolucao_id', '$data_emprestimo_id' , '$funcionario_id', '$livro_id', '$cliente_id')";

        mysqli_query( $conexao, $sql );    

        header ("location: ../public/listaemprestimo.php") ;

?>