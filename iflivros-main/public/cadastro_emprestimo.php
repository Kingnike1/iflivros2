<?php
require_once "../controle/verificar_login.php";
require_once "../controle/conexao.php";

// Inicializa variáveis
$id = 0;
$livro_id = '';
$cliente_id = '';
$funcionario_id = '';
$data_emprestimo = '';
$data_devolucao = '';
$botao = "Cadastrar"; // Define o botão como "Cadastrar" por padrão

// Verifica se o parâmetro 'id' foi passado na URL (edição)
if (isset($_GET['id']) && $_GET['id'] != '') {
    $id = $_GET['id'];

    // Consulta ao banco para editar o empréstimo
    $sql = "SELECT * FROM emprestimo WHERE emprestimo = $id";
    $resultado = mysqli_query($conexao, $sql);
    
    if ($resultado) {
        $linha = mysqli_fetch_array($resultado);

        // Verifica se o empréstimo foi encontrado
        if ($linha) {
            // Preenche os campos do formulário com os dados do empréstimo
            $livro_id = $linha['livro_idlivros'];
            $cliente_id = $linha['cliente_idcliente'];
            $funcionario_id = $linha['funcionario_idfuncionario'];
            $data_emprestimo = $linha['data_de_emprestimo'];
            $data_devolucao = $linha['data_de_devolucao'];

            // Atualiza o botão para "Salvar"
            $botao = "Salvar";
        } else {
            // Se o empréstimo não for encontrado, exibe uma mensagem
            echo "Empréstimo não encontrado.";
            exit;
        }
    } else {
        // Erro ao consultar o banco de dados
        echo "Erro ao acessar o banco de dados.";
        exit;
    }
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
    <select name="livro_id" required> 
        <?php
        // Consulta para carregar livros
        $sql = "SELECT idlivros, nome FROM livro";
        $resultados = mysqli_query($conexao, $sql);
        while ($linha = mysqli_fetch_array($resultados)) {
            $id_livro = $linha['idlivros'];
            $nome_livro = $linha['nome'];
            $selected = ($livro_id == $id_livro) ? "selected" : "";
            echo "<option value='$id_livro' $selected>$nome_livro</option>";
        }
        ?>
    </select><br>

    <!-- Cliente -->
    <label for="cliente_id">Cliente:</label><br>
    <select name="cliente_id" required> 
        <?php
        // Consulta para carregar clientes
        $sql = "SELECT idcliente, nome FROM cliente";
        $resultados = mysqli_query($conexao, $sql);
        while ($linha = mysqli_fetch_array($resultados)) {
            $id_cliente = $linha['idcliente'];
            $nome_cliente = $linha['nome'];
            $selected = ($cliente_id == $id_cliente) ? "selected" : "";
            echo "<option value='$id_cliente' $selected>$nome_cliente</option>";
        }
        ?>
    </select><br>

    <!-- Funcionário -->
    <label for="funcionario_id">Funcionário:</label><br>
    <select name="funcionario_id" required>  
        <?php
        // Consulta para carregar funcionários
        $sql = "SELECT idfuncionario, nome FROM funcionario";
        $resultados = mysqli_query($conexao, $sql);
        while ($linha = mysqli_fetch_array($resultados)) {
            $id_funcionario = $linha['idfuncionario'];
            $nome_funcionario = $linha['nome'];
            $selected = ($funcionario_id == $id_funcionario) ? "selected" : "";
            echo "<option value='$id_funcionario' $selected>$nome_funcionario</option>";
        }
        ?>
    </select><br>

    <!-- Datas de Empréstimo e Devolução -->
    <label for="data_emprestimo">Data de Empréstimo:</label><br>
    <input type="date" name="data_de_emprestimo" required value="<?php echo $data_emprestimo; ?>"><br> 

    <label for="data_devolucao">Data de Devolução:</label><br>
    <input type="date" name="data_de_devolucao" required value="<?php echo $data_devolucao; ?>"><br> 

    <input type="submit" value="<?php echo $botao; ?>"> <!-- Exibe o botão adequado -->
</form>

<?php require_once "../public/templates/footer.html"; ?>

</body>
</html>
