
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Siswa - EduSmart</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
    <style>
        body { background: #f4f7fc; color: #243047; }
        .topbar {
            background: white;
            box-shadow: 0 3px 12px rgba(15, 23, 42, .05);
        }
        .brand { color: #2563eb; font-size: 25px; font-weight: 800; }
        .welcome {
            background: linear-gradient(120deg, #2563eb, #60a5fa);
            color: white; border-radius: 20px; padding: 32px;
        }
        .feature-card {
            background: white; border: 0; border-radius: 16px;
            padding: 24px; height: 100%;
            box-shadow: 0 4px 16px rgba(15, 23, 42, .05);
        }
        .feature-icon { font-size: 38px; }
    </style>
</head>
<body>
<nav class="navbar topbar navbar-expand">
    <div class="container">
        <a class="navbar-brand brand" href="{{ route('siswa.dashboard') }}">
            EduSmart
        </a>
        <div class="d-flex align-items-center gap-3">
            <span class="d-none d-sm-inline">
                {{ auth()->user()->name }}
            </span>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn btn-outline-primary btn-sm" type="submit">
                    Keluar
                </button>
            </form>
        </div>
    </div>
</nav>

<main class="container py-4 py-lg-5">
    <section class="welcome mb-4">
        <span class="badge bg-light text-primary mb-3">Dashboard Siswa</span>
        <h1 class="fw-bold">Halo, {{ auth()->user()->name }}! 👋</h1>
        <p class="mb-0">
            Selamat belajar di EduSmart. Yuk, pelajari materi
            dan tingkatkan hasil belajarmu!
        </p>
    </section>

    <h3 class="fw-bold mb-3">Menu Pembelajaran</h3>
    <div class="row g-3">
        <div class="col-md-4">
            <div class="feature-card">
                <div class="feature-icon mb-3">📚</div>
                <h5 class="fw-bold">Mata Pelajaran</h5>
                <p class="text-secondary">
                    Lihat daftar mata pelajaran yang tersedia.
                </p>
                <span class="badge text-bg-secondary">Segera hadir</span>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-card">
                <div class="feature-icon mb-3">📖</div>
                <h5 class="fw-bold">Materi Pembelajaran</h5>
                <p class="text-secondary">
                    Baca materi pembelajaran sesuai kelas dan pelajaran.
                </p>
                <span class="badge text-bg-secondary">Segera hadir</span>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-card">
                <div class="feature-icon mb-3">✏️</div>
                <h5 class="fw-bold">Latihan Soal</h5>
                <p class="text-secondary">
                    Kerjakan latihan dan periksa hasil belajarmu.
                </p>
                <span class="badge text-bg-secondary">Segera hadir</span>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-card">
                <div class="feature-icon mb-3">📊</div>
                <h5 class="fw-bold">Riwayat Nilai</h5>
                <p class="text-secondary">
                    Lihat nilai dari latihan yang telah dikerjakan.
                </p>
                <span class="badge text-bg-secondary">Segera hadir</span>
            </div>
        </div>
    </div>
</main>
</body>
</html>