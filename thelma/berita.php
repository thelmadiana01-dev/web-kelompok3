<?php
$aktif='berita'; require_once 'includes/data.php';
$pilih = $_GET['k'] ?? '';
$judul = isset($kategori[$pilih]) ? 'Berita '.$kategori[$pilih] : 'Berita';
require 'includes/header.php'; ?>
<h2 class="ph2">Berita<?= isset($kategori[$pilih]) ? ': '.$kategori[$pilih] : '' ?></h2>
<div class="tabs">
  <a class="<?= $pilih===''?'on':'' ?>" href="berita.php">Semua kategori</a>
  <?php foreach ($kategori as $kk=>$kn): ?><a class="<?= $pilih===$kk?'on':'' ?>" href="berita.php?k=<?= $kk ?>"><?= $kn ?></a><?php endforeach; ?>
</div>
<?php if (isset($kategori[$pilih])): $ci = array_search($pilih, array_keys($kategori)); ?>
  <section class="kat c<?= $ci ?>">
    <?php foreach ($berita[$pilih] as $no=>$b): ?>
    <a class="row" href="berita/<?= $pilih ?>-<?= $no ?>.php"><i><?= $no ?></i><span><b><?= htmlspecialchars($b['judul']) ?></b><small><?= htmlspecialchars($b['ringkas']) ?></small></span></a>
    <?php endforeach; ?>
  </section>
<?php else: $i = 0; ?>
  <div class="tiles">
    <?php foreach ($kategori as $kk=>$kn): ?>
    <a class="tile c<?= $i++ ?>" href="berita.php?k=<?= $kk ?>"><b><?= $kn ?></b><span>5 berita</span></a>
    <?php endforeach; ?>
  </div><br>
<?php endif; require 'includes/footer.php'; ?>
