<?php
session_start();
if (isset($_SESSION['logado'])) {
    header("Location: home.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <form action="../controle/verificarLogin.php" method="post">
        <h1>Acessar o sistema</h1>
        Login: <br>
        <input type="text" name="login"> <br><br>

        Senha: <br>
        <input type="text" name="senha"> <br><br>

        <input type="submit" value="Acessar">

        <br>
        <a href="formUsuario.html">Cadastrar Usuário</a>
    </form>
</body>

</html>