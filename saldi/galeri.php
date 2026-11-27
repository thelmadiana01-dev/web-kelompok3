<?php
/**
 * Halaman Galeri (galeri.php)
 * Menampilkan 16 foto pribadi & keluarga (seragam landscape, non-selfie).
 * Saat foto diklik, muncul lightbox ala galeri HP yang bisa klik kanan/kiri dan swipe.
 */
require_once __DIR__ . '/data/galeri.php';

$pageTitle = 'Galeri (16 Foto)';
$currentPage = 'galeri';

require __DIR__ . '/includes/header.php';
?>

<section class="page-hero page-hero-compact">
    <div class="container">
        <div class="breadcrumb">
            <a href="<?= url('index.php') ?>">Beranda</a>
            <span>/</span>
            <span>Galeri</span>
        </div>
        <h1>Galeri Foto Pribadi &amp; Keluarga</h1>
        <p>16 foto berorientasi landscape secara seragam (non-selfie). Klik foto mana saja untuk membuka tampilan galeri HP (klik kiri/kanan atau geser/swipe).</p>
    </div>
</section>

<section class="container page-section">
    <div class="notice-box" style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 1rem;">
        <div>
            <strong>Ingin menambah atau mengganti foto?</strong> Anda dapat langsung mengunggah foto baru dan mengedit keterangannya lewat halaman Kelola Galeri.
        </div>
        <a href="<?= url('kelola.php?tab=galeri') ?>" class="btn btn-primary">+ Tambah / Upload Foto</a>
    </div>

    <div class="gallery-grid">
        <?php foreach ($galeriPhotos as $foto): ?>
            <button type="button"
                    class="gallery-card"
                    data-src="<?= url($foto['src']) ?>"
                    data-title="<?= e($foto['judul']) ?>"
                    data-caption="<?= e($foto['caption']) ?> (<?= e($foto['tahun']) ?>)"
                    aria-label="Lihat foto <?= $foto['id'] ?>: <?= e($foto['judul']) ?>">
                <div class="gallery-thumb-wrap">
                    <img src="<?= url($foto['src']) ?>" alt="<?= e($foto['judul']) ?>" loading="lazy">
                    <span class="gallery-num"><?= $foto['id'] ?> / 16</span>
                </div>
                <div class="gallery-meta">
                    <h3><?= e($foto['judul']) ?></h3>
                    <small><?= e($foto['tahun']) ?> • Klik untuk perbesar</small>
                </div>
            </button>
        <?php endforeach; ?>
    </div>
</section>

<!-- Lightbox Modal ala Galeri HP -->
<div class="lightbox" id="galleryLightbox" aria-hidden="true" role="dialog" aria-label="Penampil Galeri Foto">
    <div class="lightbox-topbar">
        <span class="lightbox-counter" id="lightboxCounter">1 / 16</span>
        <button type="button" class="lightbox-close" id="lightboxClose" aria-label="Tutup galeri">&times;</button>
    </div>

    <div class="lightbox-stage" id="lightboxStage">
        <button type="button" class="lightbox-nav lightbox-prev" id="lightboxPrev" aria-label="Foto sebelumnya">&#10094;</button>
        <img src="" alt="" id="lightboxImage">
        <button type="button" class="lightbox-nav lightbox-next" id="lightboxNext" aria-label="Foto berikutnya">&#10095;</button>
    </div>

    <div class="lightbox-caption">
        <h4 id="lightboxTitle"></h4>
        <p id="lightboxCaption"></p>
    </div>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
