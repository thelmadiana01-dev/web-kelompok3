<?php
$page_title = 'Beranda';
$active_menu = 'beranda';
include 'includes/header.php';
?>
<!-- Hero Section Matching Reference UI -->
<section class="hero-section">
    <div>
        <div class="hero-kicker">HALO, SAYA</div>
        <h1 class="hero-title">Kevin <span class="grad-text">Wijaya</span></h1>
        <div class="hero-subtitle">Website Profil Keluarga &amp; <span class="grad-text">Portal PHP</span></div>
        <p class="hero-desc">
            Selamat datang di website profil pribadi dan keluarga berbasis arsitektur modular PHP multi-halaman. Jelajahi biodata keluarga, video perkenalan, galeri foto, serta 25 artikel berita pilihan.
        </p>
        <div class="hero-actions">
            <a href="profil.php" class="btn-grad">Lihat Profil Keluarga &rarr;</a>
            <a href="audio_video.php" class="btn-watch">
                <span class="play-circle">&#9654;</span>
                <span>Tonton Video Perkenalan</span>
            </a>
        </div>
    </div>
    <div class="hero-visual">
        <div class="neon-orb"></div>
        <img src="assets/img/profil/anak_1.jpg" alt="Foto Profil Utama" class="hero-portrait">
        <div class="floating-badge">
            <strong>6+</strong>
            <span>Anggota Keluarga</span>
        </div>
    </div>
</section>

<!-- 4 Feature Cards (Matching "Services I Offer" 4-column grid) -->
<div class="section-head">
    <div>
        <div class="section-kicker">MENU UTAMA</div>
        <h3>Eksplorasi Halaman Website</h3>
    </div>
</div>

<div class="cards-4">
    <div class="neon-card">
        <div class="icon-pill">&#128106;</div>
        <h4>Profil Keluarga</h4>
        <p>Urutan profil Bapak, Mama, hingga seluruh saudara kandung lengkap dengan 10 data diri seragam.</p>
        <a href="profil.php" class="card-link">Buka Profil &rarr;</a>
    </div>
    <div class="neon-card">
        <div class="icon-pill">&#127916;</div>
        <h4>Audio &amp; Video</h4>
        <p>Video perkenalan diri durasi 3 menit (landscape) dan daftar putar lagu pilihan.</p>
        <a href="audio_video.php" class="card-link">Putar Media &rarr;</a>
    </div>
    <div class="neon-card">
        <div class="icon-pill">&#128444;</div>
        <h4>Galeri 16 Foto</h4>
        <p>Koleksi 16 foto asli berorientasi portrait seragam dengan lightbox geser kiri dan kanan.</p>
        <a href="galeri.php" class="card-link">Lihat Galeri &rarr;</a>
    </div>
    <div class="neon-card">
        <div class="icon-pill">&#128240;</div>
        <h4>25 Berita Pilihan</h4>
        <p>5 kategori berita (IT, AI, Politik, Pemrograman, dan Lifestyle Papua) dengan sumber resmi.</p>
        <a href="berita.php" class="card-link">Baca Berita &rarr;</a>
    </div>
</div>

<!-- Featured Gallery Preview (4 cards row like "Featured Projects") -->
<div class="section-head">
    <div>
        <div class="section-kicker">CUPLIKAN GALERI</div>
        <h3>Foto Keluarga Terbaru</h3>
    </div>
    <a href="galeri.php" class="btn-watch" style="font-size: 0.82rem;">Lihat Semua 16 Foto &rarr;</a>
</div>

<div class="gallery-grid">
    <a href="galeri.php" class="gallery-item">
        <img src="assets/img/galeri/foto_01.jpg" alt="Foto 1">
        <div class="gallery-caption">Foto 1 - Kebersamaan Keluarga</div>
    </a>
    <a href="galeri.php" class="gallery-item">
        <img src="assets/img/galeri/foto_02.jpg" alt="Foto 2">
        <div class="gallery-caption">Foto 2 - Momen Hari Raya</div>
    </a>
    <a href="galeri.php" class="gallery-item">
        <img src="assets/img/galeri/foto_03.jpg" alt="Foto 3">
        <div class="gallery-caption">Foto 3 - Kegiatan Kampus</div>
    </a>
    <a href="galeri.php" class="gallery-item">
        <img src="assets/img/galeri/foto_04.jpg" alt="Foto 4">
        <div class="gallery-caption">Foto 4 - Bersama Orang Tua</div>
    </a>
</div>

<!-- Bottom Gradient Stats Banner (Matching Reference Screenshot) -->
<div class="stats-banner">
    <div class="stat-item">
        <span class="stat-icon">&#128106;</span>
        <div>
            <strong>6 Profil</strong>
            <span>10 Biodata / Orang</span>
        </div>
    </div>
    <div class="stat-item">
        <span class="stat-icon">&#128247;</span>
        <div>
            <strong>16 Foto</strong>
            <span>Portrait Non-Selfie</span>
        </div>
    </div>
    <div class="stat-item">
        <span class="stat-icon">&#128240;</span>
        <div>
            <strong>25 Berita</strong>
            <span>5 Kategori Lengkap</span>
        </div>
    </div>
    <div class="stat-item">
        <span class="stat-icon">&#128187;</span>
        <div>
            <strong>100% PHP</strong>
            <span>Modular Multi-Page</span>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>
