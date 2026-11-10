
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Data Siswa | EduSmart</title>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
<style>
body{font-family:Nunito,sans-serif}
.menu-link{display:block;padding:12px 15px;border-radius:12px;color:#4b5563;font-weight:700;text-decoration:none}
.menu-link:hover,.active{background:#dcfce7;color:#15803d}
</style>
</head>
<body class="bg-gray-50">
<div class="min-h-screen flex">
<aside class="w-64 shrink-0 bg-white border-r p-5 flex flex-col">
    <h1 class="text-2xl font-extrabold text-green-700 mb-1">📚 EduSmart</h1>
    <p class="text-sm text-gray-500 mb-8">Panel Guru</p>
    <nav class="space-y-2">
        <a class="menu-link" href="{{ route('guru.dashboard') }}">🏠 Dashboard</a>
        <a class="menu-link" href="{{ route('guru.mata-pelajaran.index') }}">📚 Mata Pelajaran</a>
        <a class="menu-link" href="{{ route('guru.materi.index') }}">📖 Kelola Materi</a>
        <a class="menu-link" href="{{ route('guru.soal.index') }}">✏️ Kelola Soal</a>
        <a class="menu-link active" href="{{ route('guru.siswa.index') }}">👩‍🎓 Data Siswa</a>
        <a class="menu-link" href="{{ route('guru.hasil-latihan.index') }}">📊 Hasil Latihan</a>
    </nav>
    <form method="POST" action="{{ route('logout') }}" class="mt-auto pt-8">
        @csrf
        <button type="submit" class="text-red-600 font-bold p-3">🚪 Keluar</button>
    </form>
</aside>
<main class="flex-1 min-w-0 p-8">
    <header class="bg-white rounded-2xl border p-6 mb-6">
        <h2 class="text-2xl font-extrabold text-gray-800">Data Siswa 👩‍🎓</h2>
        <p class="text-gray-500 mt-1">Informasi siswa yang menggunakan EduSmart.</p>
    </header>
    <section class="bg-gradient-to-r from-green-700 to-green-500 text-white rounded-3xl p-8 mb-6">
        <h1 class="text-3xl font-extrabold">Data Siswa</h1>
        <p class="mt-3">Halaman pengelolaan informasi siswa SD/MI.</p>
    </section>
    <section class="bg-white rounded-2xl border p-6">
        <div class="flex flex-wrap items-center justify-between gap-3">
            <div>
                <h3 class="text-lg font-extrabold">Daftar Siswa</h3>
                <p class="text-sm text-gray-500 mt-1">Data siswa akan ditampilkan di bagian ini.</p>
            </div>
        </div>
        <div class="mt-5 overflow-x-auto">
            <table class="w-full text-left">
                <thead>
                    <tr class="bg-green-50 text-green-800">
                        <th class="p-4 rounded-l-lg">No.</th>
                        <th class="p-4">Nama Siswa</th>
                        <th class="p-4">Email</th>
                        <th class="p-4 rounded-r-lg">Kelas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="4" class="p-8 text-center text-gray-500">
                            <div class="text-4xl mb-2">👩‍🎓</div>
                            <p class="font-bold">Data siswa belum tersedia.</p>
                            <p class="text-sm mt-1">Tabel ini belum terhubung ke data siswa di database.</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</main>
</div>
</body>
</html>
