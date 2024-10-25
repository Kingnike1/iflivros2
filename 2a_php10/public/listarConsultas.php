<?php
require_once "../controle/verificaLogado.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilo.css">
</head>

<body>
    <h2>Lista de Consultas</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Data</th>
                <th>Local</th>
                <th>Paciente</th>
                <th>Medico</th>
                <th>Ações</th>
            </tr>
        </thead>
        <?php
        require_once "../controle/conexao.php";

        $sql = "SELECT * FROM consulta";
        $resultados = mysqli_query($conexao, $sql);

        while ($linha = mysqli_fetch_array($resultados)) {
            $id = $linha['idconsulta'];
            $data = $linha['data'];
            $local = $linha['local'];
            
            // SELECT nome FROM paciente WHERE idpaciente = 1;
            $paciente = $linha['paciente_idpaciente'];
            $sql2 = "SELECT nome FROM paciente WHERE idpaciente = $paciente";
            $resultados2 = mysqli_query($conexao, $sql2);
            $linha2 = mysqli_fetch_array($resultados2);
            $paciente_nome = $linha2['nome'];
            
            // SELECT nome FROM medico WHERE idmedico = 1;
            $medico = $linha['medico_idmedico'];
            $sql3 = "SELECT nome FROM medico WHERE idmedico = $medico";
            $resultados3 = mysqli_query($conexao, $sql3);
            $linha3 = mysqli_fetch_array($resultados3);
            $medico_nome = $linha3['nome'];

            echo "<tr>";
            echo "<td>$id</td>";
            echo "<td>$data</td>";
            echo "<td>$local</td>";
            echo "<td>$paciente_nome</td>";
            echo "<td>$medico_nome</td>";
            echo "<td><a href='../controle/deletarPaciente.php?id=$id' class='btn btn-danger'>Apagar</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>