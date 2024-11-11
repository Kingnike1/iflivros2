<?php
        $livro_id = $_GET["livro_id"];
        $cliente_id = $_GET["cliente_id"];
        $funcionario_id = $_GET["funcionario_id"];
        $data_emprestimo_id = $_GET["data_emprestimo"];
        $data_devolucao_id = $_GET["data_devolucao"] ;

        // echo "seu livro_id: " . $livro_id;
        // echo "<br>";
        // echo "<br>";
        // echo "seu cliente_id: " . $cliente_id;
        // echo "<br>";
        // echo "<br>";
        // echo "seu funcionario: " . $funcionario_id;
        // echo "<br>";
        // echo "<br>";
        // echo "sua data de emprestimo: " . $data_emprestimo;
        // echo "<br>";
        // echo "<br>";
        // echo "sua data de devolucao: " . $data_devolucao;
        // echo "sua funcao: " . $funcao;
        
        require_once "conexao.php";
        if ($id == 0) {
                $sql = "INSERT INTO emprestimo (data_de_devolucao, data_de_emprestimo, funcionario_idfuncionario, livro_idlivros, cliente_idcliente) VALUES ('$data_devolucao_id', '$data_emprestimo_id' , '$funcionario_id', '$livro_id', '$cliente_id')";
            } else {
                $sql = "UPDATE emprestimo SET livro_id = '$livro_id', cliente_id = '$cliente', funcionario_ide = '$fucionario', data_de_emprestimo = '$data_emprestimo', data_de_devoluçao ='$data_devolucao' WHERE idfuncionario = $id";
        }
        mysqli_query( $conexao, $sql );    

        header ("location: ../public/listaemprestimo.php") ;
?>