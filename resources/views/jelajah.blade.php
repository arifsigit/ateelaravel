<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Pribadi</title>
    <!-- Google Fonts: Playfair Display & Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            margin: 0;
            padding: 0;
            background-color: #080808;
            /* Latar belakang efek pencahayaan emas */
            background-image: 
                radial-gradient(circle at 50% 0%, rgba(212, 175, 55, 0.15) 0%, transparent 60%),
                radial-gradient(circle at 20% 80%, rgba(184, 134, 11, 0.08) 0%, transparent 50%);
            display: flex;
            justify-content: center;
            align-items: center;
            color: #e2e8f0;
            font-family: 'Plus Jakarta Sans', sans-serif;
            overflow-x: hidden;
        }

        .container {
            position: relative;
            /* MEMENUHI SELURUH LAYAR */
            width: 100vw;
            min-height: 100vh;
            
            /* MENGATUR ISI KONTEN DI DALAMNYA AGAR RAPI */
            display: flex;
            flex-direction: column;
            justify-content: space-between; /* Menyebar konten dari atas ke bawah */
            box-sizing: border-box;
            
            /* GANTI padding DENGAN SESUAI KEBUTUHAN LAYAR */
            padding: 40px 60px;
            
            /* TEMA EMAS & ELEGAN (RETAIN EFEK GLASS) */
            background: linear-gradient(145deg, rgba(20, 20, 20, 0.95), rgba(10, 10, 10, 0.98));
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: none; /* Dihapus bordernya agar tidak aneh saat full screen */
            border-radius: 0; /* Menghilangkan sudut tumpul agar pas di layar */
            
            animation: fadeIn 0.9s ease-out;
        }

        /* HEADER & PROFIL */
        .profile-section {
            display: flex;
            align-items: center;
            gap: 32px; /* Jarak antara foto & teks */
            text-align: left;
        }

        .profile-img {
            width: 210px;
            height: 210px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #d4af37;
            box-shadow: 0 0 20px rgba(212, 175, 55, 0.35);
            margin-bottom: 16px;
        }

        .badge {
            display: inline-block;
            padding: 6px 18px;
            background: rgba(212, 175, 55, 0.08);
            border: 1px solid rgba(212, 175, 55, 0.4);
            border-radius: 50px;
            color: #d4af37;
            font-size: 0.8rem;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 16px;
        }

        h1 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            font-weight: 700;
            line-height: 1.25;
            margin-bottom: 8px;
            background: linear-gradient(135deg, #fff6d6 0%, #d4af37 50%, #aa7c11 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .subtitle {
            color: #a1a1aa;
            font-size: 1rem;
            font-weight: 300;
            max-width: 550px;
            margin: 0 auto;
            line-height: 1.6;
        }

        /* JUDUL BAGIAN (SECTION) */
        .section-title {
            font-family: 'Playfair Display', serif;
            color: #d4af37;
            font-size: 1.5rem;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .section-title::after {
            content: '';
            flex: 1;
            height: 1px;
            background: linear-gradient(90deg, rgba(212, 175, 55, 0.3), transparent);
        }

        /* SKILLS / KEAHLIAN */
        .skills-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 40px;
        }

        .skill-tag {
            background: rgba(212, 175, 55, 0.06);
            border: 1px solid rgba(212, 175, 55, 0.25);
            color: #fff6d6;
            padding: 8px 16px;
            border-radius: 8px;
            font-size: 0.85rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .skill-tag:hover {
            border-color: #d4af37;
            background: rgba(212, 175, 55, 0.15);
            transform: translateY(-2px);
        }

        /* GRID PROYEK / PORTOFOLIO */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }

        .project-card {
            background: rgba(255, 255, 255, 0.02);
            border: 1px solid rgba(212, 175, 55, 0.15);
            border-radius: 12px;
            padding: 24px;
            transition: all 0.3s ease;
        }

        .project-card:hover {
            border-color: rgba(212, 175, 55, 0.5);
            transform: translateY(-4px);
            background: rgba(212, 175, 55, 0.04);
        }

        .project-card h3 {
            font-family: 'Playfair Display', serif;
            color: #d4af37;
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .project-card p {
            color: #94a3b8;
            font-size: 0.88rem;
            line-height: 1.6;
            font-weight: 300;
        }

        /* KONTAK & SOSIAL MEDIA */
        .contact-section {
            text-align: center;
            background: rgba(212, 175, 55, 0.03);
            border: 1px solid rgba(212, 175, 55, 0.15);
            border-radius: 12px;
            padding: 24px;
            margin-bottom: 40px;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 16px;
            margin-top: 16px;
            flex-wrap: wrap;
        }

        .social-link {
            color: #d4af37;
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            padding: 6px 14px;
            border: 1px solid rgba(212, 175, 55, 0.3);
            border-radius: 6px;
            transition: all 0.3s ease;
        }

        .social-link:hover {
            background: #d4af37;
            color: #000;
        }

        /* TOMBOL KEMBALI */
        .footer-action {
            text-align: center;
        }

        .btn-back {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 28px;
            border-radius: 8px;
            font-size: 0.9rem;
            font-weight: 600;
            text-decoration: none;
            color: #d4af37;
            border: 1px solid rgba(212, 175, 55, 0.4);
            background: transparent;
            transition: all 0.3s ease;
        }

        .btn-back:hover {
            background: rgba(212, 175, 55, 0.1);
            color: #fff6d6;
            border-color: #d4af37;
            transform: translateY(-2px);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 600px) {
            .container {
                padding: 32px 20px;
            }
            h1 {
                font-size: 2rem;
            }
            .projects-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Seksi Profil Utama -->
        <div class="profile-section">
            <img src="{{ asset('foto-profil.jpg') }}" alt="Foto Profil" class="profile-img">
            <div>
                <span class="badge">Web Developer</span>
            </div>
            <h1>Nama Kamu</h1>
            <p class="subtitle">Seorang pengembang web yang berfokus pada pembuatan aplikasi web modern, rapi, dan responsif menggunakan Laravel.</p>
        </div>

        <!-- Seksi Keahlian -->
        <h2 class="section-title">Keahlian & Teknologi</h2>
        <div class="skills-container">
            <span class="skill-tag">Laravel</span>
            <span class="skill-tag">PHP</span>
            <span class="skill-tag">HTML5 & CSS3</span>
            <span class="skill-tag">JavaScript</span>
            <span class="skill-tag">MySQL</span>
            <span class="skill-tag">Git & GitHub</span>
        </div>

        <!-- Seksi Proyek / Karya -->
        <h2 class="section-title">Proyek Pilihan</h2>
        <div class="projects-grid">
            <div class="project-card">
                <h3>Aplikasi Web Laravel</h3>
                <p>Proyek web responsif dibangun menggunakan framework Laravel dengan fitur manajemen rute dan tampilan kustom.</p>
            </div>
            <div class="project-card">
                <h3>Sistem Manajemen Data</h3>
                <p>Sistem pengolahan data terintegrasi menggunakan database MySQL untuk kemudahan pengelolaan informasi.</p>
            </div>
            <div class="project-card">
                <h3>Desain UI/UX Elegan</h3>
                <p>Perancangan antarmuka pengguna dengan tema modern, efek glassmorphism, dan transisi interaktif.</p>
            </div>
        </div>

        <!-- Seksi Kontak -->
        <div class="contact-section">
            <h3 style="color: #fff6d6; font-family: 'Playfair Display', serif; font-size: 1.2rem;">Hubungi Saya</h3>
            <p style="color: #94a3b8; font-size: 0.88rem; margin-top: 6px;">Mari terhubung untuk berkolaborasi atau sekadar menyapa!</p>
            
            <div class="social-links">
                <a href="#" class="social-link">GitHub</a>
                <a href="#" class="social-link">LinkedIn</a>
                <a href="https://www.instagram.com/arifsigit_/" class="social-link">Instagram</a>
                <a href="mailto:email@contoh.com" class="social-link">Email</a>
            </div>
        </div>

        <!-- Tombol Navigasi Kembali -->
        <div class="footer-action">
            <a href="/" class="btn-back">&larr; Kembali ke Beranda</a>
        </div>
    </div>

</body>
</html>