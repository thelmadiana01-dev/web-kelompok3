<?php
/**
 * Navbar modular untuk halaman utama dan pengelolaan konten.
 */
require_once __DIR__ . '/../data/keluarga.php';

$currentPage = $currentPage ?? 'beranda';
$activeMember = $activeMember ?? '';
?>
<header class="site-header">
    <div class="container nav-container">
        <a href="<?= url('index.php') ?>" class="brand">
            <span class="brand-mark">S</span>
            <span class="brand-text">
                <strong><?= e($siteConfig['site_name']) ?></strong>
                <small><?= e($siteConfig['tagline']) ?></small>
            </span>
        </a>

        <button class="nav-toggle" id="navToggle" aria-label="Buka menu navigasi" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>

        <nav class="main-nav" id="mainNav" aria-label="Navigasi Utama">
            <ul class="nav-list">
                <li>
                    <a href="<?= url('index.php') ?>" class="nav-link <?= is_active('beranda', $currentPage) ?>">Beranda</a>
                </li>

                <li class="nav-dropdown">
                    <a href="<?= url('profil.php') ?>" class="nav-link <?= is_active('profil', $currentPage) ?>">
                        Profil <span class="caret" aria-hidden="true">▾</span>
                    </a>
                    <ul class="dropdown-menu" aria-label="Sub-menu Profil Keluarga">
                        <li class="dropdown-header">Sub-menu Keluarga (6 Anggota)</li>
                        <?php foreach ($keluargaList as $slug => $anggota): ?>
                            <li>
                                <a href="<?= url('profil.php?anggota=' . urlencode($slug)) ?>"
                                   class="dropdown-item <?= ($currentPage === 'profil' && $activeMember === $slug) ? 'active' : '' ?>">
                                    <span class="dropdown-role"><?= e($anggota['urutan']) ?></span>
                                    <span class="dropdown-name"><?= e($anggota['nama']) ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>

                <li>
                    <a href="<?= url('audio-video.php') ?>" class="nav-link <?= is_active('audio-video', $currentPage) ?>">Audio Video</a>
                </li>
                <li>
                    <a href="<?= url('galeri.php') ?>" class="nav-link <?= is_active('galeri', $currentPage) ?>">Galeri</a>
                </li>
                <li>
                    <a href="<?= url('berita.php') ?>" class="nav-link <?= is_active('berita', $currentPage) ?>">Berita</a>
                </li>
                <li>
                    <a href="<?= url('about.php') ?>" class="nav-link <?= is_active('about', $currentPage) ?>">About</a>
                </li>
                <li>
                    <a href="<?= url('kelola.php') ?>" class="nav-link <?= is_active('kelola', $currentPage) ?>">Kelola Konten</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
