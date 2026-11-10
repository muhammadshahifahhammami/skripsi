
<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-wrap items-center justify-between gap-3">
            <div>
                <h2 class="text-2xl font-bold text-gray-800">
                    ✏️ Edit Mata Pelajaran
                </h2>
                <p class="mt-1 text-sm text-gray-500">
                    Perbarui informasi mata pelajaran yang telah tersimpan.
                </p>
            </div>

            <a href="{{ route('guru.mata-pelajaran.index') }}"
               class="rounded-xl border border-gray-300 bg-white px-4 py-2.5 text-sm font-semibold text-gray-700 transition hover:bg-gray-50">
                ← Kembali
            </a>
        </div>
    </x-slot>

    <div class="min-h-screen bg-slate-50 py-10">
        <div class="mx-auto max-w-3xl space-y-6 px-4 sm:px-6 lg:px-8">

            {{-- Banner --}}
            <div class="rounded-3xl bg-gradient-to-r from-indigo-600 to-blue-600 p-6 text-white shadow-lg">
                <div class="flex items-center gap-4">
                    <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl bg-white/20 text-3xl">
                        📘
                    </div>
                    <div>
                        <h3 class="text-xl font-bold">
                            Perbarui Mata Pelajaran
                        </h3>
                        <p class="mt-1 text-sm text-blue-100">
                            Sesuaikan informasi dengan kurikulum dan buku sekolah.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Pesan error --}}
            @if ($errors->any())
                <div class="rounded-xl border border-red-200 bg-red-50 p-4 text-sm text-red-700">
                    <p class="mb-2 font-bold">Periksa kembali data berikut:</p>
                    <ul class="list-inside list-disc">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Form edit --}}
            <div class="overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-md">
                <div class="border-b border-gray-100 px-6 py-5">
                    <h3 class="text-lg font-bold text-gray-800">
                        Informasi Mata Pelajaran
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">
                        Ubah kolom yang diperlukan, lalu simpan perubahan.
                    </p>
                </div>

                <form
                    action="{{ route('guru.mata-pelajaran.update', $mataPelajaran) }}"
                    method="POST"
                    class="space-y-6 p-6"
                >
                    @csrf
                    @method('PUT')

                    {{-- Nama mata pelajaran --}}
                    <div>
                        <label for="nama_mata_pelajaran"
                               class="mb-2 block text-sm font-semibold text-gray-700">
                            Nama Mata Pelajaran *
                        </label>
                        <input
                            type="text"
                            id="nama_mata_pelajaran"
                            name="nama_mata_pelajaran"
                            value="{{ old('nama_mata_pelajaran', $mataPelajaran->nama_mata_pelajaran) }}"
                            placeholder="Contoh: Matematika"
                            maxlength="255"
                            required
                            class="w-full rounded-xl border border-gray-300 px-4 py-3 text-sm outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100"
                        >
                        @error('nama_mata_pelajaran')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Kelas --}}
                    <div>
                        <label for="kelas"
                               class="mb-2 block text-sm font-semibold text-gray-700">
                            Kelas *
                        </label>
                        <select
                            id="kelas"
                            name="kelas"
                            required
                            class="w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100"
                        >
                            <option value="">-- Pilih Kelas --</option>
                            @foreach (range(1, 6) as $nomorKelas)
                                <option
                                    value="{{ $nomorKelas }}"
                                    {{ (string) old('kelas', $mataPelajaran->kelas) === (string) $nomorKelas ? 'selected' : '' }}
                                >
                                    Kelas {{ $nomorKelas }}
                                </option>
                            @endforeach
                        </select>
                        @error('kelas')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Deskripsi --}}
                    <div>
                        <label for="deskripsi"
                               class="mb-2 block text-sm font-semibold text-gray-700">
                            Deskripsi
                            <span class="font-normal text-gray-400">(Opsional)</span>
                        </label>
                        <textarea
                            id="deskripsi"
                            name="deskripsi"
                            rows="5"
                            placeholder="Tuliskan keterangan mata pelajaran atau materi yang dipelajari..."
                            class="w-full resize-y rounded-xl border border-gray-300 px-4 py-3 text-sm outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100"
                        >{{ old('deskripsi', $mataPelajaran->deskripsi) }}</textarea>
                        @error('deskripsi')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Informasi --}}
                    <div class="rounded-xl border border-blue-100 bg-blue-50 p-4">
                        <div class="flex gap-3">
                            <span class="text-xl">💡</span>
                            <div>
                                <p class="text-sm font-semibold text-blue-900">
                                    Perhatian
                                </p>
                                <p class="mt-1 text-sm leading-relaxed text-blue-800">
                                    Pastikan perubahan sesuai dengan buku dan
                                    kurikulum yang digunakan sekolah. Perubahan
                                    akan disimpan setelah tombol diperbarui ditekan.
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Tombol --}}
                    <div class="flex flex-col-reverse gap-3 border-t border-gray-100 pt-5 sm:flex-row sm:justify-end">
                        <a href="{{ route('guru.mata-pelajaran.index') }}"
                           class="rounded-xl border border-gray-300 px-5 py-3 text-center text-sm font-semibold text-gray-700 transition hover:bg-gray-50">
                            Batal
                        </a>

                        <button
                            type="submit"
                            class="rounded-xl bg-blue-600 px-6 py-3 text-sm font-semibold text-white shadow transition hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-200"
                        >
                            ✓ Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-app-layout>