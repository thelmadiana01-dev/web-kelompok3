<?php $nav_keluarga = require __DIR__ . '/../data/keluarga.php'; // nama variabel khusus navbar agar tidak menimpa variabel halaman ?>
<nav class="navbar">
    <div class="container">
        <a href="<?= $base ?>index.php" class="<?= $aktif === 'beranda' ? 'aktif' : '' ?>">Beranda</a>

        <div class="dropdown">
            <a href="<?= $base ?>profil.php" class="<?= $aktif === 'profil' ? 'aktif' : '' ?>">Profil &#9662;</a>
            <div class="dropdown-isi">
                <?php foreach ($nav_keluarga as $nav_slug => $nav_k): ?>
                    <a href="<?= $base ?>profil/<?= $nav_slug ?>.php"><?= e($nav_k['peran']) ?></a>
                <?php endforeach; ?>
            </div>
        </div>

        <a href="<?= $base ?>audio-video.php" class="<?= $aktif === 'audio-video' ? 'aktif' : '' ?>">Audio Video</a>
        <a href="<?= $base ?>galeri.php" class="<?= $aktif === 'galeri' ? 'aktif' : '' ?>">Galeri</a>
        <a href="<?= $base ?>berita.php" class="<?= $aktif === 'berita' ? 'aktif' : '' ?>">Berita</a>
        <a href="<?= $base ?>about.php" class="<?= $aktif === 'about' ? 'aktif' : '' ?>">About</a>
    </div>
</nav>
