<?php

use App\Http\Controllers\DataDokterController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GeneralPage;
use App\Http\Livewire\MapAdminDataBaru;
use App\Http\Livewire\MapDetailDokter;
use App\Http\Livewire\MapDokterEdit;
// use App\Http\Livewire\MapDokterLihat;
use App\Http\Livewire\MapHome;
use App\Http\Livewire\MapLocation;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// MAP BOX ROUTE
Route::get('/map', MapLocation::class);
Route::get('/detail-dokter', MapDetailDokter::class);
Route::get('/home', MapHome::class);
Route::get('/', MapHome::class);
Route::get('/data-baru-dokter', MapAdminDataBaru::class);
Route::post('/data-baru-dokter', [DataDokterController::class, 'create_data_dokter'] )->name('data-baru-dokter-post');
// Route::get('/kelola-data-dokter/lihat', MapDokterLihat::class);
Route::get('/kelola-data-dokter/edit', MapDokterEdit::class);
// MAP BOX ROUTE

// Route::get('/', function () {
//     return view('pages/landing-page/home/home');
// });
Route::get('/tes', function () {
    return view('tes');
});

Route::controller(GeneralPage::class) -> group(function () {
    // awal login
    Route::get('/login', 'login');
    Route::get('/lupa-password', 'lupapassword');
    Route::get('/otp-password', 'otppassword');
    Route::get('/password-baru', 'passwordbaru');
    // akhir login
    // awal admin
    Route::get('/artikel-kesehatan', 'artikelkesehatan');
    Route::get('/buat-artikel', 'buatartikel');
    Route::get('/lihat-artikel', 'lihatartikel');
    Route::get('/edit-artikel', 'editartikel');




    // Route::get('/data-baru-dokter', 'databarudokter');

    Route::get('/data-pengajuan', 'datapengajuan');
    Route::get('/lihat-data-pengajuan-tambah', 'lihatdatapengajuantambah');
    Route::get('/lihat-data-pengajuan-ubah', 'lihatdatapengajuanubah');
    Route::get('/lihat-data-pengajuan-hapus', 'lihatdatapengajuanhapus');



    Route::get('/kelola-data-dokter', 'keloladatadokter');
    // Route::get('/kelola-data-dokter/edit', 'keloladatadokterEdit');
    Route::get('/kelola-data-dokter/lihat', 'keloladatadokterLihat');


    Route::get('/pengajuan-dokter', 'pengajuandokter');
    Route::get('/lihat-pengajuan-dokter-tambah', 'lihatpengajuandoktertambah');
    Route::get('/lihat-pengajuan-dokter-ubah', 'lihatpengajuandokterubah');
    Route::get('/lihat-pengajuan-dokter-hapus', 'lihatpengajuandokterhapus');
    // akhir admin



    // Landing page
    // home
    // Route::get('/home', 'home');
    // login user
    Route::get('/user/login', 'loginUser');
    Route::get('/user/lupa-password', 'lupaPasswordUser');
    Route::get('/user/kode-otp', 'kodeOtpUser');
    Route::get('/user/password-baru', 'passwordBaruUser');
    Route::get('/user/buat-akun', 'buatAkunUser');
    // profile-dokter
    Route::get('/profile-dokter', 'profileDokter');
    // Route::get('/detail-dokter', 'detailDokter');

    // pengajuan dokter
    // login dokter
    Route::get('/login-dokter', 'loginDokter');
    Route::get('/lupa-password-dokter', 'lupaPasswordDokter');
    Route::get('/kode-otp-dokter', 'kodeOtpDokter');
    Route::get('/password-baru-dokter', 'passwordBaruDokter');
    Route::get('/buat-akun-dokter', 'buatAkunDokter');
    // pengajuan
    Route::get('/dashboard-pengajuan-dokter', 'dashboardPengajuanDokter');
    Route::get('/pengajuan-tambah-lokasi', 'tambahLokasiPengajuan');
    Route::get('/pengajuan-ubah-lokasi', 'ubahLokasiPengajuan');
    Route::get('/pengajuan-hapus-lokasi', 'hapusLokasiPengajuan');
    Route::get('/cek-status-pengajuan', 'cekStatusPengajuan');

    // map
    // Route::get('/map', 'mapLanding');

    Route::get('/ubah-profile', 'ubahProfile');
    Route::get('/ubah-profile-user', 'ubahProfileUser');
    Route::get('/detail-artikel', 'detailArtikel');


    // Landing page

});
