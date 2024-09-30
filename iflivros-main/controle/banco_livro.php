<?php
        $nome = $_GET["nome"];
        $genero = $_GET["genero"];
        $status = $_GET["status"];
        $autor = $_GET["autor"];

        // echo "esse e seu nome ". $nome;
        // echo "<br>";
        // echo "esse e seu nome ". $genero;
        // echo "<br>";
        // echo "esse e seu nome ". $status;
        // echo "<br>";
        // echo "esse e seu nome ". $autor;

        require_once "conexao.php";

        $sql = "INSERT INTO livro (nome, genero, status, autor) VALUES ('$nome', '$genero', '$status', '$autor')";

        mysqli_query( $conexao, $sql );

        header ("location: ../public/home.php") ;
?>