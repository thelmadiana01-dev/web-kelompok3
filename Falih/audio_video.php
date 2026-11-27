<?php
$page_title = 'Audio & Video';
$active_menu = 'audio_video';
include 'includes/header.php';
?>
<div class="subpage-banner">
    <h2>Audio &amp; Video Perkenalan</h2>
    <p>Video deskripsi diri (kamera belakang, orientasi landscape, durasi 3 menit) serta pemutar lagu favorit.</p>
</div>

<section class="media-panel">
    <h3 style="margin-bottom: 6px;">1. Video Perkenalan Diri (Landscape - 3 Menit)</h3>
    <p style="font-size: 0.86rem; color: #94a3b8;">Letakkan file video MP4 Anda di <code>assets/media/video_perkenalan.mp4</code>.</p>
    <div class="video-box">
        <video controls poster="assets/img/galeri/foto_01.jpg">
            <source src="assets/media/video_perkenalan.mp4" type="video/mp4">
            Browser Anda tidak mendukung pemutar video HTML5.
        </video>
    </div>
</section>

<section class="media-panel">
    <h3 style="margin-bottom: 6px;">2. Pemutar Audio / Lagu Pilihan</h3>
    <p style="font-size: 0.86rem; color: #94a3b8;">Koleksi audio santai yang nyaman didengar (ganti file di folder <code>assets/media/</code> sesuai lagu favorit Anda).</p>
    <div class="audio-row">
        <div>
            <strong>Track 1 - Instrumen Akustik Santai</strong>
            <div style="font-size: 0.78rem; color: #94a3b8;">assets/media/lagu_1.wav</div>
        </div>
        <audio controls><source src="assets/media/lagu_1.wav" type="audio/wav"></audio>
    </div>
    <div class="audio-row">
        <div>
            <strong>Track 2 - Melodi Tenang Belajar</strong>
            <div style="font-size: 0.78rem; color: #94a3b8;">assets/media/lagu_2.wav</div>
        </div>
        <audio controls><source src="assets/media/lagu_2.wav" type="audio/wav"></audio>
    </div>
    <div class="audio-row">
        <div>
            <strong>Track 3 - Lagu Daerah Nusantara / Papua</strong>
            <div style="font-size: 0.78rem; color: #94a3b8;">assets/media/lagu_3.wav</div>
        </div>
        <audio controls><source src="assets/media/lagu_3.wav" type="audio/wav"></audio>
    </div>
</section>
<?php include 'includes/footer.php'; ?>
