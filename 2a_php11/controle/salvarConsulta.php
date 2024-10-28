<?php
    $data = $_GET['data'];
    $local = $_GET['local'];
    $idpaciente = $_GET['idpaciente'];
    $idmedico = $_GET['idmedico'];

    require_once "./conexao.php";

    $sql = "INSERT INTO consulta (data, local, paciente_idpaciente, medico_idmedico) VALUES ('$data', '$local', $idpaciente, $idmedico)";

    mysqli_query($conexao, $sql);

    header("Location: ../public/home.html");
?>