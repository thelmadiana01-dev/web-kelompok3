<?php
/**
 * Halaman Audio Video (audio-video.php)
 * Bagian atas: Video perkenalan diri (landscape, kamera belakang HP, durasi 3 menit).
 * Bagian bawah: Daftar audio lagu-lagu pilihan yang layak didengar.
 */
require_once __DIR__ . '/data/media.php';

$pageTitle = 'Audio Video';
$currentPage = 'audio-video';

require __DIR__ . '/includes/header.php';
$videoExists = file_exists(__DIR__ . '/' . $videoPerkenalan['src']);
?>

<section class="page-hero page-hero-compact">
    <div class="container">
        <div class="breadcrumb">
            <a href="<?= url('index.php') ?>">Beranda</a>
            <span>/</span>
            <span>Audio Video</span>
        </div>
        <h1>Audio &amp; Video</h1>
        <p>Video perkenalan diri pribadi berorientasi landscape (3 menit) dan koleksi audio lagu pilihan.</p>
    </div>
</section>

<section class="container page-section">
    <div class="card" style="margin-bottom: 2rem;">
        <div class="section-header" style="margin-bottom: 1rem;">
            <div>
                <span class="badge"><?= e($videoPerkenalan['orientasi']) ?></span>
                <h2 style="margin-top: 0.5rem;"><?= e($videoPerkenalan['judul']) ?></h2>
                <p><?= e($videoPerkenalan['deskripsi']) ?></p>
            </div>
            <span class="badge badge-accent">Durasi: <?= e($videoPerkenalan['durasi']) ?></span>
        </div>

        <div class="video-frame">
            <video controls preload="metadata" poster="<?= url('assets/images/galeri/foto-04.svg') ?>">
                <source src="<?= url($videoPerkenalan['src']) ?>" type="video/mp4">
                Browser Anda tidak mendukung pemutaran video HTML5.
            </video>
        </div>

        <?php if (!$videoExists): ?>
            <div class="notice-box" style="margin-top: 1rem; margin-bottom: 0;">
                <strong>File Video Belum Ditempatkan:</strong> Simpan rekaman video perkenalan diri Anda (orientasi <em>landscape</em>, kamera belakang HP, durasi ~3 menit)
                sebagai <code><?= e($videoPerkenalan['src']) ?></code> agar pemutar video di atas langsung memutarnya.
            </div>
        <?php endif; ?>
    </div>

    <div class="section-header">
        <div>
            <h2>Daftar Audio / Lagu Pilihan</h2>
            <p>Lagu-lagu pilihan yang santai dan nyaman didengarkan saat belajar atau bersantai.</p>
        </div>
        <a href="<?= url('kelola.php?tab=media') ?>" class="btn btn-outline">Edit / Upload Video &amp; Lagu</a>
    </div>

    <div class="audio-list">
        <?php foreach ($audioPlaylist as $track): ?>
            <?php $audioExists = file_exists(__DIR__ . '/' . $track['src']); ?>
            <div class="audio-item">
                <div class="audio-info">
                    <span class="badge"><?= e($track['genre']) ?></span>
                    <h3 style="margin-top: 0.4rem;"><?= $track['id'] ?>. <?= e($track['judul']) ?> — <?= e($track['artis']) ?></h3>
                    <p><?= e($track['catatan']) ?> (Durasi: <?= e($track['durasi']) ?>)</p>
                    <?php if (!$audioExists): ?>
                        <small style="color: #b45309;">Letakkan file MP3 di <code><?= e($track['src']) ?></code> untuk memutar.</small>
                    <?php endif; ?>
                </div>
                <div class="audio-player-wrap">
                    <audio controls preload="none">
                        <source src="<?= url($track['src']) ?>" type="audio/mpeg">
                        Browser Anda tidak mendukung pemutar audio HTML5.
                    </audio>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
