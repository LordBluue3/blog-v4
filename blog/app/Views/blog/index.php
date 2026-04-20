<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Blog • Mikael</title>
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
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-content h1 {
            font-size: 2em;
        }

        .btn-home {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            padding: 10px 25px;
            text-decoration: none;
            border-radius: 25px;
            transition: all 0.3s ease;
            border: 2px solid white;
        }

        .btn-home:hover {
            background: white;
            color: #667eea;
        }

        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .blog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .blog-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .blog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .blog-card-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .blog-card-content {
            padding: 25px;
        }

        .blog-card-date {
            color: #667eea;
            font-size: 0.9em;
            margin-bottom: 10px;
        }

        .blog-card h2 {
            color: #333;
            font-size: 1.5em;
            margin-bottom: 15px;
        }

        .blog-card p {
            color: #666;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .read-more {
            color: #667eea;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .read-more:hover {
            color: #764ba2;
        }

        .no-posts {
            text-align: center;
            padding: 60px 20px;
            color: #999;
        }

        .no-posts h2 {
            font-size: 2em;
            margin-bottom: 15px;
        }

        .no-posts code {
            background: #f0f0f0;
            padding: 2px 8px;
            border-radius: 4px;
            font-family: monospace;
            color: #667eea;
        }

        @media (max-width: 768px) {
            .blog-grid {
                grid-template-columns: 1fr;
            }

            .header-content {
                flex-direction: column;
                gap: 20px;
                text-align: center;
            }

            .header-content h1 {
                font-size: 1.5em;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="header-content">
            <h1>Meu Blog</h1>
            <a href="<?= base_url('/') ?>" class="btn-home">Voltar para Home</a>
        </div>
    </header>

    <div class="container">
        <?php if (empty($posts)): ?>
            <div class="no-posts">
                <h2>Nenhum post encontrado</h2>
                <p>Adicione arquivos .md na pasta <code>writable/posts/</code> para começar!</p>
            </div>
        <?php else: ?>
            <div class="blog-grid">
                <?php foreach ($posts as $post): ?>
                    <article class="blog-card">
                        <img src="<?= esc($post['image']) ?>" alt="<?= esc($post['title']) ?>" class="blog-card-image">
                        <div class="blog-card-content">
                            <div class="blog-card-date"><?= $parser->formatDate($post['date']) ?></div>
                            <h2><?= esc($post['title']) ?></h2>
                            <p><?= esc($post['excerpt']) ?></p>
                            <a href="<?= base_url('blog/' . $post['slug']) ?>" class="read-more">Ler mais →</a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</body>

</html>