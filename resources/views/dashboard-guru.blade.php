
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Guru | EduSmart</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Nunito', sans-serif; }
        .menu-link { display:flex; align-items:center; gap:12px; padding:12px 15px; border-radius:12px; color:#4b5563; font-weight:700; text-decoration:none; }
        .menu-link:hover, .menu-active { background:#dcfce7; color:#15803d; }
    </style>
</head>
<body class="bg-gray-50">
<div class="min-h-screen flex">

    <aside class="w-64 shrink-0 bg-white border-r border-gray-100 p-5 flex flex-col">
        <div class="mb-8 px-2">
            <h1 class="text-2xl font-extrabold text-green-700">📚 EduSmart</h1>
            <p class="text-sm text-gray-500">Platform Belajar Online</p>
        </div>
        <p class="text-xs font-extrabold text-gray-400 uppercase mb-3 px-3">Menu Utama</p>

        <nav class="space-y-2">
            <a href="{{ route('guru.dashboard') }}" class="menu-link menu-active">🏠 Dashboard</a>
            <a href="{{ route('guru.mata-pelajaran.index') }}" class="menu-link">📚 Mata Pelajaran</a>
            <a href="{{ route('guru.materi.index') }}" class="menu-link">📖 Kelola Materi</a>
            <a href="{{ route('guru.soal.index') }}" class="menu-link">✏️ Kelola Soal</a>
            <a href="{{ route('guru.siswa.index') }}" class="menu-link">👩‍🎓 Data Siswa</a>
            <a href="{{ route('guru.hasil-latihan.index') }}" class="menu-link">📊 Hasil Latihan</a>
        </nav>

        <div class="mt-auto pt-8">
            <div class="bg-green-50 rounded-xl p-4">
                <p class="font-extrabold text-green-800">EduSmart</p>
                <p class="text-sm text-gray-600 mt-1">Belajar lebih mudah dan menyenangkan.</p>
            </div>
            <form method="POST" action="{{ route('logout') }}" class="mt-4">
                @csrf
                <button class="w-full text-left p-3 rounded-xl text-red-600 font-bold hover:bg-red-50" type="submit">🚪 Keluar</button>
            </form>
        </div>
    </aside>

    <main class="flex-1 min-w-0">
        <header class="bg-white border-b px-8 py-5 flex justify-between items-center">
            <div>
                <h2 class="text-xl font-extrabold text-gray-800">Dashboard Guru</h2>
                <p class="text-sm text-gray-500">Selamat datang kembali di EduSmart!</p>
            </div>
            <div class="text-right">
                <p class="font-bold text-gray-800">{{ auth()->user()->name }}</p>
                <p class="text-sm text-green-600">Guru</p>
            </div>
        </header>

        <div class="p-8">
            <section class="rounded-3xl bg-gradient-to-r from-green-700 to-green-500 text-white p-8 mb-8">
                <p class="text-green-100 font-bold mb-2">PANEL PENGELOLAAN PEMBELAJARAN</p>
                <h1 class="text-3xl font-extrabold">Halo, {{ auth()->user()->name }}! 👋</h1>
                <p class="mt-3 max-w-2xl">Kelola mata pelajaran, materi, soal, dan pantau hasil latihan siswa melalui EduSmart.</p>
                <a href="{{ route('guru.materi.index') }}" class="inline-block mt-6 bg-white text-green-700 font-extrabold px-5 py-3 rounded-xl hover:bg-green-50">📖 Buka Kelola Materi →</a>
            </section>

            <h2 class="text-xl font-extrabold text-gray-800 mb-4">Menu Pengelolaan</h2>
            <section class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-5">

                <a href="{{ route('guru.mata-pelajaran.index') }}" class="bg-white rounded-2xl border p-6 hover:shadow-md">
                    <div class="text-3xl">📚</div>
                    <h3 class="font-extrabold text-gray-800 mt-4">Mata Pelajaran</h3>
                    <p class="text-sm text-gray-500 mt-2">Tambah dan atur mata pelajaran kelas 1–6.</p>
                    <p class="text-green-700 font-bold mt-4">Buka halaman →</p>
                </a>

                <a href="{{ route('guru.materi.index') }}" class="bg-white rounded-2xl border p-6 hover:shadow-md">
                    <div class="text-3xl">📖</div>
                    <h3 class="font-extrabold text-gray-800 mt-4">Kelola Materi</h3>
                    <p class="text-sm text-gray-500 mt-2">Siapkan materi pembelajaran untuk siswa.</p>
                    <p class="text-green-700 font-bold mt-4">Buka halaman →</p>
                </a>

                <a href="{{ route('guru.soal.index') }}" class="bg-white rounded-2xl border p-6 hover:shadow-md">
                    <div class="text-3xl">✏️</div>
                    <h3 class="font-extrabold text-gray-800 mt-4">Kelola Soal</h3>
                    <p class="text-sm text-gray-500 mt-2">Halaman pengelolaan latihan soal.</p>
                    <p class="text-green-700 font-bold mt-4">Buka halaman →</p>
                </a>

                <a href="{{ route('guru.siswa.index') }}" class="bg-white rounded-2xl border p-6 hover:shadow-md">
                    <div class="text-3xl">👩‍🎓</div>
                    <h3 class="font-extrabold text-gray-800 mt-4">Data Siswa</h3>
                    <p class="text-sm text-gray-500 mt-2">Lihat halaman data siswa.</p>
                    <p class="text-green-700 font-bold mt-4">Buka halaman →</p>
                </a>

                <a href="{{ route('guru.hasil-latihan.index') }}" class="bg-white rounded-2xl border p-6 hover:shadow-md">
                    <div class="text-3xl">📊</div>
                    <h3 class="font-extrabold text-gray-800 mt-4">Hasil Latihan</h3>
                    <p class="text-sm text-gray-500 mt-2">Lihat halaman rekap hasil latihan.</p>
                    <p class="text-green-700 font-bold mt-4">Buka halaman →</p>
                </a>

            </section>

            <footer class="text-center text-sm text-gray-400 py-8">© {{ date('Y') }} EduSmart — Sistem Pembelajaran Online SD/MI</footer>
        </div>
    </main>
</div>
</body>
</html>
