
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MataPelajaranController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        $user = auth()->user();

        if ($user->role === 'guru') {
            return redirect()->route('guru.dashboard');
        }

        if ($user->role === 'siswa') {
            return redirect()->route('siswa.dashboard');
        }

        abort(403, 'Peran pengguna tidak dikenali.');
    })->name('dashboard');

    // DASHBOARD GURU
    Route::view('/guru/dashboard', 'dashboard-guru')
        ->middleware('role:guru')
        ->name('guru.dashboard');

    // MATA PELAJARAN
    Route::resource('/guru/mata-pelajaran', MataPelajaranController::class)
        ->middleware('role:guru')
        ->names('guru.mata-pelajaran');

    // KELOLA MATERI
    Route::view('/guru/materi', 'guru.materi.index')
        ->middleware('role:guru')
        ->name('guru.materi.index');

    // KELOLA SOAL
    Route::view('/guru/soal', 'guru.soal.index')
        ->middleware('role:guru')
        ->name('guru.soal.index');

    // DATA SISWA
    Route::view('/guru/siswa', 'guru.siswa.index')
        ->middleware('role:guru')
        ->name('guru.siswa.index');

    // HASIL LATIHAN
    Route::view('/guru/hasil-latihan', 'guru.hasil-latihan.index')
        ->middleware('role:guru')
        ->name('guru.hasil-latihan.index');

    // DASHBOARD SISWA
    Route::view('/siswa/dashboard', 'dashboard-siswa')
        ->middleware('role:siswa')
        ->name('siswa.dashboard');
});

require __DIR__ . '/auth.php';
