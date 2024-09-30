<?php
require_once '../controle/verificar_login.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
    <link rel="stylesheet" href="../public/css/styles.css">
    <link rel="shortcut icon" href="../public/assets/download.png" type="../public/assets/image.png">


</head>

<body>
    <?php
        require_once './assets/header.html'
    ?>
    <h2>Lista de Livros</h2>
    <table>


        <table>
            <thead>

                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>GENERO</th>
                    <th>STATUS</th>
                    <th>AUTOR</th>
                </tr>
            </thead>
            <?php
            require_once "../controle/conexao.php";

            $sql = "SELECT * FROM livro";

            $resultados = mysqli_query($conexao, $sql);

            while ($linha = mysqli_fetch_array($resultados)) {
                $id = $linha['idlivros'];
                $nome = $linha['nome'];
                $genero = $linha['genero'];
                $status = $linha['status'];
                $autor = $linha['autor'];

                echo "<tr>";
                echo "<td>$id</td>";
                echo "<td>$nome</td>";
                echo "<td>$genero</td>";
                echo "<td>$status</td>";
                echo "<td>$autor</td>";
                echo "</tr>";
            }
            ?>
        </table><br>

        <footer>
            <p>&copy; 2024 IF_LIVROS. Todos os direitos reservados.</p>
        </footer>
</body>

</html>
