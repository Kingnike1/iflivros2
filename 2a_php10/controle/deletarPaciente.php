<?php
    require_once "./conexao.php";

    $id = $_GET['id'];
    
    // DELETE FROM paciente WHERE idpaciente = 3;
    $sql = "DELETE FROM paciente WHERE idpaciente = $id;";

    mysqli_query($conexao, $sql);

    header("Location: ../public/listarPacientes.php");
?>