<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha casa na internet • Mikael</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            overflow-x: hidden;
            position: relative;
        }

        .container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            max-width: 800px;
            width: 100%;
            padding: 60px;
            padding-bottom: 12px;
            text-align: center;
        }

        .profile-photo {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            border: 5px solid #667eea;
            margin: 0 auto 30px;
            object-fit: cover;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #333;
            font-size: 2.5em;
            margin-bottom: 15px;
        }

        .subtitle {
            color: #667eea;
            font-size: 1.3em;
            margin-bottom: 30px;
            font-weight: 500;
        }

        .about {
            color: #666;
            font-size: 1.1em;
            line-height: 1.8;
            margin-bottom: 40px;
            text-align: justify;
        }

        .btn-blog {
            display: inline-block;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 15px 40px;
            text-decoration: none;
            border-radius: 50px;
            font-size: 1.1em;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        .btn-blog:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.6);
        }

        .social-links {
            margin-top: 40px;
            padding-top: 40px;
            border-top: 1px solid #eee;
        }

        .social-links a {
            display: inline-block;
            margin: 0 10px;
            color: #667eea;
            text-decoration: none;
            font-size: 1em;
            transition: color 0.3s ease;
        }

        .social-links a:hover {
            color: #764ba2;
        }

        @media (max-width: 768px) {
            .container {
                padding: 40px 30px;
            }

            h1 {
                font-size: 2em;
            }

            .subtitle {
                font-size: 1.1em;
            }

            .about {
                font-size: 1em;
            }
        }

        /* Gato Animado */
        .cat {
            position: fixed;
            bottom: 50px;
            left: -100px;
            width: 80px;
            height: 60px;
            animation: walk 15s linear infinite;
            z-index: 1;
        }

        @keyframes walk {
            0% {
                left: -100px;
            }

            100% {
                left: calc(100% + 100px);
            }
        }

        .cat-body {
            position: absolute;
            bottom: 15px;
            left: 10px;
            width: 60px;
            height: 35px;
            background: #1a1a1a;
            border-radius: 40% 40% 30% 30%;
        }

        .cat-head {
            position: absolute;
            bottom: 35px;
            left: 45px;
            width: 35px;
            height: 30px;
            background: #1a1a1a;
            border-radius: 50% 50% 40% 40%;
        }

        .cat-ear {
            position: absolute;
            width: 0;
            height: 0;
            border-left: 8px solid transparent;
            border-right: 8px solid transparent;
            border-bottom: 15px solid #1a1a1a;
        }

        .cat-ear.left {
            top: -10px;
            left: 3px;
            transform: rotate(-15deg);
        }

        .cat-ear.right {
            top: -10px;
            right: 3px;
            transform: rotate(15deg);
        }

        .cat-tail {
            position: absolute;
            bottom: 25px;
            left: 5px;
            width: 4px;
            height: 25px;
            background: #1a1a1a;
            border-radius: 5px;
            transform-origin: bottom;
            animation: tailWag 0.6s ease-in-out infinite;
        }

        @keyframes tailWag {

            0%,
            100% {
                transform: rotate(-10deg);
            }

            50% {
                transform: rotate(10deg);
            }
        }

        .cat-leg {
            position: absolute;
            width: 5px;
            height: 18px;
            background: #1a1a1a;
            border-radius: 2px;
        }

        .cat-leg.front-left {
            bottom: 0;
            left: 20px;
            animation: legWalk 0.4s ease-in-out infinite;
        }

        .cat-leg.front-right {
            bottom: 0;
            left: 30px;
            animation: legWalk 0.4s ease-in-out infinite 0.2s;
        }

        .cat-leg.back-left {
            bottom: 0;
            left: 45px;
            animation: legWalk 0.4s ease-in-out infinite 0.2s;
        }

        .cat-leg.back-right {
            bottom: 0;
            left: 55px;
            animation: legWalk 0.4s ease-in-out infinite;
        }

        @keyframes legWalk {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-5px);
            }
        }

        .cat-eye {
            position: absolute;
            width: 4px;
            height: 4px;
            background: #ffeb3b;
            border-radius: 50%;
            top: 12px;
        }

        .cat-eye.left {
            left: 8px;
        }

        .cat-eye.right {
            right: 8px;
        }

        /* Balão de Pensamento */
        .thought-bubble {
            position: absolute;
            bottom: 80px;
            left: 50%;
            transform: translateX(-50%);
            background: white;
            padding: 15px 20px;
            border-radius: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            font-size: 14px;
            font-weight: 600;
            color: #667eea;
            white-space: nowrap;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s ease;
            z-index: 10;
        }

        .thought-bubble.show {
            opacity: 1;
        }

        .thought-bubble::before {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 160px;
            width: 20px;
            height: 20px;
            background: white;
            border-radius: 50%;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.2);
        }

        .thought-bubble::after {
            content: '';
            position: absolute;
            bottom: -25px;
            left: 150px;
            width: 12px;
            height: 12px;
            background: white;
            border-radius: 50%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .cat {
            cursor: pointer;
        }

        /* Raios Laser */
        .laser-beam {
            position: fixed;
            width: 3px;
            height: 0;
            background: linear-gradient(to bottom,
                    transparent 0%,
                    #ff0000 20%,
                    #ff4444 50%,
                    #ff0000 80%,
                    transparent 100%);
            box-shadow: 0 0 10px #ff0000, 0 0 20px #ff0000;
            opacity: 0;
            pointer-events: none;
            z-index: 100;
            transform-origin: top;
            transition: opacity 0.2s ease;
        }

        .laser-beam.active {
            opacity: 1;
            animation: laserPulse 0.1s ease-in-out infinite;
        }

        @keyframes laserPulse {

            0%,
            100% {
                opacity: 0.8;
            }

            50% {
                opacity: 1;
            }
        }

        /* Efeito de queimadura */
        @keyframes burn {
            0% {
                color: inherit;
                text-shadow: none;
            }

            25% {
                color: #ff6600;
                text-shadow: 0 0 5px #ff6600;
            }

            50% {
                color: #ff0000;
                text-shadow: 0 0 10px #ff0000, 0 0 20px #ff4444;
            }

            75% {
                color: #660000;
                text-shadow: 0 0 5px #660000;
            }

            100% {
                color: transparent;
                text-shadow: none;
                opacity: 0;
            }
        }

        .burning {
            animation: burn 2s ease-in-out forwards;
        }

        .cat-eye.laser-active {
            background: #ff0000;
            box-shadow: 0 0 10px #ff0000, 0 0 20px #ff0000;
        }
    </style>
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
                Olá, Eu me chamo Mikael Oliveira tenho <?= date('Y') - 2003 ?> anos e sou <a href="http://localhost:8080/blog/minha-experiencia-na-faculdade" target="_blank">bacharel em Ciência da Computação</a>
                e seja bem vindo à <a href="http://localhost:8080/blog/minha-casa-na-internet" target="_blank">minha casa na internet</a>.
            </p>
            <p style="margin-top: 20px;">
                Trabalho com programação a <?= date('Y') - 2022 ?> anos e já passei por vários projetos alguns bem legais usando tecnologias novas como (PHP 8 E Laravel 12) e com padrões de desenvolvimento bem estruturados e outros bem bucha com técnologia legada com (Codeigniter 3 e PHP 7).
                Gosto bastante de programar em PHP (inclusive esse site foi feito com PHP 8 e Codeigniter 4), mas já trabalhei com outras linguagens como Javascript/Typescript com React, e brinquei bastante com Java no passado.
                Hoje gosto de estudar sobre como frameworks funcionam por dentro e por isso decidi tentar criar o meu framework <a href="https://github.com/LordBluue3/coreon-framework" target="_blank">Coreon framework</a>, mas futuramente vou reescrever tudo do zero e também gosto bastante de estudar sobre o HyperF e swoole.
            </p>
        </div>

        <a href="<?= base_url('blog') ?>" class="btn-blog">
            Acesse meu Blog
        </a>

        <div class="social-links">
            <a href="https://www.linkedin.com/in/mikael-oliveira-345a34209/" target="_blank" rel="noopener noreferrer">LinkedIn</a> •
            <a href="https://github.com/LordBluue3" target="_blank" rel="noopener noreferrer">GitHub</a>
        </div>
    </div>

    <script>
        let thoughtTimeout;
        let clickCount = 0;
        let laserActive = false;
        let laserAnimationFrame;

        function toggleThought() {
            clickCount++;

            const bubble = document.getElementById('thoughtBubble');
            bubble.classList.add('show');

            clearTimeout(thoughtTimeout);
            thoughtTimeout = setTimeout(() => {
                bubble.classList.remove('show');
            }, 3000);

            if (clickCount >= 5 && !laserActive) {
                activateLaser();
            }
        }

        function updateLaserPosition() {
            if (!laserActive) return;

            const eyeLeft = document.getElementById('eyeLeft');
            const eyeRight = document.getElementById('eyeRight');
            const laserLeft = document.getElementById('laserLeft');
            const laserRight = document.getElementById('laserRight');
            const container = document.querySelector('.container');

            const eyeLeftRect = eyeLeft.getBoundingClientRect();
            const eyeRightRect = eyeRight.getBoundingClientRect();
            const containerRect = container.getBoundingClientRect();

            const laserLeftHeight = containerRect.top - eyeLeftRect.bottom;
            const laserRightHeight = containerRect.top - eyeRightRect.bottom;

            laserLeft.style.left = (eyeLeftRect.left + eyeLeftRect.width / 2) + 'px';
            laserLeft.style.top = eyeLeftRect.bottom + 'px';
            laserLeft.style.height = Math.max(0, laserLeftHeight) + 'px';

            laserRight.style.left = (eyeRightRect.left + eyeRightRect.width / 2) + 'px';
            laserRight.style.top = eyeRightRect.bottom + 'px';
            laserRight.style.height = Math.max(0, laserRightHeight) + 'px';

            laserAnimationFrame = requestAnimationFrame(updateLaserPosition);
        }

        function activateLaser() {
            laserActive = true;
            const eyeLeft = document.getElementById('eyeLeft');
            const eyeRight = document.getElementById('eyeRight');
            const laserLeft = document.getElementById('laserLeft');
            const laserRight = document.getElementById('laserRight');

            eyeLeft.classList.add('laser-active');
            eyeRight.classList.add('laser-active');

            laserLeft.classList.add('active');
            laserRight.classList.add('active');

            updateLaserPosition();

            setTimeout(() => {
                burnTexts();
            }, 500);

            setTimeout(() => {
                laserLeft.classList.remove('active');
                laserRight.classList.remove('active');
                eyeLeft.classList.remove('laser-active');
                eyeRight.classList.remove('laser-active');
                laserActive = false;
                clickCount = 0;

                if (laserAnimationFrame) {
                    cancelAnimationFrame(laserAnimationFrame);
                }

                laserLeft.style.height = '0';
                laserRight.style.height = '0';
            }, 3000);
        }

        function burnTexts() {
            const paragraphs = document.querySelectorAll('.about p, h1');
            paragraphs.forEach((p, index) => {
                setTimeout(() => {
                    p.classList.add('burning');
                }, index * 300);
            });

            setTimeout(() => {
                paragraphs.forEach(p => {
                    p.classList.remove('burning');
                    p.style.opacity = '1';
                });
            }, 5000);
        }
    </script>
</body>

</html>