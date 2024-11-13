<?php
require_once "../controle/estatisticas.php";  // Incluir o arquivo da função

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
    <style>
        /* =========================== */
        /* ESTILO GERAL DA PÁGINA */
        /* =========================== */
        body {
            font-family: 'Arial', sans-serif;
            background: #f4f7fc; /* Cor de fundo suave */
            margin: 0;
            padding: 0;
            color: #333;
        }

        /* =========================== */
        /* ESTILO DO TÍTULO PRINCIPAL */
        /* =========================== */
        h1 {
            text-align: center;
            font-size: 36px;
            font-weight: bold;
            color: #007acc;
            margin-top: 40px;
        }

        /* =========================== */
        /* ESTILO DAS INFORMAÇÕES ESTATÍSTICAS */
        /* =========================== */
        p {
            font-size: 18px;
            margin: 20px auto;
            width: 80%;
            padding: 15px;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        p strong {
            font-weight: bold;
            color: #007acc; /* Cor para os rótulos */
        }

        /* =========================== */
        /* ESTILO DO CONTAINER DE CONTEÚDO */
        /* =========================== */
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        /* =========================== */
        /* MEDIA QUERY PARA TELAS MENORES */
        /* =========================== */
        @media (max-width: 768px) {
            body {
                font-size: 16px;
            }

            h1 {
                font-size: 28px;
            }

            p {
                width: 90%;
                font-size: 16px;
                padding: 12px;
            }
        }

        /* =========================== */
        /* ESTILO DO GRÁFICO DE BARRAS */
        /* =========================== */
        .grafico {
            width: 80%;
            margin: 30px auto;
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .grafico h2 {
            font-size: 24px;
            color: #007acc;
            margin-bottom: 20px;
        }

        .barra {
            height: 40px;
            margin-bottom: 15px;
            position: relative;
            background-color: #e4e4e4;
            border-radius: 10px;
            display: flex;
            align-items: center;
            padding-left: 10px;
            font-size: 16px;
            color: #333;
        }

        .barra span.valor {
            position: absolute;
            right: 10px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
    <h1>Resumo Estatístico</h1>

    <p><strong>Total de Livros:</strong> <?php echo $estatisticas['total_livros']; ?></p>
    <p><strong>Total de Clientes:</strong> <?php echo $estatisticas['total_clientes']; ?></p>
    <p><strong>Empréstimos Abertos:</strong> <?php echo $estatisticas['emprestimos_abertos']; ?></p>
    <p><strong>Total de Funcionários:</strong> <?php echo $estatisticas['total_funcionarios']; ?></p>

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
</body>
</html>
