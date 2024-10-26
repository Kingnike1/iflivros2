<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuario</title>
    <link rel="stylesheet" href="./css/style_form.css">
    <!-- <link rel="stylesheet" href="./css/styles.css"> -->
    
</head>
<body>
    <h1>Cadastro do Usuario</h1>
    <form action="../controle/banco_usuario.php">
        <label for="">Email:</label><br>
        <input type="email" name="email" placeholder="Digite seu email@">

        <label for="">Senha</label>
        <input type="password" name="senha" placeholder="Crie uma senha de mais de 11 caracteres">
    </form>


    <?php require_once "../public/assets/footer.html";?>

</body>
</html>