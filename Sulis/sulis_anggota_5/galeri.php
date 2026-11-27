<?php
$page_title = "Galeri Foto - Sulistiyani";
include 'includes/header.php';

// Pilih salah satu agar seragam: 'orientation-landscape' ATAU 'orientation-portrait'
$orientasi_galeri = "orientation-landscape"; 

$daftar_foto = [
    ["file" => "galeri_1.jpg",  "caption" => "Foto Ayah Kandung (Sutopo)"],
    ["file" => "galeri_2.jpg",  "caption" => "Foto Ibu Kandung (Kumiyati)"],
    ["file" => "galeri_3.jpg",  "caption" => "Foto Kakak ke-2 (Duwi Kumala Sari)"],
    ["file" => "galeri_4.jpg",  "caption" => "Foto Kakak ke-3 (Agung Hidayat)"],
    ["file" => "galeri_5.jpg",  "caption" => "Foto Sulistiyani (Anak ke-4)"],
    ["file" => "galeri_6.jpg",  "caption" => "Foto Adik Bungsu (Ridwan Maulana)"],
    ["file" => "galeri_7.jpg",  "caption" => "Foto Keluarga di Kampung Onim Jaya"],
    ["file" => "galeri_8.jpg",  "caption" => "Kebersamaan Bersama Ayah dan Ibu"],
    ["file" => "galeri_9.jpg",  "caption" => "Momen Kumpul Saudara Kandung"],
    ["file" => "galeri_10.jpg", "caption" => "Kegiatan Keluarga di Rumah"],
    ["file" => "galeri_11.jpg", "caption" => "Suasana Hari Raya Bersama Keluarga"],
    ["file" => "galeri_12.jpg", "caption" => "Foto Bersama Kakak dan Adik"],
    ["file" => "galeri_13.jpg", "caption" => "Dokumentasi Acara Keluarga"],
    ["file" => "galeri_14.jpg", "caption" => "Kebersamaan Akhir Pekan Keluarga"],
    ["file" => "galeri_15.jpg", "caption" => "Foto Sulistiyani di Luar Ruangan"],
    ["file" => "galeri_16.jpg", "caption" => "Kenangan Foto Keluarga Besar"]
];
?>
<section class="gallery-section">
    <h2>Galeri Foto Pribadi & Keluarga (16 Foto)</h2>
    <p>Klik pada foto untuk memperbesar tampilan seperti galeri HP, lalu geser (swipe) ke kiri atau kanan.</p>

    <section class="gallery-grid <?php echo $orientasi_galeri; ?>">
        <?php foreach ($daftar_foto as $index => $foto): ?>
            <figure class="gallery-item" data-index="<?php echo $index; ?>">
                <img src="assets/img/<?php echo $foto['file']; ?>" alt="<?php echo $foto['caption']; ?>">
                <figcaption><?php echo ($index + 1) . ". " . $foto['caption']; ?></figcaption>
            </figure>
        <?php endforeach; ?>
    </section>
</section>

<dialog class="lightbox-modal">
    <section class="lightbox-content">
        <button type="button" class="btn-close" aria-label="Tutup">×</button>
        <button type="button" class="btn-prev" aria-label="Sebelumnya">❮</button>
        <img src="" alt="Preview Foto" class="lightbox-img">
        <button type="button" class="btn-next" aria-label="Selanjutnya">❯</button>
        <p class="lightbox-caption"></p>
    </section>
</dialog>

<?php include 'includes/footer.php'; ?>