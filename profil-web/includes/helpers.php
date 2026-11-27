<?php
// Fungsi bantu. $base = '' untuk file di folder utama, '../' untuk file di subfolder.
function gambar(string $path, string $label = 'Foto'): string
{
    global $base;
    $b = $base ?? '';
    // Terima ekstensi apa saja: jpg, jpeg, png, webp (huruf besar/kecil)
    $tanpa_ext = preg_replace('/\.[^.\/]+$/', '', $path);
    foreach (['jpg', 'jpeg', 'png', 'webp', 'JPG', 'JPEG', 'PNG', 'WEBP'] as $ext) {
        if (is_file(__DIR__ . '/../' . $tanpa_ext . '.' . $ext)) {
            return htmlspecialchars($b . $tanpa_ext . '.' . $ext);
        }
    }
    $label = htmlspecialchars($label, ENT_QUOTES);
    $svg = '<svg xmlns="http://www.w3.org/2000/svg" width="400" height="300">'
         . '<rect width="100%" height="100%" fill="#e5e5e5"/>'
         . '<text x="50%" y="50%" fill="#666" font-family="sans-serif" font-size="22" '
         . 'text-anchor="middle" dominant-baseline="middle">' . $label . '</text></svg>';
    return 'data:image/svg+xml;base64,' . base64_encode($svg);
}

// Ambil semua file dengan ekstensi tertentu dari sebuah folder (urut nama)
function daftar_file(string $folder, array $ekstensi): array
{
    $hasil = [];
    foreach (scandir(__DIR__ . '/../' . $folder) ?: [] as $f) {
        if (in_array(strtolower(pathinfo($f, PATHINFO_EXTENSION)), $ekstensi, true)) {
            $hasil[] = $folder . '/' . $f;
        }
    }
    sort($hasil, SORT_NATURAL | SORT_FLAG_CASE);
    return $hasil;
}

function e(string $teks): string
{
    return htmlspecialchars($teks, ENT_QUOTES, 'UTF-8');
}
