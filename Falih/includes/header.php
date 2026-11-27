<?php
if (!isset($base_path)) {
    $base_path = '';
}
if (!isset($page_title)) {
    $page_title = 'Website Profil Keluarga';
}
if (!isset($active_menu)) {
    $active_menu = '';
}
require_once __DIR__ . '/data.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?> - Kevin Wijaya</title>
    <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/style.css">
</head>
<body>
<!-- Ambient Interactive Cursor Glow -->
<div class="cursor-glow" id="cursorGlow"></div>

<div class="app-shell" id="appShell">
    <!-- Left Sidebar Navigation (Satu-satunya Navigasi Utama) -->
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-top">
            <a href="<?php echo $base_path; ?>index.php" class="brand-box">
                <div class="brand-m">K</div>
                <div class="brand-info">
                    <span class="brand-name">KEVIN WIJAYA</span>
                    <span class="brand-role">Web Developer &amp; Mahasiswa</span>
                </div>
            </a>
            <button class="sidebar-collapse-btn" id="sidebarCollapseBtn" title="Ciutkan / Perluas Sidebar">&#10094;</button>
            <button class="sidebar-close" id="sidebarClose">&times;</button>
        </div>

        <nav class="side-nav">
            <ul>
                <li>
                    <a href="<?php echo $base_path; ?>index.php" class="side-link <?php echo ($active_menu === 'beranda') ? 'active' : ''; ?>" data-tooltip="Beranda">
                        <span class="nav-icon">&#127968;</span>
                        <span class="nav-text">Beranda</span>
                    </a>
                </li>
                <li class="side-dropdown-wrap <?php echo ($active_menu === 'profil') ? 'open' : ''; ?>">
                    <div class="side-link-row">
                        <a href="<?php echo $base_path; ?>profil.php" class="side-link <?php echo ($active_menu === 'profil') ? 'active' : ''; ?>" data-tooltip="Profil & Keluarga">
                            <span class="nav-icon">&#128100;</span>
                            <span class="nav-text">Profil &amp; Keluarga</span>
                        </a>
                        <button type="button" class="sub-toggle" aria-label="Toggle Submenu">&#9662;</button>
                    </div>
                    <ul class="side-submenu">
                        <?php foreach ($keluarga as $key => $anggota): ?>
                            <li>
                                <a href="<?php echo $base_path; ?>profil/detail.php?anggota=<?php echo urlencode($key); ?>">
                                    <?php echo htmlspecialchars($anggota['nama_menu']); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo $base_path; ?>audio_video.php" class="side-link <?php echo ($active_menu === 'audio_video') ? 'active' : ''; ?>" data-tooltip="Audio Video">
                        <span class="nav-icon">&#127916;</span>
                        <span class="nav-text">Audio Video</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $base_path; ?>galeri.php" class="side-link <?php echo ($active_menu === 'galeri') ? 'active' : ''; ?>" data-tooltip="Galeri (16 Foto)">
                        <span class="nav-icon">&#128444;</span>
                        <span class="nav-text">Galeri (16 Foto)</span>
                    </a>
                </li>
                <li class="side-dropdown-wrap <?php echo ($active_menu === 'berita') ? 'open' : ''; ?>">
                    <div class="side-link-row">
                        <a href="<?php echo $base_path; ?>berita.php" class="side-link <?php echo ($active_menu === 'berita') ? 'active' : ''; ?>" data-tooltip="Berita (5 Kategori)">
                            <span class="nav-icon">&#128240;</span>
                            <span class="nav-text">Berita (5 Kategori)</span>
                        </a>
                        <button type="button" class="sub-toggle" aria-label="Toggle Submenu">&#9662;</button>
                    </div>
                    <ul class="side-submenu">
                        <li><a href="<?php echo $base_path; ?>berita.php?kategori=it">1. Kategori IT</a></li>
                        <li><a href="<?php echo $base_path; ?>berita.php?kategori=ai">2. Kategori AI</a></li>
                        <li><a href="<?php echo $base_path; ?>berita.php?kategori=politik">3. Politik Indonesia</a></li>
                        <li><a href="<?php echo $base_path; ?>berita.php?kategori=pemrograman">4. Pemrograman</a></li>
                        <li><a href="<?php echo $base_path; ?>berita.php?kategori=lifestyle">5. Lifestyle Papua</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo $base_path; ?>about.php" class="side-link <?php echo ($active_menu === 'about') ? 'active' : ''; ?>" data-tooltip="About">
                        <span class="nav-icon">&#9993;</span>
                        <span class="nav-text">About</span>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Gradient Promo Card in Sidebar -->
        <div class="sidebar-promo hide-on-collapse">
            <h4>Tugas Website<br>Profil PHP Modular</h4>
            <p>Multi-halaman terpisah (.php) dengan galeri interaktif &amp; 25 berita.</p>
            <a href="<?php echo $base_path; ?>profil/detail.php?anggota=anak_3" class="btn-promo">Profil Saya &rarr;</a>
        </div>

        <!-- Biodata Quick Info Box -->
        <div class="sidebar-cv hide-on-collapse">
            <span class="cv-label">MAHASISWA INFORMATIKA</span>
            <a href="<?php echo $base_path; ?>profil/detail.php?anggota=anak_3" class="cv-file">
                &#128196; Biodata_Kevin_Wijaya.php
            </a>
        </div>

        <!-- Social Icons -->
        <div class="sidebar-social hide-on-collapse">
            <span class="cv-label">AKSES CEPAT</span>
            <div class="social-dots">
                <a href="<?php echo $base_path; ?>index.php" title="Beranda">&#127968;</a>
                <a href="<?php echo $base_path; ?>galeri.php" title="Galeri">&#128247;</a>
                <a href="<?php echo $base_path; ?>audio_video.php" title="Video">&#9654;</a>
                <a href="<?php echo $base_path; ?>berita.php" title="Berita">&#128214;</a>
            </div>
        </div>
    </aside>

    <!-- Main Right Workspace (Tanpa Navigasi Atas!) -->
    <div class="main-area">
        <!-- Floating Mobile Menu Button (Hanya muncul di layar HP < 768px) -->
        <button class="floating-mobile-btn" id="mobileMenuBtn" aria-label="Buka Menu">&#9776; Menu</button>

        <main class="content-wrap">
