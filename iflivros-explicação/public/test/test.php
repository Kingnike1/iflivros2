<?php
// require_once '../controle/verificar_login.php';

if (isset($_GET['id'])) {
    // Caso o formulário seja para editar um empréstimo existente
    require_once "../../controle/conexao.php";

    $id = $_GET['id'];
    $sql = "SELECT * FROM emprestimo WHERE emprestimo = $id"; // Ajuste conforme o nome correto da tabela
    $resultado = mysqli_query($conexao, $sql);
    
    $linha = mysqli_fetch_array($resultado);

    $livro_id = $linha['livro_idlivros'];
    $cliente_id = $linha['cliente_idcliente'];
    $funcionario_id = $linha['funcionario_idfuncionario'];
    $data_emprestimo = $linha['data_de_emprestimo'];
    $data_devolucao = $linha['data_de_devolucao'];

    $botao = "Salvar";
} else {
    // Caso o formulário seja para cadastrar um novo empréstimo
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
    <link rel="stylesheet" href="../../public/css/styles_form.css">
    <link rel="stylesheet" href="../../public/css/header.css">
    <link rel="shortcut icon" href="../../public/assets/download.png" type="image/png">
</head>
<body>
<?php require_once '../templates/header.html'; ?>

    <h2>Empréstimo de Livro</h2>
    <form action="test2.php" method="post">
        <!-- ID do empréstimo (oculto) -->
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <!-- Livro -->
        <label for="livro_id">Livro:</label><br>
        <select name="livro_id" required>
            <?php
            require_once "../../controle/conexao.php";

            // Livros disponíveis
            $sql = "SELECT idlivros, nome FROM livro WHERE status = 'Disponível'"; // Alterado para filtrar apenas livros disponíveis
            $resultados = mysqli_query($conexao, $sql);

            while ($linha = mysqli_fetch_array($resultados)) {
                $livro_id_value = $linha['idlivros'];
                $livro_nome = $linha['nome'];
                echo "<option value='$livro_id_value'" . ($livro_id == $livro_id_value ? " selected" : "") . ">$livro_nome</option>";
            }
            ?>
        </select><br>
        <!-- Cliente -->
        <label for="cliente_id">Cliente:</label><br>
        <select name="cliente_id" required>
            <?php
            // Clientes
            $sql = "SELECT idcliente, nome FROM cliente";
            $resultados = mysqli_query($conexao, $sql);

            while ($linha = mysqli_fetch_array($resultados)) {
                $cliente_id_value = $linha['idcliente'];
                $cliente_nome = $linha['nome'];
                echo "<option value='$cliente_id_value'" . ($cliente_id == $cliente_id_value ? " selected" : "") . ">$cliente_nome</option>";
            }
            ?>
        </select><br>

        <!-- Funcionário -->
        <label for="funcionario_id">Funcionário:</label><br>
        <select name="funcionario_id" required>
            <?php
            // Funcionários
            $sql = "SELECT idfuncionario, nome FROM funcionario";
            $resultados = mysqli_query($conexao, $sql);

            while ($linha = mysqli_fetch_array($resultados)) {
                $funcionario_id_value = $linha['idfuncionario'];
                $funcionario_nome = $linha['nome'];
                echo "<option value='$funcionario_id_value'" . ($funcionario_id == $funcionario_id_value ? " selected" : "") . ">$funcionario_nome</option>";
            }
            ?>
        </select><br>

        <!-- Data de Empréstimo -->
        <label for="data_emprestimo">Data de Empréstimo:</label><br>
        <input type="date" name="data_emprestimo" required value="<?php echo $data_emprestimo; ?>"><br>

        <!-- Data de Devolução -->
        <label for="data_devolucao">Data de Devolução:</label><br>
        <input type="date" name="data_devolucao" required value="<?php echo $data_devolucao; ?>"><br>

        <!-- Botão de envio -->
        <input type="submit" value="<?php echo $botao; ?> Empréstimo">
    </form>    

    <?php require_once "../../public/templates/footer.html";?>

</body>
</html>
