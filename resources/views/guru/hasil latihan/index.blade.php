
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hasil Latihan | EduSmart</title>
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
        <a class="menu-link" href="{{ route('guru.siswa.index') }}">👩‍🎓 Data Siswa</a>
        <a class="menu-link active" href="{{ route('guru.hasil-latihan.index') }}">📊 Hasil Latihan</a>
    </nav>
    <form method="POST" action="{{ route('logout') }}" class="mt-auto pt-8">
        @csrf
        <button type="submit" class="text-red-600 font-bold p-3">🚪 Keluar</button>
    </form>
</aside>
<main class="flex-1 min-w-0 p-8">
    <header class="bg-white rounded-2xl border p-6 mb-6">
        <h2 class="text-2xl font-extrabold text-gray-800">Hasil Latihan 📊</h2>
        <p class="text-gray-500 mt-1">Pantau perkembangan belajar siswa.</p>
    </header>
    <section class="bg-gradient-to-r from-green-700 to-green-500 text-white rounded-3xl p-8 mb-6">
        <h1 class="text-3xl font-extrabold">Rekap Hasil Latihan</h1>
        <p class="mt-3">Lihat hasil pengerjaan soal siswa setelah fitur latihan terhubung.</p>
    </section>
    <section class="bg-white rounded-2xl border p-6">
        <h3 class="text-lg font-extrabold">Rekap Nilai Siswa</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-5">
            <div class="rounded-xl bg-green-50 p-5">
                <p class="text-sm text-gray-500">Jumlah Peserta</p>
                <p class="text-2xl font-extrabold text-green-800 mt-2">—</p>
            </div>
            <div class="rounded-xl bg-blue-50 p-5">
                <p class="text-sm text-gray-500">Rata-rata Nilai</p>
                <p class="text-2xl font-extrabold text-blue-800 mt-2">—</p>
            </div>
            <div class="rounded-xl bg-orange-50 p-5">
                <p class="text-sm text-gray-500">Latihan Selesai</p>
                <p class="text-2xl font-extrabold text-orange-800 mt-2">—</p>
            </div>
        </div>
        <div class="mt-6 rounded-xl border border-dashed p-8 text-center">
            <div class="text-4xl mb-3">📊</div>
            <p class="font-bold text-gray-700">Belum ada hasil latihan.</p>
            <p class="text-sm text-gray-500 mt-2">Ringkasan nilai akan tersedia setelah siswa mengerjakan soal dan hasilnya disimpan ke database.</p>
        </div>
    </section>
</main>
</div>
</body>
</html>
