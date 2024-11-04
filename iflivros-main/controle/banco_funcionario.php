<?php
        $id = isset($_POST['id']) ? $_POST['id'] : 0;  // Verifica se id está definido
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['telefone'];
        $data_nascimento = $_POST['data_nascimento'];
        $funcao = $_POST['funcao'];

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

        if ($id == 0) {
                $sql = "INSERT INTO funcionario (nome, cpf, telefone, data_de_nascimento, funcao) VALUES ('$nome', '$cpf', '$telefone','$data_nascimento','$funcao')";
            } else {
                $sql = "UPDATE funcionario SET nome = '$nome', cpf = '$cpf', telefone = '$telefone', data_de_nascimento = '$data_nascimento', funcao ='$funcao' WHERE idfuncionario = $id";
        }
            
        
        mysqli_query( $conexao, $sql );

        header ("location: ../public/listafuncionario.php") ;
?>