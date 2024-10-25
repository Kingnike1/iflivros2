<?php
require_once '../controle/verificar_login.php';

$valor = isset($_GET['valor']) ? $_GET['valor'] : '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/header.css">
    <link rel="stylesheet" href="../public/css/styles_form.css">
    <link rel="shortcut icon" href="../public/assets/download.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>


<body>
    
    <?php require_once './assets/header.html'; ?>
    
    <form action="listacliente.php" method="get" class="mb-4 form-pesquisa">
        <div class="form-group">
            <div class="search-wrapper">
                <i class="fas fa-search lupa"></i>
                <input type="text" name="valor" id="valor" class="form-control campo-pesquisa" value="<?php echo htmlspecialchars($valor); ?>" placeholder="Digite o nome ou o CPF para pesquisar">
            </div>
        </div>
        <button type="submit" class="btn btn-primary botao-pesquisa">Pesquisar</button>
    </form>


    <table class="table table-bordered">
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
            require_once "../controle/conexao.php";

            // Pesquisa
            if ($valor) {
                $sql = "SELECT * FROM cliente WHERE nome LIKE '%$valor%' OR cpf LIKE '%$valor%'";
                $resultados = mysqli_query($conexao, $sql);

                if (mysqli_num_rows($resultados) == 0) {
                    echo "<tr><td colspan='7'>Não foram encontrados resultados.</td></tr>";
                } else {
                    while ($linha = mysqli_fetch_array($resultados)) {
                        echo "<tr>";
                        echo "<td>{$linha['idcliente']}</td>";
                        echo "<td>{$linha['nome']}</td>";
                        echo "<td>{$linha['cpf']}</td>";
                        echo "<td>{$linha['telefone']}</td>";
                        echo "<td>{$linha['email']}</td>";
                        echo "<td>{$linha['data_de_nascimento']}</td>";
                        echo "<td><a href='../controle/deletar/deletar_cliente.php?id={$linha['idcliente']}' class='btn btn-danger'>Apagar</a></td>";
                        echo "</tr>";
                    }
                }
            } else {
                // Carrega todos os clientes se não houver pesquisa
                $sql = "SELECT * FROM cliente";
                $resultados = mysqli_query($conexao, $sql);

                while ($linha = mysqli_fetch_array($resultados)) {
                    echo "<tr>";
                    echo "<td>{$linha['idcliente']}</td>";
                    echo "<td>{$linha['nome']}</td>";
                    echo "<td>{$linha['cpf']}</td>";
                    echo "<td>{$linha['telefone']}</td>";
                    echo "<td>{$linha['email']}</td>";
                    echo "<td>{$linha['data_de_nascimento']}</td>";
                    echo "<td><a href='../controle/deletar/deletar_cliente.php?id={$linha['idcliente']}' class='btn btn-danger'>Apagar</a></td>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>

    <footer class="mt-4">
        <p>&copy; 2024 IF_LIVROS. Todos os direitos reservados.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>