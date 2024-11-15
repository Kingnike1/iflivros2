<?php
require_once "../controle/verificar_login.php";

if (isset($_GET['id'])) {

    require_once "../controle/conexao.php";

    $id = $_GET['id'];
    $sql = "SELECT * FROM livro WHERE idlivros = $id";
    $resultado = mysqli_query($conexao, $sql);

    $linha = mysqli_fetch_array($resultado);

    $nome = $linha['nome'];
    $genero = $linha['genero'];
    $status = $linha['status'];
    $autor = $linha['autor'];
    $botao = "Salvar";

    // Verifique o valor de status (opcional para depuração)
    // var_dump($status); // Para ver o valor real de status

    // Certifique-se de que o valor de status seja um dos esperados

} else {
    $id = 0;
    $nome = '';
    $genero = '';
    $status = '';
    $autor = '';

    $botao = "Cadastrar";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livro</title>
    <link rel="shortcut icon" href="./assets/download.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/header.css">
    <link rel="stylesheet" href="./css/style_form.css">
</head>
<body>
<?php require_once './templates/header.html'; ?>

    <form action="../controle/banco_livro.php?<?php echo $id ?>" method="post" class="form">
        <p class="title">Cadastro de Livro</p>
        <p class="message">Preencha os dados abaixo para cadastrar um novo livro.</p>
        <input type="hidden" name="id" value="<?php echo $id ?>">

        <!-- Nome -->
        <div class="flex">
            <label>
                <input type="text" class="input" name="nome" required value="<?php echo $nome?>">
                <span>Nome:</span>
            </label>
        </div>

        <!-- Gênero -->
        <div class="flex">
            <label>
                <input type="text" class="input" name="genero" required value="<?php echo $genero ?>">
                <span>Gênero:</span>
            </label>
        </div>

        <!-- Autor -->
        <div class="flex">
            <label>
                <input type="text" class="input" name="autor" required value="<?php echo $autor ?>">
                <span>Autor:</span>
            </label>
        </div>

        <!-- Status -->
        <div class="flex">
            <label>Status:</label><br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="statusDisponivel" value="Disponível" 
                       <?php echo ($status == 'Disponível') ? 'checked' : ''; ?>>
                <label class="form-check-label" for="statusDisponivel">Disponível</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="statusIndisponivel" value="Indisponível" 
                       <?php echo ($status == 'Indisponível') ? 'checked' : ''; ?>>
                <label class="form-check-label" for="statusIndisponivel">Indisponível</label>
            </div>
        </div>

        <button class="submit"><?php echo $botao; ?> Livro</button>
    </form>

    <?php require_once "../public/templates/footer.html";?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
