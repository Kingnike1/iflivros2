<?php
    require_once "conexao.php";

    $email = $_GET['email'];        
    $senha = $_GET['senha'];
    
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuario (email , senha) VALUES ('$email','$senha_hash')";

    mysqli_query( $conexao, $sql );
    header ("location: ../public/home.php") ;
?>