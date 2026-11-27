<?php
$base = ''; $aktif = 'galeri'; $judul = 'Galeri';
require __DIR__ . '/includes/header.php';
?>
<h2 class="judul-bagian">Galeri Keluarga</h2>
<p class="catatan-kecil">Klik foto untuk memperbesar, lalu geser kiri/kanan (atau pakai tombol panah).</p>
<div class="grid-galeri">
    <?php for ($i = 1; $i <= 16; $i++):
        $nomor = str_pad((string)$i, 2, '0', STR_PAD_LEFT); ?>
        <img src="<?= gambar("assets/img/galeri/foto-$nomor.jpg", "Foto $i") ?>"
             alt="Foto keluarga <?= $i ?>" class="foto-galeri">
    <?php endfor; ?>
</div>

<div id="lightbox" class="lightbox">
    <button class="lb-tutup" id="lb-tutup" aria-label="Tutup">&times;</button>
    <button class="lb-nav lb-kiri" id="lb-kiri" aria-label="Sebelumnya">&#10094;</button>
    <img id="lightbox-img" alt="">
    <button class="lb-nav lb-kanan" id="lb-kanan" aria-label="Berikutnya">&#10095;</button>
    <span id="lb-info" class="lb-info"></span>
</div>
<?php require __DIR__ . '/includes/footer.php'; ?>
