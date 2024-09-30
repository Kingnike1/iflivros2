<?php
require_once '../controle/verificar_login.php'
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF_LIVROS</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="shortcut icon" href="./assets/download.png" type="image/png">
</head>

<body>
<?php
        require_once './assets/header.html'
    ?>
    <main>
        <section class="painel">
            <h2>Painel de Controle</h2>
            <p>Bem-vindo ao painel de controle do sistema da biblioteca! Aqui você tem acesso a todas as funcionalidades essenciais, incluindo o cadastro de novos livros, clientes, empréstimos e funcionários. Gerencie eficientemente todas as informações da biblioteca em um único lugar.</p>

        </section>

        <section class="biblioteca">
            <h2>Sobre a Biblioteca:</h2>
            <div class="content">
                <p>
                    Nossa biblioteca é um santuário de conhecimento e imaginação, onde prateleiras cheias de livros aguardam ansiosamente pelos leitores. A madeira antiga que reveste as paredes exala um aroma acolhedor, misturando-se ao cheiro inconfundível das páginas envelhecidas. As mesas de leitura, banhadas por uma luz suave, oferecem um espaço tranquilo para mergulhar em universos distantes. Cada canto revela uma nova descoberta, seja nas estantes que abrigam volumes raros ou nos espaços confortáveis que convidam à reflexão. É um lugar onde o tempo parece parar, permitindo que cada visitante se perca em suas próprias aventuras literárias. Nossa biblioteca é um refúgio onde a imaginação não tem limites e cada livro é uma porta para novas histórias.
                </p>
            </div>
        </section>

        <section class="dono">
            <h2>Atual Dono da Biblioteca:</h2>
            <div class="content">
                <p>
                    O atual dono deste refúgio literário é um verdadeiro apaixonado pela arte dos livros e pela magia da leitura. Com uma visão clara de preservar e expandir o encanto dos volumes, ele cuida de cada obra com uma dedicação meticulosa. Sua missão vai além de simplesmente manter a coleção; ele se empenha em criar um ambiente acolhedor e inspirador para todos os visitantes. Sua paixão pelo conhecimento e pela literatura é palpável em cada aspecto da biblioteca, desde a seleção criteriosa dos livros até a criação de espaços confortáveis para leitura e reflexão. Para ele, a biblioteca é mais do que um acervo; é um ponto de encontro para a mente e o espírito, um lugar onde a imaginação floresce e novas perspectivas são constantemente exploradas. Sob sua orientação, a biblioteca não é apenas um espaço de aprendizado, mas um verdadeiro tesouro vivo, pronto para oferecer novas aventuras e profundas reflexões a todos que têm o privilégio de entrar em suas portas.
                </p>
            </div>
        </section>

        <section class="galeria">
            <h2>Galeria da Biblioteca:</h2>
            <div class="scroll-container">
                <img src="./assets/image1.png" alt="Biblioteca">
                <img src="./assets/images.jpeg" alt="Biblioteca">
                <img src="./assets/images (1).jpeg" alt="Biblioteca">
                <img src="./assets/images (2).jpeg" alt="Biblioteca">
                <img src="./assets/images (3).jpeg" alt="Biblioteca">
                <img src="./assets/images (4).jpg" alt="Biblioteca">
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 IF_LIVROS. Todos os direitos reservados.</p>
    </footer>

   


</body>
</html>
