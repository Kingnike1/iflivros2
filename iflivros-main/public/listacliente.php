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
                    <a href="public/cadastro_livro.html">Cadastro do Livro</a><br>
                    <a href="public/listacliente.php">Cadastro do Cliente</a><br>
                    <a href="public/listaemprestimo.php">Cadastro do Empréstimo</a><br>
                    <a href="public/listafuncionario.php">Cadastro do Funcionário</a>
                </div>
            </div>
        </nav>
    </header>
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
                </tr>
            </thead>            
            <?php
            require_once "../controle/conexao.php";

            $sql = "SELECT * FROM cliente";

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
