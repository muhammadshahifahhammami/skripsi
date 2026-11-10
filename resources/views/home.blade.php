
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduSmart - Belajar Jadi Mudah</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f8ff;
            color: #243047;
        }

        .navbar {
            background: #fff;
        }

        .brand {
            color: #2563eb;
            font-weight: 800;
            font-size: 25px;
        }

        .hero {
            background: linear-gradient(135deg, #2563eb, #60a5fa);
            color: white;
            padding: 85px 0;
            border-radius: 0 0 35px 35px;
        }

        .hero h1 {
            font-size: clamp(32px, 5vw, 52px);
            font-weight: 800;
        }

        .hero p {
            font-size: 18px;
            line-height: 1.7;
        }

        .btn-custom {
            border-radius: 12px;
            padding: 12px 24px;
            font-weight: bold;
        }

        .btn-light-custom {
            background: white;
            color: #2563eb;
            border: 1px solid white;
        }

        .btn-light-custom:hover {
            background: #eff6ff;
            color: #1d4ed8;
        }

        .feature-card {
            background: white;
            border: 0;
            border-radius: 18px;
            padding: 28px;
            height: 100%;
            box-shadow: 0 5px 20px rgba(30, 64, 175, 0.07);
            transition: transform 0.2s;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .feature-icon {
            font-size: 38px;
            margin-bottom: 15px;
        }

        .section-title {
            font-weight: 800;
            color: #1e3a8a;
        }

        footer {
            background: #172554;
            color: white;
            padding: 25px 0;
        }
    </style>
</head>

<body>

    <!-- Navigasi -->
    <nav class="navbar navbar-expand-lg shadow-sm">
        <div class="container">
            <a class="navbar-brand brand" href="{{ url('/') }}">
                EduSmart
            </a>

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menuUtama"
                aria-controls="menuUtama"
                aria-expanded="false"
                aria-label="Buka navigasi"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menuUtama">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-3">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/') }}">
                            Beranda
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#fitur">
                            Fitur
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">
                            Tentang
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="btn btn-primary btn-custom"
                            href="{{ route('login') }}"
                        >
                            Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Bagian utama -->
    <section class="hero">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-md-7">
                    <span class="badge bg-light text-primary mb-3 p-2">
                        Platform Belajar SD/MI
                    </span>

                    <h1>
                        Belajar Lebih Mudah,
                        Raih Prestasi Bersama EduSmart!
                    </h1>

                    <p class="mt-4 mb-4">
                        Akses materi pembelajaran, kerjakan latihan soal,
                        dan lihat hasil belajarmu dalam satu platform
                        pembelajaran online.
                    </p>

                    <!-- Tombol menuju halaman login -->
                    <a
                        href="{{ route('login') }}"
                        class="btn btn-light-custom btn-custom me-2 mb-2"
                    >
                        Mulai Belajar
                    </a>

                    <a
                        href="#fitur"
                        class="btn btn-outline-light btn-custom mb-2"
                    >
                        Jelajahi Fitur
                    </a>
                </div>

                <div class="col-md-5 text-center">
                    <div class="bg-white text-primary rounded-5 p-5 shadow">
                        <div style="font-size: 90px;">📚</div>

                        <h3 class="fw-bold mt-3">
                            Ayo Belajar!
                        </h3>

                        <p class="text-secondary mb-0">
                            Belajar, berlatih, dan berkembang
                            bersama EduSmart.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fitur -->
    <section class="container py-5" id="fitur">
        <div class="text-center mb-5">
            <h2 class="section-title">
                Fitur EduSmart
            </h2>

            <p class="text-secondary">
                Fasilitas pembelajaran untuk siswa dan guru.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">📖</div>

                    <h4 class="fw-bold">
                        Materi Pembelajaran
                    </h4>

                    <p class="text-secondary">
                        Siswa dapat membaca materi pembelajaran
                        berdasarkan mata pelajaran dan kelas.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">✏️</div>

                    <h4 class="fw-bold">
                        Latihan Soal
                    </h4>

                    <p class="text-secondary">
                        Siswa dapat mengerjakan latihan soal
                        dan memperoleh nilai secara otomatis.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">📊</div>

                    <h4 class="fw-bold">
                        Riwayat Nilai
                    </h4>

                    <p class="text-secondary">
                        Siswa dapat melihat hasil latihan,
                        sedangkan guru dapat memantau nilai siswa.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tentang -->
    <section class="container pb-5" id="tentang">
        <div class="bg-white rounded-4 p-4 p-md-5 shadow-sm">
            <h2 class="section-title mb-3">
                Tentang EduSmart
            </h2>

            <p class="text-secondary mb-0">
                EduSmart merupakan sistem pembelajaran dan latihan
                soal online berbasis web untuk siswa SD/MI.
                Platform ini dirancang untuk membantu guru mengelola
                materi dan soal serta memudahkan siswa belajar
                dan mengetahui hasil latihan mereka.
            </p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="container">
            <strong>EduSmart</strong>

            <p class="mb-0 mt-2">
                © 2026 EduSmart. Sistem Pembelajaran SD/MI.
            </p>
        </div>
    </footer>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>
</body>
</html>