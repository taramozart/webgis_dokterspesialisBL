<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralPage extends Controller
{
    // Awal login
    function login () {
        return view('pages/dashboard/login');
    }
    function lupapassword () {
        return view('pages/dashboard/lupa-password');
    }
    function otppassword () {
        return view('pages/dashboard/otp-password');
    }
    function passwordbaru () {
        return view('pages/dashboard/password-baru');
    }
    // Akhir Login

    // Awal admin
    function artikelkesehatan () {
        return view('pages/dashboard/admin/artikel/artikel-kesehatan');
    }
    function buatartikel () {
        return view('pages/dashboard/admin/artikel/buat-artikel/buat-artikel');
    }
    // function lihatartikel () {
    //     return view('pages/dashboard/admin/artikel/lihat-artikel/lihat-artikel');
    // }
    // function editartikel () {
    //     return view('pages/dashboard/admin/artikel/edit-artikel/edit-artikel');
    // }

    // function databarudokter () {
    //     return view('pages/dashboard/admin/data-baru/data-baru-dokter');
    // }
    function datapengajuan () {
        return view('pages/dashboard/admin/data-pengajuan/data-pengajuan');
    }
    function lihatdatapengajuantambah () {
        return view('pages/dashboard/admin/data-pengajuan/lihat-tambah/lihat-data-pengajuan-tambah');
    }
    function lihatdatapengajuanubah () {
        return view('pages/dashboard/admin/data-pengajuan/lihat-ubah/lihat-data-pengajuan-ubah');
    }
    function lihatdatapengajuanhapus () {
        return view('pages/dashboard/admin/data-pengajuan/lihat-hapus/lihat-data-pengajuan-hapus');
    }

    function keloladatadokter () {
        return view('pages/dashboard/admin/kelola-data/kelola-data-dokter');
    }
    function keloladatadokterEdit () {
        return view('pages/dashboard/admin/kelola-data/edit/edit-kelola-dokter');
    }
    function keloladatadokterLihat () {
        return view('pages/dashboard/admin/kelola-data/edit/edit-kelola-dokter');
    }


    function pengajuandokter () {
        return view('pages/dashboard/admin/pengajuan-dokter/pengajuan-dokter');
    }
    function lihatpengajuandoktertambah () {
        return view('pages/dashboard/admin/pengajuan-dokter/lihat-tambah/lihat-pengajuan-dokter-tambah');
    }
    function lihatpengajuandokterubah () {
        return view('pages/dashboard/admin/pengajuan-dokter/lihat-ubah/lihat-pengajuan-dokter-ubah');
    }
    function lihatpengajuandokterhapus () {
        return view('pages/dashboard/admin/pengajuan-dokter/lihat-hapus/lihat-pengajuan-dokter-hapus');
    }
    // Akhir admin

    // LANDING PAGE
    // home
    // function home () {
    //     return view('pages/landing-page/home/home');
    // }
    // LOGIN USER
    function loginUser () {
        return view('pages/landing-page/login/login');
    }

    function lupaPasswordUser () {
        return view('pages/landing-page/login/lupa-password');
    }
    function kodeOtpUser () {
        return view('pages/landing-page/login/kode-otp');
    }
    function passwordBaruUser () {
        return view('pages/landing-page/login/password-baru');
    }
    function buatAkunUser () {
        return view('pages/landing-page/login/buat-akun');
    }

    // PROFILE DOKTER
    function profileDokter () {
        return view('pages/landing-page/profile-dokter/profile-dokter');
    }
    // function detailDokter () {
    //     return view('pages/landing-page/profile-dokter/lihat-detail-dokter');
    // }

    // PENGAJUAN DOKTER
    // LOGIN
    function loginDokter () {
        return view('pages/landing-page/pengajuan-dokter/login/login');
    }
    function lupaPasswordDokter () {
        return view('pages/landing-page/pengajuan-dokter/login/lupa-password');
    }
    function kodeOtpDokter () {
        return view('pages/landing-page/pengajuan-dokter/login/otp-password');
    }
    function passwordBaruDokter () {
        return view('pages/landing-page/pengajuan-dokter/login/password-baru');
    }
    function buatAkunDokter () {
        return view('pages/landing-page/pengajuan-dokter/login/buat-akun-dokter');
    }
    // PENGAJUAN
    function dashboardPengajuanDokter () {
        return view('pages/landing-page/pengajuan-dokter/dashboard-pengajuan-dokter');
    }
    function tambahLokasiPengajuan () {
        return view('pages/landing-page/pengajuan-dokter/pengajuan-tambah-lokasi');
    }
    function ubahLokasiPengajuan () {
        return view('pages/landing-page/pengajuan-dokter/pengajuan-ubah-lokasi');
    }
    function hapusLokasiPengajuan () {
        return view('pages/landing-page/pengajuan-dokter/pengajuan-hapus-lokasi');
    }

    function cekStatusPengajuan () {
        return view('pages/landing-page/pengajuan-dokter/cek-status-pengajuan');
    }

    // map
    // function mapLanding () {
    //     return view('pages/landing-page/map/map');
    // }

    function ubahProfile () {
        return view('pages/landing-page/ubah-profile');
    }

    function detailArtikel () {
        return view('pages/landing-page/home/detail-artikel');
    }
    // landing page


}
