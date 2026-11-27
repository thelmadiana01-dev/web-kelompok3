<?php
$page_title = "Audio dan Video - Sulistiyani";
include 'includes/header.php';
?>
<section class="media-section">
    <h2>Video Perkenalan Diri (Kamera Belakang - Landscape - Maksimal 3 Menit)</h2>
    <article class="video-wrapper">
        <video controls class="landscape-video" poster="assets/img/galeri_5.jpg">
            <source src="assets/media/perkenalan_diri.mp4" type="video/mp4">
            Browser Anda tidak mendukung pemutar video HTML5.
        </video>
        <p><strong>Deskripsi:</strong> Video perkenalan diri oleh Sulistiyani (NIM 16325044) yang direkam menggunakan kamera belakang HP dalam posisi landscape dengan durasi maksimal 3 menit.</p>
    </article>

    <hr class="divider">

    <h2>Daftar Lagu Kesukaan (Audio Playlist)</h2>
    <section class="audio-list">
        <article class="audio-item">
            <p><strong>1. Lagu Kesukaan Pertama</strong></p>
            <audio controls class="audio-player">
                <source src="assets/media/lagu_favorit_1.mp3" type="audio/mpeg">
                Browser Anda tidak mendukung pemutar audio.
            </audio>
        </article>

        <article class="audio-item">
            <p><strong>2. Lagu Kesukaan Kedua</strong></p>
            <audio controls class="audio-player">
                <source src="assets/media/lagu_favorit_2.mp3" type="audio/mpeg">
                Browser Anda tidak mendukung pemutar audio.
            </audio>
        </article>

        <article class="audio-item">
            <p><strong>3. Lagu Kesukaan Ketiga</strong></p>
            <audio controls class="audio-player">
                <source src="assets/media/lagu_favorit_3.mp3" type="audio/mpeg">
                Browser Anda tidak mendukung pemutar audio.
            </audio>
        </article>
    </section>
</section>
<?php include 'includes/footer.php'; ?>