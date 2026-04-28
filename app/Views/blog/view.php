<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($post['title']) ?> • Blog Mikael Oliveira</title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="<?= esc($post['excerpt']) ?>">
    <meta name="keywords" content="<?= esc($post['title']) ?>, desenvolvimento web, programação, php, blog tecnologia">
    <meta name="author" content="<?= esc($post['author']) ?>">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?= base_url('blog/' . $post['slug']) ?>">
    <meta name="article:published_time" content="<?= date('c', strtotime($post['date'])) ?>">
    <meta name="article:author" content="<?= esc($post['author']) ?>">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?= esc($post['title']) ?>">
    <meta property="og:description" content="<?= esc($post['excerpt']) ?>">
    <meta property="og:type" content="article">
    <meta property="og:url" content="<?= base_url('blog/' . $post['slug']) ?>">
    <meta property="og:image" content="<?= esc($post['image']) ?>">
    <meta property="og:locale" content="pt_BR">
    <meta property="article:published_time" content="<?= date('c', strtotime($post['date'])) ?>">
    <meta property="article:author" content="<?= esc($post['author']) ?>">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= esc($post['title']) ?>">
    <meta name="twitter:description" content="<?= esc($post['excerpt']) ?>">
    <meta name="twitter:image" content="<?= esc($post['image']) ?>">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?= base_url('favicon.png') ?>">
    <link rel="apple-touch-icon" href="<?= base_url('favicon.png') ?>">
    
    <link rel="stylesheet" href="<?= base_url('css/post.css') ?>">
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