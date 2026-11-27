<?php
// Data Anggota Keluarga (Urutan: Bapak, Mama, Anak 1 s/d Anak 4 - silakan tambah/sesuaikan jumlah saudara)
$keluarga = [
    'bapak' => [
        'nama_menu' => '1. Bapak (Ayah)',
        'foto' => 'assets/img/profil/bapak.jpg',
        'biodata' => [
            'Nama Lengkap' => 'Sauni Rumbati',
            'Status Keluarga' => 'Kepala Keluarga / Ayah',
            'Pekerjaan' => 'Satpam',
            'Jenis Kelamin' => 'Laki-laki',
            'Tempat, Tanggal Lahir' => 'Fakfak, 12 Mei 1986',
            'Alamat' => 'Jl. mambruk dalam, Tanama Atas',
            'Asal Daerah' => 'Fakfak, Papua Barat',
            'Makanan Kesukaan' => 'Ayam Bakar',
            'Hobi' => 'Menyelam Mencari Ikan',
            'Akun Media Sosial' => 'Facebook: Arfal Made'
        ]
    ],
    'mama' => [
        'nama_menu' => '2. Mama (Ibu)',
        'foto' => 'assets/img/profil/mama.jpg',
        'biodata' => [
            'Nama Lengkap' => 'Nursiah Temongmere',
            'Status Keluarga' => 'Ibu Rumah Tangga / Mama',
            'Pekerjaan' => 'P3K',
            'Jenis Kelamin' => 'Perempuan',
            'Tempat, Tanggal Lahir' => 'Fakfak, 24 Agustus 1985',
            'Alamat' => 'Jl. mambruk dalam, Tanama Atas',
            'Asal Daerah' => 'Fakfak, Papua Papua Barat',
            'Makanan Kesukaan' => 'Bakso',
            'Hobi' => 'Menanam',
            'Akun Media Sosial' => 'Facebook: Nursia Temongmere'
        ]
    ],
    'anak_1' => [
        'nama_menu' => '3. Saya (Kakak Pertama)',
        'foto' => 'assets/img/profil/anak_1.jpg',
        'biodata' => [
            'Nama Lengkap' => 'Falih Armansyah Temongmere',
            'NIM' => '16325038',
            'Program Studi' => 'Manajemen Informatika',
            'Jenis Kelamin' => 'Laki-laki',
            'Alamat' => 'Jl. Warah Made, Danaweria',
            'Asal Daerah' => 'Fakfak, Papua Barat',
            'Makanan Kesukaan' => 'Nasi Goreng',
            'Hobi' => 'Coding & Futsal',
            'Cita-cita' => 'Polisi IT',
            'Akun Media Sosial' => 'Instagram: _falihh'
        ]
    ],
    'anak_2' => [
        'nama_menu' => '4. Kakak Kedua',
        'foto' => 'assets/img/profil/anak_2.jpg',
        'biodata' => [
            'Nama Lengkap' => 'Arbil Sanur Alnafi Rumbati',
            'Status Keluarga' => 'Anak Kedua (Kakak)',
            'Pekerjaan / Pendidikan' => 'Sekolah Dasar',
            'Jenis Kelamin' => 'Laki-laki',
            'Tempat, Tanggal Lahir' => 'Fakfak, 18 Juni 2015',
            'Alamat' => 'Jl. mambruk dalam, Tanama Atas',
            'Asal Daerah' => 'Fakfak, Papua Barat',
            'Makanan Kesukaan' => 'Ayam Goreng',
            'Hobi' => 'Sepak Bola',
            'Akun Media Sosial' => 'Tidak Ada'
        ]
    ],
    'anak_3' => [
        'nama_menu' => '5. kakak Ketiga',
        'foto' => 'assets/img/profil/anak_3.jpg',
        'biodata' => [
            'Nama Lengkap' => 'Alfayad Rumbati Patiran',
            'Status Keluarga' => 'Anak Ketiga (Kakak)',
            'Pekerjaan / Pendidikan' => 'Sekolah Dasar',
            'Jenis Kelamin' => 'Laki-laki',
            'Tempat, Tanggal Lahir' => 'Fakfak, 1 Juni 2019',
            'Alamat' => 'Jl. mambruk dalam, Tanama Atas',
            'Asal Daerah' => 'Fakfak, Papua Barat',
            'Makanan Kesukaan' => 'Roti Bakar',
            'Hobi' => 'Skuter',
            'Akun Media Sosial' => 'Tidak Ada'
        ]
    ],
    'anak_4' => [
        'nama_menu' => '6. Adik Keempat',
        'foto' => 'assets/img/profil/anak_4.jpg',
        'biodata' => [
            'Nama Lengkap' => 'Fitrah Qiara Rumbati',
            'Status Keluarga' => 'Anak Keempat (Adik Bungsu)',
            'Pendidikan / Sekolah' => 'Belum Sekolah',
            'Jenis Kelamin' => 'Perempuan',
            'Tempat, Tanggal Lahir' => 'Fakfak, 10 Maret 2026',
            'Alamat' => 'Jl. mambruk dalam, Tanama Atas',
            'Asal Daerah' => 'Fakfak, Papua Barat',
            'Makanan Kesukaan' => 'Susu',
            'Hobi' => 'Bermain',
            'Akun Media Sosial' => 'Tidak Ada'
        ]
    ]
];

