<?php $aktif='beranda'; $judul='Beranda'; require 'includes/header.php'; require_once 'includes/avatar.php'; ?><br>
<section class="herob">
  <?= avatar('assets/foto/Anak ke 4.jpeg', 'Anak ke-4', 'me') ?>
  <h1>Thelma Diana Wansaubun</h1>
  <p class="nim">NIM 16325029</p>
  <p class="welcome">Selamat datang di website profil keluarga saya.</p>
</section>
<div class="tiles">
  <a class="tile" href="profil.php"><b>Profil</b><span>Mama, Bapak, dan saudara-saudara</span></a>
  <a class="tile" href="audio-video.php"><b>Video</b><span>Video keluarga dari folder assets/video</span></a>
  <a class="tile" href="galeri.php"><b>Galeri</b><span>Kumpulan foto keluarga</span></a>
  <a class="tile" href="berita.php"><b>Berita</b><span>Lima kategori pilihan</span></a>
</div><br>
<?php require 'includes/footer.php'; ?>
