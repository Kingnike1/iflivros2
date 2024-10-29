<?php
require_once "../controle/verificaLogado.php";

if (isset($_GET['valor'])) {
    $valor = $_GET['valor'];
} else {
    $valor = '';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="pesquisar.php" method="get">
        Nome: <br>
        <input type="text" name="valor" value="<?php echo $valor; ?>"> <br><br>

        <input type="submit" value="Enviar">
    </form> <br>

    <?php

    if (isset($_GET['valor'])) {
        // $valor = $_GET['valor'];

        require_once "../controle/conexao.php";
        $sql = "SELECT * FROM paciente WHERE nome LIKE '%$valor%'";
        $resultados = mysqli_query($conexao, $sql);

        if (mysqli_num_rows($resultados) == 0) {
            echo "Não foram encontrados resultados.";
        } else {
            echo "<table border='1'>";
            echo "<tr>";
            echo "<td>ID</td>";
            echo "<td>Nome</td>";
            echo "<td>CPF</td>";
            echo "<td>Telefone</td>";
            while ($linha = mysqli_fetch_array($resultados)) {
                $id = $linha['idpaciente'];
                $nome = $linha['nome'];
                $cpf = $linha['cpf'];
                $telefone = $linha['telefone'];
                echo "<tr>";
                echo "<td>$id</td>";
                echo "<td>$nome</td>";
                echo "<td>$cpf</td>";
                echo "<td>$telefone</td>";
                echo "</tr>";
            }
        }
    } else {
        echo "Digite um nome para pesquisar.";
    }
    ?>
</body>

</html>