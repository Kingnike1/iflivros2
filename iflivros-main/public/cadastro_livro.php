<?php
require_once '../controle/verificar_login.php'
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livro</title>
    <link rel="stylesheet" href="./css/styles_form.css">
    <link rel="shortcut icon" href="./assets/download.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles_form.css">
</head>
<body>
    <h2>Cadastro de Livro</h2>
    <form action="../controle/banco_livro.php" method="GET">
        <!-- Nome -->
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Nome do livro" name="nome" required>
            <label for="floatingInput">Nome:</label>
        </div>
        <br>
        
        <!-- Gênero -->
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInputGenero" placeholder="Gênero do livro" name="genero" required>
            <label for="floatingInputGenero">Gênero:</label>
        </div>
        <br>
        
        <!-- Autor -->
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInputAutor" placeholder="Autor do livro" name="autor" required>
            <label for="floatingInputAutor">Autor:</label>
        </div>
        <br>

        <!-- Status -->
        <label>Status:</label><br>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="statusDisponivel" value="Disponível" checked>
            <label class="form-check-label" for="statusDisponivel">
                Disponível
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="statusIndisponivel" value="Indisponível">
            <label class="form-check-label" for="statusIndisponivel">
                Indisponível
            </label>
        </div>
        <br>

        <input type="submit" value="Cadastrar Livro" class="btn btn-primary">
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
