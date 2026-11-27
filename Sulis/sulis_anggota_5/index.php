<?php
$page_title = "Beranda - Website Profil Sulistiyani";
include 'includes/header.php';
?>
<section class="hero-section">
    <span class="badge">NIM: 16325044 • D3 Manajemen Informatika</span>
    <h1>Selamat Datang di Website Pribadi Sulistiyani</h1>
    <p>Halo! Saya <strong>Sulistiyani</strong> dari Kampung Onim Jaya. Website ini dibangun menggunakan arsitektur <strong>PHP Modular</strong> yang memisahkan setiap menu ke dalam halaman terpisah.</p>
    
    <article class="quick-nav">
        <a href="profil.php?anggota=saya" class="btn-primary">Lihat Biodata Saya</a>
        <a href="profil.php" class="btn-secondary">Profil Keluarga</a>
        <a href="galeri.php" class="btn-secondary">Galeri 16 Foto</a>
    </article>

    <hr class="divider">

    <section class="stats-grid">
        <article class="stat-card">
            <h3>6 Anggota</h3>
            <p>Profil Keluarga Lengkap (10 Data/Orang)</p>
        </article>
        <article class="stat-card">
            <h3>16 Foto</h3>
            <p>Koleksi Galeri Keluarga dengan Fitur Swipe</p>
        </article>
        <article class="stat-card">
            <h3>25 Artikel</h3>
            <p>Berita dalam 5 Kategori Pilihan</p>
        </article>
    </section>
</section>
<?php include 'includes/footer.php'; ?>