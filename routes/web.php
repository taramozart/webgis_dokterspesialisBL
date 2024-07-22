<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataDokterController;
use App\Http\Controllers\PengajuanDokterController;
use App\Http\Controllers\PenggunaController;
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
Route::get('/map', MapLocation::class)->name('map');
Route::get('/detail-dokter', MapDetailDokter::class);
Route::get('/home', MapHome::class);
Route::get('/', MapHome::class)->name('home');
// MAP BOX ROUTE

// Route::get('/', function () {
//     return view('pages/landing-page/home/home');
// });
// Route::get('/tes', function () {
//     return view('tes');
// });


Route::controller(GeneralPage::class)->group(function () {
    Route::get('/login', 'login')->name('login-admin');
    Route::post('/login', [AuthController::class, 'loginAdmin'])->name('login-admin-post');
    Route::get('/logout', [AuthController::class, 'logoutAdmin'])->name('logout-admin');
    Route::get('/lupa-password', 'lupapassword')->name('lupa-password-admin');
    Route::post('/lupa-password', [AuthController::class, 'generateOtpAdmin'])->name('lupa-password-admin-post');
    Route::get('/otp-password', 'otppassword')->name('otp-password-admin');
    Route::post('/otp-password', [AuthController::class, 'checkOtpAdmin'])->name('otp-password-admin-post');
    Route::get('/password-baru', 'passwordbaru')->name('password-baru-admin');
    Route::post('/password-baru', [AuthController::class, 'buatPasswordBaruAdmin'])->name('password-baru-admin-post');

    Route::get('/buat-akun-dokter', 'buatAkunDokter')->name('buat-akun-dokter');
    Route::post('/buat-akun-dokter', [PenggunaController::class, 'create_pengguna_dokter'])->name('buat-akun-dokter-post');
    Route::get('/login-dokter', 'loginDokter')->name('login-dokter');
    Route::post('/login-dokter', [AuthController::class, 'loginDokter'])->name('login-dokter-post');
    Route::get('/logout-dokter', [AuthController::class, 'logoutDokter'])->name('logout-dokter');
    Route::get('/lupa-password-dokter', 'lupaPasswordDokter')->name('lupa-password-dokter');
    Route::post('/lupa-password-dokter', [AuthController::class, 'generateOtpDokter'])->name('lupa-password-dokter-post');
    Route::get('/kode-otp-dokter', 'kodeOtpDokter')->name('otp-password-dokter');
    Route::post('/kode-otp-dokter', [AuthController::class, 'checkOtpDokter'])->name('otp-password-dokter-post');
    Route::get('/password-baru-dokter', 'passwordBaruDokter')->name('password-baru-dokter');
    Route::post('/password-baru-dokter', [AuthController::class, 'buatPasswordBaruDokter'])->name('password-baru-dokter-post');

    Route::get('/user/login', 'loginUser')->name('login-user');
    Route::get('/user/logout', [AuthController::class, 'logoutPengguna'])->name('logout-user');
    Route::post('/user/login', [AuthController::class, 'LoginPengguna'])->name('login-user-post');
    Route::get('/user/buat-akun', 'buatAkunUser')->name('buat-akun-user');
    Route::post('/user/buat-akun', [PenggunaController::class, 'create_pengguna'])->name('buat-akun-user-post');
    Route::get('/user/lupa-password', 'lupaPasswordUser')->name('lupa-password-user');
    Route::post('/user/lupa-password', [AuthController::class, 'generateOtpPengguna'])->name('lupa-password-user-post');
    Route::get('/user/kode-otp', 'kodeOtpUser')->name('otp-password-user');
    Route::post('/user/kode-otp', [AuthController::class, 'checkOtpPengguna'])->name('otp-password-user-post');
    Route::get('/user/password-baru', 'passwordBaruUser')->name('password-baru-user');
    Route::post('/user/password-baru', [AuthController::class, 'buatPasswordBaruPengguna'])->name('password-baru-user-post');
    

    Route::middleware('admin')->group(function () {
        Route::get('/data-baru-dokter', MapAdminDataBaru::class)->name('data-baru-dokter');
        Route::post('/data-baru-dokter', [DataDokterController::class, 'create_data_dokter'])->name('data-baru-dokter-post');
        // Route::get('/kelola-data-dokter/lihat', MapDokterLihat::class);
        Route::get('/kelola-data-dokter/edit', MapDokterEdit::class)->name('kelola-data-dokter-edit');
        Route::post('/kelola-data-dokter/edit', [DataDokterController::class, 'update_data_dokter'])->name('kelola-data-dokter-edit-post');
        Route::get('/kelola-data-dokter/delete', [DataDokterController::class, 'delete_data_dokter'])->name('kelola-data-dokter-delete');
        Route::get('/kelola-data-dokter', [DataDokterController::class, 'get_all_data_dokter'])->name('kelola-data-dokter');
        // Route::get('/kelola-data-dokter/edit', 'keloladatadokterEdit');
        Route::get('/kelola-data-dokter/lihat', [DataDokterController::class, 'get_one_data_dokter'])->name('kelola-data-dokter-lihat');
        Route::get('/artikel-kesehatan', [ArtikelController::class, 'get_all_artikel'])->name('artikel-kesehatan');
        Route::get('/buat-artikel', 'buatartikel')->name('buat-artikel');
        Route::post('/buat-artikel', [ArtikelController::class, 'create_artikel'])->name('buat-artikel-post');
        Route::get('/lihat-artikel', [ArtikelController::class, 'get_one_artikel'])->name('lihat-artikel');
        Route::get('/edit-artikel', [ArtikelController::class, 'update_artikel_view'])->name('edit-artikel');
        Route::post('/edit-artikel', [ArtikelController::class, 'update_artikel'])->name('edit-artikel-post');
        Route::get('/delete-artikel', [ArtikelController::class, 'delete_artikel'])->name('delete-artikel');
    });

    Route::middleware('dokter')->group(function () {
        Route::get('/dashboard-pengajuan-dokter', 'dashboardPengajuanDokter')->name('dashboard-pengajuan-dokter');
        Route::get('/pengajuan-tambah-lokasi', 'tambahLokasiPengajuan');
        Route::get('/pengajuan-ubah-lokasi', 'ubahLokasiPengajuan');
        Route::get('/pengajuan-hapus-lokasi', 'hapusLokasiPengajuan');
        Route::get('/cek-status-pengajuan', 'cekStatusPengajuan');
        Route::get('/ubah-profile', 'ubahProfile');
    });

    // Route::get('/data-baru-dokter', 'databarudokter');

    Route::get('/data-pengajuan', 'datapengajuan');
    Route::get('/lihat-data-pengajuan-tambah', 'lihatdatapengajuantambah');
    Route::get('/lihat-data-pengajuan-ubah', 'lihatdatapengajuanubah');
    Route::get('/lihat-data-pengajuan-hapus', 'lihatdatapengajuanhapus');

    Route::get('/pengajuan-dokter', 'pengajuandokter');
    Route::get('/lihat-pengajuan-dokter-tambah', 'lihatpengajuandoktertambah');
    Route::get('/lihat-pengajuan-dokter-ubah', 'lihatpengajuandokterubah');
    Route::get('/lihat-pengajuan-dokter-hapus', 'lihatpengajuandokterhapus');
    // akhir admin
    // Landing page
    // home
    // Route::get('/home', 'home');
    // login user
    Route::get('/profile-dokter', 'profileDokter');
    // Route::get('/detail-dokter', 'detailDokter');


    // map
    // Route::get('/map', 'mapLanding');

    Route::get('/ubah-profile-user', 'ubahProfileUser');
    Route::get('/detail-artikel', 'detailArtikel');
});
