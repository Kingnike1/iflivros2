<?php
        $nome = $_GET['nome'];
        $cpf = $_GET['cpf'];
        $telefone = $_GET['telefone'];
        $data_nascimento = $_GET['data_nascimento'];
        $funcao = $_GET['funcao'];

        // echo "seu nome: " . $nome;
        // echo "<br>";
        // echo "<br>";
        // echo "seu cpf: " . $cpf;
        // echo "<br>";
        // echo "<br>";
        // echo "seu telefone: " . $telefone;
        // echo "<br>";
        // echo "<br>";
        // echo "sua data de nascimento: " . $data_nascimento;
        // echo "<br>";
        // echo "<br>";
        // echo "sua funcao: " . $funcao;
        
        require_once "conexao.php";

        $sql = "INSERT INTO funcionario (nome, cpf, telefone, data_de_nascimento, funcao) VALUES ('$nome', '$cpf', '$telefone', '$data_nascimento', '$funcao')";
        
        mysqli_query( $conexao, $sql );

        header ("location: ../public/home.html") ;
?>