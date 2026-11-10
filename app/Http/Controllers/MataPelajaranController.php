<?php

namespace App\Http\Controllers;

use App\Models\MataPelajaran;
use Illuminate\Http\Request;

class MataPelajaranController extends Controller
{
    public function index()
    {
        $mataPelajarans = MataPelajaran::latest()->get();

        return view('guru.mata-pelajaran.index', compact('mataPelajarans'));
    }

    public function create()
    {
        return view('guru.mata-pelajaran.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_mata_pelajaran' => ['required', 'string', 'max:255'],
            'kelas' => ['required', 'in:1,2,3,4,5,6'],
            'deskripsi' => ['nullable', 'string'],
        ]);

        MataPelajaran::create($validated);

        return redirect()
            ->route('guru.mata-pelajaran.index')
            ->with('success', 'Mata pelajaran berhasil ditambahkan.');
    }

    public function edit(MataPelajaran $mataPelajaran)
    {
        return view('guru.mata-pelajaran.edit', compact('mataPelajaran'));
    }

    public function update(Request $request, MataPelajaran $mataPelajaran)
    {
        $validated = $request->validate([
            'nama_mata_pelajaran' => ['required', 'string', 'max:255'],
            'kelas' => ['required', 'in:1,2,3,4,5,6'],
            'deskripsi' => ['nullable', 'string'],
        ]);

        $mataPelajaran->update($validated);

        return redirect()
            ->route('guru.mata-pelajaran.index')
            ->with('success', 'Mata pelajaran berhasil diperbarui.');
    }

    public function destroy(MataPelajaran $mataPelajaran)
    {
        $mataPelajaran->delete();

        return redirect()
            ->route('guru.mata-pelajaran.index')
            ->with('success', 'Mata pelajaran berhasil dihapus.');
    }
}