// Data 5 Kategori Berita x 5 Berita = 25 File Berita Terpisah
$kategori_berita = [
    'it' => [
        'nama' => 'Teknologi Informasi (IT)',
        'deskripsi' => 'Perkembangan infrastruktur digital, keamanan siber, dan transformasi teknologi informasi terkini.',
        'items' => [
            [
                'file' => 'berita/it_1.php',
                'judul' => 'Percepatan Pembangunan Infrastruktur Jaringan Fiber Optik di Kawasan Indonesia Timur',
                'tanggal' => '12 November 2026',
                'ringkasan' => 'Pemerintah bersama penyedia layanan telekomunikasi terus memperluas jangkauan kabel serat optik guna mempercepat pemerataan akses internet berkecepatan tinggi.',
                'sumber' => 'https://komdigi.go.id/berita/infrastruktur-fiber-optik-indonesia-timur'
            ],
            [
                'file' => 'berita/it_2.php',
                'judul' => 'Pentingnya Penerapan Zero Trust Architecture untuk Keamanan Data Instansi Pendidikan',
                'tanggal' => '14 November 2026',
                'ringkasan' => 'Ancaman serangan siber yang kian kompleks mendorong kampus dan sekolah menerapkan verifikasi berlapis pada setiap akses jaringan internal.',
                'sumber' => 'https://bssn.go.id/artikel/penerapan-zero-trust-architecture'
            ],
            [
                'file' => 'berita/it_3.php',
                'judul' => 'Adopsi Komputasi Awan (Cloud Computing) Meningkatkan Efisiensi Operasional UMKM',
                'tanggal' => '16 November 2026',
                'ringkasan' => 'Layanan berbasis cloud membantu pelaku usaha kecil mengelola inventaris dan transaksi secara real-time tanpa investasi server fisik yang mahal.',
                'sumber' => 'https://tekno.kompas.com/read/2026/11/16/cloud-computing-umkm'
            ],
            [
                'file' => 'berita/it_4.php',
                'judul' => 'Perkembangan Teknologi Edge Computing dalam Mendukung Internet of Things (IoT)',
                'tanggal' => '19 November 2026',
                'ringkasan' => 'Pemrosesan data langsung di dekat sumber perangkat sensor terbukti memangkas latensi jaringan secara signifikan.',
                'sumber' => 'https://www.cnnindonesia.com/teknologi/edge-computing-iot-2026'
            ],
            [
                'file' => 'berita/it_5.php',
                'judul' => 'Standar Baru Enkripsi Pasca-Kuantum Mulai Diuji Coba oleh Perusahaan Teknologi Global',
                'tanggal' => '22 November 2026',
                'ringkasan' => 'Algoritma kriptografi tahan kuantum dipersiapkan untuk melindungi data sensitif dari potensi dekripsi komputer kuantum di masa depan.',
                'sumber' => 'https://inet.detik.com/security/enkripsi-pasca-kuantum'
            ]
        ]
    ],
    'ai' => [
        'nama' => 'Artificial Intelligence (AI)',
        'deskripsi' => 'Inovasi kecerdasan buatan, pembelajaran mesin, dan pemanfaatan AI di berbagai sektor kehidupan.',
        'items' => [
            [
                'file' => 'berita/ai_1.php',
                'judul' => 'Pemanfaatan Kecerdasan Buatan untuk Deteksi Dini Penyakit Tanaman Pangan Lokal',
                'tanggal' => '10 November 2026',
                'ringkasan' => 'Aplikasi berbasis computer vision membantu petani mengenali hama dan penyakit daun hanya melalui kamera ponsel pintar.',
                'sumber' => 'https://brin.go.id/news/ai-deteksi-penyakit-tanaman'
            ],
            [
                'file' => 'berita/ai_2.php',
                'judul' => 'Model Bahasa Besar (LLM) Multibahasa Kini Mampu Menerjemahkan Bahasa Daerah Nusantara',
                'tanggal' => '13 November 2026',
                'ringkasan' => 'Kolaborasi peneliti dan komunitas lokal berhasil memperkaya korpus digital untuk pelestarian bahasa daerah melalui teknologi NLP.',
                'sumber' => 'https://tekno.tempo.co/read/ai-pelestarian-bahasa-daerah'
            ],
            [
                'file' => 'berita/ai_3.php',
                'judul' => 'Etika Penggunaan AI Generatif di Lingkungan Akademik dan Perguruan Tinggi',
                'tanggal' => '15 November 2026',
                'ringkasan' => 'Perguruan tinggi menyusun pedoman pemanfaatan AI sebagai asisten riset yang tetap menjunjung tinggi orisinalitas karya ilmiah.',
                'sumber' => 'https://kemdikbud.go.id/main/blog/2026/11/panduan-ai-perguruan-tinggi'
            ],
            [
                'file' => 'berita/ai_4.php',
                'judul' => 'Otomatisasi Analisis Citra Satelit Berbasis AI untuk Pemantauan Hutan Tropis Papua',
                'tanggal' => '18 November 2026',
                'ringkasan' => 'Teknologi machine learning mempercepat pemetaan tutupan hutan dan deteksi perubahan ekosistem secara akurat.',
                'sumber' => 'https://www.mongabay.co.id/2026/11/18/ai-pemantauan-hutan-papua'
            ],
            [
                'file' => 'berita/ai_5.php',
                'judul' => 'Asisten Virtual Berbasis Agentic AI Mulai Banyak Diterapkan pada Layanan Publik',
                'tanggal' => '21 November 2026',
                'ringkasan' => 'Sistem AI otonom membantu masyarakat mengurus administrasi kependudukan dan perizinan dengan waktu tunggu jauh lebih singkat.',
                'sumber' => 'https://tekno.kompas.com/read/2026/11/21/agentic-ai-layanan-publik'
            ]
        ]
    ],
    'politik' => [
        'nama' => 'Politik di Indonesia',
        'deskripsi' => 'Dinamika kebijakan publik, tata kelola pemerintahan, dan perkembangan demokrasi di Indonesia.',
        'items' => [
            [
                'file' => 'berita/politik_1.php',
                'judul' => 'Penguatan Otonomi Daerah dan Percepatan Pembangunan Wilayah Tertinggal di Tahun 2026',
                'tanggal' => '11 November 2026',
                'ringkasan' => 'Pemerintah pusat dan daerah menyelaraskan program strategis nasional agar alokasi anggaran tepat sasaran bagi kesejahteraan masyarakat.',
                'sumber' => 'https://www.antaranews.com/berita/penguatan-otonomi-daerah-2026'
            ],
            [
                'file' => 'berita/politik_2.php',
                'judul' => 'DPR dan Pemerintah Bahas Rancangan Undang-Undang Perlindungan Infrastruktur Digital Nasional',
                'tanggal' => '14 November 2026',
                'ringkasan' => 'Regulasi baru ini dirancang untuk memperkuat kedaulatan data nasional serta melindungi sistem elektronik vital negara.',
                'sumber' => 'https://nasional.kompas.com/read/2026/11/14/ruu-infrastruktur-digital'
            ],
            [
                'file' => 'berita/politik_3.php',
                'judul' => 'Partisipasi Pemilih Muda dalam Mengawal Transparansi Kebijakan Publik Daerah',
                'tanggal' => '17 November 2026',
                'ringkasan' => 'Generasi muda memanfaatkan platform digital untuk menyampaikan aspirasi serta mengawasi realisasi program pembangunan daerah.',
                'sumber' => 'https://www.mediaindonesia.com/politik-dan-hukum/partisipasi-pemilih-muda'
            ],
            [
                'file' => 'berita/politik_4.php',
                'judul' => 'Sinergi Pemerintah Pusat dan Provinsi di Tanah Papua dalam Peningkatan Mutu Pendidikan',
                'tanggal' => '20 November 2026',
                'ringkasan' => 'Program beasiswa afirmasi dan pembangunan fasilitas sekolah menjadi fokus utama kerja sama lintas kementerian.',
                'sumber' => 'https://www.republika.co.id/berita/sinergi-pendidikan-tanah-papua'
            ],
            [
                'file' => 'berita/politik_5.php',
                'judul' => 'Reformasi Birokrasi Digital Permudah Akses Pelayanan Terpadu Satu Pintu di Kabupaten/Kota',
                'tanggal' => '24 November 2026',
                'ringkasan' => 'Integrasi sistem pemerintahan berbasis elektronik memangkas rantai birokrasi dan meningkatkan akuntabilitas pelayanan.',
                'sumber' => 'https://menpan.go.id/site/berita-terkini/reformasi-birokrasi-digital'
            ]
        ]
    ],
    'pemrograman' => [
        'nama' => 'Pemrograman',
        'deskripsi' => 'Tutorial, tren bahasa pemrograman, arsitektur perangkat lunak, dan pengembangan web modern.',
        'items' => [
            [
                'file' => 'berita/pemrograman_1.php',
                'judul' => 'Mengenal Arsitektur Modular pada PHP untuk Pengembangan Website yang Terstruktur',
                'tanggal' => '09 November 2026',
                'ringkasan' => 'Pemisahan komponen tampilan menggunakan include dan require mempermudah pemeliharaan kode serta menghindari duplikasi.',
                'sumber' => 'https://www.php.net/manual/en/function.include.php'
            ],
            [
                'file' => 'berita/pemrograman_2.php',
                'judul' => 'Praktik Terbaik Mengamankan Aplikasi Web PHP dari Serangan XSS dan SQL Injection',
                'tanggal' => '13 November 2026',
                'ringkasan' => 'Penggunaan htmlspecialchars() dan Prepared Statements PDO merupakan langkah fundamental dalam menjaga keamanan aplikasi web.',
                'sumber' => 'https://owasp.org/www-project-top-ten/'
            ],
            [
                'file' => 'berita/pemrograman_3.php',
                'judul' => 'Mengoptimalkan Performa Tata Letak Responsif Menggunakan CSS Grid dan Flexbox',
                'tanggal' => '16 November 2026',
                'ringkasan' => 'Kombinasi CSS Grid dan Flexbox memungkinkan pengembang menyusun galeri foto dan kartu berita yang rapi di berbagai ukuran layar.',
                'sumber' => 'https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_grid_layout'
            ],
            [
                'file' => 'berita/pemrograman_4.php',
                'judul' => 'Membangun Fitur Lightbox Interaktif Tanpa Library Berat Menggunakan Vanilla JavaScript',
                'tanggal' => '19 November 2026',
                'ringkasan' => 'Dengan DOM manipulation dan event listener keyboard, galeri foto dapat dilengkapi navigasi geser kiri-kanan secara ringan.',
                'sumber' => 'https://javascript.info/introduction-browser-events'
            ],
            [
                'file' => 'berita/pemrograman_5.php',
                'judul' => 'Pentingnya Version Control System (Git) dalam Manajemen Proyek Perangkat Lunak Mahasiswa',
                'tanggal' => '23 November 2026',
                'ringkasan' => 'Git membantu mencatat riwayat perubahan kode dan mempermudah kolaborasi tim saat mengerjakan tugas pengembangan sistem.',
                'sumber' => 'https://git-scm.com/book/id/v2'
            ]
        ]
    ],
    'lifestyle' => [
        'nama' => 'Lifestyle (Keindahan Papua & Indonesia Timur)',
        'deskripsi' => 'Eksplorasi pesona alam, budaya, dan destinasi wisata memukau di Tanah Papua dan Indonesia Timur.',
        'items' => [
            [
                'file' => 'berita/lifestyle_1.php',
                'judul' => 'Pesona Gugusan Pulau Karst Wayag dan Piaynemo di Raja Ampat, Papua Barat Daya',
                'tanggal' => '10 November 2026',
                'ringkasan' => 'Keindahan laut biru jernih berpadu dengan gugusan pulau karst ikonik menjadikan Raja Ampat sebagai surga bahari kebanggaan Indonesia.',
                'sumber' => 'https://www.indonesia.travel/id/id/destinasi/maluku-papua/raja-ampat'
            ],
            [
                'file' => 'berita/lifestyle_2.php',
                'judul' => 'Menikmati Ketenangan Danau Sentani dan Festival Budaya di Kaki Pegunungan Cycloops',
                'tanggal' => '13 November 2026',
                'ringkasan' => 'Danau Sentani di Jayapura menawarkan panorama perbukitan hijau serta kekayaan seni lukis kulit kayu khas masyarakat setempat.',
                'sumber' => 'https://www.indonesia.travel/id/id/ide-liburan/pesona-danau-sentani-jayapura'
            ],
            [
                'file' => 'berita/lifestyle_3.php',
                'judul' => 'Keajaiban Ekosistem Bawah Laut Taman Nasional Teluk Cenderawasih di Nabire',
                'tanggal' => '16 November 2026',
                'ringkasan' => 'Perairan Teluk Cenderawasih dikenal sebagai habitat alami hiu paus yang ramah serta ratusan spesies terumbu karang endemik.',
                'sumber' => 'https://ksdae.menlhk.go.id/berita/taman-nasional-teluk-cenderawasih'
            ],
            [
                'file' => 'berita/lifestyle_4.php',
                'judul' => 'Pesona Lembah Baliem di Wamena: Perpaduan Alam Pegunungan Sejuk dan Tradisi Luhur',
                'tanggal' => '20 November 2026',
                'ringkasan' => 'Terletak di Pegunungan Jayawijaya, Lembah Baliem memikat wisatawan dengan kabut pagi yang syahdu serta keramahan budaya suku Dani.',
                'sumber' => 'https://www.indonesia.travel/id/id/destinasi/maluku-papua/lembah-baliem'
            ],
            [
                'file' => 'berita/lifestyle_5.php',
                'judul' => 'Eksotisme Pantai Base-G dan Teluk Youtefa sebagai Destinasi Akhir Pekan Favorit di Jayapura',
                'tanggal' => '25 November 2026',
                'ringkasan' => 'Pasir putih Pantai Base-G dan kemegahan Jembatan Merah Youtefa menjadi daya tarik utama wisata pesisir Kota Jayapura.',
                'sumber' => 'https://travel.kompas.com/read/2026/11/25/wisata-pantai-base-g-jayapura'
            ]
        ]
    ]
];
?>
