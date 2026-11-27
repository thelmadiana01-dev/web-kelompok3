<?php
$page_title = "Profil Keluarga - Sulistiyani";
include 'includes/header.php';

$default_key = array_key_first($daftar_keluarga);
$kode_aktif = isset($_GET['anggota']) && isset($daftar_keluarga[$_GET['anggota']]) ? $_GET['anggota'] : $default_key;
$profil_aktif = $daftar_keluarga[$kode_aktif];
?>
<section class="profile-section">
    <h2>Profil Keluarga (Urutan Orang Tua & Saudara)</h2>
    <p>Pilih nama anggota keluarga di bawah ini untuk melihat 10 data diri lengkap beserta fotonya:</p>
    
    <nav class="sub-menu-keluarga">
        <?php foreach ($daftar_keluarga as $key => $item): ?>
            <a href="profil.php?anggota=<?php echo $key; ?>" 
               class="cat-btn <?php echo ($kode_aktif === $key) ? 'active' : ''; ?>">
               <?php echo $item['hubungan']; ?> (<?php echo $item['nama_panggilan']; ?>)
            </a>
        <?php endforeach; ?>
    </nav>

    <article class="profile-card">
        <figure class="profile-photo-box">
            <img src="assets/img/<?php echo $profil_aktif['foto']; ?>" alt="Foto <?php echo $profil_aktif['hubungan']; ?>" class="profile-img">
            <figcaption><strong><?php echo $profil_aktif['hubungan']; ?></strong></figcaption>
        </figure>

        <table class="profile-table">
            <?php foreach ($profil_aktif['biodata'] as $label => $nilai): ?>
                <tr>
                    <th><?php echo $label; ?></th>
                    <td>: <?php echo $nilai; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </article>
</section>
<?php include 'includes/footer.php'; ?>