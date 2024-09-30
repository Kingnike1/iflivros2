<?php
require_once '../controle/verificar_login.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionario</title>
    <link rel="stylesheet" href="../public/css/styles.css">
    <link rel="shortcut icon" href="../public/assets/download.png" type="../public/assets/image.png">

    
</head>

<body>
<?php
        require_once './assets/header.html'
    ?>
<h2>Lista de Funcionarios</h2>
<table>


<table>
    <thead>

        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>CPF</th>
            <th>TELEFONE</th>
            <th>DATA DE NASCIMENTO</th>
            <th>FUNÇÃO</th>
        </tr>
    </thead>
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
            echo "</tr>";
        }
    ?>
</table><br>

<footer>
        <p>&copy; 2024 IF_LIVROS. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
