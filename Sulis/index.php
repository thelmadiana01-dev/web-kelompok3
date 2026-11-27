<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Utama Kelompok - D3 Manajemen Informatika</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Segoe UI', Tahoma, sans-serif; background: #0f172a; color: #1e293b; min-height: 100vh; display: flex; align-items: center; justify-content: center; padding: 20px; }
        .portal-box { max-width: 820px; width: 100%; background: #ffffff; padding: 40px; border-radius: 12px; box-shadow: 0 10px 25px rgba(0,0,0,0.3); text-align: center; }
        h1 { color: #0f172a; margin-bottom: 10px; }
        p { color: #475569; margin-bottom: 30px; }
        .member-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 16px; }
        .member-card { display: block; padding: 20px; background: #2563eb; color: #ffffff; text-decoration: none; border-radius: 8px; font-weight: 600; transition: 0.25s; }
        .member-card:hover { background: #1d4ed8; transform: translateY(-3px); }
        .member-card span { display: block; font-size: 0.85rem; font-weight: normal; margin-top: 5px; opacity: 0.9; }
    </style>
</head>
<body>
    <main class="portal-box">
        <header>
            <h1>Portal Website Profil Kelompok</h1>
            <p>Program Studi D3 Manajemen Informatika • Pilih nama anggota untuk membuka website profil:</p>
        </header>
        <section class="member-grid">
            <a href="sulis_anggota_5/index.php" class="member-card">
                1. Sulistiyani
                <span>NIM: 16325044</span>
            </a>
            <a href="anggota_2/index.php" class="member-card">
                2. Nama Anggota 2
                <span>NIM: -</span>
            </a>
            <a href="anggota_3/index.php" class="member-card">
                3. Nama Anggota 3
                <span>NIM: -</span>
            </a>
        </section>
    </main>
</body>
</html>