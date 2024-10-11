<?php
require_once '../controle/verificar_login.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emprestimo</title>
    <link rel="stylesheet" href="../public/css/styles.css">
    <link rel="shortcut icon" href="../public/assets/download.png" type="image/png">

    
</head>

<body>
    

<?php
        require_once './assets/header.html'
    ?>
    


    <h2>Lista de Emprestimo</h2>

    <table>
        <thead>

            <tr>
            <th>ID</th>
            <th>DATA DE DEVOLUÇÃO</th>
            <th>DATA DE EMPRESTIMO</th>
            <th>LIVRO</th>
            <th>CLIENTE</th>
            <th>FUNCIONARIO</th>
            </tr>
        </thead>
        
        <?php
            require_once "../controle/conexao.php";


        // Consulta para selecionar todos os dados da tabela emprestimo
        $sql = "
                SELECT 
                    e.emprestimo, 
                    e.data_de_devolucao, 
                    e.data_de_emprestimo, 
                    f.nome AS funcionario_nome, 
                    l.nome AS livro_nome, 
                    c.nome AS cliente_nome 
                FROM 
                    emprestimo e 
                JOIN 
                    funcionario f ON e.funcionario_idfuncionario = f.idfuncionario 
                JOIN 
                    livro l ON e.livro_idlivros = l.idlivros 
                JOIN 
                    cliente c ON e.cliente_idcliente = c.idcliente
                ";

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
                    
                    echo "</tr>";
                }

        ?>

    </table><br>

    <footer>
        <p>&copy; 2024 IF_LIVROS. Todos os direitos reservados.</p>
    </footer>
</body>

</html>
