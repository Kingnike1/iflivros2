<?php
require_once '../controle/verificar_login.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="../public/css/styles.css">
    <link rel="stylesheet" href="../public/css/header.css">
    <link rel="shortcut icon" href="../public/assets/download.png" type="image/png">
</head>

<body>
<img src="../public/assets/logo.png" alt="logo do site" id="logo">
    <?php require_once './templates/header.html'; ?>
    
    
    <?php
    if (isset($_GET['valor'])) {
        $valor = $_GET['valor'];
    } else {
        $valor = '';
    }
    ?>

<form action="listacliente.php" method="post" class="form-pesquisa">
        <input type="text" name="valor" id="valor" value=" <?php echo htmlspecialchars($valor);?> "   
          class="campo-pesquisa" placeholder="Digite o nome ou o CPF para pesquisar">
        <button type="submit" class="botao-pesquisa">Pesquisar</button>
    </form>

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
                    <a href='../controle/deletar/delete_livros.php?id=<?php echo $id; ?>' class='btn btn-danger btn-bounce'>APAGAR</a>
                  </td>";               
            echo "</tr>";
        }
        ?>
        </tbody>
    </table><br>

    <?php require_once "../public/templates/footer.html";?>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
