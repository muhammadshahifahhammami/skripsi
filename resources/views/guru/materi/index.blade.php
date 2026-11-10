
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Materi | EduSmart</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background: #f5faf8;
        }

        .menu-link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 13px 15px;
            border-radius: 13px;
            color: #36544c;
            font-weight: 800;
            transition: .2s;
        }

        .menu-link:hover,
        .menu-link.active {
            background: #d9f5e8;
            color: #047857;
        }

        .card {
            background: white;
            border: 1px solid #e5efeb;
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(17,75,55,.045);
        }
    </style>
</head>

<body class="text-slate-800">

<div class="min-h-screen lg:flex">

    <!-- SIDEBAR -->
    <aside id="sidebar"
        class="fixed inset-y-0 left-0 z-40 flex w-64 -translate-x-full flex-col border-r border-emerald-100 bg-white p-5 transition-transform duration-300 lg:translate-x-0">

        <a href="{{ url('/guru/dashboard') }}"
           class="mb-9 flex items-center gap-3 px-2">
            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-emerald-100 text-3xl">
                📚
            </div>
            <div>
                <h1 class="text-2xl font-black text-emerald-800">EduSmart</h1>
                <p class="text-xs text-slate-500">Belajar Lebih Mudah</p>
            </div>
        </a>

        <p class="mb-3 px-3 text-xs font-extrabold uppercase tracking-widest text-slate-400">
            Menu Guru
        </p>

        <nav class="space-y-2">
            <a href="{{ url('/guru/dashboard') }}" class="menu-link">
                🏠 Dashboard
            </a>

            <a href="{{ route('guru.mata-pelajaran.index') }}" class="menu-link">
                📚 Mata Pelajaran
            </a>

            <a href="{{ url('/guru/materi') }}" class="menu-link active">
                📖 Kelola Materi
            </a>

            <a href="{{ url('/guru/dashboard#soal') }}" class="menu-link">
                ✏️ Kelola Soal
            </a>

            <a href="{{ url('/guru/dashboard#siswa') }}" class="menu-link">
                👩‍🎓 Data Siswa
            </a>

            <a href="{{ url('/guru/dashboard#hasil') }}" class="menu-link">
                📊 Hasil Latihan
            </a>
        </nav>

        <div class="mt-auto rounded-2xl bg-emerald-50 p-4">
            <div class="text-3xl">🌱</div>
            <p class="mt-2 font-extrabold text-emerald-900">
                Semangat Mengajar!
            </p>
            <p class="mt-1 text-sm text-emerald-800">
                Materi terarah, belajar lebih mudah.
            </p>
        </div>

        <form method="POST" action="{{ route('logout') }}" class="mt-4">
            @csrf
            <button type="submit"
                class="w-full rounded-xl bg-red-50 px-4 py-3 font-extrabold text-red-600 transition hover:bg-red-100">
                ↪ Keluar
            </button>
        </form>
    </aside>

    <!-- OVERLAY MOBILE -->
    <div id="overlay"
        onclick="toggleSidebar()"
        class="fixed inset-0 z-30 hidden bg-slate-900/40 lg:hidden">
    </div>

    <!-- KONTEN UTAMA -->
    <main class="min-w-0 flex-1 lg:ml-64">

        <!-- HEADER -->
        <header class="sticky top-0 z-20 flex items-center justify-between gap-4 border-b border-emerald-100 bg-white/95 px-4 py-4 backdrop-blur sm:px-7">

            <div class="flex items-center gap-3">
                <button onclick="toggleSidebar()"
                    class="rounded-xl p-2 text-xl hover:bg-emerald-50 lg:hidden"
                    aria-label="Buka menu">
                    ☰
                </button>

                <div>
                    <p class="text-xs font-bold text-slate-400">EDUSMART / GURU</p>
                    <h2 class="text-lg font-black sm:text-xl">Kelola Materi</h2>
                </div>
            </div>

            <div class="flex items-center gap-3">
                <div class="flex h-10 w-10 items-center justify-center rounded-full bg-emerald-100 text-xl">
                    👨‍🏫
                </div>
                <div class="hidden sm:block">
                    <p class="text-sm font-extrabold">
                        {{ auth()->user()->name ?? 'Guru' }}
                    </p>
                    <p class="text-xs text-slate-500">Guru EduSmart</p>
                </div>
            </div>
        </header>

        <div class="mx-auto max-w-[1500px] space-y-6 p-4 sm:p-7">

            <!-- BANNER -->
            <section class="relative overflow-hidden rounded-3xl bg-gradient-to-r from-emerald-800 via-emerald-700 to-green-500 p-6 text-white shadow-lg sm:p-8">
                <div class="relative z-10 max-w-2xl">
                    <span class="inline-block rounded-full bg-white/20 px-4 py-2 text-xs font-extrabold tracking-wide text-white">
                        📖 EDUSMART • GURU
                    </span>

                    <h1 class="mt-4 text-3xl font-black leading-tight text-white sm:text-4xl">
                        Kelola Materi Pembelajaran
                    </h1>

                    <p class="mt-3 text-sm leading-7 text-emerald-50 sm:text-base">
                        Susun dan siapkan materi belajar berdasarkan mata pelajaran,
                        kelas, semester, serta buku yang digunakan di sekolah.
                    </p>

                    <a href="#panduan"
                        class="mt-6 inline-flex items-center gap-2 rounded-xl bg-white px-5 py-3 font-extrabold text-emerald-800 shadow-md transition hover:bg-emerald-50">
                        📋 Panduan Pengelolaan Materi
                    </a>
                </div>

                <div class="pointer-events-none absolute -bottom-7 -right-2 hidden text-[150px] opacity-20 md:block">
                    📖
                </div>
            </section>

            <!-- RINGKASAN -->
            <section class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-3">

                <div class="card p-5">
                    <div class="flex items-center justify-between">
                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-emerald-100 text-2xl">
                            📚
                        </div>
                        <span class="rounded-full bg-emerald-50 px-3 py-2 text-xs font-extrabold text-emerald-700">
                            MATA PELAJARAN
                        </span>
                    </div>
                    <p class="mt-4 text-sm font-bold text-slate-500">
                        Mata Pelajaran Terdaftar
                    </p>
                    <p class="mt-1 text-3xl font-black text-emerald-700">
                        {{ \App\Models\MataPelajaran::count() }}
                    </p>
                    <a href="{{ route('guru.mata-pelajaran.index') }}"
                        class="mt-3 inline-block text-sm font-extrabold text-emerald-700 hover:underline">
                        Lihat Mata Pelajaran →
                    </a>
                </div>

                <div class="card p-5">
                    <div class="flex items-center justify-between">
                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-blue-100 text-2xl">
                            📄
                        </div>
                        <span class="rounded-full bg-blue-50 px-3 py-2 text-xs font-extrabold text-blue-700">
                            DOKUMEN PDF
                        </span>
                    </div>
                    <p class="mt-4 text-sm font-bold text-slate-500">
                        Materi PDF Tersimpan
                    </p>
                    <p class="mt-1 text-3xl font-black text-blue-700">—</p>
                    <p class="mt-2 text-xs text-slate-400">
                        Belum terhubung ke database materi.
                    </p>
                </div>

                <div class="card p-5 sm:col-span-2 xl:col-span-1">
                    <div class="flex items-center justify-between">
                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-amber-100 text-2xl">
                            🎓
                        </div>
                        <span class="rounded-full bg-amber-50 px-3 py-2 text-xs font-extrabold text-amber-700">
                            KELAS 1–6
                        </span>
                    </div>
                    <p class="mt-4 text-sm font-bold text-slate-500">
                        Pengelompokan Materi
                    </p>
                    <p class="mt-1 text-lg font-black text-slate-800">
                        Berdasarkan Kelas
                    </p>
                    <p class="mt-2 text-sm text-slate-500">
                        Materi disesuaikan dengan pembelajaran siswa.
                    </p>
                </div>
            </section>

            <!-- ALUR PENGELOLAAN -->
            <section class="card p-5 sm:p-6">
                <div>
                    <h2 class="text-xl font-black">Alur Pengelolaan Materi</h2>
                    <p class="mt-1 text-sm text-slate-500">
                        Tahapan menyiapkan bahan ajar untuk siswa.
                    </p>
                </div>

                <div class="mt-6 grid grid-cols-1 gap-4 md:grid-cols-3">
                    <div class="rounded-2xl border border-emerald-100 bg-emerald-50 p-5">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-white text-2xl shadow-sm">
                            1️⃣
                        </div>
                        <h3 class="mt-4 font-black text-emerald-900">
                            Pilih Mata Pelajaran
                        </h3>
                        <p class="mt-2 text-sm leading-6 text-emerald-800">
                            Tentukan mata pelajaran dan kelas yang sesuai
                            dengan kurikulum sekolah.
                        </p>
                        <a href="{{ route('guru.mata-pelajaran.index') }}"
                            class="mt-4 inline-block text-sm font-extrabold text-emerald-700 hover:underline">
                            Pilih Mata Pelajaran →
                        </a>
                    </div>

                    <div class="rounded-2xl border border-blue-100 bg-blue-50 p-5">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-white text-2xl shadow-sm">
                            2️⃣
                        </div>
                        <h3 class="mt-4 font-black text-blue-900">
                            Siapkan Materi PDF
                        </h3>
                        <p class="mt-2 text-sm leading-6 text-blue-800">
                            Siapkan dokumen bahan ajar yang sesuai dengan
                            bab, topik, dan kebutuhan siswa.
                        </p>
                        <span class="mt-4 inline-block text-sm font-bold text-blue-700">
                            Format yang direncanakan: PDF
                        </span>
                    </div>

                    <div class="rounded-2xl border border-amber-100 bg-amber-50 p-5">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-white text-2xl shadow-sm">
                            3️⃣
                        </div>
                        <h3 class="mt-4 font-black text-amber-900">
                            Publikasikan Materi
                        </h3>
                        <p class="mt-2 text-sm leading-6 text-amber-800">
                            Setelah fitur unggah tersedia, materi dapat
                            dikelompokkan dan dibagikan kepada siswa.
                        </p>
                        <span class="mt-4 inline-block text-sm font-bold text-amber-700">
                            Fitur unggah akan dibuat berikutnya
                        </span>
                    </div>
                </div>
            </section>

            <!-- BAGIAN MATERI -->
            <section class="card p-5 sm:p-6">
                <div class="flex flex-wrap items-center justify-between gap-3">
                    <div>
                        <h2 class="text-xl font-black">Daftar Materi Pembelajaran</h2>
                        <p class="mt-1 text-sm text-slate-500">
                            Materi akan ditampilkan setelah fitur penyimpanan PDF dibuat.
                        </p>
                    </div>
                    <span class="rounded-full bg-slate-100 px-4 py-2 text-xs font-extrabold text-slate-600">
                        BELUM TERHUBUNG
                    </span>
                </div>

                <div class="mt-6 rounded-2xl border-2 border-dashed border-emerald-200 bg-emerald-50/50 px-5 py-12 text-center">
                    <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-3xl bg-white text-4xl shadow-sm">
                        📂
                    </div>
                    <h3 class="mt-5 text-lg font-black text-slate-800">
                        Belum Ada Materi Tersimpan
                    </h3>
                    <p class="mx-auto mt-2 max-w-lg text-sm leading-6 text-slate-500">
                        Halaman ini sudah disiapkan untuk daftar materi.
                        Langkah berikutnya adalah membuat database materi,
                        formulir unggah PDF, serta fungsi melihat dan mengunduh materi.
                    </p>
                </div>
            </section>

            <!-- PANDUAN -->
            <section id="panduan" class="rounded-2xl border border-emerald-100 bg-emerald-50 p-5 sm:p-6">
                <div class="flex items-start gap-3">
                    <div class="text-3xl">💡</div>
                    <div>
                        <h3 class="font-black text-emerald-900">
                            Panduan Menyiapkan Materi
                        </h3>
                        <ul class="mt-3 space-y-2 text-sm leading-6 text-emerald-900">
                            <li>✓ Sesuaikan materi dengan kelas dan mata pelajaran.</li>
                            <li>✓ Cantumkan judul bab, topik, dan semester.</li>
                            <li>✓ Pastikan teks dan gambar dalam PDF mudah dibaca siswa.</li>
                            <li>✓ Gunakan materi buatan sendiri atau sumber yang diizinkan untuk dibagikan.</li>
                        </ul>
                    </div>
                </div>
            </section>

            <footer class="py-4 text-center text-xs font-semibold text-slate-400">
                © {{ date('Y') }} EduSmart · Belajar Lebih Mudah
            </footer>

        </div>
    </main>
</div>

<script>
    function toggleSidebar() {
        document.getElementById('sidebar').classList.toggle('-translate-x-full');
        document.getElementById('overlay').classList.toggle('hidden');
    }
</script>

</body>
</html>
