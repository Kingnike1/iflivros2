<?php
require_once '../controle/verificar_login.php'
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
<?php require_once './assets/header.html'; ?>

    <form action="../controle/banco_cliente.php" method="get" class="form">
        <p class="title">Cadastro de Cliente</p>
        <p class="message">Preencha os dados abaixo para cadastrar um novo cliente.</p>

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
                <input type="text" class="input"  name="cpf" required>
                <span>CPF:</span>
            </label>
        </div>

        <!-- Telefone -->
        <div class="flex">
            <label>
                <input type="text" class="input"  name="telefone" required>
                <span>Telefone:</span>
            </label>
        </div>

        <!-- Email -->
        <div class="flex">
            <label>
                <input type="email" class="input" name="email" required>
                <span>Email:</span>
            </label>
        </div>

        <!-- Data de Nascimento -->
        <div class="flex">
            <label>
                <input type="date" class="input" name="data_nascimento" required>
            </label>
        </div>

        <button class="submit">Cadastrar Cliente</button>
    </form>
    <footer class="mt-4">
        <p>&copy; 2024 IF_LIVROS. Todos os direitos reservados.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
