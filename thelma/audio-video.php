<?php $aktif='av'; $judul='Video'; require 'includes/header.php'; ?>
<h2></h2>
<div class="cols">
  <?php if ($videoFiles): ?>
  <?php foreach ($videoFiles as $video): ?>
  <section><h3><?= htmlspecialchars($video['judul'], ENT_QUOTES, 'UTF-8') ?></h3>
    <video class="vid" controls preload="metadata">
      <source src="<?= htmlspecialchars($video['src'], ENT_QUOTES, 'UTF-8') ?>" type="<?= htmlspecialchars($video['tipe'], ENT_QUOTES, 'UTF-8') ?>">
      Browser Anda tidak mendukung video.
    </video>
  </section>
  <?php endforeach; ?>
  <?php else: ?>
  <p>Belum ada video yang didukung di folder assets/video.</p>
  <?php endif; ?>
  <section><h3>Video YouTube</h3>
    <iframe class="vid" src="https://www.youtube.com/embed/4F1pScT3X3A" title="Video YouTube" allowfullscreen loading="lazy"></iframe>
  </section>
</div>
<h3 style="margin-top:32px">Audio</h3>
<div class="song"><b>Fauzana_Ciinan Bana</b><audio controls preload="none" src="assets/audio/Lagu.mpeg"></audio></div>
<div class="song"><b>Ifan Seventeen_Jangan Paksa Rindu</b><audio controls preload="none" src="assets/audio/Lagu2.mpeg"></audio></div>
<div class="song"><b>Hero_Chtistina Perri</b><audio controls preload="none" src="assets/audio/Lagu3.mpeg"></audio></div>
<div class="song"><b>A Thousand Years_Christina Perri</b><audio controls preload="none" src="assets/audio/Lagu4.mpeg"></audio></div>
<div class="song"><b>Rewrite The Start_Jamest Arthur</b><audio controls preload="none" src="assets/audio/Lagu5.mpeg"></audio></div>
<?php require 'includes/footer.php'; ?>
