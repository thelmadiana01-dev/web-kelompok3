<?php
$aktif='profil';
$pilih = $_GET['id'] ?? '';
require_once 'includes/data.php'; require_once 'includes/avatar.php';
$fotoProfil = [
  'mama'=>'assets/foto/MM.jpeg',
  'bapak'=>'assets/foto/Bapa.jpeg',
  'anak1'=>'assets/foto/Anak ke 1.jpeg',
  'anak2'=>'assets/foto/Anak ke 2.avif',
  'anak3'=>'assets/foto/Anak ke 3.jpg',
  'anak4'=>'assets/foto/Anak ke 4.jpeg',
  'anak5'=>'assets/foto/Anak ke 5.jpg',
  'anak6'=>'assets/foto/Anak ke 6.jpeg',
];
$judul = isset($keluarga[$pilih]) ? $keluarga[$pilih]['peran'] : 'Profil';
require 'includes/header.php'; ?>
<h2 class="ph2">Profil Keluarga</h2>
<div class="tabs">
  <a class="<?= $pilih===''?'on':'' ?>" href="profil.php">Semua</a>
  <?php foreach ($keluarga as $kid=>$kv): ?><a class="<?= $pilih===$kid?'on':'' ?>" href="profil.php?id=<?= $kid ?>"><?= $kv['peran'] ?></a><?php endforeach; ?>
</div>
<?php if (isset($keluarga[$pilih])):
  $kv = $keluarga[$pilih]; $urut = array_search($pilih, array_keys($keluarga)); ?>
  <article class="profil c<?= $urut % 6 ?>">
    <div class="pcover"><?= avatar($fotoProfil[$pilih],$kv['peran']) ?><div><h3><?= htmlspecialchars($kv['peran']) ?></h3></div></div>
    <dl><?php foreach ($kv['data'] as $label=>$value): ?><dt><?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?></dt><dd><?= htmlspecialchars($value, ENT_QUOTES, 'UTF-8') ?></dd><?php endforeach; ?></dl>
  </article>
<?php else: $i = 0; ?>
  <div class="pgrid"><?php foreach ($keluarga as $kid=>$kv): ?>
    <a class="pcard c<?= $i++ % 6 ?>" href="profil.php?id=<?= $kid ?>"><?= avatar($fotoProfil[$kid],$kv['peran']) ?><b><?= $kv['peran'] ?></b><small><?= htmlspecialchars($kv['data']['Nama Panggilan'], ENT_QUOTES, 'UTF-8') ?></small></a>
  <?php endforeach; ?></div><br>
<?php endif; require 'includes/footer.php'; ?>
