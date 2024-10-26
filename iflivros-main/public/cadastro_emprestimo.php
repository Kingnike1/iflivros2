<?php
require_once '../controle/verificar_login.php'
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empréstimo de Livro</title>
    <link rel="stylesheet" href="../public/css/styles_form.css">
    <link rel="stylesheet" href="../public/css/header.css">
    <link rel="shortcut icon" href="../public/assets/download.png" type="image/png">
</head>
<body>
<?php require_once './assets/header.html'; ?>

    <h2>Empréstimo de Livro</h2>
    <form action="../controle/banco_emprestimo.php" method="get">
        <label for="livro_id">Livro:</label><br>

        
        <select name="livro_id" required>
            <?php
            require_once "../controle/conexao.php";

            // Livros
            $sql = "SELECT idlivros, nome FROM livro WHERE status = 'Disponível'"; // Alterado aqui
            $resultados = mysqli_query($conexao, $sql);

            while ($linha = mysqli_fetch_array($resultados)) {
                $id = $linha['idlivros']; // Usando idlivros
                $nome = $linha['nome'];
                echo "<option value='$id'>$nome</option>";
            }
            ?>
        </select><br><br>

        
        <label for="cliente_id">Cliente:</label><br>
        <select name="cliente_id" required>
            <?php
            $sql = "SELECT idcliente, nome FROM cliente";
            $resultados = mysqli_query($conexao, $sql);

            while ($linha = mysqli_fetch_array($resultados)) {
                $id = $linha['idcliente'];
                $nome = $linha['nome'];
                echo "<option value='$id'>$nome</option>";
            }
            ?>
        </select><br><br>
        
        <label for="funcionario_id">Funcionário:</label><br>
        <select name="funcionario_id" required>
            <?php
            $sql = "SELECT idfuncionario, nome FROM funcionario";
            $resultados = mysqli_query($conexao, $sql);

            while ($linha = mysqli_fetch_array($resultados)) {
                $id = $linha['idfuncionario'];
                $nome = $linha['nome'];
                echo "<option value='$id'>$nome</option>";
            }
            ?>
        </select><br><br>
        
        <label for="data_emprestimo">Data de Empréstimo:</label><br>
        <input type="date" name="data_emprestimo" required><br><br>
    
        <label for="data_devolucao">Data de Devolução:</label><br>
        <input type="date" name="data_devolucao" required><br><br>
        
        <input type="submit" value="Realizar Empréstimo">
    </form>    
</body>
</html>
