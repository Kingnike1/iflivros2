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
    <title>Funcionário</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/header.css">
    <link rel="shortcut icon" href="../public/assets/download.png" type="image/png">
    <link rel="stylesheet" href="../public/css/styles.css">
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

    <?php
    // Pesquisa
    if (isset($_GET['valor'])) {
        require_once "../controle/conexao.php";
        $sql = "SELECT * FROM paciente WHERE nome LIKE '%$valor%'";
        $resultados = mysqli_query($conexao, $sql);

        if (mysqli_num_rows($resultados) == 0) {
            echo "Não foram encontrados resultados.";
        } else {
            echo "<h2>Lista de Pacientes</h2>";
            echo "<table border='1'>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Nome</th>";
            echo "<th>CPF</th>";
            echo "<th>Telefone</th>";
            echo "</tr>";

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
            echo "</table>";
        }
    } else {
        echo "";
    }
    ?>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>CPF</th>
                <th>TELEFONE</th>
                <th>DATA DE NASCIMENTO</th>
                <th>FUNÇÃO</th>
                <th>APAGAR</th>
            </tr>
        </thead>
        <tbody>
        <?php
        require_once "../controle/conexao.php";
        $sql = "SELECT * FROM funcionario";
        $resultados = mysqli_query($conexao, $sql);

        while ($linha = mysqli_fetch_array($resultados)) {
            $id = $linha['idfuncionario'];
            $nome = $linha['nome'];
            $cpf = $linha['cpf'];
            $telefone = $linha['telefone'];
            $data_de_nascimento = $linha['data_de_nascimento'];
            $funcao = $linha['funcao'];

            echo "<tr>";
            echo "<td>$id</td>";
            echo "<td>$nome</td>";
            echo "<td>$cpf</td>";
            echo "<td>$telefone</td>";
            echo "<td>$data_de_nascimento</td>";
            echo "<td>$funcao</td>";
            echo "<td><a href='../controle/deletar/deletar_cliente.php?id=$id' class = 'btn btn-danger btn-bounce'>Apagar</a></td>";           
            echo "</tr>";
        }
        ?>
        </tbody>
    </table><br>

    <?php
    
    require_once '../public/assets/footer.html'
    
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
