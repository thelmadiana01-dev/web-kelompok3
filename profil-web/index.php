<?php
$base = ''; $aktif = 'beranda'; $judul = 'Beranda';
require __DIR__ . '/includes/header.php';
$berita = require __DIR__ . '/data/berita.php';
?>
<section class="hero">
    <h2>Selamat Datang</h2>
    <p>Halo, saya Beril azura aurelya. Ini adalah website profil keluarga saya yang dibuat
       sebagai tugas mata kuliah. </p>
</section>

<h2 class="judul-bagian">Berita Terbaru</h2>
<?php foreach (array_slice($berita, 0, 3) as $b): ?>
    <?php include __DIR__ . '/includes/kartu-berita.php'; ?>
<?php endforeach; ?>
<p><a class="tombol" href="berita.php">Lihat semua berita</a></p>
<?php require __DIR__ . '/includes/footer.php'; ?>
