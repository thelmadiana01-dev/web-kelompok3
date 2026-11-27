<?php
$base = ''; $aktif = 'audio-video'; $judul = 'Audio Video';
require __DIR__ . '/includes/header.php';

// Otomatis: video pertama di assets/video/ dan semua lagu di assets/audio/
$videos = daftar_file('assets/video', ['mp4', 'webm', 'm4v', 'ogv']);
$lagu   = daftar_file('assets/audio', ['mp3', 'm4a', 'wav', 'ogg', 'aac']);

function judul_dari_file(string $path): string
{
    return ucwords(trim(str_replace(['_', '-'], ' ', pathinfo($path, PATHINFO_FILENAME))));
}
?>
<h2 class="judul-bagian">Video Perkenalan Diri</h2>
<div class="kotak">
    <?php if ($videos): ?>
        <video controls preload="metadata" src="<?= e($videos[0]) ?>"></video>
    <?php else: ?>
        <div class="video-kosong">Video perkenalan diri (landscape, 3 menit)</div>
        <p class="catatan">Taruh file video (.mp4) di folder <code>assets/video/</code></p>
    <?php endif; ?>
</div>

<h2 class="judul-bagian">Audio</h2>
<p>Lagu-lagu kesukaan saya:</p>
<?php if ($lagu): ?>
    <?php foreach ($lagu as $l): ?>
        <div class="kotak">
            <strong><?= e(judul_dari_file($l)) ?></strong>
            <audio controls preload="none" src="<?= e($l) ?>"></audio>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <div class="kotak"><p class="catatan">Taruh file lagu (.mp3) di folder <code>assets/audio/</code></p></div>
<?php endif; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
