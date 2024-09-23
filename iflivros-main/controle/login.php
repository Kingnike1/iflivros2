<?php
    require_once 'conexao.php';
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuario WHERE email = '$login' and senha ='$senha'";
    
    $resultados = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultados) == 0) {
        header("location: ../public/index.html");
    } else {
        header("location: ../public/home.html");
    }
?>