<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Zilah</title>
    <style>
        /* Reset dasar */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Styling Umum */
        body {
            font-family: Arial, sans-serif;
            background: #f8f9fa;
            color: #222;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Header */
        header {
            background: #2c3e50; /* Biru tua */
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 24px;
            font-weight: bold;
        }

        /* Navigasi dengan Grid */
        .nav {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* 4 kolom menu */
            background: #34495e; /* Biru gelap */
            text-align: center;
        }

        .nav a {
            color: white;
            text-decoration: none;
            padding: 15px;
            font-weight: bold;
            transition: 0.3s;
        }

        .nav a:hover {
            background: #1abc9c; /* Hijau Toska */
        }

        /* Layout Konten */
        .container {
            display: grid;
            grid-template-columns: 250px 1fr 250px; /* Sidebar - Konten - Widget */
            gap: 20px;
            padding: 20px;
            flex: 1;
        }

        /* Sidebar */
        .sidebar {
            background: #2c3e50;
            color: white;
            padding: 20px;
            border-radius: 10px;
        }

        /* Konten Utama */
        .content {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .content h2 {
            color: #2c3e50;
        }

        /* Widget Kanan */
        .widget {
            background: #1abc9c;
            color: white;
            padding: 20px;
            border-radius: 10px;
        }

        /* Footer */
        footer {
            background: #2c3e50;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 20px;
        }

        /* Responsif: Tampilan untuk layar kecil */
        @media (max-width: 768px) {
            .container {
                grid-template-columns: 1fr; /* Semua menjadi 1 kolom */
            }

            .nav {
                grid-template-columns: 1fr; /* Menu menjadi vertikal */
            }

            .sidebar, .widget {
                display: none; /* Sembunyikan sidebar & widget di layar kecil */
            }
        }
    </style>
</head>
<body>

    <header>
        <h1>Website Zilah</h1>
    </header>

    <nav class="nav">
        <a href="#">Beranda</a>
        <a href="#">Tentang</a>
        <a href="#">Layanan</a>
        <a href="#">Kontak</a>
    </nav>

    <div class="container">
        <aside class="sidebar">
            <h3>Menu Sidebar</h3>
            <ul>
                <li><a href="#" style="color: white;">Link 1</a></li>
                <li><a href="#" style="color: white;">Link 2</a></li>
                <li><a href="#" style="color: white;">Link 3</a></li>
            </ul>
        </aside>

        <main class="content">
            <h2>Selamat Datang!</h2>
            <p>Perkenalkan, saya <strong>Zilah</strong> dengan NIM <strong>230631100038</strong>.</p>
            <p>Ini adalah contoh website yang menggunakan kombinasi <strong>CSS Flexbox</strong> dan <strong>CSS Grid</strong>.</p>
        </main>

        <aside class="widget">
            <h3>Informasi</h3>
            <p>Widget ini bisa berisi berita terbaru atau informasi penting lainnya.</p>
        </aside>
    </div>

    <footer>
        <p>Hak Cipta &copy; 2025 - Dibuat oleh <strong>Zilah</strong></p>
    </footer>

</body>
</html>
