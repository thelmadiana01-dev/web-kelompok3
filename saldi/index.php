<?php
/**
 * Halaman Beranda (index.php) — Halaman terpisah, bukan single-page scroll.
 */
$pageTitle = 'Beranda';
$currentPage = 'beranda';

require_once __DIR__ . '/includes/site_content.php';
$siteContent = get_site_content();

require __DIR__ . '/includes/header.php';
require_once __DIR__ . '/data/galeri.php';
?>

<section class="page-hero">
    <div class="container">
        <span class="badge badge-accent"><?= e($siteContent['home_hero_badge']) ?></span>
        <h1><?= e($siteContent['home_hero_title']) ?></h1>
        <p><?= e($siteContent['home_hero_description']) ?></p>
        <div class="hero-actions">
            <a href="<?= url('profil.php') ?>" class="btn btn-primary"><?= e($siteContent['home_profile_button']) ?></a>
            <a href="<?= url('galeri.php') ?>" class="btn btn-hero-ghost"><?= e($siteContent['home_gallery_button_hero']) ?></a>
        </div>
    </div>
</section>

<section class="container page-section">
    <div class="section-header">
        <div>
            <h2><?= e($siteContent['home_section_title']) ?></h2>
            <p><?= e($siteContent['home_section_description']) ?></p>
        </div>
    </div>

    <div class="grid-3">
        <div class="card feature-card">
            <span class="badge"><?= e($siteContent['home_profile_badge']) ?></span>
            <h3><?= e($siteContent['home_profile_title']) ?></h3>
            <p><?= e($siteContent['home_profile_description']) ?></p>
            <a href="<?= url('profil.php') ?>" class="btn btn-outline"><?= e($siteContent['home_profile_link']) ?></a>
        </div>

        <div class="card feature-card">
            <span class="badge"><?= e($siteContent['home_media_badge']) ?></span>
            <h3><?= e($siteContent['home_media_title']) ?></h3>
            <p><?= e($siteContent['home_media_description']) ?></p>
            <a href="<?= url('audio-video.php') ?>" class="btn btn-outline"><?= e($siteContent['home_media_link']) ?></a>
        </div>

        <div class="card feature-card">
            <span class="badge"><?= e($siteContent['home_gallery_badge']) ?></span>
            <h3><?= e($siteContent['home_gallery_title']) ?></h3>
            <p><?= e($siteContent['home_gallery_description']) ?></p>
            <a href="<?= url('galeri.php') ?>" class="btn btn-outline"><?= e($siteContent['home_gallery_link']) ?></a>
        </div>

        <div class="card feature-card">
            <span class="badge"><?= e($siteContent['home_news_badge']) ?></span>
            <h3><?= e($siteContent['home_news_title']) ?></h3>
            <p><?= e($siteContent['home_news_description']) ?></p>
            <a href="<?= url('berita.php') ?>" class="btn btn-outline"><?= e($siteContent['home_news_link']) ?></a>
        </div>

        <div class="card feature-card">
            <span class="badge"><?= e($siteContent['home_about_badge']) ?></span>
            <h3><?= e($siteContent['home_about_title']) ?></h3>
            <p><?= e($siteContent['home_about_description']) ?></p>
            <a href="<?= url('about.php') ?>" class="btn btn-outline"><?= e($siteContent['home_about_link']) ?></a>
        </div>

        <div class="card feature-card">
            <span class="badge badge-accent"><?= e($siteContent['home_architecture_badge']) ?></span>
            <h3><?= e($siteContent['home_architecture_title']) ?></h3>
            <p><?= e($siteContent['home_architecture_description']) ?></p>
            <a href="<?= url('profil.php?anggota=anak-1') ?>" class="btn btn-outline"><?= e($siteContent['home_architecture_link']) ?></a>
        </div>
    </div>
</section>

<section class="container page-section" style="padding-top: 0;">
    <div class="section-header">
        <div>
            <h2><?= e($siteContent['home_gallery_section_title']) ?></h2>
            <p><?= e($siteContent['home_gallery_section_description']) ?></p>
        </div>
        <a href="<?= url('galeri.php') ?>" class="btn btn-secondary"><?= e($siteContent['home_gallery_button']) ?></a>
    </div>

    <div class="grid-4">
        <?php foreach (array_slice($galeriPhotos, 0, 4) as $foto): ?>
            <a href="<?= url('galeri.php') ?>" class="gallery-card" style="text-decoration: none;">
                <div class="gallery-thumb-wrap">
                    <img src="<?= url($foto['src']) ?>" alt="<?= e($foto['judul']) ?>" loading="lazy">
                    <span class="gallery-num">#<?= $foto['id'] ?></span>
                </div>
                <div class="gallery-meta">
                    <h3><?= e($foto['judul']) ?></h3>
                    <small><?= e($foto['tahun']) ?></small>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
