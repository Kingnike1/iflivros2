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
<img src="../public/assets/logo.png" alt="logo do site" id="logo"> 
    
<header>
        <nav>
            <button class="dropbtn"><a href="home.html">Página Inicial</a></button>
            <div class="dropdown">
                <button class="dropbtn"><a href="#">Lista</a></button>
                <div class="dropdown-content">
                    <a href="public/listalivros.php">Livros</a><br>
                    <a href="public/listacliente.php">Clientes</a><br>
                    <a href="public/listaemprestimo.php">Empréstimos</a><br>
                    <a href="public/listafuncionario.php">Funcionários</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn"><a href="#">Cadastro</a></button>
                <div class="dropdown-content">
                    <a href="public/listalivros.php">Cadastro do Livro</a><br>
                    <a href="public/listacliente.php">Cadastro do Cliente</a><br>
                    <a href="public/listaemprestimo.php">Cadastro do Empréstimo</a><br>
                    <a href="public/listafuncionario.php">Cadastro do Funcionário</a>
                </div>
            </div>
        </nav>
    </header>
    


    <h2>Lista de Emprestimo</h2>

    <table>
        <thead>

            <tr>
            <th>ID</th>
            <th>DATA DE DEVOLUÇÃO</th>
            <th>DATA DE EMPRESTIMO</th>
            <th>ID_LIVRO</th>
            <th>ID_CLIENTE</th>
            <th>ID_FUNCIONARIO</th>
            </tr>
        </thead>
        
        <?php
            require_once "../controle/conexao.php";


        // Consulta para selecionar todos os dados da tabela emprestimo
        $sql = "SELECT emprestimo, data_de_devolucao, data_de_emprestimo, funcionario_idfuncionario, livro_idlivros, cliente_idcliente FROM emprestimo";
        $resultados = mysqli_query($conexao, $sql);

        // Loop para exibir os dados
        while ($linha = mysqli_fetch_array($resultados)) {
            $id = $linha['emprestimo'];
            $data_de_devolucao = $linha['data_de_devolucao'];
            $data_de_emprestimo = $linha['data_de_emprestimo'];
            $livro_id = $linha['livro_idlivros'];
            $cliente_id = $linha['cliente_idcliente'];
            $funcionario_id = $linha['funcionario_idfuncionario'];

            echo "<tr>";
            echo "<td>$id</td>";
            echo "<td>$data_de_devolucao</td>";
            echo "<td>$data_de_emprestimo</td>";
            echo "<td>$livro_id</td>";
            echo "<td>$cliente_id</td>";
            echo "<td>$funcionario_id</td>";
            echo "</tr>";
        }
        ?>

    </table><br>

    <footer>
        <p>&copy; 2024 IF_LIVROS. Todos os direitos reservados.</p>
    </footer>
</body>

</html>
