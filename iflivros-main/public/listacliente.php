<?php
require_once '../controle/verificar_login.php';

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
    <title>Cliente</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/styles.css">
    <link rel="shortcut icon" href="../public/assets/download.png" type="../public/assets/image.png">
</head>

<body>

    <?php
    require_once './assets/header.html';
    ?>

    <form action="listacliente.php" method="get">
        Nome: <br>
        <input type="text" name="valor" value="<?php echo $valor; ?>" placeholder="Digite o nome ou o cpf para pesquisar"> <br><br>
        <input type="submit" value="Enviar">
    </form> <br>

    <h2>Lista de Cliente</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>CPF</th>
                <th>TELEFONE</th>
                <th>EMAIL</th>
                <th>DATA DE NASCIMENTO</th>
                <th>APAGAR</th>
            </tr>
        </thead>

        <tbody>
            <?php



            //pesquisa
            if (isset($_GET['valor'])) {
                require_once "../controle/conexao.php";
                $sql = "SELECT * FROM cliente WHERE nome LIKE '%$valor%' or cpf LIKE '%$valor%'";
                $resultados = mysqli_query($conexao, $sql);

                if (mysqli_num_rows($resultados) == 0) {
                    echo "Não foram encontrados resultados.";
                } else {
                    while ($linha = mysqli_fetch_array($resultados)) {
                        $id = $linha['idcliente'];
                        $nome = $linha['nome'];
                        $cpf = $linha['cpf'];
                        $telefone = $linha['telefone'];
                        $email = $linha['email'];
                        $data_de_nascimento = $linha['data_de_nascimento'];
                        echo  "<tbody>";
                        echo "<tr>";
                        echo "<td>$id</td>";
                        echo "<td>$nome</td>";
                        echo "<td>$cpf</td>";
                        echo "<td>$telefone</td>";
                        echo "<td>$email</td>";
                        echo "<td>$data_de_nascimento</td>";
                        echo "<td>
                                <a href='../controle/deletar/deletar_cliente.php?id=$id'>
                                    <img src='./assets/delete.png' alt='Deletar'>
                                </a>
                                </td>";
                        echo "</tbody>";
                    }
                }
            } else {
                echo "Digite o nome ou o cpf para pesquisar";

                require_once "../controle/conexao.php";

                $sql = "SELECT * FROM cliente ";

                $resultados = mysqli_query($conexao, $sql);

                while ($linha = mysqli_fetch_array($resultados)) {
                    $id = $linha['idcliente'];
                    $nome = $linha['nome'];
                    $cpf = $linha['cpf'];
                    $telefone = $linha['telefone'];
                    $email = $linha['email'];
                    $data_de_nascimento = $linha['data_de_nascimento'];
                    echo  "<tbody>";
                    echo "<tr>";
                    echo "<td>$id</td>";
                    echo "<td>$nome</td>";
                    echo "<td>$cpf</td>";
                    echo "<td>$telefone</td>";
                    echo "<td>$email</td>";
                    echo "<td>$data_de_nascimento</td>";
                    echo "<td><a href='../controle/deletar/deletar_cliente.php?id=$id'>Apagar</a></td>";
                    echo "</tbody>";
                }
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