<?php
$page_title = "Portal Berita - 5 Kategori";
include 'includes/header.php';
include 'includes/data_berita.php';

$kategori_aktif = isset($_GET['kategori']) ? $_GET['kategori'] : 'Semua';
$daftar_kategori = [
    'Semua',
    'IT',
    'AI',
    'Politik di Indonesia',
    'Pemrograman',
    'Lifestyle'
];
?>
<section class="news-section">
    <h2>Berita Terkini (5 Kategori • 25 Artikel)</h2>
    
    <nav class="category-filter">
        <?php foreach ($daftar_kategori as $kat): ?>
            <a href="berita.php?kategori=<?php echo urlencode($kat); ?>" 
               class="cat-btn <?php echo ($kategori_aktif === $kat) ? 'active' : ''; ?>">
               <?php echo ($kat === 'Lifestyle') ? 'Lifestyle (Keindahan Papua & Timur)' : $kat; ?>
            </a>
        <?php endforeach; ?>
    </nav>

    <section class="news-list">
        <?php foreach ($semua_berita as $berita): ?>
            <?php if ($kategori_aktif === 'Semua' || $berita['kategori'] === $kategori_aktif): ?>
                <article class="news-card">
                    <img src="assets/img/<?php echo $berita['gambar']; ?>" alt="<?php echo $berita['judul']; ?>" class="news-thumb">
                    <section class="news-info">
                        <span class="badge"><?php echo $berita['kategori']; ?></span>
                        <h3>
                            <a href="berita_detail/<?php echo $berita['file']; ?>">
                                <?php echo $berita['judul']; ?>
                            </a>
                        </h3>
                        <p><?php echo $berita['deskripsi']; ?></p>
                        <a href="berita_detail/<?php echo $berita['file']; ?>" class="read-more">Baca selengkapnya →</a>
                    </section>
                </article>
            <?php endif; ?>
        <?php endforeach; ?>
    </section>
</section>
<?php include 'includes/footer.php'; ?>