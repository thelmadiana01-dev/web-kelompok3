<?php
// Tampilkan foto; jika file belum ada, tampilkan inisial.
function avatar($path, $peran, $kelas = 'av') {
  $ada = file_exists(__DIR__.'/../'.$path);
  $ini = htmlspecialchars(mb_substr(preg_replace('/^Anak ke-/','',$peran),0,2));
  return $ada ? "<img class=\"$kelas\" src=\"$path\" alt=\"Foto ".htmlspecialchars($peran)."\">" : "<span class=\"$kelas ph\" aria-hidden=\"true\">$ini</span>";
}
