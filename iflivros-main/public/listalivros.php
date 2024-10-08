<?php
require_once '../controle/verificar_login.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/styles.css">
    <link rel="shortcut icon" href="../public/assets/download.png" type="image/png">
</head>

<body>
    <?php
    if (isset($_GET['valor'])) {
        $valor = $_GET['valor'];
    } else {
        $valor = '';
    }
    ?>

    <form action="listalivros.php" method="get">
        Nome: <br>
        <input type="text" name="valor" value="<?php echo $valor; ?>"><br><br>
        <input type="submit" value="Enviar">
    </form> <br><br>

    <?php 
    if (isset($_GET['valor'])) {
        require_once "../controle/conexao.php";
        $sql = "SELECT * FROM livro WHERE nome LIKE '%$valor%'";
        $resultados = mysqli_query($conexao, $sql);

        if (mysqli_num_rows($resultados) == 0) {
            echo "Não foram encontrados resultados.";
        } else {
            echo "<table border='1'>";
            echo "<tr>";
            echo "<td>ID</td>";
            echo "<td>Nome</td>";
            echo "<td>Gênero</td>";
            echo "<td>Status</td>";
            echo "<td>Autor</td>";
            echo "</tr>"; // Movei a linha de cabeçalho para o lugar correto
            
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
            echo "</table>"; // Fechei a tabela após o loop
        }
    }
    ?>

    <?php require_once './assets/header.html'; ?>

    <h2>Lista de Livros</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>GÊNERO</th>
                <th>STATUS</th>
                <th>AUTOR</th>
                <th>APAGAR</th>
            </tr>
        </thead>
        <tbody>
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
            echo "<td>
                    <a href='../controle/deletar/delete_livros.php?id=$id' class='btn btn-danger'>APAGAR</a>
                  </td>";               
            echo "</tr>";
        }
        ?>
        </tbody>
    </table><br>

    <footer>
        <p>&copy; 2024 IF_LIVROS. Todos os direitos reservados.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
