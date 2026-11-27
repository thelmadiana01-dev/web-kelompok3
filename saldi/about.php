<?php
/**
 * Halaman About (about.php)
 */
$pageTitle = 'About';
$currentPage = 'about';

require_once __DIR__ . '/includes/site_content.php';
$siteContent = get_site_content();

require __DIR__ . '/includes/header.php';
?>

<section class="page-hero page-hero-compact">
    <div class="container">
        <div class="breadcrumb">
            <a href="<?= url('index.php') ?>">Beranda</a>
            <span>/</span>
            <span>About</span>
        </div>
        <h1><?= e($siteContent['about_hero_title']) ?></h1>
        <p><?= e($siteContent['about_hero_description']) ?></p>
    </div>
</section>

<section class="container page-section">
    <div class="grid-2">
        <div class="card">
            <span class="badge"><?= e($siteContent['about_identity_badge']) ?></span>
            <h2 style="margin-top: 0.75rem;"><?= e($siteContent['about_identity_title']) ?></h2>
            <p><?= e($siteContent['about_identity_body']) ?></p>
            <ul style="padding-left: 1.2rem; color: var(--text-muted);">
                <li><strong><?= e($siteContent['about_architecture_label']) ?>:</strong> <?= e($siteContent['about_architecture']) ?></li>
                <li><strong><?= e($siteContent['about_modularity_label']) ?>:</strong> <?= e($siteContent['about_modularity']) ?></li>
                <li><strong><?= e($siteContent['about_extension_label']) ?>:</strong> <?= e($siteContent['about_extension']) ?></li>
            </ul>
        </div>

        <div class="card">
            <span class="badge badge-accent"><?= e($siteContent['about_features_badge']) ?></span>
            <h2 style="margin-top: 0.75rem;"><?= e($siteContent['about_features_title']) ?></h2>
            <ul style="padding-left: 1.2rem; color: var(--text-muted); line-height: 1.85;">
                <li><strong><?= e($siteContent['about_feature_home_label']) ?>:</strong> <?= e($siteContent['about_feature_home']) ?></li>
                <li><strong><?= e($siteContent['about_feature_profile_label']) ?>:</strong> <?= e($siteContent['about_feature_profile']) ?></li>
                <li><strong><?= e($siteContent['about_feature_media_label']) ?>:</strong> <?= e($siteContent['about_feature_media']) ?></li>
                <li><strong><?= e($siteContent['about_feature_gallery_label']) ?>:</strong> <?= e($siteContent['about_feature_gallery']) ?></li>
                <li><strong><?= e($siteContent['about_feature_news_label']) ?>:</strong> <?= e($siteContent['about_feature_news']) ?></li>
                <li><strong><?= e($siteContent['about_feature_about_label']) ?>:</strong> <?= e($siteContent['about_feature_about']) ?></li>
            </ul>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
