<?php
// File: routes/web.php
use App\Http\Controllers\ServiceController;
use App\Http\controllers\LoginController;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route; 
Route::get('/login', [LoginController::class,'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/services/create', [ServiceController::class, 'create']);
Route::get('/', function () {

    // 1. Mengambil data "Special Feature"
    $features = DB::table('LAYANAN')
        ->select('nama_layanan', 'deskripsi_layanan', 'url_gambar_layanan')
        ->where('is_unggulan', true)
        ->limit(4)
        ->get();

    // 2. Mengambil data "Customer Feedback"
    $feedback = DB::table('ULASAN as u')
        ->join('PENGGUNA as p', 'u.id_pengguna', '=', 'p.id_pengguna')
        ->join('PEMESANAN as pes', 'u.id_pemesanan', '=', 'pes.id_pemesanan')
        ->join('DETAIL_PEMESANAN as dp', 'pes.id_pemesanan', '=', 'dp.id_pemesanan')
        ->join('LAYANAN as l', 'dp.id_layanan', '=', 'l.id_layanan')
        ->select(
            'u.rating',
            'u.komentar',
            'p.nama_pengguna',
            'p.url_foto_profil',
            DB::raw("GROUP_CONCAT(l.nama_layanan SEPARATOR ', ') AS daftar_layanan")
        )
        ->where('u.is_tampil_homepage', true)
        // THIS IS THE NEW, CORRECT LINE
        ->groupBy('u.id_ulasan', 'u.rating', 'u.komentar', 'p.nama_pengguna', 'p.url_foto_profil')
        ->limit(5)
        ->get();

    // 3. Mengirim semua data ke view 'home'
    return view('home', [
        'features' => $features,
        'feedback' => $feedback
    ]);
});