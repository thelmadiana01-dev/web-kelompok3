<?php
$page_title = 'About';
$active_menu = 'about';
include 'includes/header.php';
?>
<div class="subpage-banner">
    <h2>Tentang Website (About)</h2>
    <p>Informasi teknis arsitektur PHP modular dan pemenuhan seluruh ketentuan tugas.</p>
</div>

<div class="article-box">
    <h3 style="margin-bottom: 12px;">Spesifikasi Teknis Website</h3>
    <ul style="margin-left: 20px; line-height: 2; color: #cbd5e1;">
        <li><strong>Multi-Halaman Terpisah (.php):</strong> Tidak menggunakan single-page anchor <code>#id</code>; setiap menu dan berita berdiri sebagai halaman PHP terpisah.</li>
        <li><strong>Modularitas PHP:</strong> Komponen <code>includes/header.php</code>, <code>includes/footer.php</code>, dan <code>includes/data.php</code> dipanggil menggunakan <code>include</code> dan <code>require_once</code>.</li>
        <li><strong>6 Menu Lengkap:</strong> Beranda, Profil (dengan sub-menu urutan keluarga &amp; 10 biodata seragam), Audio Video (video perkenalan 3 menit landscape + audio), Galeri (16 foto portrait non-selfie dengan lightbox geser kiri-kanan), Berita (5 kategori &times; 5 berita = 25 halaman berita dengan sumber), dan About.</li>
    </ul>
</div>
<?php include 'includes/footer.php'; ?>
