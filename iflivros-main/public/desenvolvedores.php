<?php
require_once '../controle/verificar_login.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desenvolvedores</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    
    <!-- Animate.css -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    
    <!-- AOS (Animate on Scroll) -->
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="./css/desenvolvedores.css">
    <link rel="shortcut icon" href="./assets/download.png" type="image/png">
</head>
<body>
    <div class="container mt-5">
        <!-- Seção de Introdução -->
        <div class="intro text-center mb-5">
            <h3>Bem-vindo à nossa equipe de desenvolvimento!</h3>
            <p>Conheça os desenvolvedores por trás deste projeto incrível. Cada membro traz habilidades únicas e está comprometido em criar uma experiência excepcional para os usuários. Sinta-se à vontade para explorar os perfis abaixo!</p>
        </div>

        <h2 class="text-center titulo">Equipe de Desenvolvimento</h2>
        <div class="row mt-4">
            <div class="col-md-4 text-center" data-aos="fade-up">
                <div class="container overlay-container">
                    <p>Desenvolvedor 1</p>
                    <img src="./assets/dev1.jpeg" alt="Desenvolvedor 1" class="image">
                    <div class="overlay">
                        <a href="https://github.com/Kingnike1/" target="_blank" class="link_instagram">Nome: Pablo Rodrigues</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center" data-aos="fade-up">
                <div class="container overlay-container">
                    <p>Desenvolvedor 2</p>
                    <img src="./assets/dev3.jpeg" alt="Desenvolvedor 2" class="image">
                    <div class="overlay">
                        <a href="https://github.com/" class="link_instagram">Nome: Paulo Ricardo</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center" data-aos="fade-up">
                <div class="container overlay-container">
                    <p>Desenvolvedor 3</p>
                    <img src="./assets/dev2.jpeg" alt="Desenvolvedor 3" class="image">
                    <div class="overlay">
                        <a href="https://github.com/kaio062/" target="_blank" class="link_instagram">Nome: Kaio Barbosa</a>
                    </div>                
                </div>
            </div>
            <div class="col-md-4 text-center" data-aos="fade-up">
                <div class="container overlay-container">
                    <p>Desenvolvedor 4</p>
                    <img src="./assets/dev4.jpeg" alt="Desenvolvedor 4" class="image">
                    <div class="overlay">
                        <a href="https://github.com/" class="link_instagram">Nome: Bianca Vitoria</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center" data-aos="fade-up">
                <div class="container overlay-container">
                    <p>Desenvolvedor 5</p>
                    <img src="./assets/dev5.jpeg" alt="Desenvolvedor 5" class="image">
                    <div class="overlay">
                        <a href="https://github.com/" class="link_instagram">Nome: Sara Xavier</a>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    
    <script>
        // Inicializa AOS (Animate on Scroll)
        AOS.init();
    </script>
</body>
</html>
