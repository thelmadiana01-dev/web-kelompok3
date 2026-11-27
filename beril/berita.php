<?php
$base = ''; $aktif = 'berita'; $judul = 'Berita';
require __DIR__ . '/includes/header.php';

$semua    = require __DIR__ . '/data/berita.php';
$kategori = ['IT', 'AI', 'Politik', 'Pemrograman', 'Lifestyle'];
$kat = $_GET['kat'] ?? '';
if (!in_array($kat, $kategori, true)) { $kat = ''; }
?>
<h2 class="judul-bagian">Berita</h2>
<div class="tab-kategori">
    <a href="berita.php" class="<?= $kat === '' ? 'aktif' : '' ?>">Semua (<?= count($semua) ?>)</a>
    <?php foreach ($kategori as $k): ?>
        <a href="berita.php?kat=<?= urlencode($k) ?>" class="<?= $kat === $k ? 'aktif' : '' ?>"><?= e($k) ?></a>
    <?php endforeach; ?>
</div>

<?php foreach ($semua as $b): ?>
    <?php if ($kat === '' || $b['kategori'] === $kat): ?>
        <?php include __DIR__ . '/includes/kartu-berita.php'; ?>
    <?php endif; ?>
<?php endforeach; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
