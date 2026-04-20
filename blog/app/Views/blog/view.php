<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($post['title']) ?> | Meu Blog</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f5f5f5;
            line-height: 1.6;
        }

        header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .header-content {
            max-width: 900px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-content h1 {
            font-size: 1.5em;
        }

        .btn-back {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            padding: 10px 25px;
            text-decoration: none;
            border-radius: 25px;
            transition: all 0.3s ease;
            border: 2px solid white;
        }

        .btn-back:hover {
            background: white;
            color: #667eea;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .post-header {
            background: white;
            border-radius: 10px 10px 0 0;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .post-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        .post-meta {
            padding: 30px;
            border-bottom: 1px solid #eee;
        }

        .post-title {
            font-size: 2.5em;
            color: #333;
            margin-bottom: 15px;
            line-height: 1.2;
        }

        .post-info {
            color: #667eea;
            font-size: 1em;
        }

        .post-content {
            background: white;
            padding: 40px;
            border-radius: 0 0 10px 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            color: #333;
        }

        .post-content h1 {
            font-size: 2em;
            color: #333;
            margin-top: 30px;
            margin-bottom: 15px;
        }

        .post-content h2 {
            font-size: 1.7em;
            color: #444;
            margin-top: 30px;
            margin-bottom: 15px;
            border-bottom: 2px solid #667eea;
            padding-bottom: 10px;
        }

        .post-content h3 {
            font-size: 1.4em;
            color: #555;
            margin-top: 25px;
            margin-bottom: 12px;
        }

        .post-content p {
            margin-bottom: 20px;
            line-height: 1.8;
            font-size: 1.1em;
        }

        .post-content ul,
        .post-content ol {
            margin-bottom: 20px;
            padding-left: 30px;
        }

        .post-content li {
            margin-bottom: 10px;
            line-height: 1.6;
        }

        .post-content code {
            background: #f4f4f4;
            padding: 2px 6px;
            border-radius: 3px;
            font-family: 'Courier New', monospace;
            color: #e83e8c;
            font-size: 0.9em;
        }

        .post-content pre {
            background: #2d2d2d;
            color: #f8f8f2;
            padding: 20px;
            border-radius: 8px;
            overflow-x: auto;
            margin-bottom: 20px;
        }

        .post-content pre code {
            background: none;
            color: #f8f8f2;
            padding: 0;
        }

        .post-content blockquote {
            border-left: 4px solid #667eea;
            padding-left: 20px;
            margin: 20px 0;
            color: #666;
            font-style: italic;
        }

        .post-content img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin: 20px 0;
        }

        .post-content a {
            color: #667eea;
            text-decoration: none;
            border-bottom: 1px solid #667eea;
        }

        .post-content a:hover {
            color: #764ba2;
            border-bottom-color: #764ba2;
        }

        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 20px;
                text-align: center;
            }

            .post-title {
                font-size: 1.8em;
            }

            .post-image {
                height: 250px;
            }

            .post-meta,
            .post-content {
                padding: 25px;
            }

            .post-content h1 {
                font-size: 1.6em;
            }

            .post-content h2 {
                font-size: 1.4em;
            }

            .post-content h3 {
                font-size: 1.2em;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="header-content">
            <h1>Meu Blog</h1>
            <a href="<?= base_url('blog') ?>" class="btn-back">← Voltar para o Blog</a>
        </div>
    </header>

    <div class="container">
        <article class="post-header">
            <img src="<?= esc($post['image']) ?>" alt="<?= esc($post['title']) ?>" class="post-image">
            <div class="post-meta">
                <h1 class="post-title"><?= esc($post['title']) ?></h1>
                <div class="post-info">
                    Por <?= esc($post['author']) ?> • <?= $parser->formatDate($post['date']) ?>
                </div>
            </div>
        </article>

        <div class="post-content">
            <?= $post['content'] ?>
        </div>
    </div>
</body>

</html>