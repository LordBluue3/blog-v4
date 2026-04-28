<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog • Mikael Oliveira</title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Artigos e tutoriais sobre desenvolvimento web, PHP, Laravel, CodeIgniter, React e boas práticas de programação.">
    <meta name="keywords" content="blog programação, tutoriais php, laravel, codeigniter, react, desenvolvimento web, artigos tecnologia">
    <meta name="author" content="Mikael Oliveira">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?= base_url('blog') ?>">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Blog • Mikael Oliveira - Artigos sobre Desenvolvimento Web">
    <meta property="og:description" content="Artigos e tutoriais sobre desenvolvimento web, PHP, Laravel, CodeIgniter, React e boas práticas de programação.">
    <meta property="og:type" content="blog">
    <meta property="og:url" content="<?= base_url('blog') ?>">
    <meta property="og:locale" content="pt_BR">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Blog • Mikael Oliveira">
    <meta name="twitter:description" content="Artigos e tutoriais sobre desenvolvimento web e programação.">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?= base_url('favicon.png') ?>">
    <link rel="apple-touch-icon" href="<?= base_url('favicon.png') ?>">
    
    <link rel="stylesheet" href="<?= base_url('css/blog.css') ?>">
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