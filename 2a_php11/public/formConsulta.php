<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="../controle/salvarConsulta.php">
        Data: <br>
        <input type="text" name="data"> <br><br>
        Local: <br>
        <input type="text" name="local"> <br><br>


        Paciente: <br>
        <select name="idpaciente">
            <?php
            require_once "../controle/conexao.php";

            $sql = "SELECT idpaciente, nome FROM paciente";

            $resultados = mysqli_query($conexao, $sql);

            while ($linha = mysqli_fetch_array($resultados)) {
                $id = $linha['idpaciente'];
                $nome = $linha['nome'];

                echo "<option value='$id'>$nome</option>";
            }
            ?>
        </select> <br><br>
        Médico: <br>
        <select name="idmedico">
            <?php

            require_once "../controle/conexao.php";

            $sql = "SELECT idmedico, nome FROM medico";

            $resultados = mysqli_query($conexao, $sql);

            while ($linha = mysqli_fetch_array($resultados)) {
                $id = $linha['idmedico'];
                $nome = $linha['nome'];

                echo "<option value='$id'>$nome</option>";
            }

            ?>
        </select> <br><br>

        <input type="submit" value="Agendar">
    </form>
</body>

</html>