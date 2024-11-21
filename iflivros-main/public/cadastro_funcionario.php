<?php
require_once '../controle/verificar_login.php';

if (isset($_GET['id'])) {
    // echo "editar";
    require_once "../controle/conexao.php";

    $id = $_GET['id'];
    $sql = "SELECT * FROM funcionario WHERE idfuncionario = $id";
    $resultado = mysqli_query($conexao, $sql);

    $linha = mysqli_fetch_array($resultado);

    $nome = $linha['nome'];
    $cpf = $linha['cpf'];
    $telefone = $linha['telefone'];
    $data_de_nascimento = $linha['data_de_nascimento'];
    $funcao = $linha['funcao'];
    $botao = "Salvar";

} else {
    $id = 0;
    $nome = '';
    $cpf = '';
    $telefone = '';
    $data_de_nascimento = '';
    $funcao = '';

    $botao = "Cadastrar";

}

?>
<?php
require_once '../controle/verificar_login.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionário</title>
    <link rel="shortcut icon" href="./assets/download.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/header.css">

    <link rel="stylesheet" href="./css/style_form.css">
</head>

<body>
    <?php require_once './templates/header.html'; ?>

    <form action="../controle/banco_funcionario.php?<?php echo $id; ?>" method="post" class="form">
        <p class="title"><?php echo ($id > 0) ? "Editar " : "Cadastrar "; ?> Funcionário</p>
        <p class="message">Preencha os dados abaixo para cadastrar um novo funcionário.</p>

        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <!-- Nome -->
        <div class="flex">
            <label>
                <input type="text" class="input" name="nome" value="<?php echo $nome; ?>" required
                    title="Digite o nome completo do funcionário">
                <span>Nome:</span>
            </label>
        </div>

        <!-- CPF -->
        <div class="flex">
            <label>
                <input type="text" class="input" name="cpf" value="<?php echo $cpf; ?>" required
                    title="Digite o CPF do funcionário (somente números)">
                <span>CPF:</span>
            </label>
        </div>

        <!-- Telefone -->
        <div class="flex">
            <label>
                <input type="text" class="input" name="telefone" value="<?php echo $telefone; ?>" required
                    title="Digite o número de telefone com DDD">
                <span>Telefone:</span>
            </label>
        </div>

        <!-- Data de Nascimento -->
        <div class="flex">
            <label>
                <input type="date" class="input" name="data_nascimento" value="<?php echo $data_de_nascimento; ?>" required
                    title="Selecione a data de nascimento do funcionário">
            </label>
        </div>

        <!-- Função -->
        <div class="flex">
            <label>
                <input type="text" class="input" name="funcao" value="<?php echo $funcao; ?>" required
                    title="Digite a função do funcionário (ex.: Gerente, Atendente)">
                <span>Função:</span>
            </label>
        </div>

        <!-- Botão -->
        <button type="submit" class="submit" title="Clique para salvar as informações do funcionário"><?php echo $botao; ?> Funcionário</button>
    </form>

    <?php require_once "../public/templates/footer.html"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>