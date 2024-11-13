<?php
require_once "../controle/verificar_login.php";

if (isset($_GET['id'])) {

    require_once "../controle/conexao.php";

    $id = $_GET['id'];
    $sql = "SELECT * FROM emprestimo WHERE emprestimo = $id";
    $resultado = mysqli_query($conexao, $sql);

    $linha = mysqli_fetch_array($resultado);

    // Atribui os valores do empréstimo obtido na consulta
    $livro_id = $linha['livro_idlivros'];  // Corrigido o nome da coluna
    $cliente_id = $linha['cliente_idcliente'];  // Corrigido o nome da coluna
    $funcionario_id = $linha['funcionario_idfuncionario'];  // Corrigido o nome da coluna
    $data_emprestimo = $linha['data_de_emprestimo'];  // Corrigido o nome da coluna
    $data_devolucao = $linha['data_de_devolucao'];  // Corrigido o nome da coluna

    $botao = "Salvar";

} else {
    // Define os valores iniciais para um novo cadastro de empréstimo
    $id = 0;
    $livro_id = '';
    $cliente_id = '';
    $funcionario_id = '';
    $data_emprestimo = '';
    $data_devolucao = '';

    $botao = "Cadastrar";
}

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
<?php require_once './templates/header.html'; ?>

<h2>Empréstimo de Livro</h2>
<form action="../controle/banco_emprestimo.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>">

    <!-- Livro -->
    <label for="livro_id">Livro:</label><br>
    <select name="livro_id" required>  <!-- Corrigido o nome do campo -->
        <?php
        $sql = "SELECT idlivros, nome FROM livro";
        $resultados = mysqli_query($conexao, $sql);
        while ($linha = mysqli_fetch_array($resultados)) {
            $id = $linha['idlivros'];
            $nome = $linha['nome'];
            $selected = ($livro_id == $id) ? "selected" : "";
            echo "<option value='$id' $selected>$nome</option>";
        }
        ?>
    </select><br>

    <!-- Cliente -->
    <label for="cliente_id">Cliente:</label><br>
    <select name="cliente_id" required>  <!-- Corrigido o nome do campo -->
        <?php
        $sql = "SELECT idcliente, nome FROM cliente";
        $resultados = mysqli_query($conexao, $sql);
        while ($linha = mysqli_fetch_array($resultados)) {
            $id = $linha['idcliente'];
            $nome = $linha['nome'];
            $selected = ($cliente_id == $id) ? "selected" : "";
            echo "<option value='$id' $selected>$nome</option>";
        }
        ?>
    </select><br>

    <!-- Funcionário -->
    <label for="funcionario_id">Funcionário:</label><br>
    <select name="funcionario_id" required>  <!-- Corrigido o nome do campo -->
        <?php
        $sql = "SELECT idfuncionario, nome FROM funcionario";
        $resultados = mysqli_query($conexao, $sql);
        while ($linha = mysqli_fetch_array($resultados)) {
            $id = $linha['idfuncionario'];
            $nome = $linha['nome'];
            $selected = ($funcionario_id == $id) ? "selected" : "";
            echo "<option value='$id' $selected>$nome</option>";
        }
        ?>
    </select><br>

    <!-- Datas de Empréstimo e Devolução -->
    <label for="data_emprestimo">Data de Empréstimo:</label><br>
    <input type="date" name="data_de_emprestimo" required value="<?php echo $data_emprestimo; ?>"><br>  <!-- Corrigido o nome do campo -->

    <label for="data_devolucao">Data de Devolução:</label><br>
    <input type="date" name="data_de_devolucao" required value="<?php echo $data_devolucao; ?>"><br>  <!-- Corrigido o nome do campo -->

    <input type="submit" value="<?php echo $botao; ?>">
</form>

<?php require_once "../public/templates/footer.html"; ?>

</body>
</html>
