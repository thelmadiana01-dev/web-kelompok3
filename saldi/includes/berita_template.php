<?php
/**
 * Template modular untuk halaman detail berita (digunakan oleh 25 file berita/*.php).
 */
require_once __DIR__ . '/../data/berita.php';

function render_berita_page(string $beritaId): void
{
    global $basePath;
    $basePath = '../';

    $article = get_berita_by_id($beritaId);
    if (!$article) {
        http_response_code(404);
        $pageTitle = 'Berita Tidak Ditemukan';
        $currentPage = 'berita';
        require __DIR__ . '/header.php';
        echo '<section class="container page-section"><div class="card"><h1>Berita tidak ditemukan</h1><p><a href="../berita.php">Kembali ke daftar berita</a></p></div></section>';
        require __DIR__ . '/footer.php';
        return;
    }

    $pageTitle = $article['judul'];
    $currentPage = 'berita';
    $relatedList = get_berita_by_category($article['kategori_slug']);

    require __DIR__ . '/header.php';
    ?>
    <section class="page-hero page-hero-compact">
        <div class="container">
            <div class="breadcrumb">
                <a href="<?= url('index.php') ?>">Beranda</a>
                <span>/</span>
                <a href="<?= url('berita.php?kategori=' . urlencode($article['kategori_slug'])) ?>">Berita <?= e($article['kategori']) ?></a>
                <span>/</span>
                <span>Detail</span>
            </div>
            <span class="badge"><?= e($article['kategori']) ?></span>
            <h1 class="article-title"><?= e($article['judul']) ?></h1>
            <div class="article-meta">
                <span>Tanggal: <?= e($article['tanggal']) ?></span>
                <span>•</span>
                <span>Kategori: <?= e($article['kategori']) ?></span>
            </div>
        </div>
    </section>

    <section class="container page-section">
        <div class="article-layout">
            <article class="card article-body">
                <p class="article-lead"><?= e($article['ringkasan']) ?></p>
                <hr class="divider">
                <?php foreach ($article['isi'] as $paragraf): ?>
                    <p><?= e($paragraf) ?></p>
                <?php endforeach; ?>

                <div class="article-source">
                    <strong>Sumber:</strong>
                    <a href="<?= e($article['sumber_url']) ?>" target="_blank" rel="noopener noreferrer">
                        <?= e($article['sumber_url']) ?>
                    </a>
                </div>

                <div class="article-actions">
                    <a href="<?= url('berita.php?kategori=' . urlencode($article['kategori_slug'])) ?>" class="btn btn-secondary">
                        &larr; Kembali ke Daftar Berita <?= e($article['kategori']) ?>
                    </a>
                    <a href="<?= url('berita.php') ?>" class="btn btn-outline">Semua Kategori</a>
                </div>
            </article>

            <aside class="article-sidebar">
                <div class="card">
                    <h3>Berita Lainnya di <?= e($article['kategori']) ?></h3>
                    <ul class="sidebar-news-list">
                        <?php foreach ($relatedList as $item): ?>
                            <li>
                                <a href="<?= url($item['file']) ?>" class="<?= $item['id'] === $article['id'] ? 'active' : '' ?>">
                                    <span class="news-row-title"><?= e($item['judul']) ?></span>
                                    <small><?= e($item['tanggal']) ?></small>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </aside>
        </div>
    </section>
    <?php
    require __DIR__ . '/footer.php';
}
