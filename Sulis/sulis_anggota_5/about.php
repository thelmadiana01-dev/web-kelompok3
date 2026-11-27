<?php
$page_title = "About - Website Profil Sulistiyani";
include 'includes/header.php';
?>
<section class="about-section">
    <h2>Tentang Website Ini</h2>
    <p>Website ini disusun oleh <strong>Sulistiyani (NIM: 16325044)</strong>, mahasiswi Program Studi <strong>D3 Manajemen Informatika</strong>, untuk memenuhi tugas mata kuliah Pemrograman Web.</p>
    
    <article class="about-details">
        <h3>Spesifikasi Teknis Website</h3>
        <ul class="about-list">
            <li><strong>Arsitektur Multi-Halaman PHP:</strong> Setiap menu (Beranda, Profil, Audio Video, Galeri, Berita, About) berdiri sebagai file <code>.php</code> terpisah, bukan halaman tunggal (single-page).</li>
            <li><strong>Modularitas Komponen:</strong> Bagian navigasi dan footer dipisahkan ke dalam folder <code>includes/</code> menggunakan fungsi <code>include</code> PHP.</li>
            <li><strong>Semantic HTML5 & Tanpa ID Div:</strong> Struktur halaman dibangun menggunakan tag semantik (<code>header</code>, <code>nav</code>, <code>main</code>, <code>section</code>, <code>article</code>, <code>figure</code>, <code>footer</code>).</li>
            <li><strong>Fitur Interaktif:</strong> Galeri 16 foto mendukung tampilan pop-up dan navigasi geser (swipe) kiri/kanan, serta portal berita terbagi dalam 5 kategori dengan 25 file berita terpisah.</li>
        </ul>
    </article>
</section>
<?php include 'includes/footer.php'; ?>