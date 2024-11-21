<?php
require_once "../controle/verificar_login.php";

if (isset($_GET['id'])) {

    require_once "../controle/conexao.php";

    $id = $_GET['id'];
    $sql = "SELECT * FROM cliente WHERE idcliente = $id";
    $resultado = mysqli_query($conexao, $sql);

    $linha = mysqli_fetch_array($resultado);

    $nome = $linha['nome'];
    $cpf = $linha['cpf'];
    $telefone = $linha['telefone'];
    $email = $linha['email'];
    $data_de_nascimento = $linha['data_de_nascimento'];

    $botao = "Salva";
} else {
    $id = 0;
    $nome = '';
    $cpf = '';
    $telefone = '';
    $email = '';
    $data_de_nascimento = '';

    $botao = "Cadastrar";
}
?>



<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <link rel="shortcut icon" href="../public/assets/download.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/header.css">

    <link rel="stylesheet" href="../public/css/style_form.css">
</head>

<body>
    <?php require_once './templates/header.html'; ?>
    <form action="../controle/banco_cliente.php" method="post" class="form">
        <p class="title"><?php echo ($id > 0) ? "Editar " : "Cadastrar "; ?> Cliente</p>
        <p class="message">Preencha os dados abaixo para cadastrar um novo cliente.</p>
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <!-- Nome -->
        <div class="flex">
            <label>
                <input type="text" class="input" name="nome" required value="<?php echo $nome; ?>" title="Digite o nome completo do cliente">
                <span>Nome:</span>
            </label>
        </div>

        <!-- CPF -->
        <div class="flex">
            <label>
                <input type="text" class="input" name="cpf" required value="<?php echo $cpf; ?>" title="Digite o CPF do cliente">
                <span>CPF:</span>
            </label>
        </div>

        <!-- Telefone -->
        <div class="flex">
            <label>
                <input type="text" class="input" name="telefone" required value="<?php echo $telefone; ?>" title="Digite o número de telefone do cliente">
                <span>Telefone:</span>
            </label>
        </div>

        <!-- Email -->
        <div class="flex">
            <label>
                <input type="email" class="input" name="email" required value="<?php echo $email; ?>" title="Digite o email do cliente">
                <span>Email:</span>
            </label>
        </div>

        <!-- Data de Nascimento -->
        <div class="flex">
            <label>
                <input type="date" class="input" name="data_nascimento" required value="<?php echo $data_de_nascimento; ?>" title="Selecione a data de nascimento do cliente">
            </label>
        </div>

        <button type="submit" class="submit" title="Clique para <?php echo $botao === 'Cadastrar' ? 'Cadastrar' : 'Salvar' ?> o cliente"><?php echo $botao; ?> Cliente</button>
    </form>


    <?php require_once "../public/templates/footer.html"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>