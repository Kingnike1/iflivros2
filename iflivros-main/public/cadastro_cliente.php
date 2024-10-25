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
    <link rel="stylesheet" href="../public/css/styles_form.css">
</head>
<body>
    <h2>Cadastro de Cliente</h2>
    <form action="../controle/banco_cliente.php" method="get">
        <!-- <label>Nome:</label><br> -->
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="nome">
            <label for="floatingInput">Nome:</label>
        </div><br>
        
        <!-- <label>CPF:</label><br> -->
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="cpf">
            <label for="floatingInput">CPF:</label>
        </div><br>
        
        <!-- <label>Telefone:</label><br> -->
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="telefone">
            <label for="floatingInput">Telefone:</label>
        </div><br>
        <!-- email         -->
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" >
            <label for="floatingInput">Email:</label>
        </div><br>

        <!-- data de nascimento -->
        <div class="form-floating mb-3">
            <input type="date" class="form-control" id="floatingInput" placeholder="name@example.com" name="data_nascimento">
            <label for="floatingInput">Data de Nascimento:</label>
        </div><br>
        
        <input type="submit" value="Cadastrar Cliente">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
