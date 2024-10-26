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

    <form action="../controle/banco_funcionario.php" method="get" class="form">
        <p class="title">Cadastro de Funcionário</p>
        <p class="message">Preencha os dados abaixo para cadastrar um novo funcionário.</p>

        <!-- Nome -->
        <div class="flex">
            <label>
                <input type="text" class="input" name="nome" required>
                <span>Nome:</span>
            </label>
        </div>

        <!-- CPF -->
        <div class="flex">
            <label>
                <input type="text" class="input" name="cpf" required>
                <span>CPF:</span>
            </label>
        </div>

        <!-- Telefone -->
        <div class="flex">
            <label>
                <input type="text" class="input" name="telefone" required>
                <span>Telefone:</span>
            </label>
        </div>

        <!-- Data de Nascimento -->
        <div class="flex">
            <label>
                <input type="date" class="input" name="data_nascimento" required>
            </label>
        </div>

        <!-- Função -->
        <div class="flex">
            <label>
                <input type="text" class="input" name="funcao" required>
                <span>Função:</span>
            </label>
        </div>

        <button class="submit">Cadastrar Funcionário</button>
    </form>
    <?php require_once "../public/templates/footer.html";?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
