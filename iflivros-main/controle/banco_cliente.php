<?php 
    $nome = $_GET['nome'];
    $cpf = $_GET['cpf'];
    $telefone = $_GET['telefone'];
    $email = $_GET['email'];
    $data_de_nascimento = $_GET['data_nascimento'];

   //echo"Nome:". $nome;
   //echo "<br>";
   //echo"CPF:". $cpf;
   //echo "<br>";
   //echo"Telefone:". $telefone;
   //echo "<br>";
   //echo"Email:". $email;
   //echo "<br>";
   //echo"Data de Nascimento:";
   //$data_de_nascimento;
   //echo "<br>";
    
    require_once "conexao.php";
    
    $sql = "INSERT INTO cliente (nome, cpf, telefone, email, data_de_nascimento) VALUES ('$nome', '$cpf', '$telefone', '$email', '$data_de_nascimento')";

    mysqli_query( $conexao, $sql);

    header ("location: ../public/home.html") ;
    
?>