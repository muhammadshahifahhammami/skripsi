
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kelola Soal | EduSmart</title>
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
        <a class="menu-link active" href="{{ route('guru.soal.index') }}">✏️ Kelola Soal</a>
        <a class="menu-link" href="{{ route('guru.siswa.index') }}">👩‍🎓 Data Siswa</a>
        <a class="menu-link" href="{{ route('guru.hasil-latihan.index') }}">📊 Hasil Latihan</a>
    </nav>
    <form method="POST" action="{{ route('logout') }}" class="mt-auto pt-8">
        @csrf
        <button type="submit" class="text-red-600 font-bold p-3">🚪 Keluar</button>
    </form>
</aside>
<main class="flex-1 min-w-0 p-8">
    <header class="bg-white rounded-2xl border p-6 mb-6">
        <h2 class="text-2xl font-extrabold text-gray-800">Kelola Soal ✏️</h2>
        <p class="text-gray-500 mt-1">Kelola latihan soal untuk siswa SD/MI.</p>
    </header>
    <section class="bg-gradient-to-r from-green-700 to-green-500 text-white rounded-3xl p-8 mb-6">
        <h1 class="text-3xl font-extrabold">Latihan Soal EduSmart</h1>
        <p class="mt-3">Soal nantinya dapat dikelompokkan berdasarkan kelas dan mata pelajaran.</p>
    </section>
    <section class="bg-white rounded-2xl border p-6">
        <h3 class="text-lg font-extrabold">Daftar Soal</h3>
        <div class="mt-5 rounded-xl bg-gray-50 border border-dashed p-8 text-center">
            <div class="text-4xl mb-3">📝</div>
            <p class="font-bold text-gray-700">Belum ada soal</p>
            <p class="text-sm text-gray-500 mt-2">Fitur tambah, edit, hapus, dan penyimpanan soal belum diaktifkan.</p>
        </div>
    </section>
</main>
</div>
</body>
</html>
