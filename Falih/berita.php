<?php
$page_title = 'Portal Berita';
$active_menu = 'berita';
include 'includes/header.php';

$kat_aktif = isset($_GET['kategori']) && isset($kategori_berita[$_GET['kategori']]) ? $_GET['kategori'] : 'all';
?>
<div class="subpage-banner">
    <h2>Portal Berita (5 Kategori &times; 5 Berita = 25 Halaman)</h2>
    <p>Tampilan daftar berita dalam bentuk baris-baris. Klik tombol baca untuk membuka file halaman PHP masing-masing berita beserta sumbernya.</p>
</div>

<div class="pill-tabs">
    <a href="berita.php?kategori=all" class="<?php echo ($kat_aktif === 'all') ? 'active' : ''; ?>">Semua Kategori (25)</a>
    <?php foreach ($kategori_berita as $k_key => $k_data): ?>
        <a href="berita.php?kategori=<?php echo urlencode($k_key); ?>" class="<?php echo ($kat_aktif === $k_key) ? 'active' : ''; ?>">
            <?php echo htmlspecialchars($k_data['nama']); ?>
        </a>
    <?php endforeach; ?>
</div>

<?php foreach ($kategori_berita as $k_key => $k_data): ?>
    <?php if ($kat_aktif === 'all' || $kat_aktif === $k_key): ?>
        <div style="margin-bottom: 32px;">
            <h3 style="margin-bottom: 4px; font-size: 1.2rem;"><?php echo htmlspecialchars($k_data['nama']); ?></h3>
            <p style="font-size: 0.86rem; color: #94a3b8; margin-bottom: 14px;"><?php echo htmlspecialchars($k_data['deskripsi']); ?></p>
            <div class="news-rows">
                <?php foreach ($k_data['items'] as $idx => $item): ?>
                    <div class="news-row">
                        <div>
                            <div class="news-meta">Berita #<?php echo ($idx + 1); ?> &bull; <?php echo htmlspecialchars($item['tanggal']); ?></div>
                            <h4><?php echo htmlspecialchars($item['judul']); ?></h4>
                            <p><?php echo htmlspecialchars($item['ringkasan']); ?></p>
                        </div>
                        <div style="flex-shrink: 0;">
                            <a href="<?php echo htmlspecialchars($item['file']); ?>" class="btn-grad" style="padding: 8px 16px; font-size: 0.82rem;">Baca Berita &rarr;</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>
<?php endforeach; ?>
<?php include 'includes/footer.php'; ?>
