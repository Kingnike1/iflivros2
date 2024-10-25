<?php
require_once "../controle/verificaLogado.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* div {
            border-style: solid;
        }

        body {
            border-style: dotted;
        } */
    </style>
</head>

<body>
    <div class="container text-center">
        <h2>Olá mundo</h2>
        <div class="row row-cols-4 p-2">
            <a href="formPaciente.html" class="btn btn-primary p-1 m-1">Cadastrar paciente</a>
            <a href="formConsulta.php" class="btn btn-primary p-1 m-1">Agendar consulta</a>
            <a href="listarPacientes.php" class="btn btn-primary p-1 m-1">Listar Pacientes</a>
            <a href="../controle/deslogar.php" class="btn btn-danger p-1 m-1">Sair</a>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>