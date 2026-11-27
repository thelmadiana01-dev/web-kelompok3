<?php
$base = ''; $aktif = 'profil'; $judul = 'Profil';
require __DIR__ . '/includes/header.php';
$keluarga = require __DIR__ . '/data/keluarga.php';
?>
<h2 class="judul-bagian">Profil Keluarga</h2>
<div class="grid-profil">
    <?php foreach ($keluarga as $slug => $k): ?>
        <a class="kartu-profil" href="profil/<?= $slug ?>.php">
            <img src="<?= gambar($k['foto'], $k['peran']) ?>" alt="Foto <?= e($k['peran']) ?>">
            <h3><?= e($k['peran']) ?></h3>
            <p><?= e($k['ringkas']) ?></p>
            <span class="read-more">(Lihat profil)</span>
        </a>
    <?php endforeach; ?>
</div>
<?php require __DIR__ . '/includes/footer.php'; ?>
