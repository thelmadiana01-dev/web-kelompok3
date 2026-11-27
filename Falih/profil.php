<?php
$page_title = 'Profil Keluarga';
$active_menu = 'profil';
include 'includes/header.php';
?>
<div class="subpage-banner">
    <h2>Profil Anggota Keluarga</h2>
    <p>Diurutkan mulai dari orang tua (Bapak &amp; Mama) hingga anak pertama sampai anak terakhir. Klik kartu untuk melihat 10 biodata seragam.</p>
</div>

<div class="cards-4">
    <?php foreach ($keluarga as $key => $anggota): ?>
        <div class="neon-card">
            <img src="<?php echo htmlspecialchars($anggota['foto']); ?>" alt="<?php echo htmlspecialchars($anggota['nama_menu']); ?>" style="width: 100%; max-width: 190px; aspect-ratio: 3/4; object-fit: cover; border-radius: 12px; margin-bottom: 14px; border: 2px solid rgba(236,72,153,0.35);">
            <h4><?php echo htmlspecialchars($anggota['nama_menu']); ?></h4>
            <p><?php echo htmlspecialchars($anggota['biodata']['Nama Lengkap']); ?></p>
            <a href="profil/detail.php?anggota=<?php echo urlencode($key); ?>" class="btn-grad" style="padding: 8px 16px; font-size: 0.82rem;">Lihat 10 Biodata</a>
        </div>
    <?php endforeach; ?>
</div>
<?php include 'includes/footer.php'; ?>
