<?php

$id = isset($_POST['id']) ? $_POST['id'] : 0;  // Verifica se id está definido
$nome = $_POST["nome"];
$genero = $_POST["genero"];
$status = $_POST["status"];
$autor = $_POST["autor"];

// echo "esse e seu nome ". $nome;
// echo "<br>";
// echo "esse e seu nome ". $genero;
// echo "<br>";
// echo "esse e seu nome ". $status;
// echo "<br>";
// echo "esse e seu nome ". $autor;

require_once "conexao.php";

$sql = "INSERT INTO livro (nome, genero, status, autor) VALUES ('$nome', '$genero', '$status', '$autor')";

if ($id == 0) {
        $sql = "INSERT INTO livro (nome, genero, status, autor) VALUES ('$nome', '$genero', '$status', '$autor')";
} else {
        $sql = "UPDATE livro SET nome = '$nome', genero = '$genero', status = '$status', autor = '$autor' WHERE idlivros = $id";
}


mysqli_query($conexao, $sql);

header("location: ../public/listalivros.php");
exit;
?>