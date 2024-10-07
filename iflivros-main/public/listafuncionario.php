<?php
require_once '../controle/verificar_login.php';

if (isset($_GET['valor'])) {
    $valor = $_GET['valor'];
} else {
    $valor = '';
}
?>



<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funcionario</title>
    <link rel="shortcut icon" href="../public/assets/download.png" type="image/png">
    <link rel="stylesheet" href="../public/css/styles.css">
</head> 



<body>
    <a href=""></a>
    <?php
    require_once './assets/header.html';
    ?>    
    <form action="listacliente.php" method="get">
        Nome: <br>
        <input type="text" name="valor" value="<?php echo $valor; ?>"> <br><br>

        <input type="submit" value="Enviar">

     
    </form> <br>
<?php

        //pesquisa
        if (isset($_GET['valor'])) {
            // $valor = $_GET['valor'];
    
            require_once "../controle/conexao.php";
            $sql = "SELECT * FROM paciente WHERE nome LIKE '%$valor%'";
            $resultados = mysqli_query($conexao, $sql);
    
            if (mysqli_num_rows($resultados) == 0) {
                echo "Não foram encontrados resultados.";
            } else {
                echo "<table border='1'>";
                echo "<tr>";
                echo "<td>ID</td>";
                echo "<td>Nome</td>";
                echo "<td>CPF</td>";
                echo "<td>Telefone</td>";
                while ($linha = mysqli_fetch_array($resultados)) {
                    $id = $linha['idpaciente'];
                    $nome = $linha['nome'];
                    $cpf = $linha['cpf'];
                    $telefone = $linha['telefone'];
                    echo "<tr>";
                    echo "<td>$id</td>";
                    echo "<td>$nome</td>";
                    echo "<td>$cpf</td>";
                    echo "<td>$telefone</td>";
                    echo "</tr>";
                }
            }
        } else {
            echo "Digite um nome para pesquisar.";
        }
        
 
    ?> 
<h2>Lista de Funcionarios</h2>
<table>


<table>
    <thead>

        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>CPF</th>
            <th>TELEFONE</th>
            <th>DATA DE NASCIMENTO</th>
            <th>FUNÇÃO</th>
            <th>APAGAR</th>
        </tr>
    </thead>
    <?php
            require_once "../controle/conexao.php";

        $sql = "SELECT * FROM funcionario";

        $resultados = mysqli_query($conexao, $sql);

        while ($linha = mysqli_fetch_array($resultados)) {
            $id = $linha['idfuncionario'];
            $nome = $linha['nome'];
            $cpf = $linha['cpf'];
            $telefone = $linha['telefone'];
            $data_de_nascimento = $linha['data_de_nascimento'];
            $funcao = $linha['funcao'];

            echo "<tr>";
            echo "<td>$id</td>";
            echo "<td>$nome</td>";
            echo "<td>$cpf</td>";
            echo "<td>$telefone</td>";
            echo "<td>$data_de_nascimento</td>";
            echo "<td>$funcao</td>";
            echo "<td>
            <a href='../controle/deletar/deletar_cliente.php?id=$id'>
                <img src='excluir.png' alt='Lixeira' class='lixeira'>

            </a>
        </td>";            
        echo "</tr>";
        }
    ?>
</table><br>

<footer>
        <p>&copy; 2024 IF_LIVROS. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
