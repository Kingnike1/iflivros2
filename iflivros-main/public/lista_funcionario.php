<?php
require_once '../controle/verificar_login.php';
if (isset($_GET['valor'])) {
    $valor = $_GET['valor'];
} else {
    $valor = '';
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionário</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/header.css">
    <link rel="shortcut icon" href="../public/assets/download.png" type="image/png">
    <link rel="stylesheet" href="../public/css/styles.css">
</head>

<body>
    <img src="../public/assets/logo.png" alt="logo do site" id="logo">
    <?php require_once './templates/header.html'; ?>
    <form action="lista_funcionario.php" method="get" class="form-pesquisa">
        <div class="search-wrapper">
            <input type="text" name="valor" id="valor" class="campo-pesquisa" value="<?php echo htmlspecialchars($valor); ?>" placeholder="Digite o nome ou o CPF para pesquisar">
        </div>
        <button type="submit" class="botao-pesquisa">Pesquisar</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>CPF</th>
                <th>TELEFONE</th>
                <th>DATA DE NASCIMENTO</th>
                <th>FUNÇÃO</th>
                <th colspan="2" id="acao">AÇÃO</th>
            </tr>
        </thead>
        <tbody>





            <?php
            require_once "../controle/conexao.php";

            // Pesquisa
            if ($valor) {
                $sql = "SELECT * FROM funcionario WHERE nome LIKE '%$valor%' OR cpf LIKE '%$valor%'";
                $resultados = mysqli_query($conexao, $sql);

                if (mysqli_num_rows($resultados) == 0) {
                    echo "<tr><td colspan='7'>Não foram encontrados resultados.</td></tr>";
                } else {
                    while ($linha = mysqli_fetch_array($resultados)) {
                        echo "<tr>";
                        echo "<td>{$linha['idfuncionario']}</td>";
                        echo "<td>{$linha['nome']}</td>";
                        echo "<td>{$linha['cpf']}</td>";
                        echo "<td>{$linha['telefone']}</td>";
                        echo "<td>{$linha['data_de_nascimento']}</td>";
                        echo "<td>{$linha['funcao']}</td>";
                        echo "<td><a href='../controle/deletar/deletar_funcionario.php?id={$linha['idfuncionario']}' class = 'btn btn-danger btn-bounce'>Apagar</a></td>";
                        echo "<td><a href='cadastro_funcionario.php?id={$linha['idfuncionario']}' class = 'btn btn-danger btn-bounce'>Editar</a></td>";
                        echo "</tr>";
                    }
                }
            } else {
                // Carrega todos os clientes se não houver pesquisa
                $sql = "SELECT * FROM funcionario";
                $resultados = mysqli_query($conexao, $sql);

                while ($linha = mysqli_fetch_array($resultados)) {
                    echo "<tr>";
                    echo "<td>{$linha['idfuncionario']}</td>";
                    echo "<td>{$linha['nome']}</td>";
                    echo "<td>{$linha['cpf']}</td>";
                    echo "<td>{$linha['telefone']}</td>";
                    echo "<td>{$linha['data_de_nascimento']}</td>";
                    echo "<td>{$linha['funcao']}</td>";
                    echo "<td><a href='../controle/deletar/deletar_funcionario.php?id={$linha['idfuncionario']}' class = 'btn btn-danger btn-bounce'>Apagar</a></td>";
                    echo "<td><a href='cadastro_funcionario.php?id={$linha['idfuncionario']}' class = 'btn btn-danger btn-bounce'>Editar</a></td>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>

    <?php require_once "../public/templates/footer.html"; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>