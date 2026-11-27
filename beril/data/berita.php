<?php
/*
 * 25 berita = 5 kategori x 5 berita. Tiap berita punya 1 file di folder berita/.
 * Teks di bawah hanya CONTOH. Ganti 'ringkasan' dan 'isi' dengan berita yang kamu salin,
 * lalu WAJIB isi 'sumber' dengan link asli berita tersebut.
 * Foto: assets/img/berita/berita-01.jpg sampai berita-25.jpg
 */
$data = [
    // ===== IT =====
    ['it', 'IT', 'Mengenal Cloud Computing untuk Pemula',
     'Cloud computing memungkinkan kita menyimpan dan mengolah data lewat internet.',
     'Cloud computing adalah layanan komputasi yang diakses lewat internet, seperti penyimpanan, server, dan database.'],
    ['it', 'IT', 'Tips Menjaga Keamanan Akun Online',
     'Gunakan kata sandi yang kuat dan aktifkan verifikasi dua langkah.',
     'Kata sandi yang panjang dan berbeda untuk tiap akun sangat membantu menjaga keamanan.'],
    ['it', 'IT', 'Perbedaan Jaringan LAN, MAN, dan WAN',
     'Ketiganya dibedakan dari luas jangkauan jaringannya.',
     'LAN mencakup area kecil, MAN mencakup satu kota, sedangkan WAN menghubungkan wilayah yang sangat luas.'],
    ['it', 'IT', 'Mengapa Backup Data Itu Penting',
     'Backup menyelamatkan data dari kerusakan perangkat atau kesalahan manusia.',
     'Simpan salinan data di tempat lain secara berkala agar mudah dipulihkan.'],
    ['it', 'IT', 'Internet of Things dalam Kehidupan Sehari-hari',
     'Perangkat sehari-hari kini bisa terhubung dan dikendalikan lewat internet.',
     'Internet of Things (IoT) menghubungkan benda seperti lampu, kamera, dan sensor ke internet.'],

    // ===== AI =====
    ['ai', 'AI', 'Apa Itu Kecerdasan Buatan?',
     'Kecerdasan buatan adalah sistem komputer yang meniru cara berpikir manusia.',
     'AI adalah cabang ilmu komputer yang membuat mesin mampu belajar dan mengenali pola dari data.'],
    ['ai', 'AI', 'AI Generatif dan Cara Kerjanya',
     'AI generatif dapat membuat teks, gambar, atau suara baru.',
     'AI generatif dilatih dengan data besar sehingga mampu menghasilkan konten baru dari perintah pengguna.'],
    ['ai', 'AI', 'Manfaat AI di Dunia Pendidikan',
     'AI dapat membantu proses belajar menjadi lebih personal.',
     'AI dapat membantu menjelaskan materi dan memberi latihan soal, tetapi peran guru tetap penting.'],
    ['ai', 'AI', 'Etika Penggunaan AI bagi Pelajar',
     'Gunakan AI sebagai alat bantu belajar, bukan untuk menyalin tugas.',
     'Hasil dari AI harus dicek ulang karena bisa saja keliru.'],
    ['ai', 'AI', 'Machine Learning dan Deep Learning',
     'Keduanya bagian dari AI, tetapi tingkat kerumitannya berbeda.',
     'Deep learning adalah bagian dari machine learning yang memakai jaringan saraf tiruan berlapis.'],

    // ===== Politik di Indonesia =====
    ['politik', 'Politik', 'Mengenal Sistem Pemilu di Indonesia',
     'Pemilu dilaksanakan secara langsung, umum, bebas, rahasia, jujur, dan adil.',
     'Pemilu digunakan rakyat untuk memilih presiden, wakil rakyat, dan kepala daerah.'],
    ['politik', 'Politik', 'Peran Mahasiswa dalam Demokrasi',
     'Mahasiswa berperan sebagai pengawas dan penyampai aspirasi masyarakat.',
     'Mahasiswa dapat berpartisipasi lewat diskusi, kajian, dan menyampaikan pendapat secara tertib.'],
    ['politik', 'Politik', 'Apa Itu Otonomi Daerah?',
     'Daerah diberi kewenangan mengatur urusan pemerintahannya sendiri.',
     'Otonomi daerah merupakan hak, wewenang, dan kewajiban daerah otonom untuk mengatur serta mengurus urusan pemerintahan dan kepentingan masyarakatnya sendiri berdasarkan peraturan perundang-undangan dalam kerangka NKRI.'],
    ['politik', 'Politik', 'Pentingnya Literasi Politik bagi Anak Muda',
     'Anak muda perlu memahami politik agar tidak mudah termakan hoaks.',
     'Literasi politik membantu anak muda memahami cara kerja pemerintahan, kebijakan publik, serta hak dan kewajiban warga negara agar dapat berpartisipasi secara kritis dan bertanggung jawab dalam kehidupan demokrasi.'],
    ['politik', 'Politik', 'Cara Kerja Lembaga Legislatif',
     'Lembaga legislatif membuat undang-undang dan mengawasi pemerintah.',
     'Lembaga legislatif bekerja dengan merumuskan dan mengesahkan undang-undang, menyetujui anggaran negara, serta mengawasi jalannya pemerintahan oleh lembaga eksekutif dalam sistem checks and balances. Di Indonesia, fungsi perwakilan ini dijalankan di tingkat pusat oleh DPR, DPD, dan MPR, serta di daerah oleh DPRD (provinsi dan kabupaten/kota).'],

    // ===== Pemrograman =====
    ['pemrograman', 'Pemrograman', 'Belajar PHP dari Nol',
     'PHP banyak dipakai untuk membuat website yang dinamis.',
     'Belajar PHP (Hypertext Preprocessor) dari nol paling efektif dimulai dengan memahami konsep server-side (kode berjalan di server lalu hasilnya dikirim ke browser sebagai HTML), menyiapkan lingkungan lokal, lalu menguasai sintaks dasar sebelum menghubungkannya dengan database. Jika HTML ibarat tampilan luar rumah, PHP adalah pengatur logika dan data di balik layar.'],
    ['pemrograman', 'Pemrograman', 'Mengenal CRUD pada Aplikasi Web',
     'CRUD adalah empat operasi dasar pada data: Create, Read, Update, Delete.',
     'CRUD adalah singkatan dari Create, Read, Update, dan Delete—empat operasi dasar untuk mengelola dan memanipulasi data di database dalam sebuah aplikasi web. Hampir semua fitur interaktif pada situs web, seperti pengelolaan akun pengguna, katalog produk, atau daftar artikel, dibangun di atas konsep ini.'],
    ['pemrograman', 'Pemrograman', 'Dasar Python untuk Pemula',
     'Python dikenal mudah dibaca sehingga cocok untuk belajar.',
     'Python adalah bahasa pemrograman tingkat tinggi yang mudah dibaca, bersifat open-source, dan serbaguna untuk berbagai bidang seperti pengembangan web, analisis data, machine learning, serta otomatisasi tugas.'],
    ['pemrograman', 'Pemrograman', 'Tips Menulis Kode yang Rapi',
     'Kode yang rapi lebih mudah dibaca dan diperbaiki.',
     'Menulis kode yang rapi (clean code) berarti membuat kode mudah dibaca, dipahami, dan dipelihara oleh diri sendiri maupun tim lain. Fokus utamanya adalah kejelasan alur logika, penamaan yang bermakna, dan struktur yang konsisten.'],
    ['pemrograman', 'Pemrograman', 'Pengenalan Git dan GitHub',
     'Git membantu mencatat perubahan kode, GitHub menyimpannya secara online.',
     'adalah sistem kontrol versi (version control system) untuk melacak perubahan kode di komputer secara lokal, sedangkan GitHub adalah platform berbasis web untuk menyimpan, mengelola, dan berkolaborasi pada repositori Git secara daring.'],

    // ===== Lifestyle: keindahan Indonesia timur / Papua =====
    ['lifestyle', 'Lifestyle', 'Keindahan Bawah Laut Raja Ampat',
     'Raja Ampat dikenal dunia karena kekayaan terumbu karang dan biota lautnya.',
     'Raja Ampat di Papua Barat Daya terkenal sebagai salah satu pusat keanekaragaman hayati laut terkaya di dunia karena berada di kawasan Coral Triangle. Perairan ini menampung sekitar 75% jenis terumbu karang dunia, lebih dari 1.600 spesies ikan karang, serta ratusan jenis moluska, penyu, pari manta, dan hiu.'],
    ['lifestyle', 'Lifestyle', 'Pesona Danau Sentani di Jayapura',
     'Danau Sentani menawarkan panorama perbukitan dan kehidupan masyarakat tepi danau.',
     'Danau Sentani adalah danau terluas di Papua yang terletak di kawasan Kabupaten Jayapura (berbatasan dengan Kota Jayapura) dan dikelilingi perbukitan serta Pegunungan Cycloop. Kawasan ini memadukan panorama alam, puluhan pulau kecil, keanekaragaman hayati, serta tradisi puluhan kampung adat di tepian danau.'],
    ['lifestyle', 'Lifestyle', 'Festival Budaya Lembah Baliem',
     'Lembah Baliem di Wamena terkenal dengan festival budayanya.',
     'Festival Budaya Lembah Baliem (FBLB) adalah agenda budaya tahunan di Wamena, Kabupaten Jayawijaya, Papua Pegunungan, yang pertama kali digelar pada tahun 1989. Acara ini bertujuan melestarikan tradisi adat berbagai suku di Lembah Baliem—seperti Dani/Hubula, Lani, dan Yali—sekaligus mendorong pariwisata budaya dan ekonomi kreatif lokal.'],
    ['lifestyle', 'Lifestyle', 'Wisata Alam Kota Pala Fakfak',
     'Fakfak dikenal sebagai Kota Pala dengan panorama alam yang indah.',
     'Wisata Alam Kota Pala Fakfak merujuk pada pesona alam di Kabupaten Fakfak, Papua Barat, yang dijuluki "Kota Pala" karena menjadi penghasil pala (henggi) berkualitas tinggi yang bernilai ekonomi dan budaya bagi masyarakat setempat. Selain perkebunan pala dan hutan hujan tropisnya, Fakfak memiliki wisata air terjun, pulau, pantai, serta kehidupan budaya yang lekat dengan filosofi Satu Tungku Tiga Batu.'],
    ['lifestyle', 'Lifestyle', 'Pantai dan Pulau Eksotis di Papua',
     'Papua menyimpan banyak pantai dan pulau yang masih alami.',
     'Pantai dan pulau eksotis di Papua terkenal dengan pasir putih bersih, air laut jernih, gugusan pulau karst, serta keanekaragaman hayati laut yang tinggi. Kawasan ini tersebar dari wilayah kepala burung hingga pesisir utara Papua dan menawarkan pengalaman mulai dari snorkeling hingga wisata pulau yang tenang.'],
];

$hasil = [];
$hitung = [];
foreach ($data as $i => $d) {
    $no = $i + 1;
    $hitung[$d[0]] = ($hitung[$d[0]] ?? 0) + 1;
    $hasil[$no] = [
        'id'        => $no,
        'kategori'  => $d[1],
        'judul'     => $d[2],
        'ringkasan' => $d[3],
        'isi'       => $d[4],
        'file'      => 'berita/' . $d[0] . '-' . $hitung[$d[0]] . '.php',
        'gambar'    => 'assets/img/berita/berita-' . str_pad((string)$no, 2, '0', STR_PAD_LEFT) . '.jpg',
        'tanggal'   => '27 November 2026',
        'sumber'    => 'adalah pokoknya',   // <- isi link sumber berita, contoh: 'https://www.contoh.com/berita'
    ];
}
return $hasil;
