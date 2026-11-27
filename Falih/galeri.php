<?php
$page_title = 'Galeri 16 Foto';
$active_menu = 'galeri';
include 'includes/header.php';

$daftar_foto = [
    ['file' => 'assets/img/galeri/foto_01.jpg', 'judul' => 'Foto 1 - Kebersamaan Keluarga di Rumah'],
    ['file' => 'assets/img/galeri/foto_02.jpg', 'judul' => 'Foto 2 - Momen Hari Raya Bersama'],
    ['file' => 'assets/img/galeri/foto_03.jpg', 'judul' => 'Foto 3 - Foto Diri di Halaman Kampus'],
    ['file' => 'assets/img/galeri/foto_04.jpg', 'judul' => 'Foto 4 - Bersama Bapak dan Mama'],
    ['file' => 'assets/img/galeri/foto_05.jpg', 'judul' => 'Foto 5 - Kakak Pertama dan Kakak Kedua'],
    ['file' => 'assets/img/galeri/foto_06.jpg', 'judul' => 'Foto 6 - Kegiatan Akhir Pekan Keluarga'],
    ['file' => 'assets/img/galeri/foto_07.jpg', 'judul' => 'Foto 7 - Foto Diri (Non-Selfie / Tripod)'],
    ['file' => 'assets/img/galeri/foto_08.jpg', 'judul' => 'Foto 8 - Makan Malam Bersama Keluarga'],
    ['file' => 'assets/img/galeri/foto_09.jpg', 'judul' => 'Foto 9 - Rekreasi di Pantai Base-G Jayapura'],
    ['file' => 'assets/img/galeri/foto_10.jpg', 'judul' => 'Foto 10 - Bersama Adik Bungsu'],
    ['file' => 'assets/img/galeri/foto_11.jpg', 'judul' => 'Foto 11 - Kunjungan ke Danau Sentani'],
    ['file' => 'assets/img/galeri/foto_12.jpg', 'judul' => 'Foto 12 - Acara Syukuran Keluarga'],
    ['file' => 'assets/img/galeri/foto_13.jpg', 'judul' => 'Foto 13 - Foto Diri Saat Kegiatan Olahraga'],
    ['file' => 'assets/img/galeri/foto_14.jpg', 'judul' => 'Foto 14 - Foto Lengkap Seluruh Saudara'],
    ['file' => 'assets/img/galeri/foto_15.jpg', 'judul' => 'Foto 15 - Santai Sore di Teras Rumah'],
    ['file' => 'assets/img/galeri/foto_16.jpg', 'judul' => 'Foto 16 - Kenangan Liburan Keluarga']
];
?>
<div class="subpage-banner">
    <h2>Galeri Foto Diri &amp; Keluarga (16 Foto)</h2>
    <p>Seluruh foto berorientasi Portrait seragam dan bukan foto selfie. Klik salah satu foto untuk tampilan layar penuh lalu klik atau geser (swipe) kiri dan kanan.</p>
</div>

<div class="gallery-grid">
    <?php foreach ($daftar_foto as $foto): ?>
        <div class="gallery-item" data-src="<?php echo htmlspecialchars($foto['file']); ?>" data-caption="<?php echo htmlspecialchars($foto['judul']); ?>">
            <img src="<?php echo htmlspecialchars($foto['file']); ?>" alt="<?php echo htmlspecialchars($foto['judul']); ?>" loading="lazy">
            <div class="gallery-caption"><?php echo htmlspecialchars($foto['judul']); ?></div>
        </div>
    <?php endforeach; ?>
</div>

<!-- Lightbox Pop-up ala Galeri HP -->
<div class="lightbox" id="galleryLightbox">
    <button class="lightbox-close" id="lightboxClose" title="Tutup">&times;</button>
    <button class="lightbox-nav lightbox-prev" id="lightboxPrev" title="Sebelumnya">&#10094;</button>
    <div class="lightbox-content">
        <img id="lightboxImg" src="" alt="Preview Foto">
    </div>
    <button class="lightbox-nav lightbox-next" id="lightboxNext" title="Berikutnya">&#10095;</button>
    <div class="lightbox-info">
        <div id="lightboxCaption" style="font-weight: 600;"></div>
        <div id="lightboxCounter" style="font-size: 0.85rem; color: #94a3b8; margin-top: 4px;"></div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>
