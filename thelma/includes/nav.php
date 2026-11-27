<?php
$_menu = ['beranda'=>['Beranda','index.php'],'profil'=>['Profil','profil.php'],'av'=>['Audio Video','audio-video.php'],'galeri'=>['Galeri','galeri.php'],'berita'=>['Berita','berita.php'],'about'=>['About','about.php']];
$_home = !empty($navHome);
if (!$_home): ?><header class="top"><div class="wrap bar">
  <a class="brand" href="<?= $base ?>index.php"><?= htmlspecialchars($namaSitus) ?></a>
<?php endif; ?>
  <nav aria-label="Menu utama" class="<?= $_home ? 'navhome' : '' ?>"><ul class="menu">
  <?php foreach ($_menu as $_mk => $_m): ?>
    <li class="<?= ($_mk==='profil'||$_mk==='berita')?'has-sub':'' ?>"><a class="<?= $aktif===$_mk?'on':'' ?>" href="<?= $base.$_m[1] ?>"><?= $_m[0] ?></a>
    <?php if ($_mk==='profil'): ?><ul class="sub"><?php foreach ($daftar as $_si=>$_sp): ?><li><a href="<?= $base ?>profil.php?id=<?= $_si ?>"><?= $_sp ?></a></li><?php endforeach; ?></ul><?php endif; ?>
    <?php if ($_mk==='berita'): ?><ul class="sub"><?php foreach ($kategori as $_si=>$_sp): ?><li><a href="<?= $base ?>berita.php?k=<?= $_si ?>"><?= $_sp ?></a></li><?php endforeach; ?></ul><?php endif; ?></li>
  <?php endforeach; ?>
  </ul></nav>
<?php if (!$_home): ?></div></header><?php endif; ?>
