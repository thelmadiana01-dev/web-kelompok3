<?php
// Template halaman profil satu anggota keluarga. File profil/xxx.php mengisi $slug.
$keluarga = require __DIR__ . '/../data/keluarga.php';
$k = $keluarga[$slug];
$base  = '../';
$aktif = 'profil';
$judul = 'Profil ' . $k['peran'];
require __DIR__ . '/header.php';
?>
<h2 class="judul-bagian">Profil <?= e($k['peran']) ?></h2>
<div class="profil-detail">
    <img src="<?= gambar($k['foto'], $k['peran']) ?>" alt="Foto <?= e($k['peran']) ?>">
    <table class="tabel-data">
        <?php foreach ($k['data'] as $label => $isi): ?>
            <tr><th><?= e($label) ?></th><td><?= e($isi) ?></td></tr>
        <?php endforeach; ?>
    </table>
</div>
<p><a href="../profil.php">&larr; Kembali ke daftar profil</a></p>
<?php require __DIR__ . '/footer.php'; ?>
