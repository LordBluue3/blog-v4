<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Página não encontrada</title>

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
            position: relative;
            overflow: hidden;
        }

        .container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            max-width: 600px;
            width: 100%;
            padding: 60px;
            text-align: center;
            position: relative;
            z-index: 2;
        }

        .error-code {
            font-size: 8em;
            font-weight: bold;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 20px;
            line-height: 1;
        }

        h1 {
            color: #333;
            font-size: 2em;
            margin-bottom: 20px;
        }

        p {
            color: #666;
            font-size: 1.2em;
            line-height: 1.6;
            margin-bottom: 40px;
        }

        .btn-home {
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

        .btn-home:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.6);
        }

        /* Gato triste animado */
        .sad-cat {
            position: fixed;
            bottom: 50px;
            animation: walk 20s linear infinite;
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

        .cat {
            width: 80px;
            height: 60px;
            position: relative;
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
            bottom: 20px;
            left: 5px;
            width: 4px;
            height: 25px;
            background: #1a1a1a;
            border-radius: 5px;
            transform: rotate(-20deg);
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
            animation: sadWalk 0.6s ease-in-out infinite;
        }

        .cat-leg.front-right {
            bottom: 0;
            left: 30px;
            animation: sadWalk 0.6s ease-in-out infinite 0.3s;
        }

        .cat-leg.back-left {
            bottom: 0;
            left: 45px;
            animation: sadWalk 0.6s ease-in-out infinite 0.3s;
        }

        .cat-leg.back-right {
            bottom: 0;
            left: 55px;
            animation: sadWalk 0.6s ease-in-out infinite;
        }

        @keyframes sadWalk {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-3px);
            }
        }

        .cat-eye {
            position: absolute;
            width: 4px;
            height: 2px;
            background: #666;
            border-radius: 0%;
            top: 12px;
        }

        .cat-eye.left {
            left: 8px;
        }

        .cat-eye.right {
            right: 8px;
        }

        @media (max-width: 768px) {
            .container {
                padding: 40px 30px;
            }

            .error-code {
                font-size: 5em;
            }

            h1 {
                font-size: 1.5em;
            }

            p {
                font-size: 1em;
            }
        }
    </style>
</head>

<body>
    <div class="sad-cat">
        <div class="cat">
            <div class="cat-tail"></div>
            <div class="cat-body"></div>
            <div class="cat-head">
                <div class="cat-ear left"></div>
                <div class="cat-ear right"></div>
                <div class="cat-eye left"></div>
                <div class="cat-eye right"></div>
            </div>
            <div class="cat-leg front-left"></div>
            <div class="cat-leg front-right"></div>
            <div class="cat-leg back-left"></div>
            <div class="cat-leg back-right"></div>
        </div>
    </div>

    <div class="container">
        <div class="error-code">404</div>
        <h1>Oops! Página não encontrada</h1>
        <p>
            Parece que a página que você está procurando não existe ou foi movida para outro lugar.
            Até o gatinho está triste por não encontrar o que você procura! 😿
        </p>
        <a href="<?= base_url('/') ?>" class="btn-home">
            Voltar para a Home
        </a>
    </div>
</body>

</html>