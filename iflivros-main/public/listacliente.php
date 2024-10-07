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
    <link rel="stylesheet" href="../public/css/styles.css">
    <link rel="shortcut icon" href="../public/assets/download.png" type="../public/assets/image.png">
</head>



<body>
    <form action="listacliente.php" method="get">
        Nome: <br>
        <input type="text" name="valor" value="<?php echo $valor; ?>"> <br><br>

        <input type="submit" value="Enviar">
    </form> <br>


            <?php
            require_once './assets/header.html';

            //pesquisa
            if (isset($_GET['valor'])) {
                // $valor = $_GET['valor'];

                require_once "../controle/conexao.php";
                $sql = "SELECT * FROM cliente WHERE nome LIKE '%$valor%' or cpf LIKE '%$valor%'";
                $resultados = mysqli_query($conexao, $sql);

                if (mysqli_num_rows($resultados) == 0) {
                    echo "Não foram encontrados resultados.";
                } else {
                    echo "<table border='1'>";
                    echo "<tr>";
                    echo "<td>ID</td>";
                    echo "<td>NOME</td>";
                    echo "<td>CPF</td>";
                    echo "<td>TELEFONE</td>";
                    echo "<td>EMAIL</td>";
                    echo "<td>DATA DE NASCIMENTO</td>";
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
                        echo "</tbody>";
                    }
                }
            } else {
                echo "Digite o nome ou o cpf para pesquisar";
            }




            ?>



            <h2>Lista de Cliente</h2>
            <table>


                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOME</th>
                            <th>CPF</th>
                            <th>TELEFONE</th>
                            <th>EMAIL</th>
                            <th>DATA DE NASCIMENTO</th>
                            <th>Apagar</th>
                        </tr>
                    </thead>
                    <?php
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
                        echo "</tbody>";
                    }
                    ?>
                </table><br>
                <footer>
                    <p>&copy; 2024 IF_LIVROS. Todos os direitos reservados.</p>
                </footer>
</body>

</html>