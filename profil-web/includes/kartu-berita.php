<?php /* Satu baris berita (sesuai sketsa). Butuh variabel $b dan $base */ ?>
<article class="kartu-berita">
    <img src="<?= gambar($b['gambar'], 'Foto Berita') ?>" alt="<?= e($b['judul']) ?>">
    <div class="isi">
        <span class="kategori"><?= e($b['kategori']) ?></span>
        <h3><?= e($b['judul']) ?></h3>
        <p><?= e($b['ringkasan']) ?></p>
        <a class="read-more" href="<?= $base ?><?= e($b['file']) ?>">(Read more)</a>
    </div>
</article>
