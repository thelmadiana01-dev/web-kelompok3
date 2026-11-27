<?php
/**
 * Halaman Berita (berita.php)
 * Menampilkan 5 kategori berita (masing-masing 5 berita = total 25 file berita .php)
 * dalam tampilan baris-baris yang rapi.
 */
require_once __DIR__ . '/data/berita.php';

$selectedCategory = $_GET['kategori'] ?? 'semua';
$validCategories = array_keys($beritaCategories);
if ($selectedCategory !== 'semua' && !in_array($selectedCategory, $validCategories, true)) {
    $selectedCategory = 'semua';
}

$pageTitle = 'Berita (5 Kategori • 25 Artikel)';
$currentPage = 'berita';

require __DIR__ . '/includes/header.php';
?>

<section class="page-hero page-hero-compact">
    <div class="container">
        <div class="breadcrumb">
            <a href="<?= url('index.php') ?>">Beranda</a>
            <span>/</span>
            <span>Berita</span>
        </div>
        <h1>Berita Berdasarkan Kategori</h1>
        <p>Terdapat 5 kategori (IT, AI, Politik di Indonesia, Pemrograman, dan Lifestyle Keindahan Papua), masing-masing 5 berita — total 25 halaman berita <code>.php</code> dalam tampilan baris-baris.</p>
    </div>
</section>

<section class="container page-section">
    <div class="category-tabs" role="navigation" aria-label="Filter Kategori Berita">
        <a href="<?= url('berita.php') ?>" class="category-tab <?= $selectedCategory === 'semua' ? 'active' : '' ?>">
            Semua Kategori (25)
        </a>
        <?php foreach ($beritaCategories as $slug => $label): ?>
            <a href="<?= url('berita.php?kategori=' . urlencode($slug)) ?>"
               class="category-tab <?= $selectedCategory === $slug ? 'active' : '' ?>">
                <?= e($label) ?> (5)
            </a>
        <?php endforeach; ?>
    </div>

    <?php foreach ($beritaCategories as $slug => $label): ?>
        <?php
        if ($selectedCategory !== 'semua' && $selectedCategory !== $slug) {
            continue;
        }
        $items = get_berita_by_category($slug);
        ?>
        <div class="news-category-block">
            <div class="news-category-heading">
                <h2><?= e($label) ?></h2>
                <span class="badge"><?= count($items) ?> Berita</span>
            </div>

            <div class="news-row-list">
                <?php foreach ($items as $idx => $berita): ?>
                    <a href="<?= url($berita['file']) ?>" class="news-row-item">
                        <div class="news-row-main">
                            <span class="news-row-num"><?= $idx + 1 ?></span>
                            <div>
                                <h3><?= e($berita['judul']) ?></h3>
                                <p><?= e($berita['ringkasan']) ?></p>
                            </div>
                        </div>
                        <div class="news-row-meta">
                            <span><?= e($berita['tanggal']) ?></span>
                            <span class="news-read-more">Baca Berita &rarr;</span>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endforeach; ?>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
