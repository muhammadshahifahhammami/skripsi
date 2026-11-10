
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mata Pelajaran | EduSmart</title>

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

            <a href="{{ route('guru.mata-pelajaran.index') }}" class="menu-link active">
                📚 Mata Pelajaran
            </a>

            <a href="{{ url('/guru/dashboard#materi') }}" class="menu-link">
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
                Pendidikan hari ini, masa depan esok.
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

    <!-- KONTEN -->
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
                    <h2 class="text-lg font-black text-slate-800 sm:text-xl">
                        Mata Pelajaran
                    </h2>
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
                        📚 EDU SMART • GURU
                    </span>

                    <h1 class="mt-4 text-3xl font-black leading-tight text-white sm:text-4xl">
                        Kelola Mata Pelajaran
                    </h1>

                    <p class="mt-3 text-sm leading-7 text-emerald-50 sm:text-base">
                        Atur mata pelajaran berdasarkan kelas, buku, dan
                        kurikulum yang digunakan di sekolah.
                    </p>

                    <a href="{{ route('guru.mata-pelajaran.create') }}"
                        class="mt-6 inline-flex items-center gap-2 rounded-xl bg-white px-5 py-3 text-sm font-extrabold text-emerald-800 shadow-md transition hover:-translate-y-0.5 hover:bg-emerald-50">
                        <span class="text-xl">＋</span>
                        Tambah Mata Pelajaran
                    </a>
                </div>

                <div class="pointer-events-none absolute -bottom-6 -right-3 hidden text-[150px] opacity-20 md:block">
                    📚
                </div>
            </section>

            <!-- NOTIFIKASI -->
            @if (session('success'))
                <div class="rounded-xl border border-emerald-200 bg-emerald-50 px-5 py-4 font-bold text-emerald-800">
                    ✓ {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="rounded-xl border border-red-200 bg-red-50 p-4 text-red-700">
                    <p class="mb-2 font-extrabold">Periksa kembali data berikut:</p>
                    <ul class="list-inside list-disc text-sm">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- STATISTIK -->
            <section class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-3">

                <div class="card p-5">
                    <div class="flex items-center justify-between">
                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-emerald-100 text-2xl">
                            📗
                        </div>
                        <span class="rounded-full bg-emerald-50 px-3 py-1 text-xs font-extrabold text-emerald-700">
                            TERDAFTAR
                        </span>
                    </div>

                    <p class="mt-4 text-sm font-bold text-slate-500">
                        Total Mata Pelajaran
                    </p>
                    <p class="mt-1 text-3xl font-black text-emerald-700">
                        {{ $mataPelajarans->count() }}
                    </p>
                </div>

                <div class="card p-5">
                    <div class="flex items-center justify-between">
                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-blue-100 text-2xl">
                            🎓
                        </div>
                        <span class="rounded-full bg-blue-50 px-3 py-1 text-xs font-extrabold text-blue-700">
                            KELAS
                        </span>
                    </div>

                    <p class="mt-4 text-sm font-bold text-slate-500">
                        Kelas yang Terdaftar
                    </p>
                    <p class="mt-1 text-3xl font-black text-blue-700">
                        {{ $mataPelajarans->pluck('kelas')->unique()->count() }}
                        <span class="text-sm font-bold text-slate-400">/ 6 kelas</span>
                    </p>
                </div>

                <div class="card p-5 sm:col-span-2 xl:col-span-1">
                    <div class="flex items-center justify-between">
                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-amber-100 text-2xl">
                            📖
                        </div>
                        <span class="rounded-full bg-amber-50 px-3 py-1 text-xs font-extrabold text-amber-700">
                            KURIKULUM
                        </span>
                    </div>

                    <p class="mt-4 text-sm font-bold text-slate-500">
                        Pengelolaan Pembelajaran
                    </p>
                    <p class="mt-1 text-lg font-black text-slate-800">
                        Berdasarkan Kelas
                    </p>
                    <p class="mt-1 text-sm text-slate-500">
                        Sesuaikan dengan buku sekolah.
                    </p>
                </div>
            </section>

            <!-- PENCARIAN DAN FILTER -->
            <section class="card p-5 sm:p-6">
                <div class="mb-5">
                    <h2 class="text-lg font-black">Cari Mata Pelajaran</h2>
                    <p class="mt-1 text-sm text-slate-500">
                        Gunakan pencarian atau filter kelas untuk menemukan data.
                    </p>
                </div>

                <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                    <div class="md:col-span-2">
                        <label for="searchMapel" class="mb-2 block text-sm font-extrabold text-slate-700">
                            Nama Mata Pelajaran
                        </label>

                        <div class="flex items-center gap-3 rounded-xl border border-slate-200 bg-slate-50 px-4 transition focus-within:border-emerald-500 focus-within:ring-4 focus-within:ring-emerald-100">
                            <span>🔎</span>
                            <input id="searchMapel" type="search"
                                placeholder="Contoh: Matematika, Bahasa Indonesia..."
                                class="w-full bg-transparent py-3 text-sm outline-none">
                        </div>
                    </div>

                    <div>
                        <label for="filterKelas" class="mb-2 block text-sm font-extrabold text-slate-700">
                            Filter Kelas
                        </label>

                        <select id="filterKelas"
                            class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm outline-none transition focus:border-emerald-500 focus:ring-4 focus:ring-emerald-100">
                            <option value="">Semua Kelas</option>
                            @foreach (range(1, 6) as $nomorKelas)
                                <option value="{{ $nomorKelas }}">
                                    Kelas {{ $nomorKelas }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </section>

            <!-- DAFTAR MATA PELAJARAN -->
            <section>
                <div class="mb-4 flex flex-wrap items-center justify-between gap-3">
                    <div>
                        <h2 class="text-xl font-black text-slate-800">
                            Daftar Mata Pelajaran
                        </h2>
                        <p class="mt-1 text-sm text-slate-500">
                            Kelola data mata pelajaran yang sudah ditambahkan.
                        </p>
                    </div>

                    <span class="rounded-full bg-emerald-100 px-4 py-2 text-sm font-extrabold text-emerald-800">
                        {{ $mataPelajarans->count() }} data
                    </span>
                </div>

                @if ($mataPelajarans->isEmpty())

                    <div class="card border-2 border-dashed border-emerald-200 px-6 py-14 text-center">
                        <div class="text-6xl">📚</div>
                        <h3 class="mt-4 text-xl font-black">Belum Ada Mata Pelajaran</h3>
                        <p class="mx-auto mt-2 max-w-md text-sm leading-6 text-slate-500">
                            Tambahkan mata pelajaran pertama sesuai buku dan
                            kurikulum yang digunakan sekolah.
                        </p>

                        <a href="{{ route('guru.mata-pelajaran.create') }}"
                            class="mt-6 inline-flex items-center gap-2 rounded-xl bg-emerald-700 px-5 py-3 font-extrabold text-white shadow-md transition hover:bg-emerald-800">
                            ＋ Tambah Mata Pelajaran
                        </a>
                    </div>

                @else

                    <div id="mapelGrid" class="grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-3">

                        @foreach ($mataPelajarans as $mapel)

                            <article
                                class="mapel-card card overflow-hidden transition duration-200 hover:-translate-y-1 hover:shadow-lg"
                                data-nama="{{ strtolower($mapel->nama_mata_pelajaran) }}"
                                data-kelas="{{ $mapel->kelas }}">

                                <div class="h-2 bg-gradient-to-r from-emerald-700 to-green-400"></div>

                                <div class="p-5">
                                    <div class="flex items-start justify-between gap-3">
                                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-emerald-50 text-3xl">
                                            📗
                                        </div>

                                        <span class="rounded-full bg-emerald-100 px-3 py-2 text-xs font-extrabold text-emerald-800">
                                            Kelas {{ $mapel->kelas }}
                                        </span>
                                    </div>

                                    <h3 class="mt-5 break-words text-lg font-black text-slate-800">
                                        {{ $mapel->nama_mata_pelajaran }}
                                    </h3>

                                    <p class="mt-2 min-h-12 whitespace-pre-line text-sm leading-6 text-slate-500">
                                        {{ $mapel->deskripsi ?: 'Belum ada deskripsi mata pelajaran.' }}
                                    </p>

                                    <div class="mt-5 border-t border-slate-100 pt-4">
                                        <p class="text-xs font-semibold text-slate-400">
                                            📚 Materi mengikuti buku dan kurikulum sekolah
                                        </p>
                                    </div>

                                    <div class="mt-5 flex gap-2">

                                        <a href="{{ route('guru.mata-pelajaran.edit', $mapel) }}"
                                            class="flex flex-1 items-center justify-center gap-2 rounded-xl bg-amber-500 px-3 py-3 text-sm font-extrabold text-white transition hover:bg-amber-600">
                                            ✏️ Edit
                                        </a>

                                        <form
                                            action="{{ route('guru.mata-pelajaran.destroy', $mapel) }}"
                                            method="POST"
                                            class="flex-1"
                                            onsubmit="return confirm('Yakin ingin menghapus mata pelajaran ini?')">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                class="w-full rounded-xl bg-red-600 px-3 py-3 text-sm font-extrabold text-white transition hover:bg-red-700">
                                                🗑 Hapus
                                            </button>
                                        </form>

                                    </div>
                                </div>
                            </article>

                        @endforeach

                    </div>

                    <div id="emptySearch"
                        class="card mt-5 hidden border-2 border-dashed border-slate-200 px-6 py-10 text-center">
                        <div class="text-4xl">🔎</div>
                        <h3 class="mt-3 font-black">Mata Pelajaran Tidak Ditemukan</h3>
                        <p class="mt-1 text-sm text-slate-500">
                            Coba kata kunci atau filter kelas lainnya.
                        </p>
                    </div>

                @endif
            </section>

            <!-- INFORMASI -->
            <section class="rounded-2xl border border-emerald-100 bg-emerald-50 p-5">
                <div class="flex items-start gap-3">
                    <div class="text-3xl">💡</div>
                    <div>
                        <h3 class="font-black text-emerald-900">
                            Informasi Pengelolaan
                        </h3>
                        <p class="mt-1 text-sm leading-6 text-emerald-800">
                            Tambahkan mata pelajaran sesuai kelas dan buku yang
                            digunakan sekolah. Selanjutnya, materi PDF dan latihan
                            soal dapat dikembangkan berdasarkan semester, bab, dan topik.
                        </p>
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

    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('searchMapel');
        const filterKelas = document.getElementById('filterKelas');
        const cards = document.querySelectorAll('.mapel-card');
        const emptySearch = document.getElementById('emptySearch');

        function filterMapel() {
            const keyword = searchInput.value.trim().toLowerCase();
            const kelas = filterKelas.value;
            let jumlahTampil = 0;

            cards.forEach(function (card) {
                const nama = card.dataset.nama || '';
                const kelasCard = card.dataset.kelas || '';

                const cocokNama = nama.includes(keyword);
                const cocokKelas = kelas === '' || kelasCard === kelas;
                const tampil = cocokNama && cocokKelas;

                card.classList.toggle('hidden', !tampil);

                if (tampil) {
                    jumlahTampil++;
                }
            });

            if (emptySearch) {
                emptySearch.classList.toggle('hidden', jumlahTampil > 0);
            }
        }

        if (searchInput) {
            searchInput.addEventListener('input', filterMapel);
        }

        if (filterKelas) {
            filterKelas.addEventListener('change', filterMapel);
        }
    });
</script>

</body>
</html>
