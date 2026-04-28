<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha casa na internet • Mikael Oliveira</title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Desenvolvedor Full Stack especializado em PHP, Laravel, CodeIgniter e React. Compartilho experiências e conhecimentos sobre desenvolvimento web.">
    <meta name="keywords" content="Mikael Oliveira, desenvolvedor php, programador, laravel, codeigniter, react, desenvolvimento web, blog tecnologia">
    <meta name="author" content="Mikael Oliveira">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?= base_url('/') ?>">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Minha casa na internet • Mikael Oliveira">
    <meta property="og:description" content="Desenvolvedor Full Stack especializado em PHP, Laravel, CodeIgniter e React. Compartilho experiências e conhecimentos sobre desenvolvimento web.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= base_url('/') ?>">
    <meta property="og:image" content="<?= esc($profilePhoto) ?>">
    <meta property="og:locale" content="pt_BR">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Minha casa na internet • Mikael Oliveira">
    <meta name="twitter:description" content="Desenvolvedor Full Stack especializado em PHP, Laravel, CodeIgniter e React.">
    <meta name="twitter:image" content="<?= esc($profilePhoto) ?>">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?= base_url('favicon.png') ?>">
    <link rel="apple-touch-icon" href="<?= base_url('favicon.png') ?>">
    
    <link rel="stylesheet" href="<?= base_url('css/home.css') ?>">
</head>

<body>
    <div class="laser-beam" id="laserLeft"></div>
    <div class="laser-beam" id="laserRight"></div>

    <div class="cat" onclick="toggleThought()">
        <div class="thought-bubble" id="thoughtBubble">PHP é a melhor linguagem 💜</div>
        <div class="cat-tail"></div>
        <div class="cat-body"></div>
        <div class="cat-head">
            <div class="cat-ear left"></div>
            <div class="cat-ear right"></div>
            <div class="cat-eye left" id="eyeLeft"></div>
            <div class="cat-eye right" id="eyeRight"></div>
        </div>
        <div class="cat-leg front-left"></div>
        <div class="cat-leg front-right"></div>
        <div class="cat-leg back-left"></div>
        <div class="cat-leg back-right"></div>
    </div>

    <div class="container">
        <img src="<?= esc($profilePhoto) ?>" alt="Minha Foto" class="profile-photo">

        <h1>Sobre mim</h1>

        <div class="about">
            <p>
                Olá, Eu me chamo Mikael Oliveira tenho <?= date('Y') - 2003 ?> anos e sou <a href="<?= base_url('blog/minha-experiencia-na-faculdade') ?>" target="_blank">bacharel em Ciência da Computação</a>
                e seja bem vindo à <a href="<?= base_url('blog/minha-casa-na-internet') ?>" target="_blank">minha casa na internet</a>.
            </p>
            <p style="margin-top: 20px;">
                Trabalho com programação a <?= date('Y') - 2022 ?> anos e já passei por vários projetos alguns bem legais usando tecnologias novas como (PHP 8 E Laravel 12) e com padrões de desenvolvimento bem estruturados e outros bem bucha com técnologia legada com (Codeigniter 3 e PHP 7).
                Gosto bastante de programar em PHP (inclusive esse site foi feito com PHP 8 e Codeigniter 4), mas já trabalhei com outras linguagens como Javascript/Typescript com React, e brinquei bastante com Java no passado.
                Hoje gosto de estudar sobre como frameworks funcionam por dentro e por isso decidi tentar criar o meu framework <a href="https://github.com/LordBluue3/coreon-framework" target="_blank">Coreon framework</a>, mas futuramente vou reescrever tudo do zero e também gosto bastante de estudar sobre o HyperF e swoole.
            </p>
        </div>

        <div class="action-buttons">
            <a href="<?= base_url('blog') ?>" class="btn-blog">
                Acesse meu Blog
            </a>
            <a href="<?= base_url('projects') ?>" class="btn-projects">
                Veja meus Projetos
            </a>
        </div>

        <div class="social-links">
            <a href="https://www.linkedin.com/in/mikael-oliveira-345a34209/" target="_blank" rel="noopener noreferrer">LinkedIn</a> •
            <a href="https://github.com/LordBluue3" target="_blank" rel="noopener noreferrer">GitHub</a>
        </div>
    </div>

    <script src="<?= base_url('js/home.js') ?>"></script>
</body>

</html>