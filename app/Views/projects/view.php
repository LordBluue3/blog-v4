<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($project['title']) ?> • Projetos Mikael Oliveira</title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="<?= esc($project['description']) ?>">
    <meta name="keywords" content="<?= esc($project['title']) ?>, <?= esc(implode(', ', $project['stack'])) ?>, projeto github">
    <meta name="author" content="Mikael Oliveira">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?= base_url('projects/' . $project['slug']) ?>">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?= esc($project['title']) ?>">
    <meta property="og:description" content="<?= esc($project['description']) ?>">
    <meta property="og:type" content="article">
    <meta property="og:url" content="<?= base_url('projects/' . $project['slug']) ?>">
    <meta property="og:image" content="<?= esc($project['image']) ?>">
    <meta property="og:locale" content="pt_BR">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= esc($project['title']) ?>">
    <meta name="twitter:description" content="<?= esc($project['description']) ?>">
    <meta name="twitter:image" content="<?= esc($project['image']) ?>">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?= base_url('favicon.png') ?>">
    <link rel="apple-touch-icon" href="<?= base_url('favicon.png') ?>">
    
    <link rel="stylesheet" href="<?= base_url('css/project-view.css') ?>">
</head>

<body>
    <header>
        <div class="header-content">
            <h1>Meus Projetos</h1>
            <a href="<?= base_url('projects') ?>" class="btn-back">← Voltar para Projetos</a>
        </div>
    </header>

    <div class="container">
        <article class="project-header">
            <img src="<?= esc($project['image']) ?>" alt="<?= esc($project['title']) ?>" class="project-image">
            <div class="project-meta">
                <h1 class="project-title"><?= esc($project['title']) ?></h1>
                
                <div class="project-info-tags">
                    <span class="project-type-tag <?= $project['type'] ?>">
                        <?php if ($project['type'] === 'commercial'): ?>
                            Projeto Comercial
                        <?php else: ?>
                            Projeto Pessoal
                        <?php endif; ?>
                    </span>
                    
                    <?php if (!empty($project['company']) && $project['type'] === 'commercial'): ?>
                        <span class="company-tag"><?= esc($project['company']) ?></span>
                    <?php endif; ?>
                </div>
                
                <p class="project-description-full"><?= esc($project['description']) ?></p>
                
                <?php if (!empty($project['stack'])): ?>
                    <div class="tech-stack">
                        <?php foreach ($project['stack'] as $tech): ?>
                            <span class="tech-badge" title="<?= esc($tech) ?>">
                                <span class="tech-icon"><?= $parser->getTechIcon($tech) ?></span>
                                <?= esc($tech) ?>
                            </span>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                
                <div class="project-links">
                    <?php if (!empty($project['github'])): ?>
                        <a href="<?= esc($project['github']) ?>" target="_blank" rel="noopener noreferrer" class="btn-github">
                            <svg width="20" height="20" viewBox="0 0 16 16" fill="currentColor">
                                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"/>
                            </svg>
                            Ver no GitHub
                        </a>
                    <?php endif; ?>
                    
                    <?php if (!empty($project['demo'])): ?>
                        <a href="<?= esc($project['demo']) ?>" target="_blank" rel="noopener noreferrer" class="btn-demo">
                            Ver Demo
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </article>

        <div class="project-content">
            <?= $project['content'] ?>
        </div>
    </div>
</body>

</html>
