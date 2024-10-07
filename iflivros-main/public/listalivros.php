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

       <?php
    if (isset($_GET['valor'])){
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
        }else {
            echo "<table border = '1'>";
            echo "<tr>";
            echo "<td>ID</td>";
            echo "<td>Nome</td>";
            echo "<td>Genero</td>";
            echo "<td>Status</td>";
            echo "<td>Autor</td>";

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
                echo "<td><a href='../controle/deletar/deletar_livros.php?id=$id'>Apagar</a></td>";  
                echo "</tr>";   
            }
            echo "</table>";
        }
    } else {
        echo "Digite um nome para pesquisar.";
    }
    ?>


    <table>


        <table>
            <thead>

                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>GENERO</th>
                    <th>STATUS</th>
                    <th>AUTOR</th>
                    <th>APAGAR</th>
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
                echo "<td><a href='../controle/deletar/deletar_cliente.php?id=$id'>Apagar</a></td>";  
                echo "</tr>";
            }
            ?>
        </table><br>

        <footer>
            <p>&copy; 2024 IF_LIVROS. Todos os direitos reservados.</p>
        </footer>
</body>

</html>
