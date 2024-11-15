<?php
// require_once '../controle/verificar_login.php'
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link rel="shortcut icon" href="../public/assets/download.png" type="image/png">
    <link rel="stylesheet" href="../public/css/header.css">
    <link rel="stylesheet" href="../public/css/style_form.css">
</head>
<body>
<?php require_once './templates/header.html'; ?>

    <form action="../controle/banco_usuario.php" method="post" class="form">
        <p class="title">Cadastro de Usuário</p>
        <p class="message">Preencha os dados abaixo para cadastrar um novo usuário.</p>

        <!-- Email -->
        <div class="flex">
            <label>
                <input type="email" class="input" name="email" required>
                <span>Email:</span>
            </label>
        </div>

        <!-- Senha -->
        <div class="flex">
            <label>
                <input type="password" class="input" name="senha" required>
                <span>Senha:</span>
            </label>
        </div>

        <button class="submit">Cadastrar Usuário</button>
    </form>

    <?php require_once "../public/templates/footer.html";?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
