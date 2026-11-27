PANDUAN MENJALANKAN WEBSITE PROFIL PHP (DARK NEON UI)
=====================================================
1. Ekstrak folder "website_profil_php" ke dalam folder htdocs (XAMPP) atau www (Laragon).
   Contoh: C:\xampp\htdocs\website_profil_php
2. Jalankan Apache di XAMPP / Laragon Control Panel.
3. Buka browser dan akses: http://localhost/website_profil_php/
4. Kustomisasi Data Pribadi:
   - Nama di Sidebar/Hero: Edit file "includes/header.php" dan "index.php".
   - Biodata Anggota Keluarga: Edit file "includes/data.php" (array $keluarga).
   - Foto Profil & 16 Foto Galeri: Ganti gambar di folder "assets/img/profil/" dan "assets/img/galeri/".
   - Video Perkenalan (3 Menit Landscape): Simpan file MP4 dengan nama "video_perkenalan.mp4" di folder "assets/media/".
