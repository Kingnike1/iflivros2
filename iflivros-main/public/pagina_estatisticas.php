<?php
require_once "../controle/estatisticas.php";  // Incluir o arquivo da função
require_once "../controle/verificar_login.php";
// Obter as estatísticas
$estatisticas = getEstatisticas();

// Encontrar o maior valor para definir a escala do gráfico
$max_value = max($estatisticas['total_livros'], $estatisticas['total_clientes'], $estatisticas['emprestimos_abertos'], $estatisticas['total_funcionarios']);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estatísticas da Biblioteca</title>
    <link rel="stylesheet" href="estatisticas.css">
</head>
<body>

<a href="pagina_estatisticas.php"><h1>Resumo Estatístico</h1>
</a>
    <p><strong> <a href="listalivros.php">Total de Livros:</a></strong> <?php echo $estatisticas['total_livros']; ?></p>
    <p><strong> <a href="listacliente.php">Total de Clientes:</a></strong> <?php echo $estatisticas['total_clientes']; ?></p>
    <p><strong><a href="listaemprestimo.php">Empréstimos Abertos:</a></strong> <?php echo $estatisticas['emprestimos_abertos']; ?></p>
    <p><strong> <a href="listafuncionario.php">Total de Funcionários:</a></strong> <?php echo $estatisticas['total_funcionarios']; ?></p>

    <!-- Seção do Gráfico -->
    <section class="grafico">
        <h2>Gráfico Estatístico</h2>
        <div class="barra" id="livros" style="width: <?php echo ($estatisticas['total_livros'] / $max_value) * 100; ?>%; background-color: #4CAF50;">
            <span class="valor">Total de Livros: <?php echo $estatisticas['total_livros']; ?></span>
        </div>
        <div class="barra" id="clientes" style="width: <?php echo ($estatisticas['total_clientes'] / $max_value) * 100; ?>%; background-color: #007acc;">
            <span class="valor">Total de Clientes: <?php echo $estatisticas['total_clientes']; ?></span>
        </div>
        <div class="barra" id="emprestimos" style="width: <?php echo ($estatisticas['emprestimos_abertos'] / $max_value) * 100; ?>%; background-color: #f39c12;">
            <span class="valor">Empréstimos Abertos: <?php echo $estatisticas['emprestimos_abertos']; ?></span>
        </div>
        <div class="barra" id="funcionarios" style="width: <?php echo ($estatisticas['total_funcionarios'] / $max_value) * 100; ?>%; background-color: #e74c3c;">
            <span class="valor">Total de Funcionários: <?php echo $estatisticas['total_funcionarios']; ?></span>
        </div>
    </section>

    <?php require_once "../public/templates/footer.html"; ?>

</body>
</html>
