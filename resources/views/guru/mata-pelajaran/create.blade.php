
<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-wrap items-center justify-between gap-3">
            <div>
                <h2 class="text-2xl font-bold text-gray-800">
                    Tambah Mata Pelajaran
                </h2>
                <p class="mt-1 text-sm text-gray-500">
                    Tambahkan mata pelajaran sesuai kurikulum sekolah.
                </p>
            </div>

            <a href="{{ route('guru.mata-pelajaran.index') }}"
               class="rounded-xl border border-gray-300 bg-white px-4 py-2 text-sm font-semibold text-gray-700 hover:bg-gray-50">
                ← Kembali
            </a>
        </div>
    </x-slot>

    <div class="min-h-screen bg-gray-50 py-10">
        <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">

            <div class="mb-6 rounded-2xl bg-gradient-to-r from-blue-600 to-indigo-600 p-6 text-white shadow-lg">
                <div class="flex items-center gap-4">
                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-white/20 text-3xl">
                        📚
                    </div>
                    <div>
                        <h3 class="text-xl font-bold">
                            Form Mata Pelajaran
                        </h3>
                        <p class="mt-1 text-sm text-blue-100">
                            Isi informasi mata pelajaran yang digunakan sekolah.
                        </p>
                    </div>
                </div>
            </div>

            <div class="overflow-hidden rounded-2xl bg-white shadow-md">
                <div class="border-b border-gray-100 px-6 py-5">
                    <h3 class="text-lg font-bold text-gray-800">
                        Informasi Mata Pelajaran
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">
                        Kolom bertanda * wajib diisi.
                    </p>
                </div>

                <form action="{{ route('guru.mata-pelajaran.store') }}"
                      method="POST"
                      class="space-y-6 p-6">
                    @csrf

                    <div>
                        <label for="nama_mata_pelajaran"
                               class="mb-2 block text-sm font-semibold text-gray-700">
                            Nama Mata Pelajaran *
                        </label>
                        <input
                            type="text"
                            id="nama_mata_pelajaran"
                            name="nama_mata_pelajaran"
                            value="{{ old('nama_mata_pelajaran') }}"
                            placeholder="Contoh: Matematika"
                            maxlength="255"
                            required
                            class="w-full rounded-xl border border-gray-300 px-4 py-3 text-sm focus:border-blue-500 focus:outline-none focus:ring-4 focus:ring-blue-100"
                        >
                        @error('nama_mata_pelajaran')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="kelas"
                               class="mb-2 block text-sm font-semibold text-gray-700">
                            Kelas *
                        </label>
                        <select
                            id="kelas"
                            name="kelas"
                            required
                            class="w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm focus:border-blue-500 focus:outline-none focus:ring-4 focus:ring-blue-100"
                        >
                            <option value="">-- Pilih Kelas --</option>
                            @foreach (range(1, 6) as $nomorKelas)
                                <option value="{{ $nomorKelas }}"
                                    {{ old('kelas') == $nomorKelas ? 'selected' : '' }}>
                                    Kelas {{ $nomorKelas }}
                                </option>
                            @endforeach
                        </select>
                        @error('kelas')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="deskripsi"
                               class="mb-2 block text-sm font-semibold text-gray-700">
                            Deskripsi Materi
                        </label>
                        <textarea
                            id="deskripsi"
                            name="deskripsi"
                            rows="5"
                            placeholder="Tuliskan keterangan mata pelajaran atau materi yang dipelajari..."
                            class="w-full rounded-xl border border-gray-300 px-4 py-3 text-sm focus:border-blue-500 focus:outline-none focus:ring-4 focus:ring-blue-100"
                        >{{ old('deskripsi') }}</textarea>
                        @error('deskripsi')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex flex-col-reverse gap-3 border-t border-gray-100 pt-5 sm:flex-row sm:justify-end">

    <a href="{{ route('guru.mata-pelajaran.index') }}"
       class="inline-flex items-center justify-center gap-2 rounded-xl
              border border-gray-300 bg-gray-100
              px-6 py-3 text-sm font-bold text-gray-700
              transition duration-200
              hover:border-gray-400 hover:bg-gray-200
              focus:outline-none focus:ring-4 focus:ring-gray-200">
        <span>✕</span>
        <span>Batal</span>
    </a>

    <button type="submit"
            class="inline-flex items-center justify-center gap-2 rounded-xl
                   bg-gradient-to-r from-emerald-500 to-green-600
                   px-6 py-3 text-sm font-bold text-white
                   shadow-lg shadow-green-200
                   transition duration-200
                   hover:-translate-y-0.5 hover:from-emerald-600 hover:to-green-700
                   hover:shadow-xl
                   focus:outline-none focus:ring-4 focus:ring-green-200">
        <span>✓</span>
        <span>Simpan Mata Pelajaran</span>
    </button>

</div>
                </form>
            </div>

        </div>
    </div>
</x-app-layout>