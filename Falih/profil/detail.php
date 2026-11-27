<?php
$base_path = '../';
require_once '../includes/data.php';

$anggota_key = isset($_GET['anggota']) && isset($keluarga[$_GET['anggota']]) ? $_GET['anggota'] : 'bapak';
$data_anggota = $keluarga[$anggota_key];

$page_title = 'Profil - ' . $data_anggota['nama_menu'];
$active_menu = 'profil';
include '../includes/header.php';
?>
<div class="subpage-banner">
    <h2><?php echo htmlspecialchars($data_anggota['nama_menu']); ?></h2>
    <p>Biodata lengkap (10 poin informasi diri seragam) beserta foto profil.</p>
</div>

<div class="pill-tabs">
    <?php foreach ($keluarga as $key => $item): ?>
        <a href="detail.php?anggota=<?php echo urlencode($key); ?>" class="<?php echo ($key === $anggota_key) ? 'active' : ''; ?>">
            <?php echo htmlspecialchars($item['nama_menu']); ?>
        </a>
    <?php endforeach; ?>
</div>

<div class="profile-detail-grid">
    <div>
        <img src="../<?php echo htmlspecialchars($data_anggota['foto']); ?>" alt="<?php echo htmlspecialchars($data_anggota['biodata']['Nama Lengkap']); ?>">
    </div>
    <div>
        <h3 style="margin-bottom: 14px; font-size: 1.25rem; color: #fff;">10 Data Diri Lengkap</h3>
        <table class="biodata-table">
            <?php $no = 1; foreach ($data_anggota['biodata'] as $label => $nilai): ?>
                <tr>
                    <td class="lbl"><?php echo $no++ . '. ' . htmlspecialchars($label); ?></td>
                    <td>: <?php echo htmlspecialchars($nilai); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <a href="../profil.php" class="btn-watch" style="margin-top: 20px;">&larr; Kembali ke Daftar Keluarga</a>
    </div>
</div>
<?php include '../includes/footer.php'; ?>
