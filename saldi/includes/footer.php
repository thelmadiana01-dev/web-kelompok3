<?php
/**
 * Footer modular untuk semua halaman PHP.
 */
?>
</main>

<footer class="site-footer">
    <div class="container footer-grid">
        <div class="footer-brand">
            <div class="brand-inline">
                <span class="brand-mark">S</span>
                <strong><?= e($siteConfig['site_name']) ?></strong>
            </div>
            <p>Website profil pribadi &amp; keluarga berbasis PHP modular (multi-halaman). Dibuat untuk memenuhi tugas mata kuliah <?= e($siteConfig['course']) ?>.</p>
        </div>

        <div class="footer-links">
            <h4>Navigasi</h4>
            <ul>
                <li><a href="<?= url('index.php') ?>">Beranda</a></li>
                <li><a href="<?= url('profil.php') ?>">Profil Keluarga</a></li>
                <li><a href="<?= url('audio-video.php') ?>">Audio Video</a></li>
                <li><a href="<?= url('galeri.php') ?>">Galeri (16 Foto)</a></li>
                <li><a href="<?= url('berita.php') ?>">Berita (5 Kategori)</a></li>
                <li><a href="<?= url('about.php') ?>">About</a></li>
                <li><a href="<?= url('kelola.php') ?>">Kelola Konten &amp; Upload</a></li>
            </ul>
        </div>

        <div class="footer-meta">
            <h4>Informasi Tugas</h4>
            <p>Penyusun: <strong><?= e($siteConfig['author']) ?></strong></p>
            <p>Arsitektur: Modular PHP (.php)</p>
            <p>&copy; <?= e($siteConfig['year']) ?> <?= e($siteConfig['site_name']) ?>. Seluruh hak cipta dilindungi.</p>
        </div>
    </div>
</footer>

<script src="<?= url('assets/js/main.js') ?>"></script>
</body>
</html>
