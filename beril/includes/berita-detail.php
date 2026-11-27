<?php
// Template halaman satu berita. File berita/xxx.php cukup mengisi $id lalu memanggil file ini.
$semua = require __DIR__ . '/../data/berita.php';
$b = $semua[$id];
$base  = '../';
$aktif = 'berita';
$judul = $b['judul'];
require __DIR__ . '/header.php';
?>
<article class="detail-berita">
    <a href="../berita.php?kat=<?= urlencode($b['kategori']) ?>">&larr; Kembali ke berita</a><br>
    <span class="kategori"><?= e($b['kategori']) ?></span>
    <h2><?= e($b['judul']) ?></h2>
    <small><?= e($b['tanggal']) ?></small>
    <img src="<?= gambar($b['gambar'], 'Foto Berita') ?>" alt="<?= e($b['judul']) ?>">
    <p><?= nl2br(e($b['isi'])) ?></p>

    <p class="sumber">
        <strong>Sumber:</strong>
        <?php if ($b['sumber'] !== ''): ?>
            <a href="<?= e($b['sumber']) ?>" target="_blank" rel="noopener"><?= e($b['sumber']) ?></a>
        <?php else: ?>
            <span class="catatan">(isi link sumber berita di data/berita.php)</span>
        <?php endif; ?>
    </p>
</article>
<?php require __DIR__ . '/footer.php'; ?>
