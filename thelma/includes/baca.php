<?php
// Template halaman berita. Dipanggil dari berita/<kategori>-<n>.php
$base='../'; $aktif='berita';
require_once __DIR__.'/data.php';
$b = $berita[$k][$n]; $judul = $b['judul'];
$ci = array_search($k, array_keys($kategori));
require __DIR__.'/header.php'; ?>
<article class="artikel c<?= $ci ?>">
  <p><a href="../berita.php?k=<?= $k ?>">&larr; Kembali ke berita <?= $kategori[$k] ?></a></p>
  <h1 class="ajudul"><?= htmlspecialchars($judul) ?></h1>
  <?php foreach ($b['isi'] as $par): ?><p><?= htmlspecialchars($par) ?></p><?php endforeach; ?>
  <p class="sumber">Sumber: <a href="<?= htmlspecialchars($b['sumber']) ?>" target="_blank" rel="noopener"><?= htmlspecialchars($b['sumber']) ?></a></p>
</article>
<?php require __DIR__.'/footer.php';
