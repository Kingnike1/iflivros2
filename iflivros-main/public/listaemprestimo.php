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
    <title>Emprestimo</title>
    <link rel="stylesheet" href="../public/css/styles.css">
    <link rel="shortcut icon" href="../public/assets/download.png" type="image/png">
    <link rel="stylesheet" href="../public/css/header.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    
</head>


<body>
    <img src="../public/assets/logo.png" alt="logo do site" id="logo">
    <?php require_once './templates/header.html'; ?>
    <form action="listaemprestimo.php" method="get" class="form-pesquisa">
        <div class="search-wrapper">
            <input type="text" name="valor" id="valor" class="campo-pesquisa" value="<?php echo htmlspecialchars($valor); ?>" placeholder="Digite o nome ou a data de emprestimo para pesquisar">
        </div>
        <button type="submit" class="botao-pesquisa">Pesquisar</button>
    </form>

    
<?php
        require_once './templates/header.html'
        
    ?>
    





    <table>
        <thead>

            <tr>
            <th>ID</th>
            <th>DATA DE DEVOLUÇÃO</th>
            <th>DATA DE EMPRESTIMO</th>
            <th>LIVRO</th>
            <th>CLIENTE</th>
            <th>FUNCIONARIO</th>
            <th colspan="2" id="acao">AÇÃO</th>
            </tr>
        </thead>
        
        <?php
            require_once "../controle/conexao.php";

            // Pesquisa
            if ($valor) {
                $sql = "SELECT * FROM emprestimo WHERE nome LIKE '%$valor%' OR data_de_emprestimo LIKE '%$valor%'";
                $resultados = mysqli_query($conexao, $sql);

                if (mysqli_num_rows($resultados) == 0) {
                    echo "<tr><td colspan='7'>Não foram encontrados resultados.</td></tr>";
                } else {
                    while ($linha = mysqli_fetch_array($resultados)) {
                        echo "<tr>";
                        echo "<td>{$linha['idemprestimo']}</td>";
                        echo "<td>{$linha['data_de_devoluçao']}</td>";
                        echo "<td>{$linha['data_de_emprestimo']}</td>";
                        echo "<td>{$linha['livro']}</td>";
                        echo "<td>{$linha['cliente']}</td>";
                        echo "<td>{$linha['funcao']}</td>";
                        echo "<td><a href='../controle/deletar/deletar_emprestimo.php?id={$linha['idemprestimo']}' class = 'btn btn-danger btn-bounce'>Apagar</a></td>";
                        echo "<td><a href='cadastro_emprestimo.php?id={$linha['idemprestimo']}' class = 'btn btn-danger btn-bounce'>Editar</a></td>";
                        echo "</tr>";
                    }
                }
            }


        // Consulta para selecionar todos os dados da tabela emprestimo
        // $sql = "
        //         SELECT 
        //             e.emprestimo, 
        //             e.data_de_devolucao, 
        //             e.data_de_emprestimo, 
        //             f.nome AS funcionario_nome, 
        //             l.nome AS livro_nome, 
        //             c.nome AS cliente_nome 
        //         FROM 
        //             emprestimo e 
        //         JOIN 
        //             funcionario f ON e.funcionario_idfuncionario = f.idfuncionario 
        //         JOIN 
        //             livro l ON e.livro_idlivros = l.idlivros 
        //         JOIN 
        //             cliente c ON e.cliente_idcliente = c.idcliente
        //         ";

                $resultados = mysqli_query($conexao, $sql);

                // Loop para exibir os dados
                while ($linha = mysqli_fetch_array($resultados)) {
                    $id = $linha['emprestimo'];
                    $data_de_devolucao = $linha['data_de_devolucao'];
                    $data_de_emprestimo = $linha['data_de_emprestimo'];
                    $livro_nome = $linha['livro_nome'];
                    $cliente_nome = $linha['cliente_nome'];
                    $funcionario_nome = $linha['funcionario_nome'];

                    echo "<tr>";
                    echo "<td>$id</td>";
                    echo "<td>$data_de_devolucao</td>";
                    echo "<td>$data_de_emprestimo</td>";
                    echo "<td>$livro_nome</td>";
                    echo "<td>$cliente_nome</td>";
                    echo "<td>$funcionario_nome</td>";
                    echo "<td><a href='../controle/deletar/deletar_emprestimo.php?id={$linha['emprestimo']}' class='btn btn-danger'>Apagar</a></td>";
                    echo "<td><a href='cadastro_emprestimo.php?id=$id' class = 'btn btn-danger btn-bounce'>Editar</a></td>";

                    
                    echo "</tr>";
                }

                


        ?>

    </table><br>

    <?php require_once "../public/templates/footer.html";?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
